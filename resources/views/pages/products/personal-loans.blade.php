@extends('layouts.app')

@section('title', 'Find Affordable Personal Loans in the USA | Go Quote Rocket')

@section('meta_description', 'Need financial assistance? Compare personal loan options in the USA and get the best rates with Go Quote Rocket.')

@section('body-class', 'inner_pg personal_loans')

@push('head')
<link rel="preload" href="{{ asset('images/inner-sec1-personal-loans.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img1.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img2.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img3.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-personal-tab1.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-personal-tab2.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-personal-tab3.webp') }}" type="image/webp" as="image" />

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [{
            "@type": "Question",
            "name": "What is a personal loan?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A personal loan is a type of unsecured loan that allows you to borrow money for various purposes, such as consolidating debt, covering emergency expenses, or funding personal projects. It is repaid in fixed monthly installments over a set period."
            }
        },
        {
            "@type": "Question",
            "name": "How much can I borrow with a personal loan?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The amount you can borrow depends on factors like your income, credit score, and the lender's policies. In the USA, personal loans typically range from $1,000 to $100,000 or more."
            }
        },
        {
            "@type": "Question",
            "name": "What is the interest rate for a personal loan?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Interest rates vary based on your credit profile, the loan amount, and the lender. Rates in the USA can range from 6% to 36%, depending on your financial circumstances."
            }
        },
        {
            "@type": "Question",
            "name": "Do I need collateral to get a personal loan?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, personal loans are unsecured, meaning you don't need to provide collateral like a car or property. Approval is based on your creditworthiness and financial stability."
            }
        },
        {
            "@type": "Question",
            "name": "How long does it take to get approved for a personal loan?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Approval times vary, but many lenders in the USA offer quick approvals, with funds often disbursed within 24 to 48 hours of application."
            }
        },
        {
            "@type": "Question",
            "name": "What can I use a personal loan for?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "You can use a personal loan for nearly any purpose, including consolidating debt, paying for medical bills, renovating your home, funding education, or covering emergency expenses."
            }
        },
        {
            "@type": "Question",
            "name": "What documents do I need to apply for a personal loan?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Commonly required documents include: A valid government-issued ID, proof of income (e.g., recent pay stubs or tax returns), bank statements for the last 2-3 months, and proof of residence (e.g., a utility bill)."
            }
        }
    ]
}
</script>
@endpush

