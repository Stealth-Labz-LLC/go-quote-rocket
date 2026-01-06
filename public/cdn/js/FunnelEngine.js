/**
 * Universal Funnel Engine
 *
 * Works for ANY vertical - driven by configuration
 */
class FunnelEngine {
    constructor(config) {
        this.vertical = config.vertical;
        this.questions = config.questions;
        this.progressLabels = config.progressLabels || [];
        this.apiEndpoint = config.apiEndpoint;
        this.redirectUrl = config.redirectUrl;
        this.tracking = config.tracking || {};
        this.loadingMessages = config.loadingMessages || ['Processing...'];

        this.currentStep = 0;
        this.totalSteps = this.questions.length;
        this.userData = {};

        // DOM elements
        this.container = document.getElementById('questionContainer');
        this.prevBtn = document.getElementById('prevBtn');
        this.nextBtn = document.getElementById('nextBtn');
        this.progressBar = document.getElementById('progressBar');
        this.progressPercentage = document.getElementById('progressPercentage');
        this.form = document.getElementById('funnelForm');
    }

    init() {
        this.loadFromLocalStorage();
        this.renderStep(this.currentStep);
        this.attachGlobalListeners();
        this.updateProgressBar();
    }

    renderStep(stepIndex) {
        if (stepIndex >= this.totalSteps) {
            return;
        }

        const question = this.questions[stepIndex];
        this.currentStep = stepIndex;

        // Render question based on type
        let html = '';
        switch (question.type) {
            case 'text':
                html = this.renderTextQuestion(question);
                break;
            case 'radio':
                html = this.renderRadioQuestion(question);
                break;
            case 'contact_form':
                html = this.renderContactForm(question);
                break;
            default:
                html = '<p>Unknown question type</p>';
        }

        this.container.innerHTML = html;
        this.attachStepListeners(question);
        this.updateNavigation();
        this.updateProgressBar();

        // Scroll to top
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    renderTextQuestion(question) {
        const value = this.userData[question.id] || '';
        return `
            <h2 class="question-title">${question.question}</h2>
            ${question.help_text ? `<p class="question-help">${question.help_text}</p>` : ''}
            <div class="text-input-group">
                <input
                    type="text"
                    id="input_${question.id}"
                    name="${question.id}"
                    placeholder="${question.placeholder || ''}"
                    value="${value}"
                    autocomplete="off"
                >
                <div id="error_${question.id}" class="error-message" style="display: none;"></div>
            </div>
        `;
    }

    renderRadioQuestion(question) {
        const selectedValue = this.userData[question.id] || '';
        const optionsHtml = question.options.map(option => {
            const value = typeof option === 'object' ? option.value : option;
            const label = typeof option === 'object' ? option.label : option;
            const checked = value === selectedValue ? 'checked' : '';

            return `
                <div class="radio-option">
                    <input
                        type="radio"
                        id="radio_${question.id}_${value}"
                        name="${question.id}"
                        value="${value}"
                        ${checked}
                    >
                    <label for="radio_${question.id}_${value}">${label}</label>
                </div>
            `;
        }).join('');

        return `
            <h2 class="question-title">${question.question}</h2>
            ${question.help_text ? `<p class="question-help">${question.help_text}</p>` : ''}
            <div class="radio-group">
                ${optionsHtml}
            </div>
        `;
    }

    renderContactForm(question) {
        const fieldsHtml = question.fields.map(field => {
            const value = this.userData[field.name] || '';
            return `
                <div class="form-field">
                    <label for="input_${field.name}">${field.label}${field.required ? ' *' : ''}</label>
                    <input
                        type="${field.type}"
                        id="input_${field.name}"
                        name="${field.name}"
                        placeholder="${field.placeholder || ''}"
                        value="${value}"
                        autocomplete="${field.autocomplete || 'off'}"
                        ${field.required ? 'required' : ''}
                    >
                    <div id="error_${field.name}" class="error-message" style="display: none;"></div>
                </div>
            `;
        }).join('');

        const disclaimerHtml = `
            <div class="funnel-disclaimer">
                <p class="funnel-disclaimer__text">
                    By clicking "Continue" and submitting this form, I agree to be contacted by the company and/or its partners at the phone number and email provided above, including my wireless number if provided, regarding insurance quotes and related offers. I understand I may be contacted via automated telephone dialing system, pre-recorded voice message, text message, or email, even if my number is on a Do Not Call list. I understand that my consent is not a condition of purchase and that I may revoke consent at any time. Message and data rates may apply.
                </p>
            </div>
        `;

        return `
            <h2 class="question-title">${question.question}</h2>
            ${question.subheading ? `<p class="question-help">${question.subheading}</p>` : ''}
            <div class="contact-form-grid">
                ${fieldsHtml}
            </div>
            ${disclaimerHtml}
        `;
    }

    attachStepListeners(question) {
        if (question.type === 'text') {
            const input = this.container.querySelector(`#input_${question.id}`);
            input.addEventListener('input', (e) => {
                const isValid = this.validateField(question, e.target.value);
                this.updateNextButton();

                if (isValid && question.auto_advance) {
                    setTimeout(() => {
                        this.goToNextStep();
                    }, question.delay || 500);
                }
            });
        }

        if (question.type === 'radio') {
            const radios = this.container.querySelectorAll(`input[name="${question.id}"]`);
            radios.forEach(radio => {
                radio.addEventListener('change', (e) => {
                    this.userData[question.id] = e.target.value;
                    this.saveToLocalStorage();

                    if (question.auto_advance) {
                        setTimeout(() => {
                            this.goToNextStep();
                        }, question.delay || 250);
                    }
                });
            });
        }

        if (question.type === 'contact_form') {
            question.fields.forEach(field => {
                const input = this.container.querySelector(`#input_${field.name}`);
                input.addEventListener('input', () => {
                    this.updateNextButton();
                });
            });
        }
    }

    attachGlobalListeners() {
        this.prevBtn.addEventListener('click', () => this.goToPreviousStep());
        this.nextBtn.addEventListener('click', () => this.handleNextClick());
    }

    validateField(question, value) {
        if (!value && question.validation && question.validation.required) {
            return false;
        }

        if (value && question.validation && question.validation.pattern) {
            const pattern = new RegExp(question.validation.pattern.replace(/^\/|\/$/g, ''));
            return pattern.test(value);
        }

        return true;
    }

    updateNextButton() {
        const question = this.questions[this.currentStep];
        let isValid = false;

        if (question.type === 'text') {
            const input = this.container.querySelector(`#input_${question.id}`);
            const value = input.value;
            isValid = this.validateField(question, value);
            this.userData[question.id] = value;

            // Show/hide error message
            const errorEl = this.container.querySelector(`#error_${question.id}`);
            if (errorEl) {
                if (value && !isValid && question.validation && question.validation.message) {
                    errorEl.textContent = question.validation.message;
                    errorEl.style.display = 'block';
                    input.classList.add('input-error');
                } else {
                    errorEl.style.display = 'none';
                    input.classList.remove('input-error');
                }
            }
        }

        if (question.type === 'radio') {
            const selected = this.container.querySelector(`input[name="${question.id}"]:checked`);
            isValid = !!selected;
        }

        if (question.type === 'contact_form') {
            isValid = question.fields.every(field => {
                const input = this.container.querySelector(`#input_${field.name}`);
                if (!field.required) return true;

                const value = input.value.trim();
                if (!value) return false;

                if (field.validation && field.validation.pattern) {
                    const pattern = new RegExp(field.validation.pattern.replace(/^\/|\/$/g, ''));
                    return pattern.test(value);
                }

                return true;
            });
        }

        this.nextBtn.disabled = !isValid;
    }

    handleNextClick() {
        const question = this.questions[this.currentStep];

        // Collect data
        if (question.type === 'contact_form') {
            question.fields.forEach(field => {
                const input = this.container.querySelector(`#input_${field.name}`);
                this.userData[field.name] = input.value;
            });

            const newsletter = this.container.querySelector('#newsletter');
            if (newsletter) {
                this.userData['newsletter'] = newsletter.checked ? '1' : '0';
            }
        }

        this.saveToLocalStorage();
        this.goToNextStep();
    }

    goToNextStep() {
        if (this.currentStep + 1 >= this.totalSteps) {
            this.submitForm();
        } else {
            this.renderStep(this.currentStep + 1);
        }
    }

    goToPreviousStep() {
        if (this.currentStep > 0) {
            this.renderStep(this.currentStep - 1);
        }
    }

    updateNavigation() {
        // Show/hide previous button with vibible_button class
        if (this.currentStep > 0) {
            this.prevBtn.classList.add('vibible_button');
        } else {
            this.prevBtn.classList.remove('vibible_button');
        }

        const question = this.questions[this.currentStep];

        // Show Continue button only for text inputs and contact forms (not auto-advance questions)
        if (question.type === 'text' || question.type === 'contact_form') {
            this.nextBtn.classList.add('vibible_button');
            const buttonText = this.nextBtn.querySelector('span');
            if (buttonText) {
                if (question.type === 'contact_form' && question.submit_text) {
                    buttonText.textContent = question.submit_text;
                } else {
                    buttonText.textContent = 'Continue';
                }
            }
        } else {
            this.nextBtn.classList.remove('vibible_button');
        }

        this.updateNextButton();
    }

    updateProgressBar() {
        const percent = ((this.currentStep + 1) / this.totalSteps) * 100;
        if (this.progressBar) {
            this.progressBar.style.width = percent + '%';
        }
        if (this.progressPercentage) {
            this.progressPercentage.textContent = Math.round(percent) + '%';
        }
    }

    async submitForm() {
        this.showLoadingModal();

        // Prepare form data
        const formData = new FormData(this.form);
        Object.keys(this.userData).forEach(key => {
            formData.append(key, this.userData[key]);
        });

        try {
            const response = await fetch(this.apiEndpoint, {
                method: 'POST',
                body: formData
            });

            const data = await response.json();

            // Fire tracking events
            this.fireTrackingEvents();

            // Redirect
            setTimeout(() => {
                window.location.href = data.redirect_url || this.redirectUrl;
            }, 2000);

        } catch (error) {
            console.error('Form submission error:', error);
            alert('Something went wrong. Please try again.');
            this.hideLoadingModal();
        }
    }

    showLoadingModal() {
        const modal = document.getElementById('loadingModal');
        if (!modal) return;

        modal.style.display = 'flex';

        // Set user's first name if available
        const userName = this.userData['given-name'] || this.userData['firstname'] || '';
        const userNameEl = document.getElementById('userName');
        if (userNameEl && userName) {
            userNameEl.textContent = userName;
        }

        // Animate steps sequentially
        const steps = [
            { id: 'step1', delay: 0 },
            { id: 'step2', delay: 800 },
            { id: 'step3', delay: 1600 },
            { id: 'step4', delay: 2400 }
        ];

        steps.forEach(step => {
            setTimeout(() => {
                const stepEl = document.getElementById(step.id);
                if (stepEl) {
                    stepEl.classList.add('complete');
                    const dot = stepEl.querySelector('.status-dot');
                    if (dot) {
                        dot.classList.remove('loading');
                        dot.classList.add('complete');
                    }
                }

                // Show final step
                if (step.id === 'step4') {
                    const finalStep = document.getElementById('step4');
                    if (finalStep) {
                        finalStep.classList.add('visible');
                        setTimeout(() => {
                            finalStep.classList.add('complete');
                        }, 200);
                    }
                }
            }, step.delay);
        });
    }

    hideLoadingModal() {
        const modal = document.getElementById('loadingModal');
        if (!modal) return;

        if (modal.dataset.interval) {
            clearInterval(parseInt(modal.dataset.interval));
        }

        modal.style.display = 'none';
    }

    fireTrackingEvents() {
        // GTM event
        if (typeof dataLayer !== 'undefined') {
            dataLayer.push({
                event: 'form_submit',
                vertical: this.vertical
            });
        }
    }

    saveToLocalStorage() {
        localStorage.setItem('funnel_data', JSON.stringify({
            vertical: this.vertical,
            currentStep: this.currentStep,
            userData: this.userData
        }));
    }

    loadFromLocalStorage() {
        try {
            const saved = localStorage.getItem('funnel_data');
            if (saved) {
                const data = JSON.parse(saved);
                if (data.vertical === this.vertical) {
                    this.userData = data.userData || {};
                    // Start from beginning but restore data
                    this.currentStep = 0;
                }
            }
        } catch (e) {
            console.error('Error loading from localStorage:', e);
        }
    }
}
