@extends('layouts.app')

@section('title', 'Legal Insurance Quotes in the USA | Go Quote Rocket')
@section('description', 'Stay protected with affordable legal insurance. Compare quotes and find the best legal coverage in the USA with Go Quote Rocket.')
@section('body-class', 'inner_pg legal_insurance')

@push('preload')
<link rel="preload" href="{{ asset('images/inner-sec1-legal-insur.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img1.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img2.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img3.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-legal-tab1.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-legal-tab2.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-legal-tab3.webp') }}" type="image/webp" as="image" />
@endpush

@push('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What is legal insurance?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Legal insurance is a policy that helps cover legal expenses, such as lawyer fees, court costs, and settlements, for various disputes or proceedings."
            }
        },
        {
            "@type": "Question",
            "name": "What does legal insurance cover?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It covers legal representation, court fees, settlements, and defense for claims involving property damage, medical expenses, loss of earnings, and more."
            }
        },
        {
            "@type": "Question",
            "name": "Who needs legal insurance?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Anyone who wants to protect themselves from unexpected legal costs can benefit from legal insurance. It's especially useful for families and individuals facing financial uncertainty."
            }
        },
        {
            "@type": "Question",
            "name": "How much does legal insurance cost?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Costs vary depending on the level of coverage and the provider. Comparing quotes can help you find the best option within your budget."
            }
        },
        {
            "@type": "Question",
            "name": "Can legal insurance cover my family?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, many policies offer family coverage, extending legal protection to your spouse and dependents."
            }
        },
        {
            "@type": "Question",
            "name": "Does legal insurance cover business disputes?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Some policies include limited coverage for workplace disputes or small business legal matters. Check the policy terms for details."
            }
        },
        {
            "@type": "Question",
            "name": "How do I claim legal insurance?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Contact your provider and provide documentation of your legal issue to initiate the claims process."
            }
        },
        {
            "@type": "Question",
            "name": "Are pre-existing legal issues covered?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, most insurance policies exclude coverage for disputes or proceedings that began before the policy was taken out."
            }
        },
        {
            "@type": "Question",
            "name": "Can I cancel my legal insurance?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, you can cancel your policy at any time, though cancellation fees or terms may apply."
            }
        },
        {
            "@type": "Question",
            "name": "Do I still need a lawyer if I have legal insurance?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, but legal insurance helps cover the costs of hiring a lawyer, making legal representation more affordable."
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
        <p class="inner_sec1-hdg">$500,000 in Personal Legal<br class="showDesk"> Cover at Your Fingertips</p>
        <p class="inner_sec1_txt">Cover legal fees, court costs, and settlements—compare plans<br class="showDesk"> now and find the best deal!</p>

        <div class="inner_sec1-form" id="toForm">
            <form method="POST" name="legal_api1" id="legalForm">
                @csrf
                <input type="hidden" name="product_type" value="legal_insurance">
                <input type="hidden" name="funnel_id" value="Legal">

                <div class="form__field">
                    <div class="form__input form__input--2">
                        <div class="form_input_box">
                            <input type="text" name="first_name" placeholder="First Name" class="input-fld required" data-error-message="Please enter your first name.">
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                        <div class="form_input_box">
                            <input type="text" name="last_name" class="input-fld required" data-error-message="Please enter your last name." placeholder="Last Name">
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                    </div>

                    <div class="form__input form__input--3">
                        <div class="form_input_box">
                            <input type="tel" name="phone" placeholder="Phone Number" class="input-fld required" data-error-message="Please enter your phone number." maxlength="14">
                            <div class="error_message text-left" style="display:none" id="phone_prompt"></div>
                        </div>
                        <div class="form_input_box">
                            <input type="email" name="email" class="input-fld required" placeholder="Email" data-error-message="Please enter your email address.">
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                        <div class="form_input_box">
                            <select name="employment_status" class="input-fld required" data-error-message="Please select your employment status.">
                                <option value="" selected>Are you currently employed?</option>
                                <option value="employed">Yes</option>
                                <option value="unemployed">No</option>
                                <option value="self-employed">Self-Employed</option>
                                <option value="retired">Retired</option>
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                    </div>
                </div>

                <div class="form_bottom">
                    <ul class="form_lst">
                        <li><img src="{{ asset('images/secure.svg') }}" alt="100% Secure Icon"> 100% SECURE FORM</li>
                        <li><img src="{{ asset('images/heart.svg') }}" alt="No Commitment Icon"> NO COMMITMENT REQUIRED</li>
                    </ul>

                    <div class="form__button err_msg_ottr">
                        <button type="button" class="apiBtn">Get Started Today!</button>
                        <p class="form_terms">
                            <input type="checkbox" name="consent" id="checkbox_terms" class="form_checkbox" checked>
                            <span></span>
                            <label for="checkbox_terms">Yes, I accept the <a href="{{ route('terms') }}" target="_blank">terms and conditions</a></label>.
                        </p>
                        <div class="error_message text-left err_msg" id="checkbox_error_message" style="display: none;">You must agree to our terms to submit your information.</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="as-seen">
    <div class="container">
        <p class="as-seen__heading">Quotes by America's top providers, including:</p>
    </div>
    <div class="">
        <div class="brand__strip__scroller">
            <ul class="scroll__brand__list">
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Legal Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Legal Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Legal Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Legal Insurance Provider" class="provider_logo"></li>
            </ul>
            <ul class="scroll__brand__list">
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Legal Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Legal Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Legal Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Legal Insurance Provider" class="provider_logo"></li>
            </ul>
        </div>
    </div>
</div>

<div class="inner_sec2">
    <div class="container">
        <p class="heading">How We Make <br class="showDesk"> Finding Legal Cover Easy</p>
        <p class="comn_text comn_text--center">We know finding the right legal cover can feel overwhelming. That's why Go Quote Rocket simplifies the process for you. In just a few steps, we'll connect you with trusted providers, helping you secure the most reliable and affordable legal insurance, hassle-free.</p>

        <div class="sec2_inr">
            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img1.webp') }}" alt="Quick Form" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>One Quick Form</h3>
                    <p>Fill out our secure, straightforward form in just 60 seconds. Your information is always protected, and we'll handle the rest to find the best legal cover for your needs.</p>
                </div>
            </div>

            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img2.webp') }}" alt="Tailored Legal Cover" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>Tailored Legal Cover</h3>
                    <p>We'll instantly search and present the best legal insurance plans that match your personal circumstances and budget, ensuring you get the right coverage for peace of mind.</p>
                </div>
            </div>

            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img3.webp') }}" alt="Trusted Experts" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>Trusted Experts Ready</h3>
                    <p>Connect with a vetted, experienced legal insurance provider who will guide you through the process, giving you confidence in your protection against unexpected legal costs.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="inner_sec3">
    <div class="container">
        <p class="heading">Shield Yourself<br class="showDesk"> With Legal Insurance</p>
        <p class="comn_text comn_text--center">Explore comprehensive legal solutions for <strong>criminal, civil, and employment matters</strong>. Learn how legal cover can safeguard your rights and provide expert support when you need it most.</p>

        <div class="inner_sec3_row">
            <div class="inner_sec3_tab-row hideMob">
                <div class="inner_sec3_tab-col active" data-target="#tab_col_1">
                    <p>Criminal Matters</p>
                </div>
                <div class="inner_sec3_tab-col" data-target="#tab_col_2">
                    <p>Civil Matters</p>
                </div>
                <div class="inner_sec3_tab-col" data-target="#tab_col_3">
                    <p>Employment Matters</p>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Criminal Matters</p><span class="icon">+</span>
                </div>
                <div class="inner_sec3_tab_content-box hideMob" id="tab_col_1">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Criminal Matters</h3>
                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-legal-tab1.webp') }}" alt="Criminal Matters Legal Insurance Coverage" width="500" height="450">
                        </div>
                        <p class="inner_sec3_tab_content_tx">Legal insurance provides coverage and assistance for criminal matters, ensuring you have professional representation if you're accused of a crime. This includes legal advice, court appearances, and even bail applications, offering protection when you need it most.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of Criminal Matter Coverage</p>
                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Expert Representation:</strong> Access professional lawyers to guide and defend you.</li>
                            <li><strong>Bail Assistance:</strong> Cover bail applications and related costs.</li>
                            <li><strong>Legal Advice:</strong> Get clear guidance on navigating criminal charges.</li>
                            <li><strong>Court Coverage:</strong> Ensure your legal fees are handled for court appearances.</li>
                            <li><strong>Peace of Mind:</strong> Have the support you need during challenging times.</li>
                        </ul>
                    </div>
                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-legal-tab1.webp') }}" alt="Criminal Matters Legal Insurance Coverage" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Civil Matters</p> <span class="icon">+</span>
                </div>
                <div class="inner_sec3_tab_content-box" id="tab_col_2" style="display: none;">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Civil Matters</h3>
                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-legal-tab3.webp') }}" alt="Civil Matters Legal Insurance Coverage" width="500" height="450">
                        </div>
                        <p class="inner_sec3_tab_content_tx">Civil disputes, such as property disagreements, contracts, or personal injury claims, can be stressful and expensive. Legal insurance ensures you have the resources to protect your interests, covering legal advice and representation for civil cases.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of Civil Matter Coverage</p>
                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Financial Protection:</strong> Avoid costly legal fees in civil disputes.</li>
                            <li><strong>Expert Advocacy:</strong> Lawyers represent you to resolve disputes effectively.</li>
                            <li><strong>Property Protection:</strong> Handle property-related legal issues with ease.</li>
                            <li><strong>Contract Support:</strong> Assistance with contract disputes and enforcement.</li>
                            <li><strong>Resolution Assistance:</strong> Gain the tools to settle civil disagreements fairly.</li>
                        </ul>
                    </div>
                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-legal-tab3.webp') }}" alt="Civil Matters Legal Insurance Coverage" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Employment Matters</p> <span class="icon">+</span>
                </div>
                <div class="inner_sec3_tab_content-box" id="tab_col_3" style="display: none;">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Employment Matters</h3>
                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-legal-tab2.webp') }}" alt="Employment Matters Legal Insurance Coverage" width="500" height="450">
                        </div>
                        <p class="inner_sec3_tab_content_tx">Employment disputes, such as wrongful termination, workplace discrimination, or unpaid wages, are common challenges. Legal insurance provides the representation and support you need to fight for your rights as an employee or employer.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of Employment Matter Coverage</p>
                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Workplace Protection:</strong> Handle wrongful termination, discrimination, or wage disputes.</li>
                            <li><strong>Expert Negotiation:</strong> Professional help to mediate and resolve workplace conflicts.</li>
                            <li><strong>Employment Law Compliance:</strong> Assistance to navigate employment laws.</li>
                            <li><strong>Legal Representation:</strong> Support for EEOC claims and employment courts.</li>
                            <li><strong>Fair Outcomes:</strong> Ensure your rights are upheld during disputes.</li>
                        </ul>
                    </div>
                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-legal-tab2.webp') }}" alt="Employment Matters Legal Insurance Coverage" width="500" height="450">
                    </div>
                </div>
            </div>
        </div>

        <div class="clearall"></div>
        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Legal Insurance Quotes">Get Started Today</a>
        </div>
    </div>
</div>

<div class="why_choose">
    <div class="container">
        <div class="why_choose_left">
            <p class="heading">Why Choose<br class="hideMob"> Go Quote Rocket</p>
            <p class="comn_text">Finding the right legal insurance can feel overwhelming, but we're here to make it simple. At <a href="{{ route('home') }}" alt="Affordable Insurance Quotes">Go Quote Rocket</a>, we connect you with a trusted insurance expert, so you can compare options side by side. Our process is designed to save you time, reduce stress, and help you secure the most reliable and affordable coverage available.</p>
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
                    <p>Compare insurance quotes. Choose the best for you.</p>
                </li>
                <li>
                    <img src="{{ asset('images/why-chose-icn3.png') }}" alt="Save Stress Icon" class="why-chose_icn" width="84" height="92">
                    <h3>Save Stress</h3>
                    <p>Avoid hidden fees and keep your personal information private.</p>
                </li>
                <li>
                    <img src="{{ asset('images/why-chose-icn4.png') }}" alt="Save Smart Icon" class="why-chose_icn" width="84" height="92">
                    <h3>Save Smart</h3>
                    <p>Quick comparisons, explained by a trusted expert.</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="inner_sec4">
    <div class="container">
        <p class="heading">Legal Protection<br class="showDesk"> for Life's Challenges</p>
        <p class="comn_text">Be ready for any legal dispute with insurance that <strong>shields your finances, provides expert representation,<br class="showDesk"> and ensures peace of mind</strong>. Discover how legal cover can safeguard you and your loved ones.</p>

        <div class="inner_sec4_inr">
            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-legal-icon1.png') }}" alt="Financial Protection Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Financial<br> Protection</h3>
                <p>Avoid out-of-pocket legal costs for court proceedings, settlements, and lawyer fees.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-legal-icon2.png') }}" alt="Affordable Premiums Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Affordable<br> Premiums</h3>
                <p>Pay a low monthly premium for high-value coverage.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-legal-icon3.png') }}" alt="Wide Coverage Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Wide<br> Coverage</h3>
                <p>Covers property damage, medical expenses, loss of income, and more.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-legal-icon4.png') }}" alt="Legal Advice Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Legal<br> Advice</h3>
                <p>Access expert legal advice when you need it most.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-legal-icon5.png') }}" alt="Family Peace of Mind Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Family Peace<br> of Mind</h3>
                <p>Protect yourself and your loved ones under one plan.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-legal-icon6.png') }}" alt="Business Disputes Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Business<br> Disputes</h3>
                <p>Some policies include coverage for workplace or small business disputes.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-legal-icon8.png') }}" alt="Easy Claims Process Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Easy<br> Claims Process</h3>
                <p>Submit claims hassle-free to manage legal costs quickly.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-legal-icon9.png') }}" alt="Flexible Plans Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Flexible<br> Plans</h3>
                <p>Choose a plan tailored to your personal or family needs.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-legal-icon10.png') }}" alt="Safeguard Your Future Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Safeguard Your<br> Future</h3>
                <p>Ensure unexpected legal disputes don't impact your financial stability.</p>
            </div>
        </div>

        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Legal Insurance Quotes">Get Started Today</a>
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
                <p class="reviews_text">"I couldn't believe how quickly Go Quote Rocket found me the best insurance options. The whole process was stress-free and saved me so much time."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-1.jpg') }}" alt="Customer Named Sarah" width="100" height="100" class="rev_fc">
                    <p><span>Sarah</span><br> Austin, TX</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Go Quote Rocket's customer service was outstanding. They answered all my questions and helped me choose a plan that worked perfectly for my budget."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-2.jpg') }}" alt="Customer Named Michael" width="100" height="100" class="rev_fc">
                    <p><span>Michael</span><br> Denver, CO</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"I'm so glad I used Go Quote Rocket! They compared multiple options for me and found the best deal in minutes. Highly efficient and reliable."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-3.jpg') }}" alt="Customer Named Jennifer" width="100" height="100" class="rev_fc">
                    <p><span>Jennifer</span><br> Phoenix, AZ</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Rating" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Go Quote Rocket's service was incredibly fast and efficient. They provided me with great options and unbeatable prices. I'm thrilled with the deal I got."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-4.jpg') }}" alt="Customer Named David" width="100" height="100" class="rev_fc">
                    <p><span>David</span><br> Chicago, IL</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Rated" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Finding the right insurance was so easy with Go Quote Rocket. The options were tailored to my needs, and everything was simple and straightforward."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-5.jpg') }}" alt="Customer Named Lisa" width="100" height="100" class="rev_fc">
                    <p><span>Lisa</span><br> Miami, FL</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Excellent service! Go Quote Rocket made it easy to find a great insurance deal. They were professional and very helpful throughout the process."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-6.jpg') }}" alt="Customer Named Robert" width="100" height="100" class="rev_fc">
                    <p><span>Robert</span><br> Los Angeles, CA</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box reviews_box-last">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Go Quote Rocket's system was so easy to use. I quickly found the coverage I needed without any hassle. Fantastic experience!"</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-7.jpg') }}" alt="Customer Named Amanda" width="100" height="100" class="rev_fc">
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
                    <div class="accordion acdn-heading accordion-open" id="hd-one">What is legal insurance?</div>
                    <div class="acdn-content">
                        <p class="acdn-para">Legal insurance is a policy that helps cover legal expenses, such as lawyer fees, court costs, and settlements, for various disputes or proceedings.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">What does legal insurance cover?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">It covers legal representation, court fees, settlements, and defense for claims involving property damage, medical expenses, loss of earnings, and more.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Who needs legal insurance?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Anyone who wants to protect themselves from unexpected legal costs can benefit from legal insurance. It's especially useful for <a href="{{ route('funeral-cover') }}" alt="Funeral Cover Quotes">families and individuals</a> facing financial uncertainty.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">How much does legal insurance cost?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Costs vary depending on the level of coverage and the provider. Comparing quotes can help you find the best option within your budget.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Can legal insurance cover my family?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Yes, many policies offer family coverage, extending legal protection to your spouse and dependents.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Does legal insurance cover business disputes?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Some policies include limited coverage for workplace disputes or <a href="{{ route('business-insurance') }}" alt="Business Insurance Quotes">small business</a> legal matters. Check the policy terms for details.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">How do I claim legal insurance?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Contact your provider and provide documentation of your legal issue to initiate the claims process.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Are pre-existing legal issues covered?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">No, most <a href="{{ route('car-insurance') }}" alt="Car Insurance Policies">insurance policies</a> exclude coverage for disputes or proceedings that began before the policy was taken out.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Can I cancel my legal insurance?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Yes, you can cancel your policy at any time, though cancellation fees or terms may apply.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Do I still need a lawyer if I have legal insurance?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Yes, but legal insurance helps cover the costs of hiring a lawyer, making legal representation more affordable.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blue_strip">
    <div class="blue_strip_cont">
        <h3>Ready to get started?</h3>
        <p>Compare insurance quotes today!</p>
    </div>
    <div class="blue_strip_btn">
        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Legal Insurance Quotes">Get Quote Now</a>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