@section('content')
<div class="inner_sec1" id="choosePack">
    <div class="container">
        <p class="inner_sec1-rat-txt"><img src="{{ asset('images/sec1-star.png') }}" alt="Customer Reviews" width="148" height="26"> <span>4.8 stars</span> 2,000+ reviews</p>

        <p class="inner_sec1-hdg">Get Pre-Approved<br class="showDesk"> For Up To $100,000</p>

        <p class="inner_sec1_txt">Apply in <strong>less than 60 seconds</strong> to see if you qualify—no obligations, <br class="hideMob">no hidden fees, and quick access to funds.</p>

        <div class="inner_sec1-form" id="toForm">
            <form method="POST" name="loan_form" id="loan_form">
                @csrf
                <input type="hidden" name="product_type" value="personal_loans">
                <input type="hidden" name="funnel_id" value="Loans">

                <div class="form__field">
                    <div class="form__input form__input--2">
                        <div class="form_input_box">
                            <input type="text" value="" name="first_name" placeholder="First Name" class="input-fld required" data-error-message="Please enter your first name.">
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                        <div class="form_input_box">
                            <input type="text" value="" name="last_name" placeholder="Last Name" class="input-fld required" data-error-message="Please enter your last name.">
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                    </div>

                    <div class="form__input form__input--2">
                        <div class="form_input_box">
                            <input type="tel" value="" name="phone" placeholder="Phone Number (XXX) XXX-XXXX" class="input-fld required" data-error-message="Please enter your phone number." maxlength="14">
                            <div class="error_message text-left" style="display: none;" id="phone_prompt">
                                <span class="phone-prompt-error">Please enter a valid 10-digit US phone number.</span>
                            </div>
                        </div>
                        <div class="form_input_box">
                            <input type="email" value="" name="email" placeholder="Email" class="input-fld required" data-error-message="Please enter your email address.">
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                    </div>

                    <div class="form__input form__input--2">
                        <div class="form_input_box">
                            <select name="state" class="input-fld required" data-error-message="Please select your state.">
                                <option value="" selected>Select Your State</option>
                                @foreach(config('us.states') as $code => $name)
                                    <option value="{{ $code }}">{{ $name }}</option>
                                @endforeach
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                        <div class="form_input_box">
                            <select name="under_debt_review" class="input-fld required" data-error-message="Please select your debt status.">
                                <option value="" selected>Currently in debt management?</option>
                                <option value="no">No</option>
                                <option value="yes">Yes</option>
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                    </div>

                    <div class="form__input form__input--3">
                        <div class="form_input_box">
                            <select name="age_range" class="input-fld required" data-error-message="Please select your age range.">
                                <option value="" selected>How old are you?</option>
                                @foreach(config('us.age_ranges') as $value => $label)
                                    <option value="{{ $value }}">{{ $label }}</option>
                                @endforeach
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                        <div class="form_input_box">
                            <select name="income_bracket" class="input-fld required" data-error-message="Please select your monthly income.">
                                <option value="" selected="">What is your monthly income?</option>
                                <option value="0-2500">$0 - $2,500</option>
                                <option value="2501-5000">$2,501 - $5,000</option>
                                <option value="5001-7500">$5,001 - $7,500</option>
                                <option value="7501-10000">$7,501 - $10,000</option>
                                <option value="10001+">$10,001+</option>
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>

                        <div class="form_input_box">
                            <select name="loan_amount" class="input-fld required" data-error-message="Please select your desired loan amount.">
                                <option value="" selected="">What is your desired loan amount?</option>
                                <option value="5000">$5,000</option>
                                <option value="10000">$10,000</option>
                                <option value="15000">$15,000</option>
                                <option value="25000">$25,000</option>
                                <option value="35000">$35,000</option>
                                <option value="50000">$50,000</option>
                                <option value="75000">$75,000</option>
                                <option value="100000">$100,000</option>
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                    </div>
                </div>

                <div class="form_bottom">
                    <ul class="form_lst">
                        <li><img src="{{ asset('images/secure.svg') }}" alt="100% Secure Form Icon"> 100% SECURE FORM</li>
                        <li><img src="{{ asset('images/heart.svg') }}" alt="No Commitment Required Icon"> NO COMMITMENT REQUIRED</li>
                    </ul>

                    <div class="form__button err_msg_ottr">
                        <button type="button" class="comn-btn" id="submitBtn">Get Started Today!</button>

                        <p class="form_terms"><input type="checkbox" name="" id="checkbox_terms" class="form_checkbox" checked> <span></span> <label for="checkbox_terms">Yes, I accept the <a href="{{ route('terms') }}" target="_blank">terms and conditions</a></label>.</p>

                        <div class="error_message text-left err_msg" id="checkbox_error_message" style="display: none;">You must agree to our terms to submit your information.</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="as-seen">
    <div class="container">
        <p class="as-seen__heading">Quotes from America's top lenders, including:</p>
    </div>

    <div class="hideMob">
        <div class="brand__strip__scroller">
            <ul class="scroll__brand__list">
                <li><img src="{{ asset('images/lender-logo-1.svg') }}" alt="Personal Loan Lender"></li>
                <li><img src="{{ asset('images/lender-logo-2.svg') }}" alt="Personal Loan Lender"></li>
                <li><img src="{{ asset('images/lender-logo-3.svg') }}" alt="Personal Loan Lender"></li>
                <li><img src="{{ asset('images/lender-logo-4.svg') }}" alt="Personal Loan Lender"></li>
            </ul>
        </div>
    </div>

    <div class="showMob">
        <div class="brand__strip__scroller">
            <ul class="scroll__brand__list">
                <li><img src="{{ asset('images/lender-logo-1.svg') }}" alt="Personal Loan Lender"></li>
                <li><img src="{{ asset('images/lender-logo-2.svg') }}" alt="Personal Loan Lender"></li>
                <li><img src="{{ asset('images/lender-logo-3.svg') }}" alt="Personal Loan Lender"></li>
                <li><img src="{{ asset('images/lender-logo-4.svg') }}" alt="Personal Loan Lender"></li>
            </ul>
        </div>
    </div>
