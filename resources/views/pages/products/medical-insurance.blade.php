@extends('layouts.app')

@section('title', 'Compare Medical Insurance Plans in the USA | Go Quote Rocket')
@section('description', 'Find affordable medical insurance options with Go Quote Rocket. Compare quotes from top providers and secure the best health coverage for you and your family.')
@section('body-class', 'inner_pg medical_insurance')

@push('preload')
<link rel="preload" href="{{ asset('images/inner-sec1-medical-insur.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img1.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img2.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img3.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-medical-tab1.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-medical-tab2.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-medical-tab3.webp') }}" type="image/webp" as="image" />
@endpush

@push('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [{
            "@type": "Question",
            "name": "What's the cheapest medical insurance in the USA?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The cost of medical insurance in the USA varies based on factors like your age, health, location, and the coverage you need. To find the most affordable plan that suits your requirements, compare multiple quotes to ensure you get the best value for your money."
            }
        },
        {
            "@type": "Question",
            "name": "Why do you need medical insurance?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Medical insurance provides financial protection against unexpected healthcare costs. It ensures you can access quality medical care when needed without worrying about high out-of-pocket expenses. It also offers peace of mind for you and your family."
            }
        },
        {
            "@type": "Question",
            "name": "If I choose a quote, does that mean I'm making a commitment?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, selecting a quote does not mean you're making a commitment. It's simply a way to explore your insurance options and get more details. You're only committed once you agree to and sign a policy with the provider."
            }
        },
        {
            "@type": "Question",
            "name": "Can I insure others like family?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, most medical insurance plans allow you to include family members, such as your spouse, children, or dependents, under the same policy. This often provides comprehensive coverage at a more affordable combined rate."
            }
        },
        {
            "@type": "Question",
            "name": "Is it true that older people typically pay more? Why?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, older individuals often pay higher premiums because they are statistically more likely to need medical care. This increased risk leads insurers to adjust rates accordingly."
            }
        },
        {
            "@type": "Question",
            "name": "Can I change my medical insurance plan later?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, you can usually switch plans during the annual Open Enrollment period or if you qualify for a Special Enrollment Period due to life events like marriage, birth of a child, or job loss."
            }
        },
        {
            "@type": "Question",
            "name": "What does it cost to use Go Quote Rocket?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Using Go Quote Rocket is completely free. We help you compare quotes and find the best medical insurance options without any cost to you."
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
        <p class="inner_sec1-hdg">Get Free Medical Insurance<br class="showDesk"> Quotes in <em>1 Minute!</em></p>
        <p class="inner_sec1_txt">Get comprehensive coverage including doctor visits, prescriptions, and<br class="hideMob"> specialists for <strong>affordable monthly premiums.</strong></p>

        <div class="inner_sec1-form" id="toForm">
            <form method="POST" name="health_api1" id="healthForm">
                @csrf
                <input type="hidden" name="product_type" value="medical_insurance">
                <input type="hidden" name="funnel_id" value="Health">

                <div class="form__field">
                    <div class="form__input form__input--3">
                        <div class="form_input_box">
                            <input type="text" name="first_name" placeholder="First Name" class="input-fld required" data-error-message="Please enter your first name.">
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                        <div class="form_input_box">
                            <input type="text" name="last_name" placeholder="Last Name" class="input-fld required" data-error-message="Please enter your last name.">
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                        <div class="form_input_box">
                            <input type="tel" name="phone" placeholder="Phone Number" class="input-fld required" data-error-message="Please enter your phone number." maxlength="14">
                            <div class="error_message text-left" style="display:none" id="phone_prompt"></div>
                        </div>
                    </div>

                    <div class="form__input form__input--3">
                        <div class="form_input_box">
                            <input type="email" name="email" class="input-fld required" placeholder="Email" data-error-message="Please enter your email address.">
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                        <div class="form_input_box">
                            <select name="age_range" class="input-fld required" data-error-message="Please select your age range.">
                                <option value="" selected>What is your current age?</option>
                                @foreach(config('us.age_ranges') as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                        <div class="form_input_box">
                            <select name="employment_status" class="input-fld required" data-error-message="Please select your employment status.">
                                <option value="" selected>What is your employment status?</option>
                                <option value="employed">Employed</option>
                                <option value="self-employed">Self-Employed</option>
                                <option value="retired">Retired</option>
                                <option value="student">Student</option>
                                <option value="stay-at-home">Stay-At-Home Parent</option>
                                <option value="unemployed">Not Currently Working</option>
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
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Medical Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Medical Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Medical Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Medical Insurance Provider" class="provider_logo"></li>
            </ul>
            <ul class="scroll__brand__list">
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Medical Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Medical Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Medical Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Medical Insurance Provider" class="provider_logo"></li>
            </ul>
        </div>
    </div>
</div>

<div class="inner_sec2">
    <div class="container">
        <p class="heading">How We Make<br class="showDesk"> Finding Medical Insurance Easy</p>
        <p class="comn_text comn_text--center">We know getting medical insurance quotes can feel overwhelming. That's why <a href="{{ route('home') }}" alt="USA Insurance Quotes Affordable">Go Quote Rocket</a> simplifies the process for you. In just a few steps, we'll connect you with top-rated insurers, helping you secure the most reliable and affordable medical insurance, hassle-free.</p>

        <div class="sec2_inr">
            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img1.webp') }}" alt="Guy On Computer Using Go Quote Rocket" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>One Quick Form</h3>
                    <p>Fill out our secure, straightforward form in just 60 seconds. Your information is always protected, and we do the hard work from there.</p>
                </div>
            </div>

            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img2.webp') }}" alt="Tailored Insurance Options" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>Tailored Insurance Options</h3>
                    <p>We'll instantly search and present the best medical insurance plans that fit your personal needs and budget, ensuring you find the perfect match.</p>
                </div>
            </div>

            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img3.webp') }}" alt="Trusted Medical Insurance Expert" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>Trusted Experts Ready</h3>
                    <p>Connect with a vetted, experienced insurance partner who will guide you through the process, giving you peace of mind and confidence in your coverage.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="inner_sec3">
    <div class="container">
        <p class="heading">Compare & Save On<br class="hideMob"> All<br class="showMob"> Types Of Medical Insurance</p>
        <p class="comn_text">Explore the <strong>best medical insurance</strong> options available in the USA<br class="hideMob"> and find the right fit for your health, family, and budget.</p>

        <div class="inner_sec3_row">
            <div class="inner_sec3_tab-row hideMob">
                <div class="inner_sec3_tab-col active" data-target="#tab_col_1">
                    <p>Comprehensive Coverage</p>
                </div>
                <div class="inner_sec3_tab-col" data-target="#tab_col_2">
                    <p>HMO Plans</p>
                </div>
                <div class="inner_sec3_tab-col" data-target="#tab_col_3">
                    <p>PPO Plans</p>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Comprehensive Coverage</p><span class="icon">+</span>
                </div>
                <div class="inner_sec3_tab_content-box hideMob" id="tab_col_1">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Comprehensive Coverage</h3>
                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-medical-tab1.webp') }}" alt="Comprehensive Medical Insurance" width="500" height="450">
                        </div>
                        <p class="inner_sec3_tab_content_tx">Comprehensive medical insurance provides the highest level of coverage, ensuring you're prepared for both routine and unexpected healthcare expenses. In the USA, where medical costs can quickly add up, this plan includes benefits for hospital stays, specialist visits, prescription medications, and more. With comprehensive coverage, you can focus on your health without worrying about financial strain. It's the ultimate solution for those seeking complete peace of mind.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of Comprehensive Medical Insurance</p>
                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Full Coverage:</strong> Includes in-hospital care, specialist consultations, and chronic illness treatment.</li>
                            <li><strong>Financial Protection:</strong> Reduces out-of-pocket expenses for costly medical treatments.</li>
                            <li><strong>Wellness Support:</strong> Often includes preventative care and wellness benefits, helping you stay healthy year-round.</li>
                        </ul>
                    </div>
                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-medical-tab1.webp') }}" alt="Comprehensive Medical Insurance" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>HMO Plans</p> <span class="icon">+</span>
                </div>
                <div class="inner_sec3_tab_content-box" id="tab_col_2" style="display: none;">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">HMO Plans</h3>
                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-medical-tab2.webp') }}" alt="HMO Insurance Plans" width="500" height="450">
                        </div>
                        <p class="inner_sec3_tab_content_tx">A Health Maintenance Organization (HMO) plan offers comprehensive healthcare through a network of doctors and hospitals. You'll choose a primary care physician (PCP) who coordinates your care and provides referrals to specialists when needed. HMO plans typically have lower premiums and out-of-pocket costs, making them an excellent choice for individuals and families seeking affordable, coordinated healthcare.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of HMO Plans</p>
                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Lower Costs:</strong> Generally have lower premiums and out-of-pocket expenses.</li>
                            <li><strong>Coordinated Care:</strong> Your PCP manages your healthcare journey.</li>
                            <li><strong>Preventive Focus:</strong> Emphasis on preventive care and wellness programs.</li>
                            <li><strong>No Claim Forms:</strong> Simplified billing with network providers.</li>
                        </ul>
                    </div>
                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-medical-tab2.webp') }}" alt="HMO Insurance Plans" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>PPO Plans</p> <span class="icon">+</span>
                </div>
                <div class="inner_sec3_tab_content-box" id="tab_col_3" style="display: none;">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">PPO Plans</h3>
                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-medical-tab3.webp') }}" alt="PPO Insurance Plans" width="500" height="450">
                        </div>
                        <p class="inner_sec3_tab_content_tx">A Preferred Provider Organization (PPO) plan offers more flexibility in choosing healthcare providers. You can see specialists without a referral and receive care from out-of-network providers, though at a higher cost. PPO plans are ideal for those who want the freedom to manage their own healthcare decisions and access to a broader network of doctors and specialists.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of PPO Plans</p>
                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Provider Flexibility:</strong> See any doctor or specialist without referrals.</li>
                            <li><strong>Out-of-Network Coverage:</strong> Get care from non-network providers with partial coverage.</li>
                            <li><strong>No PCP Required:</strong> Manage your own healthcare without a primary care coordinator.</li>
                            <li><strong>Nationwide Coverage:</strong> Access care while traveling or living in different states.</li>
                        </ul>
                    </div>
                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-medical-tab3.webp') }}" alt="PPO Insurance Plans" width="500" height="450">
                    </div>
                </div>
            </div>
        </div>

        <div class="clearall"></div>
        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Medical Insurance Quotes">Get Started Today</a>
        </div>
    </div>
</div>

<div class="why_choose">
    <div class="container">
        <div class="why_choose_left">
            <p class="heading">Why Choose<br class="hideMob"> Go Quote Rocket</p>
            <p class="comn_text">Finding the right medical insurance can feel overwhelming, but we're here to make it simple. At <a href="{{ route('home') }}" alt="Affordable Insurance Quotes">Go Quote Rocket</a>, we connect you with an insurance expert who can guide you through the process. You'll be able to make the right choice for your needs and budget.</p>
        </div>

        <div class="why_choose_right">
            <ul class="why_choose_lst">
                <li>
                    <img src="{{ asset('images/why-chose-icn1.png') }}" alt="Save Time Icon" class="why-chose_icn" width="84" height="92">
                    <h3>Save Time</h3>
                    <p>Find all the prices and benefits you need in 1 minute.</p>
                </li>
                <li>
                    <img src="{{ asset('images/why-chose-icn2.png') }}" alt="Save Money" class="why-chose_icn" width="84" height="92">
                    <h3>Save Money</h3>
                    <p>Compare insurance quotes. Choose the best for you.</p>
                </li>
                <li>
                    <img src="{{ asset('images/why-chose-icn3.png') }}" alt="Save Stress" class="why-chose_icn" width="84" height="92">
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
        <p class="heading">Get The Most From<br class="showDesk"> Medical Insurance In The USA</p>
        <p class="comn_text comn_text--center">Medical insurance empowers you to manage the increasing costs of healthcare, giving you access to <strong>quality hospitals, expert specialists, and vital treatments</strong> when you need them most. Protect your health, your family, and your finances with comprehensive coverage designed for peace of mind and security.</p>

        <div class="inner_sec4_inr">
            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-medical-icon1.png') }}" alt="Affordable Medical Insurance Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Affordability</h3>
                <p>Find quality healthcare coverage at competitive rates, with plans designed to fit various budgets and financial situations.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-medical-icon2.png') }}" alt="Comprehensive Insurance Coverage Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Wide Ranging Coverage</h3>
                <p>From doctor visits and prescriptions to hospital stays and preventive care, these plans cover a wide range of healthcare needs.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-medical-icon3.png') }}" alt="Flexible Medical Insurance Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Flexible Options</h3>
                <p>Choose a plan tailored to your unique healthcare requirements and budget, ensuring the perfect balance between cost and coverage.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-medical-icon4.png') }}" alt="Prescription Coverage Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Prescription Coverage</h3>
                <p>Get financial relief with coverage for prescription medications, helping manage the cost of essential treatments and maintenance drugs.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-medical-icon5.png') }}" alt="Easy Access To Care Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Easy Access to Care</h3>
                <p>Access a network of healthcare providers for faster, more reliable treatment when you need it most.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-medical-icon6.png') }}" alt="Wellness Benefit Insurance Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Wellness Benefits</h3>
                <p>Take advantage of health screenings, fitness perks, and preventative care programs designed to support healthier, happier living.</p>
            </div>
        </div>

        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Medical Insurance Quotes">Get Started Today</a>
        </div>
    </div>
</div>

<div class="sec3">
    <div class="container">
        <p class="heading">Over 500,000<br class="showMob"> Americans Trust Us.</p>
        <div class="feefo_box">
            <img src="{{ asset('images/feefo-logo.png') }}" alt="Feefo Reviews" class="feefo_log" width="366" height="84">
            <div class="feefo_review">
                <img src="{{ asset('images/star.png') }}" alt="5 Star Reviews" width="228" height="40">
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
                    <div class="accordion acdn-heading accordion-open" id="hd-one">What's the cheapest medical insurance in the USA?</div>
                    <div class="acdn-content">
                        <p class="acdn-para">The cost of medical insurance in the USA varies based on factors like your age, health, location, and the coverage you need. To find the most affordable plan that suits your requirements, compare multiple quotes to ensure you get the best value for your money.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Why do you need medical insurance?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Medical insurance provides <a href="{{ route('personal-loans') }}" alt="Personal Loan Quotes">financial protection</a> against unexpected healthcare costs. It ensures you can access quality medical care when needed without worrying about high out-of-pocket expenses. It also offers peace of mind for you and your family.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">If I choose a quote, does that mean I'm making a commitment?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">No, selecting a quote does not mean you're making a commitment. It's simply a way to explore your <a href="{{ route('business-insurance') }}" alt="Business Insurance Quotes">insurance options</a> and get more details. You're only committed once you agree to and sign a policy with the provider.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Can I insure others like family?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Yes, most medical insurance plans allow you to include <a href="{{ route('funeral-cover') }}" alt="Funeral Cover Quotes">family members</a>, such as your spouse, children, or dependents, under the same policy. This often provides comprehensive coverage at a more affordable combined rate.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Is it true that older people typically pay more? Why?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Yes, older individuals often pay higher premiums because they are statistically more likely to need medical care. This increased risk leads insurers to adjust rates accordingly.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Can I change my medical insurance plan later?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Yes, you can usually switch plans during the annual Open Enrollment period or if you qualify for a Special Enrollment Period due to life events like marriage, birth of a child, or job loss.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">What does it cost to use Go Quote Rocket?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Using Go Quote Rocket is completely free. We help you compare quotes and find the best medical insurance options without any cost to you.</p>
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
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Medical Insurance Quote">Get Quote Now</a>
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

        // Validate required fields
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
            product_type: 'medical_insurance',
            first_name: $("input[name='first_name']").val(),
            last_name: $("input[name='last_name']").val(),
            phone: phoneDigits,
            email: $("input[name='email']").val(),
            age_range: $("select[name='age_range']").val(),
            employment_status: $("select[name='employment_status']").val(),
            consent: $('#checkbox_terms').is(':checked') ? 1 : 0,
            funnel_id: 'Health'
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

    // Checkbox validation
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

    // Tab functionality
    $(".inner_sec3_tab-col").click(function() {
        $(".inner_sec3_tab-col").removeClass('active');
        $(this).addClass('active');

        var target = $(this).data("target");
        var content = $(target);

        $(".inner_sec3_tab_content-box").hide();
        content.show();
    });

    // Mobile accordion
    $('.accdn-hd').click(function() {
        const content = $(this).next('.inner_sec3_tab_content-box');
        const icon = $(this).find('.icon');

        $('.inner_sec3_tab_content-box').not(content).slideUp(500);
        $('.icon').not(icon).text('+');

        content.slideToggle(500);
        icon.text(icon.text() === '+' ? '-' : '+');

        setTimeout(function() {
            $('html, body').animate({
                scrollTop: $(this).offset().top - 75
            }, 1000);
        }.bind(this), 700);
    });
});
</script>
@endpush