$(document).ready(function() {
    var phoneErrors = [];
    var termsError = [];

    // US Phone formatting
    $("input[name='phone']").on('input', function() {
        let input = $(this).val().replace(/\D/g, '');
        if (input.length > 10) input = input.substring(0, 10);

        let formatted = '';
        if (input.length > 0) {
            formatted = '(' + input.substring(0, 3);
            if (input.length > 3) {
                formatted += ') ' + input.substring(3, 6);
                if (input.length > 6) {
                    formatted += '-' + input.substring(6, 10);
                }
            }
        }
        $(this).val(formatted);
    });

    // Phone validation
    $("input[name='phone']").on('blur', function() {
        let phoneNumber = $(this).val().replace(/\D/g, '');
        if (phoneNumber.length < 10 && phoneNumber.length > 0) {
            $('#phone_prompt').text('Please enter a valid 10-digit phone number.').show();
            phoneErrors.push('Invalid phone');
        } else {
            $('#phone_prompt').hide();
            phoneErrors = [];
        }
    });

    // Form submission
    $('.apiBtn').on('click', function(event) {
        event.preventDefault();
        var errors = [];
        validateCheckbox();

        $('input.required, select.required').each(function() {
            var input = $(this);
            if (input.val().trim() === '') {
                input.next('.error_message').text(input.attr('data-error-message')).show();
                errors.push(input.attr('data-error-message'));
            } else {
                input.next('.error_message').hide();
            }
        });

        if (errors.length === 0 && phoneErrors.length === 0 && termsError.length === 0) {
            submitLead();
        }
    });

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
            product_type: 'legal_insurance',
            first_name: $("input[name='first_name']").val(),
            last_name: $("input[name='last_name']").val(),
            phone: phoneDigits,
            email: $("input[name='email']").val(),
            employment_status: $("select[name='employment_status']").val(),
            consent: $('#checkbox_terms').is(':checked') ? 1 : 0,
            funnel_id: 'Legal'
        };

        $.ajax({
            url: '{{ route("leads.submit") }}',
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    window.location.href = "{{ route('thank-you') }}";
                } else {
                    $('#loading-indicator').hide();
                    $('#error_handler_overlay').show();
                    $('#error_handler_overlay p').text(response.message || "Unfortunately, we're unable to submit your information at this time.");
                }
            },
            error: function(xhr) {
                $('#loading-indicator').hide();
                let message = "Unfortunately, we're unable to submit your information at this time.";
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    message = xhr.responseJSON.message;
                }
                $('#error_handler_overlay').show();
                $('#error_handler_overlay p').text(message);
            }
        });
    }

    $('#checkbox_terms').on('click', validateCheckbox);

    function validateCheckbox() {
        const checkbox = document.getElementById('checkbox_terms');
        const errorMessage = 'You must agree to our terms to submit your information.';
        if (checkbox.checked) {
            $('#checkbox_error_message').hide();
            termsError = [];
        } else {
            $('#checkbox_error_message').text(errorMessage).show();
            termsError.push(errorMessage);
        }
    }

    $(".inner_sec3_tab-col").click(function() {
        $(".inner_sec3_tab-col").removeClass('active');
        $(this).addClass('active');
        var target = $(this).data("target");
        $(".inner_sec3_tab_content-box").hide();
        $(target).show();
    });

    $('.accdn-hd').click(function() {
        const content = $(this).next('.inner_sec3_tab_content-box');
        const icon = $(this).find('.icon');
        $('.inner_sec3_tab_content-box').not(content).slideUp(500);
        $('.icon').not(icon).text('+');
        content.slideToggle(500);
        icon.text(icon.text() === '+' ? '-' : '+');
    });
});
</script>
@endpush