</div>

<div class="inner_sec2">
    <div class="container">
        <p class="heading">How We Make<br>Getting A Personal Loan Easy</p>

        <p class="comn_text comn_text--center">We know finding the right personal loan can feel overwhelming. That's why Go Quote Rocket simplifies the process for you. In just a few steps, we'll connect you with trusted lenders, helping you secure the most reliable and affordable personal loan, hassle-free.</p>

        <div class="sec2_inr">
            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img1.webp') }}" alt="Guy On Computer Using Go Quote Rocket for Personal Loans" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>One Quick Form</h3>
                    <p>We'll instantly search and present the best personal loan offers that match your unique needs and budget, ensuring you find the perfect solution for your financial goals.</p>
                </div>
            </div>

            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img2.webp') }}" alt="Personal Loan Options Available" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>Tailored Loan Options</h3>
                    <p>We'll instantly search and present the best personal loan options that fit your personal needs and budget, ensuring you find the perfect match.</p>
                </div>
            </div>

            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img3.webp') }}" alt="Trusted Lending Partners" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>Trusted Lending Partners</h3>
                    <p>Connect with vetted, experienced lending partners who will guide you through the process, giving you peace of mind and confidence in your loan choice.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="inner_sec3">
    <div class="container">
        <p class="heading">Compare & Review<br> Personal Loan Options</p>

        <p class="comn_text">Explore different personal loan options in the USA to find the perfect solution for your financial needs.<br class="showDesk"> From unsecured loans to microloans, <strong>each option is designed to help you achieve your goals</strong>,<br class="showDesk"> whether it's consolidating debt, managing emergencies, or funding life's milestones.</p>

        <div class="inner_sec3_row">
            <div class="inner_sec3_tab-row hideMob">
                <div class="inner_sec3_tab-col active" data-target="#tab_col_1">
                    <p>Unsecured Personal Loans</p>
                </div>
                <div class="inner_sec3_tab-col" data-target="#tab_col_2">
                    <p>Secured Personal Loans</p>
                </div>
                <div class="inner_sec3_tab-col" data-target="#tab_col_3">
                    <p>Debt Consolidation Loans</p>
                </div>
                <div class="inner_sec3_tab-col" data-target="#tab_col_4">
                    <p>Short-Term Loans</p>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Unsecured Personal Loans</p><span class="icon">+</span>
                </div>

                <div class="inner_sec3_tab_content-box hideMob" id="tab_col_1">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Unsecured Personal Loans</h3>

                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-personal-tab1.webp') }}" alt="Unsecured Personal Loans" width="500" height="450">
                        </div>

                        <p class="inner_sec3_tab_content_tx">Unsecured personal loans offer flexibility and convenience without the need for collateral. They are based on your creditworthiness and income, making them a popular choice for individuals looking to fund various needs, such as consolidating debt, covering medical expenses, or pursuing personal projects. With no assets required, unsecured loans provide peace of mind and quick access to funds.</p>

                        <p class="inner_sec3-content-sub_hd">Benefits of Unsecured Personal Loans</p>

                        <ul class="inner_sec3_tab-lst">
                            <li><strong>No Collateral Needed:</strong> Borrow money without risking your assets.</li>
                            <li><strong>Flexible Usage:</strong> Use the funds for almost any purpose.</li>
                            <li><strong>Quick Approval:</strong> Receive funds faster with streamlined processes.</li>
                            <li><strong>Fixed Repayment Terms:</strong> Budget easily with predictable monthly payments.</li>
                        </ul>
                    </div>

                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-personal-tab1.webp') }}" alt="Unsecured Personal Loans" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Secured Personal Loans</p> <span class="icon">+</span>
                </div>

                <div class="inner_sec3_tab_content-box" id="tab_col_2" style="display: none;">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Secured Personal Loans</h3>

                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-personal-tab2.webp') }}" alt="Secured Personal Loans" width="500" height="450">
                        </div>

                        <p class="inner_sec3_tab_content_tx">Secured personal loans require collateral, such as a car or property, to guarantee the loan. This type of loan typically offers lower interest rates due to reduced risk for the lender. Ideal for those who need larger amounts of money or want to secure better loan terms, secured loans provide a cost-effective option for significant financial needs.</p>

                        <p class="inner_sec3-content-sub_hd">Benefits of Secured Personal Loans</p>

                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Lower Interest Rates:</strong> Save money with reduced borrowing costs.</li>
                            <li><strong>Higher Loan Amounts:</strong> Access larger funds for big expenses.</li>
                            <li><strong>Flexible Terms:</strong> Enjoy tailored repayment plans.</li>
                            <li><strong>Improved Approval Odds:</strong> Increase your chances of approval by offering collateral.</li>
                        </ul>
                    </div>

                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-personal-tab2.webp') }}" alt="Secured Personal Loans" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Debt Consolidation Loans</p> <span class="icon">+</span>
                </div>

                <div class="inner_sec3_tab_content-box" id="tab_col_3" style="display: none;">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Debt Consolidation Loans</h3>

                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-personal-tab3.webp') }}" alt="Debt Consolidation Loans" width="500" height="450">
                        </div>

                        <p class="inner_sec3_tab_content_tx">Debt consolidation loans are designed to simplify your finances by combining multiple debts into a single, manageable repayment plan. With a lower interest rate, you can save money while reducing the stress of juggling multiple payments. This option is perfect for those looking to regain control over their finances and pay off debts faster.</p>

                        <p class="inner_sec3-content-sub_hd">Benefits of Debt Consolidation Loans</p>

                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Simplified Payments:</strong> Replace multiple debts with one easy-to-manage loan.</li>
                            <li><strong>Lower Interest Rates:</strong> Save money by reducing overall interest costs.</li>
                            <li><strong>Improved Credit Score:</strong> Boost your credit rating by staying on top of payments.</li>
                            <li><strong>Financial Clarity:</strong> Gain a clearer picture of your financial situation.</li>
                        </ul>
                    </div>

                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-personal-tab3.webp') }}" alt="Debt Consolidation Loans" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Short-Term Loans</p> <span class="icon">+</span>
                </div>

                <div class="inner_sec3_tab_content-box" id="tab_col_4" style="display: none;">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Short-Term Loans</h3>

                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-personal-tab4.jpg') }}" alt="Short-Term Loans" width="500" height="450">
                        </div>

                        <p class="inner_sec3_tab_content_tx">Short-term loans are smaller, quick-turnaround loans designed to help individuals who need immediate financial assistance. These loans are often used for personal emergencies or to bridge temporary cash flow gaps. With smaller loan amounts and flexible terms, short-term loans provide quick financial support for those who need it most.</p>

                        <p class="inner_sec3-content-sub_hd">Benefits of Short-Term Loans</p>

                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Accessibility:</strong> Ideal for individuals with varying credit histories.</li>
                            <li><strong>Quick Disbursement:</strong> Receive funds rapidly for urgent needs.</li>
                            <li><strong>Flexible Repayment Terms:</strong> Tailored for short-term financial needs.</li>
                            <li><strong>Convenience:</strong> Simple application process with minimal documentation.</li>
                        </ul>
                    </div>

                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-personal-tab4.jpg') }}" alt="Short-Term Loans" width="500" height="450">
                    </div>
                </div>
            </div>
        </div>

        <div class="clearall"></div>

        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Personal Loan Quotes">Get Started Today</a>
        </div>
    </div>
