@extends('layouts.app')

@section('title', 'Get Debt Relief Quotes in the USA | Go Quote Rocket')

@section('meta_description', 'Debt is crippling and getting out of debt is difficult. Compare quotes and find the best debt relief options in the USA with Go Quote Rocket.')

@section('body-class', 'inner_pg debt_relief')

@push('head')
<link rel="preload" href="{{ asset('images/inner-sec1-debt.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img1.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img2.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img3.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-debt-tab1.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-debt-tab2.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-debt-tab3.webp') }}" type="image/webp" as="image" />

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [{
            "@type": "Question",
            "name": "What is debt relief?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Debt relief involves programs designed to help you manage, reduce, or eliminate debt through strategies like consolidation, negotiation, or structured repayment plans."
            }
        },
        {
            "@type": "Question",
            "name": "Who qualifies for debt relief?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Eligibility depends on factors like your total debt amount, income, and the type of debt you have. Most unsecured debts, like credit card balances and personal loans, qualify for relief."
            }
        },
        {
            "@type": "Question",
            "name": "How does debt consolidation work?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Debt consolidation combines multiple debts into a single loan or repayment plan with a lower interest rate, making payments more manageable."
            }
        },
        {
            "@type": "Question",
            "name": "Will debt relief hurt my credit score?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Debt relief may temporarily affect your credit score, but it can improve over time as you pay down your debts and rebuild your financial health."
            }
        },
        {
            "@type": "Question",
            "name": "How long does debt relief take?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The duration of debt relief depends on your plan and debt amount but typically ranges from 12 to 60 months."
            }
        },
        {
            "@type": "Question",
            "name": "Can I include all my debts in a relief program?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Most unsecured debts, such as credit cards, medical bills, and personal loans, are eligible. Secured debts like mortgages and car loans usually aren't included."
            }
        },
        {
            "@type": "Question",
            "name": "How much does debt relief cost?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Costs vary by provider and plan, but many programs charge a percentage of your enrolled debt as a fee. Be sure to review the terms before committing."
            }
        },
        {
            "@type": "Question",
            "name": "Can debt relief stop collection calls?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, once you enroll in a program, many providers will work with creditors to halt collection calls and harassment."
            }
        },
        {
            "@type": "Question",
            "name": "Is debt relief the same as bankruptcy?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, debt relief focuses on negotiating with creditors or consolidating payments, while bankruptcy is a legal process that can discharge debts but has significant long-term consequences."
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

        <p class="inner_sec1-hdg">Find Your Path To Debt Freedom<br class="showDesk"> In Just 60 Seconds!</p>

        <p class="inner_sec1_txt">Regain peace of mind by consolidating your debts into <strong>one manageable<br class="showDesk"> monthly payment</strong>—tailored to your needs.</p>

        <div class="inner_sec1-form" id="toForm">
            <form method="POST" name="debt_form" id="debt_form">
                @csrf
                <input type="hidden" name="product_type" value="debt_relief">
                <input type="hidden" name="funnel_id" value="Debt">

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
                            <select name="age_range" class="input-fld required" data-error-message="Please select your age range.">
                                <option value="" selected>How old are you?</option>
                                @foreach(config('us.age_ranges') as $value => $label)
                                    <option value="{{ $value }}">{{ $label }}</option>
                                @endforeach
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                        <div class="form_input_box">
                            <select name="employment_status" class="input-fld required" data-error-message="Please select your employment status.">
                                <option value="" selected>Are you currently employed?</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                    </div>

                    <div class="form__input form__input--3">
                        <div class="form_input_box">
                            <select name="income_over_3k" class="input-fld required" data-error-message="Please answer this question.">
                                <option value="" selected>Do you earn more than $3K monthly?</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                        <div class="form_input_box">
                            <select name="debt_over_10k" class="input-fld required" data-error-message="Please select your debt amount.">
                                <option value="" selected>Is your debt more than $10K?</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                        <div class="form_input_box">
                            <select name="state" class="input-fld required" data-error-message="Please select your state.">
                                <option value="" selected>Select Your State</option>
                                @foreach(config('us.states') as $code => $name)
                                    <option value="{{ $code }}">{{ $name }}</option>
                                @endforeach
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                    </div>
                </div>

                <div class="form_bottom">
                    <ul class="form_lst">
                        <li><img src="{{ asset('images/secure.svg') }}" alt="100% Secure Form Icon"> 100% SECURE FORM</li>
                        <li><img src="{{ asset('images/heart.svg') }}" alt="No Commitment Icon"> NO COMMITMENT REQUIRED</li>
                    </ul>

                    <div class="form__button err_msg_ottr">
                        <button class="comn-btn" type="button" id="submitBtn">Get Started Today!</button>

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
        <p class="as-seen__heading">Quotes from America's top debt relief providers, including:</p>
    </div>

    <div class="hideMob">
        <div class="brand__strip__scroller">
            <ul class="scroll__brand__list">
                <li><img src="{{ asset('images/debt-provider-1.svg') }}" alt="Debt Relief Provider"></li>
                <li><img src="{{ asset('images/debt-provider-2.svg') }}" alt="Debt Relief Provider"></li>
                <li><img src="{{ asset('images/debt-provider-3.svg') }}" alt="Debt Relief Provider"></li>
                <li><img src="{{ asset('images/debt-provider-4.svg') }}" alt="Debt Relief Provider"></li>
            </ul>
        </div>
    </div>

    <div class="showMob">
        <div class="brand__strip__scroller">
            <ul class="scroll__brand__list">
                <li><img src="{{ asset('images/debt-provider-1.svg') }}" alt="Debt Relief Provider"></li>
                <li><img src="{{ asset('images/debt-provider-2.svg') }}" alt="Debt Relief Provider"></li>
                <li><img src="{{ asset('images/debt-provider-3.svg') }}" alt="Debt Relief Provider"></li>
                <li><img src="{{ asset('images/debt-provider-4.svg') }}" alt="Debt Relief Provider"></li>
            </ul>
        </div>
    </div>
</div>

<div class="inner_sec2">
    <div class="container">
        <p class="heading">How We Simplify<br> Debt Relief & Consolidation</p>

        <p class="comn_text">We understand that being in debt can feel overwhelming. That's why Go Quote Rocket simplifies the path<br class="showDesk"> to financial freedom. In just a few steps, we'll connect you with trusted debt counselors to help you<br class="showDesk"> regain control of your finances, stress-free.</p>

        <div class="sec2_inr">
            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img1.webp') }}" alt="Guy Using Go Quote Rocket on Computer for Debt Relief" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>One Quick Form</h3>
                    <p>Complete our secure and simple form in just 60 seconds. Your information is always protected, and we'll take care of finding the best debt relief solutions for you.</p>
                </div>
            </div>

            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img2.webp') }}" alt="Debt Relief And Consolidation Options" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>Tailored Debt Relief Options</h3>
                    <p>We'll instantly assess your situation and present customized debt relief plans designed to fit your financial needs, helping you achieve long-term stability.</p>
                </div>
            </div>

            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img3.webp') }}" alt="Trusted Debt Counselor" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>Trusted Debt Counselors</h3>
                    <p>Work with experienced, vetted professionals who will guide you through the debt relief process, giving you the confidence and support to rebuild your financial future.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="inner_sec3">
    <div class="container">
        <p class="heading">Understanding Your Options<br> To Get Out Of Debt Fast</p>

        <p class="comn_text">Explore the key solutions to tackle your debt—debt relief, consolidation, or bankruptcy—and take<br class="showDesk">the <strong>first step toward regaining control of your finances</strong>.</p>

        <div class="inner_sec3_row">
            <div class="inner_sec3_tab-row hideMob">
                <div class="inner_sec3_tab-col active" data-target="#tab_col_1">
                    <p>Debt Relief</p>
                </div>
                <div class="inner_sec3_tab-col" data-target="#tab_col_2">
                    <p>Debt Consolidation</p>
                </div>
                <div class="inner_sec3_tab-col" data-target="#tab_col_3">
                    <p>Bankruptcy</p>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Debt Relief</p><span class="icon">+</span>
                </div>

                <div class="inner_sec3_tab_content-box hideMob" id="tab_col_1">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Debt Relief</h3>

                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-debt-tab1.webp') }}" alt="Debt Relief" width="500" height="450">
                        </div>

                        <p class="inner_sec3_tab_content_tx">Debt relief in the USA involves negotiating with creditors to reduce the total amount owed or arranging for more manageable repayment terms. It's a viable solution for individuals facing mounting debts and struggling to keep up with payments. Debt relief is often handled through certified credit counselors who understand federal and state regulations.</p>

                        <p class="inner_sec3-content-sub_hd">Benefits of Debt Relief</p>

                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Debt Forgiveness:</strong> Negotiate to have a portion of debts written off, providing financial relief.</li>
                            <li><strong>Legal Protection:</strong> Stop creditor harassment, judgments, and garnishments immediately.</li>
                            <li><strong>Fresh Start:</strong> Begin anew with a clean financial slate.</li>
                            <li><strong>Professional Guidance:</strong> The process is managed by certified credit counselors.</li>
                            <li><strong>Asset Protection:</strong> Retain exempt assets as per federal and state laws.</li>
                        </ul>
                    </div>

                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-debt-tab1.webp') }}" alt="Debt Relief" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Debt Consolidation</p> <span class="icon">+</span>
                </div>

                <div class="inner_sec3_tab_content-box" id="tab_col_2" style="display: none;">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Debt Consolidation</h3>

                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-debt-tab2.webp') }}" alt="Debt Consolidation" width="500" height="450">
                        </div>

                        <p class="inner_sec3_tab_content_tx">Debt consolidation in the USA combines multiple debts into a single payment plan or loan, simplifying financial management and potentially reducing monthly payments. This option is particularly helpful for managing credit card debt, personal loans, or medical bills. Many Americans choose this option to streamline their repayments and reduce interest costs.</p>

                        <p class="inner_sec3-content-sub_hd">Benefits of Debt Consolidation</p>

                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Simplified Payments:</strong> Combine all your debts into one easy-to-manage monthly payment.</li>
                            <li><strong>Lower Interest Rates:</strong> Pay less interest, saving money in the long run.</li>
                            <li><strong>Avoid Default:</strong> Stay on track with a structured and predictable repayment plan.</li>
                            <li><strong>Improve Credit:</strong> Consistent repayments help rebuild your credit score over time.</li>
                        </ul>
                    </div>

                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-debt-tab2.webp') }}" alt="Debt Consolidation" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Bankruptcy</p> <span class="icon">+</span>
                </div>

                <div class="inner_sec3_tab_content-box" id="tab_col_3" style="display: none;">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Bankruptcy</h3>

                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-debt-tab3.webp') }}" alt="Bankruptcy" width="500" height="450">
                        </div>

                        <p class="inner_sec3_tab_content_tx">Bankruptcy is a legal process in the USA where individuals declare insolvency and either have debts discharged (Chapter 7) or restructured into a repayment plan (Chapter 13). While it provides a fresh financial start by eliminating most debts, it's typically a last-resort option due to its long-term impact on credit.</p>

                        <p class="inner_sec3-content-sub_hd">Benefits of Bankruptcy</p>

                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Debt Discharge:</strong> Eliminate most unsecured debts, providing complete financial relief.</li>
                            <li><strong>Automatic Stay:</strong> Immediately stop creditor harassment, lawsuits, and wage garnishments.</li>
                            <li><strong>Fresh Start:</strong> Begin rebuilding your financial life with a clean slate.</li>
                            <li><strong>Legal Protection:</strong> The process is regulated and managed by the bankruptcy court.</li>
                        </ul>
                    </div>

                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-debt-tab3.webp') }}" alt="Bankruptcy" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="clearall"></div>

            <div class="btn-bx">
                <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Debt Relief Options">Get Started Today</a>
            </div>
        </div>
    </div>
</div>

<div class="why_choose">
    <div class="container">
        <div class="why_choose_left">
            <p class="heading">Why Choose<br class="hideMob"> Go Quote Rocket</p>
            <p class="comn_text">Dealing with debt is overwhelming, but we're here to make your debt consolidation simple. At <a href="{{ route('home') }}" alt="Affordable Financial Solutions">Go Quote Rocket</a>, we connect you with debt counselors who can guide you through the process of selecting the right debt relief option for you.</p>
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
                    <p>Compare relief options. Choose the best for you.</p>
                </li>

                <li>
                    <img src="{{ asset('images/why-chose-icn3.png') }}" alt="Save Stress Icon" class="why-chose_icn" width="84" height="92">
                    <h3>Save Stress</h3>
                    <p>Avoid hidden fees and keep your personal information private.</p>
                </li>

                <li>
                    <img src="{{ asset('images/why-chose-icn4.png') }}" alt="Save Smart Icon" class="why-chose_icn" width="84" height="92">
                    <h3>Save Smart</h3>
                    <p>Quick comparisons, explained by a debt counselor.</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="inner_sec4">
    <div class="container">
        <p class="heading">Get Your Life Back<br class="showDesk"> On Track With Debt Relief</p>

        <p class="comn_text">Debt relief and consolidation is a powerful tool for anyone struggling to manage overwhelming financial burdens. Learn how<br class="showDesk"> it can help you <strong>reduce stress, protect your assets, and regain control of your money</strong>.</p>

        <div class="inner_sec4_inr">
            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-life-icon1.png') }}" alt="Consolidate Debt Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Consolidate<br>All Your Debt</h3>
                <p>Simplify your payments by consolidating multiple debts into one manageable monthly installment, often with a lower interest rate.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-life-icon2.png') }}" alt="Reduce Payments Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Reduce<br>Monthly Payments</h3>
                <p>Work with debt relief providers to lower your monthly payments, freeing up cash flow for essential expenses.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-life-icon8.png') }}" alt="Avoid Legal Action Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Avoid<br>Legal Action</h3>
                <p>Debt relief programs can help you avoid lawsuits, judgments, or wage garnishments by creating structured repayment plans.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-life-icon9.png') }}" alt="Eliminate Debt Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Eliminate<br>Debt Faster</h3>
                <p>With a customized plan, you can pay off your debt more quickly than sticking to minimum payments, saving you time and money.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-life-icon7.png') }}" alt="Reduce Stress Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Reduce<br>Unwanted Stress</h3>
                <p>By addressing your debt proactively, you can reduce the emotional burden of financial stress and focus on your goals.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-life-icon4.png') }}" alt="Get Life On Track Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Get Life<br>Back On Track</h3>
                <p>Ensure your life is financially secure and you're in a position to live the future you've been planning.</p>
            </div>
        </div>

        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Debt Relief Options">Get Started Today</a>
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
                <p class="reviews_text">"I couldn't believe how quickly Go Quote Rocket found me the best debt relief options. The whole process was stress-free and saved me so much time."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-1.jpg') }}" alt="Customer Named Jennifer" width="100" height="100" class="rev_fc">
                    <p><span>Jennifer</span><br> Phoenix, AZ</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Go Quote Rocket's customer service was outstanding. They answered all my questions and helped me choose a plan that worked perfectly for my budget."</p>
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
                <p class="reviews_text">"Go Quote Rocket's service was incredibly fast and efficient. They provided me with great options and helped me get out of debt faster. Highly recommend them."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-4.jpg') }}" alt="Customer Named Robert" width="100" height="100" class="rev_fc">
                    <p><span>Robert</span><br> Houston, TX</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Rated" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Finding the right debt relief solution was so easy with Go Quote Rocket. The options were tailored to my needs, and everything was simple and straightforward."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-5.jpg') }}" alt="Customer Named Michelle" width="100" height="100" class="rev_fc">
                    <p><span>Michelle</span><br> Chicago, IL</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Excellent service! Go Quote Rocket made it easy to find a great debt relief program. They were professional and very helpful throughout the process."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-6.jpg') }}" alt="Customer Named James" width="100" height="100" class="rev_fc">
                    <p><span>James</span><br> Los Angeles, CA</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Go Quote Rocket was a lifesaver! They helped me find debt relief quickly with a smooth, convenient process. Highly recommended."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-7.jpg') }}" alt="Customer Named Sarah" width="100" height="100" class="rev_fc">
                    <p><span>Sarah</span><br> Miami, FL</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box reviews_box-last">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Go Quote Rocket's system was so easy to use. I quickly found the debt relief program I needed without any hassle. Fantastic experience!"</p>
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
                    <div class="accordion acdn-heading accordion-open" id="hd-one">What is debt relief?</div>
                    <div class="acdn-content">
                        <p class="acdn-para">Debt relief involves programs designed to help you manage, reduce, or eliminate debt through strategies like consolidation, negotiation, or structured repayment plans.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Who qualifies for debt relief?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Eligibility depends on factors like your total debt amount, income, and the type of debt you have. Most unsecured debts, like credit card balances and personal loans, qualify for relief.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">How does debt consolidation work?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Debt consolidation combines multiple debts into a single loan or repayment plan with a lower interest rate, making payments more manageable.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Will debt relief hurt my credit score?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Debt relief may temporarily affect your credit score, but it can improve over time as you pay down your debts and rebuild your financial health.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">How long does debt relief take?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">The duration of debt relief depends on your plan and debt amount but typically ranges from 12 to 60 months.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Can I include all my debts in a relief program?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Most unsecured debts, such as credit cards, medical bills, and <a href="{{ route('products.personal-loans') }}" alt="Personal Loans">personal loans</a>, are eligible. Secured debts like mortgages and <a href="{{ route('products.car-insurance') }}" alt="Car Insurance Quotes">car</a> loans usually aren't included.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">How much does debt relief cost?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Costs vary by provider and plan, but many programs charge a percentage of your enrolled debt as a fee. Be sure to review the terms before committing.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Can debt relief stop collection calls?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Yes, once you enroll in a program, many providers will work with creditors to halt collection calls and harassment.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Is debt relief the same as bankruptcy?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">No, debt relief focuses on negotiating with creditors or consolidating payments, while bankruptcy is a <a href="{{ route('products.legal-insurance') }}" alt="Legal Insurance">legal process</a> that can discharge debts but has significant long-term consequences.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blue_strip">
    <div class="blue_strip_cont">
        <h3>Ready to get started?</h3>
        <p>Compare debt relief options today!</p>
    </div>

    <div class="blue_strip_btn">
        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Debt Relief Options">Get Quote Now</a>
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
            product_type: 'debt_relief',
            first_name: $("input[name='first_name']").val(),
            last_name: $("input[name='last_name']").val(),
            phone: phoneDigits,
            email: $("input[name='email']").val(),
            age_range: $("select[name='age_range']").val(),
            employment_status: $("select[name='employment_status']").val(),
            income_over_3k: $("select[name='income_over_3k']").val(),
            debt_over_10k: $("select[name='debt_over_10k']").val(),
            state: $("select[name='state']").val(),
            consent: $('#checkbox_terms').is(':checked') ? 1 : 0,
            funnel_id: 'Debt'
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
