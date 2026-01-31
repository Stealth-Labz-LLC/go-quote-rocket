# Frontend Documentation

This document covers the frontend architecture including FunnelEngine.js, CSS system, and PHP templates.

## Table of Contents

- [Overview](#overview)
- [FunnelEngine.js](#funnelenginejs)
- [CSS Architecture](#css-architecture)
- [Templates](#templates)
- [Components](#components)
- [Tracking Integration](#tracking-integration)
- [Responsive Design](#responsive-design)

---

## Overview

The GoQuoteRocket frontend is built with:

- **Vanilla JavaScript** - FunnelEngine.js for questionnaire logic
- **CSS Custom Properties** - Brand colors injected at runtime
- **PHP Templates** - Server-rendered pages with config data
- **Minimal Dependencies** - jQuery optional, no build step

### File Structure

```
cdn/
├── js/
│   ├── FunnelEngine.js      # Core questionnaire engine (407 lines)
│   ├── menu.js              # Navigation toggle
│   └── jquery-3.6.0.min.js  # jQuery (optional)
│
├── css/
│   ├── global.css           # Brand variables, base styles
│   ├── funnel.css           # Funnel-specific styles
│   ├── style.css            # Main site styles
│   └── tokens/              # Design tokens
│       ├── colors.css
│       ├── typography.css
│       └── spacing.css
│
└── images/
    ├── brand/               # Logos, favicon
    ├── carriers/            # Carrier logos
    └── icons/               # UI icons

views/
├── templates/
│   ├── landing.php          # Landing page (239 lines)
│   ├── flow.php             # Questionnaire (232 lines)
│   ├── offer-wall.php       # Results page (172 lines)
│   ├── single-offer.php     # Single offer (238 lines)
│   └── home.php             # Homepage (67 lines)
│
└── components/
    ├── header.php
    ├── footer.php
    ├── faq.php
    └── footer-disclaimer.php
```

---

## FunnelEngine.js

The FunnelEngine is a vanilla JavaScript class that powers the questionnaire flow.

### Initialization

```javascript
// In flow.php template
const funnel = new FunnelEngine({
    vertical: '<?= $v['id'] ?>',
    questions: <?= json_encode($v['flow']['questions']) ?>,
    progressLabels: <?= json_encode($v['flow']['progress_labels']) ?>,
    apiEndpoint: '<?= buildUrl('api', '/submit.php') ?>',
    redirectUrl: '/owl',
    trackingConfig: <?= json_encode($tracking) ?>,
    loadingMessages: <?= json_encode($v['flow']['loading_modal']['messages']) ?>
});

funnel.init();
```

### Constructor Options

| Option | Type | Description |
|--------|------|-------------|
| `vertical` | string | Vertical ID for form submission |
| `questions` | array | Question configuration from vertical config |
| `progressLabels` | array | Labels for progress bar steps |
| `apiEndpoint` | string | API URL for form submission |
| `redirectUrl` | string | Where to redirect after submission |
| `trackingConfig` | object | GTM/tracking configuration |
| `loadingMessages` | array | Messages for loading modal |
| `storageKey` | string | LocalStorage key (default: `funnel_progress_{vertical}`) |

### Class Structure

```javascript
class FunnelEngine {
    constructor(config) {
        this.config = config;
        this.currentStep = 0;
        this.formData = {};
        this.questions = config.questions;
        this.totalSteps = this.questions.length;
    }

    // Initialization
    init() {
        this.loadFromStorage();
        this.renderStep(this.currentStep);
        this.attachEventListeners();
        this.updateProgressBar();
        console.log('FunnelEngine initialized');
    }

    // Step rendering
    renderStep(index) { ... }
    renderTextQuestion(question) { ... }
    renderRadioQuestion(question) { ... }
    renderContactForm(question) { ... }

    // Navigation
    goToNextStep() { ... }
    goToPreviousStep() { ... }
    canAdvance() { ... }

    // Validation
    validateField(field, value) { ... }
    validateStep(stepIndex) { ... }

    // Data management
    saveToLocalStorage() { ... }
    loadFromStorage() { ... }
    clearStorage() { ... }

    // Form submission
    submitForm() { ... }
    handleSubmitSuccess(response) { ... }
    handleSubmitError(error) { ... }

    // UI updates
    updateProgressBar() { ... }
    showLoadingModal() { ... }
    hideLoadingModal() { ... }
    showError(message) { ... }

    // Tracking
    trackEvent(eventName, data) { ... }
}
```

### Rendering Questions

#### Text Input

```javascript
renderTextQuestion(question) {
    const container = document.getElementById('question-container');
    container.innerHTML = `
        <div class="question-wrapper">
            <h2 class="question-text">${question.question}</h2>
            ${question.subtext ? `<p class="question-subtext">${question.subtext}</p>` : ''}
            <div class="input-wrapper">
                <input
                    type="text"
                    id="${question.id}"
                    name="${question.id}"
                    class="funnel-input"
                    placeholder="${question.placeholder || ''}"
                    maxlength="${question.validation?.max_length || 255}"
                    value="${this.formData[question.id] || ''}"
                    autofocus
                />
                <span class="error-message" id="${question.id}-error"></span>
            </div>
        </div>
    `;

    // Auto-advance on valid input
    if (question.auto_advance) {
        const input = document.getElementById(question.id);
        input.addEventListener('input', () => {
            if (this.validateField(question, input.value)) {
                this.formData[question.id] = input.value;
                this.saveToLocalStorage();

                setTimeout(() => {
                    this.goToNextStep();
                }, question.delay || 500);
            }
        });
    }
}
```

#### Radio Buttons

```javascript
renderRadioQuestion(question) {
    const container = document.getElementById('question-container');
    const optionsHtml = question.options.map(opt => `
        <label class="radio-option ${this.formData[question.id] === opt.value ? 'selected' : ''}">
            <input
                type="radio"
                name="${question.id}"
                value="${opt.value}"
                ${this.formData[question.id] === opt.value ? 'checked' : ''}
            />
            ${opt.icon ? `<span class="option-icon">${this.getIcon(opt.icon)}</span>` : ''}
            <span class="option-label">${opt.label}</span>
        </label>
    `).join('');

    container.innerHTML = `
        <div class="question-wrapper">
            <h2 class="question-text">${question.question}</h2>
            ${question.subtext ? `<p class="question-subtext">${question.subtext}</p>` : ''}
            <div class="radio-options">
                ${optionsHtml}
            </div>
        </div>
    `;

    // Auto-advance on selection
    if (question.auto_advance) {
        const radios = container.querySelectorAll('input[type="radio"]');
        radios.forEach(radio => {
            radio.addEventListener('change', () => {
                this.formData[question.id] = radio.value;
                this.saveToLocalStorage();

                // Visual feedback
                container.querySelectorAll('.radio-option').forEach(opt => {
                    opt.classList.remove('selected');
                });
                radio.closest('.radio-option').classList.add('selected');

                setTimeout(() => {
                    this.goToNextStep();
                }, question.delay || 250);
            });
        });
    }
}
```

#### Contact Form

```javascript
renderContactForm(question) {
    const container = document.getElementById('question-container');
    const fieldsHtml = question.fields.map(field => `
        <div class="form-field">
            <label for="${field.name}">${field.label}</label>
            <input
                type="${field.type}"
                id="${field.name}"
                name="${field.name}"
                autocomplete="${field.autocomplete || ''}"
                placeholder="${field.placeholder || ''}"
                ${field.required ? 'required' : ''}
                value="${this.formData[field.name] || ''}"
            />
            <span class="error-message" id="${field.name}-error"></span>
        </div>
    `).join('');

    container.innerHTML = `
        <div class="question-wrapper contact-form">
            <h2 class="question-text">${question.question}</h2>
            ${question.subtext ? `<p class="question-subtext">${question.subtext}</p>` : ''}
            <form id="contact-form" class="contact-form-fields">
                ${fieldsHtml}
                ${question.newsletter?.enabled ? `
                    <div class="form-field checkbox-field">
                        <label class="checkbox-label">
                            <input
                                type="checkbox"
                                name="${question.newsletter.field_name}"
                                ${question.newsletter.default_checked ? 'checked' : ''}
                            />
                            <span>${question.newsletter.label || 'Send me offers and updates'}</span>
                        </label>
                    </div>
                ` : ''}
                ${question.trustedform ? `
                    <input type="hidden" name="xxTrustedFormCertUrl" id="xxTrustedFormCertUrl" />
                ` : ''}
                <button type="submit" class="submit-button">
                    ${question.submit_text || 'Submit'}
                </button>
            </form>
        </div>
    `;

    // Form submission handler
    const form = document.getElementById('contact-form');
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        if (this.validateContactForm(question)) {
            this.submitForm();
        }
    });
}
```

### Progress Bar

```javascript
updateProgressBar() {
    const progressBar = document.getElementById('progress-bar');
    const progressText = document.getElementById('progress-text');
    const progressLabels = document.getElementById('progress-labels');

    const percentage = Math.round(((this.currentStep + 1) / this.totalSteps) * 100);

    // Update bar width
    progressBar.style.width = `${percentage}%`;

    // Update percentage text
    if (progressText) {
        progressText.textContent = `${percentage}% Complete`;
    }

    // Update step labels
    if (progressLabels && this.config.progressLabels) {
        progressLabels.innerHTML = this.config.progressLabels.map((label, index) => `
            <span class="progress-label ${index <= this.currentStep ? 'active' : ''}">
                ${label}
            </span>
        `).join('');
    }
}
```

### Form Submission

```javascript
async submitForm() {
    // Show loading modal
    this.showLoadingModal();

    // Collect all form data
    const formData = new FormData();
    formData.append('vertical', this.config.vertical);

    // Add all collected data
    for (const [key, value] of Object.entries(this.formData)) {
        formData.append(key, value);
    }

    // Add TrustedForm cert URL
    const tfField = document.getElementById('xxTrustedFormCertUrl');
    if (tfField && tfField.value) {
        formData.append('xxTrustedFormCertUrl', tfField.value);
    }

    // Add tracking parameters from URL
    const urlParams = new URLSearchParams(window.location.search);
    ['aff_id', 'transaction_id', 'sub_id'].forEach(param => {
        if (urlParams.has(param)) {
            formData.append(param, urlParams.get(param));
        }
    });

    try {
        const response = await fetch(this.config.apiEndpoint, {
            method: 'POST',
            body: formData
        });

        const result = await response.json();

        if (result.success) {
            this.handleSubmitSuccess(result);
        } else {
            this.handleSubmitError(result.error);
        }
    } catch (error) {
        console.error('Submission error:', error);
        this.handleSubmitError('Network error. Please try again.');
    }
}

handleSubmitSuccess(result) {
    // Clear stored data
    this.clearStorage();

    // Track conversion
    this.trackEvent('form_submit', {
        vertical: this.config.vertical,
        success: true
    });

    // Redirect to offer wall
    const redirectUrl = result.redirect_url || this.config.redirectUrl;
    window.location.href = redirectUrl;
}

handleSubmitError(error) {
    this.hideLoadingModal();
    this.showError(error);

    this.trackEvent('form_error', {
        vertical: this.config.vertical,
        error: error
    });
}
```

### Loading Modal

```javascript
showLoadingModal() {
    const modal = document.createElement('div');
    modal.id = 'loading-modal';
    modal.className = 'loading-modal';
    modal.innerHTML = `
        <div class="loading-content">
            <div class="loading-spinner"></div>
            <p id="loading-message">${this.config.loadingMessages[0]}</p>
        </div>
    `;
    document.body.appendChild(modal);

    // Rotate through messages
    let messageIndex = 0;
    this.loadingInterval = setInterval(() => {
        messageIndex = (messageIndex + 1) % this.config.loadingMessages.length;
        document.getElementById('loading-message').textContent =
            this.config.loadingMessages[messageIndex];
    }, this.config.loadingDuration || 800);
}

hideLoadingModal() {
    clearInterval(this.loadingInterval);
    const modal = document.getElementById('loading-modal');
    if (modal) {
        modal.remove();
    }
}
```

### LocalStorage Persistence

```javascript
saveToLocalStorage() {
    const data = {
        currentStep: this.currentStep,
        formData: this.formData,
        timestamp: Date.now()
    };
    localStorage.setItem(this.storageKey, JSON.stringify(data));
}

loadFromStorage() {
    const stored = localStorage.getItem(this.storageKey);
    if (stored) {
        try {
            const data = JSON.parse(stored);

            // Check if data is less than 24 hours old
            const age = Date.now() - data.timestamp;
            if (age < 24 * 60 * 60 * 1000) {
                this.currentStep = data.currentStep;
                this.formData = data.formData;
                console.log('Restored progress from storage');
            } else {
                this.clearStorage();
            }
        } catch (e) {
            this.clearStorage();
        }
    }
}

clearStorage() {
    localStorage.removeItem(this.storageKey);
}

get storageKey() {
    return `funnel_progress_${this.config.vertical}`;
}
```

---

## CSS Architecture

### Design Tokens

**colors.css**:
```css
:root {
    /* These are overridden by brand injection */
    --color-primary: #002e6a;
    --color-secondary: #FF6100;
    --color-accent: #0091ff;
    --color-success: #07c176;
    --color-warning: #f59e0b;
    --color-error: #ef4444;

    --color-text: #1f2937;
    --color-text-light: #6b7280;
    --color-background: #ffffff;
    --color-background-alt: #f9fafb;
    --color-border: #e5e7eb;
}
```

**typography.css**:
```css
:root {
    --font-primary: 'DM Sans', sans-serif;
    --font-secondary: 'Manrope', sans-serif;

    --font-size-xs: 0.75rem;
    --font-size-sm: 0.875rem;
    --font-size-base: 1rem;
    --font-size-lg: 1.125rem;
    --font-size-xl: 1.25rem;
    --font-size-2xl: 1.5rem;
    --font-size-3xl: 1.875rem;
    --font-size-4xl: 2.25rem;

    --font-weight-normal: 400;
    --font-weight-medium: 500;
    --font-weight-semibold: 600;
    --font-weight-bold: 700;

    --line-height-tight: 1.25;
    --line-height-normal: 1.5;
    --line-height-relaxed: 1.75;
}
```

**spacing.css**:
```css
:root {
    --spacing-1: 0.25rem;
    --spacing-2: 0.5rem;
    --spacing-3: 0.75rem;
    --spacing-4: 1rem;
    --spacing-5: 1.25rem;
    --spacing-6: 1.5rem;
    --spacing-8: 2rem;
    --spacing-10: 2.5rem;
    --spacing-12: 3rem;
    --spacing-16: 4rem;

    --radius-sm: 0.25rem;
    --radius-md: 0.5rem;
    --radius-lg: 0.75rem;
    --radius-xl: 1rem;
    --radius-full: 9999px;

    --shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.05);
    --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);
    --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
}
```

### Brand Injection

Templates inject brand colors as CSS custom properties:

```php
<!-- In template <head> -->
<style>
:root {
    --injected-primary: <?= $brand['colors']['primary'] ?>;
    --injected-secondary: <?= $brand['colors']['secondary'] ?>;
    --injected-accent: <?= $brand['colors']['accent'] ?>;
    --injected-success: <?= $brand['colors']['success'] ?>;
    --injected-text: <?= $brand['colors']['text'] ?>;
    --injected-background: <?= $brand['colors']['background'] ?>;
    --injected-font-primary: '<?= $brand['fonts']['primary'] ?>';
    --injected-font-secondary: '<?= $brand['fonts']['secondary'] ?>';
}
</style>
```

**In CSS files**:
```css
.button-primary {
    background-color: var(--injected-secondary, var(--color-secondary));
    color: white;
}

.headline {
    font-family: var(--injected-font-primary, var(--font-primary));
    color: var(--injected-primary, var(--color-primary));
}
```

### Funnel-Specific Styles

**funnel.css**:
```css
/* Progress bar */
.progress-container {
    background: var(--color-background-alt);
    height: 8px;
    border-radius: var(--radius-full);
    overflow: hidden;
    margin-bottom: var(--spacing-6);
}

.progress-bar {
    background: linear-gradient(
        90deg,
        var(--injected-primary) 0%,
        var(--injected-accent) 100%
    );
    height: 100%;
    transition: width 0.3s ease;
}

/* Question text */
.question-text {
    font-family: var(--injected-font-primary);
    font-size: var(--font-size-2xl);
    font-weight: var(--font-weight-bold);
    color: var(--injected-primary);
    text-align: center;
    margin-bottom: var(--spacing-4);
}

/* Radio options */
.radio-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
    gap: var(--spacing-4);
    max-width: 500px;
    margin: 0 auto;
}

.radio-option {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: var(--spacing-6);
    border: 2px solid var(--color-border);
    border-radius: var(--radius-lg);
    cursor: pointer;
    transition: all 0.2s ease;
}

.radio-option:hover {
    border-color: var(--injected-accent);
    background: var(--color-background-alt);
}

.radio-option.selected {
    border-color: var(--injected-secondary);
    background: rgba(var(--injected-secondary-rgb), 0.05);
}

.radio-option input[type="radio"] {
    position: absolute;
    opacity: 0;
}

/* Submit button */
.submit-button {
    display: block;
    width: 100%;
    max-width: 400px;
    margin: var(--spacing-6) auto 0;
    padding: var(--spacing-4) var(--spacing-8);
    background: var(--injected-secondary);
    color: white;
    font-family: var(--injected-font-primary);
    font-size: var(--font-size-lg);
    font-weight: var(--font-weight-bold);
    border: none;
    border-radius: var(--radius-lg);
    cursor: pointer;
    transition: all 0.2s ease;
}

.submit-button:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

/* Loading modal */
.loading-modal {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
}

.loading-content {
    background: white;
    padding: var(--spacing-8);
    border-radius: var(--radius-xl);
    text-align: center;
}

.loading-spinner {
    width: 50px;
    height: 50px;
    border: 4px solid var(--color-border);
    border-top-color: var(--injected-secondary);
    border-radius: 50%;
    animation: spin 1s linear infinite;
    margin: 0 auto var(--spacing-4);
}

@keyframes spin {
    to { transform: rotate(360deg); }
}
```

---

## Templates

### Landing Page Template

**Structure**:
```php
<!-- views/templates/landing.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $v['name'] ?> | <?= $brand['company_name'] ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="<?= $brand['fonts']['google_url'] ?>" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="<?= buildUrl('cdn', '/css/global.css') ?>">
    <link rel="stylesheet" href="<?= buildUrl('cdn', '/css/style.css') ?>">

    <!-- Brand injection -->
    <style>
    :root {
        --injected-primary: <?= $brand['colors']['primary'] ?>;
        --injected-secondary: <?= $brand['colors']['secondary'] ?>;
        /* ... more variables ... */
    }
    </style>

    <!-- GTM -->
    <?php if (!empty($tracking['gtm'][$v['id']])): ?>
    <script>(function(w,d,s,l,i){...})(window,document,'script','dataLayer','<?= $tracking['gtm'][$v['id']] ?>');</script>
    <?php endif; ?>
</head>
<body class="landing-page">
    <?php include __DIR__ . '/../components/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1><?= $v['landing']['headline'] ?></h1>
            <p><?= $v['landing']['subheadline'] ?></p>
            <a href="<?= buildUrl('www', '/flow?vertical=' . $v['id']) ?>" class="cta-button">
                <?= $v['landing']['cta_text'] ?>
            </a>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits">
        <div class="container">
            <div class="benefits-grid">
                <?php foreach ($v['landing']['benefits'] as $benefit): ?>
                <div class="benefit-card">
                    <div class="benefit-icon"><?= $benefit['icon'] ?></div>
                    <h3><?= $benefit['title'] ?></h3>
                    <p><?= $benefit['text'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial">
        <div class="container">
            <blockquote>
                "<?= $v['landing']['testimonial']['quote'] ?>"
            </blockquote>
            <cite>
                — <?= $v['landing']['testimonial']['author'] ?>,
                <?= $v['landing']['testimonial']['location'] ?>
            </cite>
        </div>
    </section>

    <!-- Carrier Logos -->
    <section class="carriers">
        <div class="container">
            <h2>Compare Top Carriers</h2>
            <div class="carrier-logos">
                <?php foreach ($carriers as $carrier): ?>
                <img src="<?= buildUrl('cdn', '/images/carriers/' . $carrier['logo']) ?>"
                     alt="<?= $carrier['name'] ?>">
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/../components/faq.php'; ?>
    <?php include __DIR__ . '/../components/footer.php'; ?>
</body>
</html>
```

### Flow Template

```php
<!-- views/templates/flow.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... meta, styles ... -->

    <!-- TrustedForm -->
    <?php if ($tracking['trustedform']['enabled']): ?>
    <script src="<?= $tracking['trustedform']['script_url'] ?>"></script>
    <?php endif; ?>
</head>
<body class="flow-page">
    <!-- Progress Bar -->
    <div class="progress-wrapper">
        <div class="progress-container">
            <div class="progress-bar" id="progress-bar"></div>
        </div>
        <div class="progress-labels" id="progress-labels"></div>
        <p class="progress-text" id="progress-text">0% Complete</p>
    </div>

    <!-- Main Content -->
    <main class="flow-main">
        <h1 class="flow-title"><?= $v['flow']['title'] ?></h1>

        <!-- Question Container (populated by JS) -->
        <div id="question-container"></div>

        <!-- Navigation Buttons -->
        <div class="flow-nav">
            <button id="prev-button" class="nav-button prev" style="display: none;">
                Previous
            </button>
            <button id="next-button" class="nav-button next" style="display: none;">
                Continue
            </button>
        </div>

        <!-- Hidden Form Fields -->
        <input type="hidden" name="vertical" value="<?= $v['id'] ?>">
        <input type="hidden" name="offer_id" value="<?= $v['flow']['offer_id'] ?>">

        <!-- Carrier Strip -->
        <div class="carrier-strip">
            <?php foreach (array_slice($carriers, 0, 5) as $carrier): ?>
            <img src="<?= buildUrl('cdn', '/images/carriers/' . $carrier['logo']) ?>"
                 alt="<?= $carrier['name'] ?>">
            <?php endforeach; ?>
        </div>

        <!-- Trust Symbols -->
        <div class="trust-symbols">
            <span>🔒 Secure Form</span>
            <span>✓ No Hidden Fees</span>
            <span>⚡ Instant Results</span>
        </div>
    </main>

    <?php include __DIR__ . '/../components/footer.php'; ?>

    <!-- FunnelEngine -->
    <script src="<?= buildUrl('cdn', '/js/FunnelEngine.js') ?>"></script>
    <script>
        const funnel = new FunnelEngine({
            vertical: '<?= $v['id'] ?>',
            questions: <?= json_encode($v['flow']['questions']) ?>,
            progressLabels: <?= json_encode($v['flow']['progress_labels']) ?>,
            apiEndpoint: '<?= buildUrl('api', '/submit.php') ?>',
            redirectUrl: '/<?= $v['flow']['redirect_type'] ?>',
            loadingMessages: <?= json_encode($v['flow']['loading_modal']['messages']) ?>
        });
        funnel.init();
    </script>
</body>
</html>
```

---

## Components

### Header Component

```php
<!-- views/components/header.php -->
<header class="site-header">
    <div class="container">
        <a href="/" class="logo">
            <img src="<?= $brand['logo']['main'] ?>"
                 alt="<?= $brand['company_name'] ?>"
                 width="<?= $brand['logo']['width'] ?>">
        </a>

        <nav class="main-nav">
            <a href="tel:<?= $brand['phone'] ?>" class="phone-link">
                📞 <?= $brand['phone_display'] ?>
            </a>
        </nav>
    </div>
</header>
```

### Footer Component

```php
<!-- views/components/footer.php -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="<?= $brand['logo']['main'] ?>" alt="<?= $brand['company_name'] ?>">
            </div>

            <div class="footer-links">
                <a href="/terms">Terms of Service</a>
                <a href="/privacy">Privacy Policy</a>
                <a href="/about">About Us</a>
            </div>

            <div class="footer-legal">
                <p>&copy; <?= date('Y') ?> <?= $brand['legal']['company_legal_name'] ?></p>
                <p><?= $brand['legal']['address']['city'] ?>, <?= $brand['legal']['address']['state'] ?></p>
            </div>
        </div>

        <?php include 'footer-disclaimer.php'; ?>
    </div>
</footer>
```

---

## Tracking Integration

### GTM Integration

```php
<!-- In template <head> -->
<?php
$gtmId = $tracking['gtm'][$v['id']] ?? $tracking['gtm']['global'] ?? null;
if ($gtmId):
?>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<?= $gtmId ?>');</script>
<?php endif; ?>

<!-- After <body> -->
<?php if ($gtmId): ?>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtmId ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?php endif; ?>
```

### FunnelEngine Tracking

```javascript
// In FunnelEngine.js
trackEvent(eventName, data = {}) {
    // GTM/dataLayer
    if (window.dataLayer) {
        window.dataLayer.push({
            event: eventName,
            vertical: this.config.vertical,
            step: this.currentStep,
            ...data
        });
    }

    // Everflow (if configured)
    if (window.EF && this.config.trackingConfig?.everflow) {
        window.EF.track(eventName, data);
    }

    console.log('Tracked event:', eventName, data);
}
```

### Events Fired

| Event | When | Data |
|-------|------|------|
| `funnel_start` | First render | `{vertical, total_steps}` |
| `step_view` | Each step | `{vertical, step, question_id}` |
| `step_complete` | Answer given | `{vertical, step, question_id, value}` |
| `form_submit` | Form sent | `{vertical, success}` |
| `form_error` | Submission fails | `{vertical, error}` |

---

## Responsive Design

### Breakpoints

```css
/* Mobile first approach */
:root {
    --breakpoint-sm: 640px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 1024px;
    --breakpoint-xl: 1280px;
}

/* Base: Mobile */
.container {
    width: 100%;
    padding: 0 var(--spacing-4);
}

/* Tablet */
@media (min-width: 768px) {
    .container {
        max-width: 720px;
        margin: 0 auto;
    }

    .radio-options {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* Desktop */
@media (min-width: 1024px) {
    .container {
        max-width: 960px;
    }

    .benefits-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}
```

### Mobile-Optimized Flow

```css
/* Large touch targets */
.radio-option {
    min-height: 60px;
    padding: var(--spacing-4);
}

/* Full-width inputs */
.funnel-input {
    width: 100%;
    font-size: 16px; /* Prevents zoom on iOS */
}

/* Sticky submit button on mobile */
@media (max-width: 767px) {
    .submit-button {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        border-radius: 0;
        padding: var(--spacing-5);
    }
}
```