</div>

<div class="why_choose">
    <div class="container">
        <div class="why_choose_left">
            <p class="heading">Why Choose<br class="hideMob"> Go Quote Rocket</p>
            <p class="comn_text">Finding the right personal loan can feel overwhelming, but we're here to make it simple. At <a href="{{ route('home') }}" alt="Affordable Personal Loans">Go Quote Rocket</a>, we connect you with a reliable, trusted provider who can guide you through the process of picking the right personal loan. You'll be able to make the right choice for your needs and budget.</p>
        </div>

        <div class="why_choose_right">
            <ul class="why_choose_lst">
                <li>
                    <img src="{{ asset('images/why-chose-icn1.png') }}" alt="Save Time Icon" class="why-chose_icn" width="84" height="92">
                    <h3>Save Time</h3>
                    <p>Find all the prices and benefits you need in 1 minute.</p>
                </li>

                <li>
                    <img src="{{ asset('images/why-chose-icn2.png') }}" alt="Save Money Icon" class="why-chose_icn" width="84" height="92">
                    <h3>Save Money</h3>
                    <p>Compare personal loan quotes. Choose the best for you.</p>
                </li>

                <li>
                    <img src="{{ asset('images/why-chose-icn3.png') }}" alt="Save Stress Icon" class="why-chose_icn" width="84" height="92">
                    <h3>Save Stress</h3>
                    <p>Avoid hidden fees and keep your personal information private.</p>
                </li>

                <li>
                    <img src="{{ asset('images/why-chose-icn4.png') }}" alt="Save Smart Icon" class="why-chose_icn" width="84" height="92">
                    <h3>Save Smart</h3>
                    <p>Quick comparisons, explained by a loan expert.</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="inner_sec4">
    <div class="container">
        <p class="heading">Discover How A Personal<br> Loan Can Work For You</p>

        <p class="comn_text">A personal loan is your financial lifeline for achieving big goals or overcoming unexpected challenges. From consolidating debt to<br class="showDesk"> funding life's milestones, personal loans offer <strong>flexible repayment terms, quick approvals,<br class="showDesk"> and the financial freedom to take control of your future</strong>.</p>

        <div class="inner_sec4_inr">
            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-personal-icon1.png') }}" alt="Quick Access to Funds Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Quick Access<br> to Funds</h3>
                <p>Personal loans provide fast approval and disbursement, making them ideal for urgent financial needs.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-personal-icon2.png') }}" alt="Flexible Usage Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Flexible<br> Usage</h3>
                <p>Use the loan for a variety of purposes, such as consolidating debt, covering medical expenses, funding education, or planning a dream vacation.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-personal-icon3.png') }}" alt="Fixed Repayment Terms Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Fixed<br> Repayment Terms</h3>
                <p>Enjoy predictable monthly payments with fixed interest rates, making it easier to budget and manage your finances.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-personal-icon4.png') }}" alt="No Collateral Required Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>No Collateral<br> Required</h3>
                <p>Most personal loans are unsecured, meaning you don't need to put your assets at risk to borrow.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-personal-icon5.png') }}" alt="Improve Credit Score Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Improve<br> Credit Score</h3>
                <p>Timely repayments can boost your credit score, demonstrating financial responsibility and improving future borrowing opportunities.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-personal-icon6.png') }}" alt="Consolidate Debt Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Consolidate<br> Debt</h3>
                <p>Combine multiple high-interest debts into one manageable payment with a lower interest rate, simplifying your finances.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-personal-icon7.png') }}" alt="Competitive Interest Rates Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Competitive<br> Interest Rates</h3>
                <p>Qualified borrowers can secure loans with competitive interest rates, saving money over the life of the loan compared to credit cards.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-personal-icon8.png') }}" alt="Tailored Loan Amounts Icons" class="inner_sec4_icn" width="200" height="124">
                <h3>Tailored<br> Loan Amounts</h3>
                <p>Borrow only what you need, with flexible loan amounts to suit your specific requirements.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-personal-icon9.png') }}" alt="Build Financial Freedom Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Build Financial<br> Freedom</h3>
                <p>Address pressing financial concerns or invest in opportunities that improve your quality of life, giving you greater control over your future.</p>
            </div>
        </div>

        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Personal Loan Quotes">Get Started Today</a>
        </div>
    </div>
</div>

<div class="sec3">
    <div class="container">
        <p class="heading">Over 500,000<br class="showMob"> Americans Trust Us.</p>

        <div class="feefo_box">
            <img src="{{ asset('images/feefo-logo.png') }}" alt="Feefo Reviews" class="feefo_log" width="366" height="84">
            <div class="feefo_review">
                <img src="{{ asset('images/star.png') }}" alt="5 Star Rating" width="228" height="40">
                <p>4.8/5 Based On 2000+ reviews</p>
            </div>
        </div>
    </div>

    <div class="reviews">
        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"I couldn't believe how quickly Go Quote Rocket found me the best loan options. The whole process was stress-free and saved me so much time."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-1.jpg') }}" alt="Customer Named Jennifer" width="100" height="100" class="rev_fc">
                    <p><span>Jennifer</span><br> Phoenix, AZ</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Go Quote Rocket's customer service was outstanding. They answered all my questions and helped me choose a loan that worked perfectly for my budget."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-2.jpg') }}" alt="Customer Named Marcus" width="100" height="100" class="rev_fc">
                    <p><span>Marcus</span><br> Atlanta, GA</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"I'm so glad I used Go Quote Rocket! They compared multiple options for me and found the best deal in minutes. Highly efficient and reliable."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-3.jpg') }}" alt="Customer Named David" width="100" height="100" class="rev_fc">
                    <p><span>David</span><br> Denver, CO</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Rating" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Go Quote Rocket's service was incredibly fast and efficient. They provided me with great options and unbeatable rates. I'm thrilled with the deal I got and highly recommend them."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-4.jpg') }}" alt="Customer Named Robert" width="100" height="100" class="rev_fc">
                    <p><span>Robert</span><br> Houston, TX</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Rated" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Finding the right loan was so easy with Go Quote Rocket. The options were tailored to my needs, and everything was simple and straightforward."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-5.jpg') }}" alt="Customer Named Michelle" width="100" height="100" class="rev_fc">
                    <p><span>Michelle</span><br> Chicago, IL</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Excellent service! Go Quote Rocket made it easy to find a great loan deal. They were professional and very helpful throughout the process."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-6.jpg') }}" alt="Customer Named James" width="100" height="100" class="rev_fc">
                    <p><span>James</span><br> Los Angeles, CA</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Go Quote Rocket was a lifesaver! They helped me find a loan quickly with a smooth, convenient process. Highly recommended."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-7.jpg') }}" alt="Customer Named Sarah" width="100" height="100" class="rev_fc">
                    <p><span>Sarah</span><br> Miami, FL</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box reviews_box-last">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Go Quote Rocket's system was so easy to use. I quickly found the loan I needed without any hassle. Fantastic experience!"</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-8.jpg') }}" alt="Customer Named Amanda" width="100" height="100" class="rev_fc">
                    <p><span>Amanda</span><br> Seattle, WA</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>
    </div>
</div>

<div class="sec7">
    <div class="container" id="faq-section">
        <p class="heading">Frequently Asked Questions</p>

        <div class="faq-container" style="overflow:hidden;">
            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-open" id="hd-one">What is a personal loan?</div>
                    <div class="acdn-content">
                        <p class="acdn-para">A personal loan is a type of unsecured loan that allows you to borrow money for various purposes, such as consolidating debt, covering emergency expenses, or funding personal projects. It is repaid in fixed monthly installments over a set period.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">How much can I borrow with a personal loan?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">The amount you can borrow depends on factors like your income, credit score, and the lender's policies. In the USA, personal loans typically range from $1,000 to $100,000 or more.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">What is the interest rate for a personal loan?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Interest rates vary based on your credit profile, the loan amount, and the lender. Rates in the USA can range from 6% to 36%, depending on your financial circumstances.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Do I need collateral to get a personal loan?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">No, personal loans are unsecured, meaning you don't need to provide collateral like a <a href="{{ route('products.car-insurance') }}" alt="Car Insurance Quotes">car</a> or property. Approval is based on your creditworthiness and financial stability.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">How long does it take to get approved for a personal loan?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Approval times vary, but many lenders in the USA offer quick approvals, with funds often disbursed within 24 to 48 hours of application.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">What can I use a personal loan for?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">You can use a personal loan for nearly any purpose, including consolidating debt, paying for medical bills, renovating your home, funding education, or <a href="{{ route('products.final-expense') }}" alt="Final Expense Insurance Options">covering emergency expenses</a>.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">What documents do I need to apply for a personal loan?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Commonly required documents include:</p>
                        <ul class="acdn_list">
                            <li>A valid government-issued ID (driver's license, passport, or state ID).</li>
                            <li>Proof of income (e.g., recent pay stubs or tax returns).</li>
                            <li>Bank statements for the last 2-3 months.</li>
                            <li>Proof of residence (e.g., a utility bill or lease agreement).</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blue_strip">
    <div class="blue_strip_cont">
        <h3>Ready to get started?</h3>
        <p>Compare personal loan quotes today!</p>
    </div>

    <div class="blue_strip_btn">
        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Personal Loan Quotes">Get Quote Now</a>
        </div>
    </div>
</div>

<div id="error_handler_overlay" style="display: none;">
    <div class="error_handler_body">
        <a href="javascript:void(0);" id="error_handler_overlay_close">X</a>
        <p>There was an issue submitting your information. Please try again.</p>
    </div>
</div>

<p id="loading-indicator" style="display:none">Redirecting...</p>
@endsection

@push('scripts')
<script type="text/javascript">
function scrollToSection() {
    var section = document.getElementById("toForm");
    var offset = section.offsetTop - 72;
    if ($(window).width() < 767) {
        offset = section.offsetTop - 50;
    }
    window.scrollTo({
        top: offset,
        behavior: 'smooth'
    });
}

$(document).ready(function() {
    // Phone number formatting for US format
    $("input[name='phone']").on('input', function() {
        let value = $(this).val().replace(/\D/g, '');
        if (value.length > 10) value = value.substring(0, 10);

        if (value.length >= 6) {
            value = '(' + value.substring(0, 3) + ') ' + value.substring(3, 6) + '-' + value.substring(6);
        } else if (value.length >= 3) {
            value = '(' + value.substring(0, 3) + ') ' + value.substring(3);
        } else if (value.length > 0) {
            value = '(' + value;
        }
        $(this).val(value);
    });

    // Form validation and submission
    var phoneErrors = [];
    var termsError = [];

    $('#submitBtn').on('click', function(event) {
        var errors = [];
        validateCheckbox();

        $('input.required, select.required').each(function() {
            var input = $(this);
            if (input.val().trim() === '') {
                input.next('.error_message').show();
                input.next().text(input.attr('data-error-message'));
                errors.push(input.attr('data-error-message'));
            } else {
                input.next('.error_message').hide();
            }
        });

        // Phone validation
        var phoneDigits = $("input[name='phone']").val().replace(/\D/g, '');
        if (phoneDigits.length !== 10) {
            $('#phone_prompt').show();
            errors.push("Invalid phone number");
        } else {
            $('#phone_prompt').hide();
        }

        if (errors.length === 0 && phoneErrors.length === 0 && termsError.length === 0) {
            submitLead();
        }
    });

    // Clear errors on input
    $("select.required").on('change', function() {
        $(this).next('.error_message').hide();
    });

    $("input.required").on('keyup', function() {
        $(this).next('.error_message').hide();
    });

    function submitLead() {
        $('#loading-indicator').show();
        let phoneDigits = $("input[name='phone']").val().replace(/\D/g, '');

        let formData = {
            _token: $('meta[name="csrf-token"]').attr('content'),
            product_type: 'personal_loans',
            first_name: $("input[name='first_name']").val(),
            last_name: $("input[name='last_name']").val(),
            phone: phoneDigits,
            email: $("input[name='email']").val(),
            state: $("select[name='state']").val(),
            under_debt_review: $("select[name='under_debt_review']").val(),
            age_range: $("select[name='age_range']").val(),
            income_bracket: $("select[name='income_bracket']").val(),
            loan_amount: $("select[name='loan_amount']").val(),
            consent: $('#checkbox_terms').is(':checked') ? 1 : 0,
            funnel_id: 'Loans'
        };

        $.ajax({
            url: '{{ route("leads.submit") }}',
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    window.location.href = '{{ route("thank-you") }}';
                } else {
                    $('#loading-indicator').hide();
                    $('#error_handler_overlay').show();
                }
            },
            error: function(xhr) {
                $('#loading-indicator').hide();
                $('#error_handler_overlay').show();
            }
        });
    }

    // Validate terms checkbox
    document.getElementById('checkbox_terms').addEventListener('click', validateCheckbox);

    function validateCheckbox() {
        const checkbox = document.getElementById('checkbox_terms');
        const errorMessage = 'You must agree to our terms to submit your information.';
        if (checkbox.checked) {
            $('#checkbox_error_message').hide();
            termsError.length = 0;
        } else {
            $('#checkbox_error_message').text(errorMessage).show();
            termsError.push(errorMessage);
        }
    }

    // Error Handler Close
    $(document).on('click', '#error_handler_overlay_close', function(event) {
        $('#error_handler_overlay').hide();
    });

    // Tab functionality
    $(".inner_sec3_tab-col").click(function() {
        $(".inner_sec3_tab-col").removeClass('active');
        $(this).addClass('active');

        var target = $(this).data("target");
        var content = $(target);
        var box = content.closest(".inner_sec3_tab_content-box");

        if (content.is(":visible")) {
            box.removeClass("active");
        } else {
            $(".inner_sec3_tab_content-box").hide();
            content.show();
            box.addClass("active");
        }
    });

    // Mobile accordion
    $('.accdn-hd').click(function() {
        const content = $(this).next('.inner_sec3_tab_content-box');
        const icon = $(this).find('.icon');
        var trg = $(this);

        window.setTimeout(function() {
            $('html, body').animate({
                scrollTop: $(trg).offset().top - 75
            }, 1000);
        }, 700);

        $('.inner_sec3_tab_content-box').not(content).slideUp(500);
        $('.icon').not(icon).text('+');

        content.slideToggle(500);
        icon.text(icon.text() === '+' ? '-' : '+');
    });

    // Reviews slider
    $('.reviews').slick({
        dots: false,
        arrows: false,
        autoplay: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 2200,
                settings: {
                    centerMode: true,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    centerMode: false,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    dots: true,
                    variableWidth: false,
                }
            }
        ]
    });

    // FAQ accordion
    $(".acdn-heading").click(function() {
        var questionDiv = $(this);
        var answerDiv = $(this).next('.acdn-content');
        var idx = $('.acdn-content').index(answerDiv);

        $('.acdn-content').each(function(index, ansDiv) {
            if (index != idx && $(ansDiv).is(':visible')) {
                $(ansDiv).slideUp(500, function() {
                    $(ansDiv).prev('.acdn-heading').removeClass('accordion-open');
                });
            }
        });

        if (answerDiv.is(':visible')) {
            answerDiv.stop().slideUp(500, function() {
                questionDiv.removeClass('accordion-open');
            });
        } else {
            questionDiv.addClass('accordion-open');
            answerDiv.stop().slideDown(500);
        }
    });
});
</script>
@endpush
