@extends('layouts.app')
@section('title', 'Affordable Final Expense Insurance in the USA | Go Quote Rocket')
@section('meta_description', 'Compare final expense insurance quotes to protect your family during difficult times. Find affordable burial insurance plans in the USA with Go Quote Rocket.')
@section('body-class', 'inner_pg funeral_expense')

@push('head')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [{
            "@type": "Question",
            "name": "Why do I need a final expense plan?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Final expense plans are designed to help you plan ahead and reduce the financial burden that funeral costs may present. By having a final expense plan, you ensure your loved ones are not left with unexpected expenses during a difficult time."
            }
        },
        {
            "@type": "Question",
            "name": "Do I have to have a medical examination before I am eligible for a Final Expense Plan?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, most final expense plans do not require a medical examination, making it quick and easy to get covered."
            }
        },
        {
            "@type": "Question",
            "name": "What does a final expense plan cover?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A final expense plan provides a lump sum payout upon your passing. You can also opt for a family plan, which extends coverage to your partner, children, and other family members of your choice."
            }
        },
        {
            "@type": "Question",
            "name": "How much will the policy cost me?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The cost of your final expense plan depends on the level of cover you select, the number of family members included, and factors like the age of extended family members added to your policy."
            }
        },
        {
            "@type": "Question",
            "name": "Can I cover my whole family?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, you can include your partner, children, and extended family members, such as parents or in-laws, for a small additional premium."
            }
        },
        {
            "@type": "Question",
            "name": "How long does final expense cover last?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Final expense cover remains active as long as premiums are paid. Cover for your children may extend until they turn 21, or 25 if they are full-time students or have certain impairments."
            }
        },
        {
            "@type": "Question",
            "name": "Will my family remain covered after my death?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, many insurers offer 12 months of free cover for your family after you pass away. After that, a family member can take over premium payments to continue the coverage."
            }
        },
        {
            "@type": "Question",
            "name": "What happens if I miss a premium payment?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Most insurers offer a grace period of 15 to 30 days for missed payments. During this time, you can make the payment to maintain your coverage."
            }
        },
        {
            "@type": "Question",
            "name": "What is the waiting period for final expense benefits?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Waiting periods typically range from 3 to 12 months for death from natural causes and up to 24 months for death from suicide. Accidental death benefits may be immediate."
            }
        },
        {
            "@type": "Question",
            "name": "Can I decide who will receive the benefit?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, you can nominate a beneficiary to receive the payout. If no beneficiary is nominated, the benefit will be paid to your estate."
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
        <p class="inner_sec1-hdg">Get Up-To $50,000<br class="showDesk"> Final Expense Cover in Minutes</p>
        <p class="inner_sec1_txt">Qualifying claims approved in <strong>under 5 minutes</strong>—secure financial peace<br class="showDesk"> of mind for your loved ones today.</p>

        <div class="inner_sec1-form" id="toForm">
            <form method="POST" name="funeral_api1" id="funeral_form" class="auto_zip">
                @csrf
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
                            <input type="tel" value="" name="phone" placeholder="Phone Number" class="input-fld required" data-error-message="Please enter your phone number." maxlength="14">
                            <div class="error_message text-left" style="display: none;" id="phone_prompt">
                                <span class="phone-prompt-error">Please enter a valid 10-digit US phone number.</span>
                            </div>
                        </div>
                        <div class="form_input_box">
                            <input type="email" name="email" class="input-fld required" placeholder="Email" data-error-message="Please enter your email address.">
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                    </div>

                    <div class="form__input form__input--3">
                        <div class="form_input_box">
                            <select name="age_range" class="input-fld required" data-error-message="Please select your age range.">
                                <option value="" selected>What is your current age?</option>
                                @foreach(config('us.age_ranges') as $value => $label)
                                    <option value="{{ $value }}">{{ $label }}</option>
                                @endforeach
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                        <div class="form_input_box">
                            <select name="employment_status" class="input-fld required" data-error-message="Please select your employment status.">
                                <option value="" selected>Are you currently employed?</option>
                                @foreach(config('us.employment_status') as $value => $label)
                                    <option value="{{ $value }}">{{ $label }}</option>
                                @endforeach
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                        <div class="form_input_box">
                            <select name="income_bracket" class="input-fld required" data-error-message="Please select your monthly income.">
                                <option value="" selected>What is your monthly income?</option>
                                @foreach(config('us.income_brackets') as $value => $label)
                                    <option value="{{ $value }}">{{ $label }}</option>
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
                        <button type="button" class="apiBtn">Get Started Today!</button>
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
        <p class="as-seen__heading">Quotes by America's top providers, including:</p>
    </div>

    <div class="brand__strip__scroller">
        <ul class="scroll__brand__list">
            <li><img src="{{ asset('images/mutual-of-omaha-logo.svg') }}" alt="Mutual of Omaha Final Expense Insurance Logo" class="auto-general_logo"></li>
            <li><img src="{{ asset('images/aig-logo.svg') }}" alt="AIG Final Expense Insurance Logo"></li>
            <li><img src="{{ asset('images/colonial-penn-logo.svg') }}" alt="Colonial Penn Final Expense Insurance Logo" class="dial-direct_logo"></li>
            <li><img src="{{ asset('images/gerber-life-logo.svg') }}" alt="Gerber Life Final Expense Insurance Logo" class="budget_logo"></li>
            <li><img src="{{ asset('images/transamerica-logo.svg') }}" alt="Transamerica Final Expense Insurance Logo"></li>
        </ul>
    </div>
</div>

<div class="inner_sec2">
    <div class="container">
        <p class="heading">How We Make<br> Finding Final Expense Insurance Easy</p>
        <p class="comn_text">We understand that finding the right final expense cover can feel overwhelming. That's why Quote Rocket simplifies<br class="showDesk"> the process for you. In just a few simple steps, we'll connect you with trusted providers, helping you<br class="showDesk"> secure reliable and affordable final expense cover for you and your family, hassle-free.</p>

        <div class="sec2_inr">
            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img1.webp') }}" alt="Guy Using Quote Rocket on Computer for Final Expense Cover" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>One Quick Form</h3>
                    <p>Complete our secure, straightforward form in just 60 seconds. Your information is always protected, and we'll handle the rest to find the best final expense cover options for your needs.</p>
                </div>
            </div>

            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img2.webp') }}" alt="Options Available For Final Expense Cover" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>Tailored Cover Options</h3>
                    <p>We'll instantly search and present personalized final expense plans that fit your budget and unique requirements, ensuring you get the right coverage for your family's peace of mind.</p>
                </div>
            </div>

            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img3.webp') }}" alt="Trusted Final Expense Insurance Providers" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>Trusted Providers Ready</h3>
                    <p>Connect with vetted, experienced final expense insurance providers who will guide you through the process, giving you confidence in your decision and financial security for your loved ones.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="inner_sec3">
    <div class="container">
        <p class="heading">Compare Final Expense Plans<br class="showMob"><br class="showDesk"> & Find The Perfect Fit<br class="showMob"> For Your Family</p>
        <p class="comn_text">Explore tailored final expense options for individuals, families, parents, and extended loved ones.<br class="showDesk"><strong> Protect those who matter most with the right plan</strong>.</p>

        <div class="inner_sec3_row">
            <div class="inner_sec3_tab-row hideMob">
                <div class="inner_sec3_tab-col active" data-target="#tab_col_1">
                    <p>Immediate Personal Cover</p>
                </div>
                <div class="inner_sec3_tab-col" data-target="#tab_col_2">
                    <p>Direct Family Cover</p>
                </div>
                <div class="inner_sec3_tab-col" data-target="#tab_col_3">
                    <p>Parent & In-Law Cover</p>
                </div>
                <div class="inner_sec3_tab-col" data-target="#tab_col_4">
                    <p>Extended Family Cover</p>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Immediate Personal Cover</p><span class="icon">+</span>
                </div>
                <div class="inner_sec3_tab_content-box hideMob" id="tab_col_1">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Immediate Personal Cover</h3>
                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-funeral-tab1.webp') }}" alt="Immediate Personal Cover Final Expense Plan" width="500" height="450">
                        </div>
                        <p class="inner_sec3_tab_content_tx">Immediate Personal Cover is designed for the main policyholder, ensuring that a lump sum is paid out upon their passing. This plan is ideal for individuals looking to secure their own funeral arrangements and alleviate the financial burden on their loved ones. The policy also provides limited cover for stillbirths.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of Immediate Personal Cover</p>
                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Peace of Mind:</strong> Guarantees your funeral expenses are covered.</li>
                            <li><strong>Financial Relief:</strong> Provides a lump sum payout to your beneficiaries.</li>
                            <li><strong>Stillbirth Cover:</strong> Includes cover for one stillborn baby per 12-month period.</li>
                            <li><strong>Affordable Premiums:</strong> Flexible payments tailored to your budget.</li>
                        </ul>
                    </div>
                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-funeral-tab1.webp') }}" alt="Immediate Personal Cover Final Expense Plan" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Direct Family Cover</p> <span class="icon">+</span>
                </div>
                <div class="inner_sec3_tab_content-box" id="tab_col_2" style="display: none;">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Direct Family Cover</h3>
                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-funeral-tab2.webp') }}" alt="Direct Family Cover Final Expense Plan" width="500" height="450">
                        </div>
                        <p class="inner_sec3_tab_content_tx">Direct Family Cover provides comprehensive protection for your immediate family, including your spouse and children. This plan ensures a lump sum payout in the event of their passing, offering financial security during difficult times. It's a perfect choice for those wanting peace of mind for their closest loved ones.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of Direct Family Cover</p>
                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Complete Family Protection:</strong> Covers your spouse and children.</li>
                            <li><strong>Customizable Plans:</strong> Adjust coverage amounts to meet your family's needs.</li>
                            <li><strong>Inclusive Age Bracket:</strong> Covers children up to 20 years old.</li>
                            <li><strong>Cost-Effective:</strong> One plan for multiple family members.</li>
                        </ul>
                    </div>
                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-funeral-tab2.webp') }}" alt="Direct Family Cover Final Expense Plan" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Parent & In-Law Cover</p> <span class="icon">+</span>
                </div>
                <div class="inner_sec3_tab_content-box" id="tab_col_3" style="display: none;">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Parent & In-Law Cover</h3>
                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-funeral-tab3.webp') }}" alt="Parent & In-Law Cover Final Expense Plan" width="500" height="450">
                        </div>
                        <p class="inner_sec3_tab_content_tx">Parent & In-Law Cover extends final expense cover to your parents or in-laws, ensuring a lump sum payout to handle their funeral costs. This option allows you to cover up to four parents on a single policy, giving you the ability to honor and care for your elders.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of Parent & In-Law Cover</p>
                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Family Support:</strong> Includes both your parents and your partner's parents.</li>
                            <li><strong>Flexibility:</strong> Covers up to four parents on one policy.</li>
                            <li><strong>Secure Their Legacy:</strong> Provides financial assistance to honor their memory.</li>
                            <li><strong>Age Inclusive:</strong> Available for parents up to 75 years old.</li>
                        </ul>
                    </div>
                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-funeral-tab3.webp') }}" alt="Parent & In-Law Cover Final Expense Plan" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Extended Family Cover</p> <span class="icon">+</span>
                </div>
                <div class="inner_sec3_tab_content-box" id="tab_col_4" style="display: none;">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Extended Family Cover</h3>
                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-funeral-tab4.jpg') }}" alt="Extended Family Cover Final Expense Plan" width="500" height="450">
                        </div>
                        <p class="inner_sec3_tab_content_tx">Extended Family Cover provides final expense benefits for relatives beyond your immediate family, such as siblings, uncles, or aunts. This ensures that no family member is left unprotected during unforeseen circumstances.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of Extended Family Cover</p>
                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Comprehensive Protection:</strong> Extend coverage to additional family members.</li>
                            <li><strong>Customizable Options:</strong> Choose the coverage amount that works for your family.</li>
                            <li><strong>Peace of Mind:</strong> Avoid financial strain for unexpected losses.</li>
                            <li><strong>Broader Scope:</strong> Ideal for families with close extended relationships.</li>
                        </ul>
                    </div>
                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-funeral-tab4.jpg') }}" alt="Extended Family Cover Final Expense Plan" width="500" height="450">
                    </div>
                </div>
            </div>
        </div>

        <div class="clearall"></div>
        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Final Expense Insurance Quotes">Get Started Today</a>
        </div>
    </div>
</div>

<div class="why_choose">
    <div class="container">
        <div class="why_choose_left">
            <p class="heading">Why Choose<br class="hideMob"> Quote Rocket</p>
            <p class="comn_text">Finding the right final expense cover can feel overwhelming, but we're here to make it simple. At <a href="{{ route('home') }}" alt="Affordable Insurance Options">Quote Rocket</a>, we connect you with multiple authorized providers, so you can compare options side by side. Our process is designed to save you time, reduce stress, and help you secure the most reliable and affordable coverage available.</p>
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
                    <p>Compare final expense cover quotes. Choose the best for you.</p>
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
        <p class="heading">Here's Why You Need<br class="showDesk"> Final Expense Insurance In Your Life</p>
        <p class="comn_text">Final expense insurance <strong>provides financial security for your loved ones</strong>, ensuring they are not burdened by<br class="showDesk"> unexpected expenses during a difficult time. Here's what you can expect:</p>

        <div class="inner_sec4_inr">
            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-funeral-icon1.png') }}" alt="Final Expense Cover Payout Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Pay-outs of<br> Up to $50,000</h3>
                <p>Policies offer pay-outs ranging from $5,000 to $50,000 per member, giving you the flexibility to choose the level of coverage that suits your needs.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-funeral-icon2.png') }}" alt="Hassle Free Claims Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Hassle-Free<br> Claims</h3>
                <p>Enjoy a quick and easy claims process, with qualifying claims approved in under 5 minutes for added convenience and peace of mind.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-funeral-icon3.png') }}" alt="Fixed Monthly Premiums Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Fixed<br> Premiums</h3>
                <p>No surprises—your premiums are fixed and guaranteed not to increase for the first 12 months of your policy.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-funeral-icon4.png') }}" alt="Final Expense Cover For Extended Family Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Cover for<br> Extended Family</h3>
                <p>Protect your loved ones with a policy that allows you to insure up to 16 family members under one plan, offering comprehensive support for your family.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-funeral-icon5.png') }}" alt="Enhanced Policy Benefits Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Enhanced<br> Policy Benefits</h3>
                <p>Get additional benefits such as cover for Headstone Memorials, Groceries, and Repatriation Services for loved ones.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-funeral-icon6.png') }}" alt="No Long Waiting Periods For Funds Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>No Long<br> Waiting Periods</h3>
                <p>Experience no waiting periods for accidental death and a reduced, 6-month waiting period for natural deaths.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-funeral-icon7.png') }}" alt="Affordable Month Premium Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Affordable<br> Monthly Premiums</h3>
                <p>Plans are designed to suit any budget, ensuring you can provide essential cover for your family without financial strain.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-funeral-icon8.png') }}" alt="Peace of Mind Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Peace of<br> Mind</h3>
                <p>Knowing your loved ones are financially protected allows you to focus on what matters most during life's challenging moments.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-funeral-icon9.png') }}" alt="Flexible Payment Plans Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Flexible<br> Plans</h3>
                <p>Choose from a range of coverage options tailored to meet your family's unique needs, with the ability to adjust as circumstances change.</p>
            </div>
        </div>

        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Final Expense Quotes">Get Started Today</a>
        </div>
    </div>
</div>

<div class="sec3">
    <div class="container">
        <p class="heading">Over 500,000<br class="showMob"> Americans Trust Us.</p>
        <div class="feefo_box">
            <img src="{{ asset('images/feefo-logo.png') }}" alt="" class="feefo_log" width="366" height="84">
            <div class="feefo_review">
                <img src="{{ asset('images/star.png') }}" alt="" width="228" height="40">
                <p>4.8/5 Based On 2000+ reviews</p>
            </div>
        </div>
    </div>

    <div class="reviews">
        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"I couldn't believe how quickly Quote Rocket found me the best insurance options. The whole process was stress-free and saved me so much time."</p>
                <div class="reviews_name"><img src="{{ asset('images/jennifer.jpg') }}" alt="Customer Named Jennifer" width="100" height="100" class="rev_fc">
                    <p><span>Jennifer</span><br> Austin, TX</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Quote Rocket's customer service was outstanding. They answered all my questions and helped me choose a plan that worked perfectly for my budget."</p>
                <div class="reviews_name"><img src="{{ asset('images/marcus.jpg') }}" alt="Customer Named Marcus" width="100" height="100" class="rev_fc">
                    <p><span>Marcus</span><br> Denver, CO</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"I'm so glad I used Quote Rocket! They compared multiple options for me and found the best deal in minutes. Highly efficient and reliable."</p>
                <div class="reviews_name"><img src="{{ asset('images/mike.jpg') }}" alt="Customer Named Mike" width="100" height="100" class="rev_fc">
                    <p><span>Mike</span><br> Phoenix, AZ</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Rating" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Quote Rocket's service was incredibly fast and efficient. They provided me with great options and unbeatable prices. I'm thrilled with the deal I got and highly recommend them."</p>
                <div class="reviews_name"><img src="{{ asset('images/david.jpg') }}" alt="Customer Named David" width="100" height="100" class="rev_fc">
                    <p><span>David</span><br> Chicago, IL</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Rated" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Finding the right insurance was so easy with Quote Rocket. The options were tailored to my needs, and everything was simple and straightforward."</p>
                <div class="reviews_name"><img src="{{ asset('images/sarah.jpg') }}" alt="Customer Named Sarah" width="100" height="100" class="rev_fc">
                    <p><span>Sarah</span><br> Miami, FL</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Excellent service! Quote Rocket made it easy to find a great insurance deal. They were professional and very helpful throughout the process."</p>
                <div class="reviews_name"><img src="{{ asset('images/james.jpg') }}" alt="Customer Named James" width="100" height="100" class="rev_fc">
                    <p><span>James</span><br> Los Angeles, CA</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Quote Rocket was a lifesaver! They helped me find insurance quickly with a smooth, convenient process. Highly recommended."</p>
                <div class="reviews_name"><img src="{{ asset('images/ashley.jpg') }}" alt="Customer Named Ashley" width="100" height="100" class="rev_fc">
                    <p><span>Ashley</span><br> Seattle, WA</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box reviews_box-last">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Quote Rocket's system was so easy to use. I quickly found the coverage I needed without any hassle. Fantastic experience!"</p>
                <div class="reviews_name"><img src="{{ asset('images/emily.jpg') }}" alt="Customer Named Emily" width="100" height="100" class="rev_fc">
                    <p><span>Emily</span><br> New York, NY</p>
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
                    <div class="accordion acdn-heading accordion-open" id="hd-one">Why do I need a final expense plan?</div>
                    <div class="acdn-content">
                        <p class="acdn-para">Final expense plans are designed to help you plan ahead and reduce the <a href="{{ route('products.show', 'debt-relief') }}" alt="Debt Relief Options">financial burden</a> that funeral costs may present. By having a final expense plan, you ensure your loved ones are not left with unexpected expenses during a difficult time.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Do I have to have a medical examination before I am eligible for a Final Expense Plan?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">No, most final expense plans do not require a <a href="{{ route('products.show', 'medical-insurance') }}" alt="Medical Insurance Quotes">medical examination</a>, making it quick and easy to get covered.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">What does a final expense plan cover?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">A final expense plan provides a lump sum payout upon your passing. You can also opt for a family plan, which extends coverage to your partner, children, and other family members of your choice.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">How much will the policy cost me?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">The cost of your final expense plan depends on the level of cover you select, the number of family members included, and factors like the age of extended family members added to your policy.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Can I cover my whole family?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Yes, you can include your partner, children, and extended family members, such as parents or in-laws, for a small additional premium.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">How long does final expense cover last?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Final expense cover remains active as long as premiums are paid. Cover for your children may extend until they turn 21, or 25 if they are full-time students or have certain impairments.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Will my family remain covered after my death?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Yes, many insurers offer 12 months of free cover for your family after you pass away. After that, a family member can take over premium payments to continue the coverage.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">What happens if I miss a premium payment?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Most insurers offer a grace period of 15 to 30 days for missed payments. During this time, you can make the payment to maintain your coverage.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">What is the waiting period for final expense benefits?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Waiting periods typically range from 3 to 12 months for death from natural causes and up to 24 months for death from suicide. Accidental death benefits may be immediate.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Can I decide who will receive the benefit?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Yes, you can nominate a beneficiary to receive the payout. If no beneficiary is nominated, the benefit will be paid to your estate.</p>
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
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Final Expense Insurance Quotes">Get Quote Now</a>
        </div>
    </div>
</div>

<div id="error_handler_overlay" style="display: none;">
    <div class="error_handler_body"><a href="javascript:void(0);" id="error_handler_overlay_close">X</a>
        <p>Lead was detected as being a duplicate.</p>
    </div>
</div>
<p id="loading-indicator" style="display:none">Submitting...</p>
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
        let phoneDigits = $(this).val().replace(/\D/g, '');
        if (phoneDigits.length < 10 && phoneDigits.length > 0) {
            $('#phone_prompt').show();
            phoneErrors.push('Invalid phone');
        } else {
            $('#phone_prompt').hide();
            phoneErrors = [];
        }
    });

    // Terms checkbox validation
    function validateCheckbox() {
        const checkbox = document.getElementById('checkbox_terms');
        if (checkbox.checked) {
            $('#checkbox_error_message').hide();
            termsError = [];
        } else {
            $('#checkbox_error_message').show();
            termsError.push('Terms required');
        }
    }
    $('#checkbox_terms').on('click', validateCheckbox);

    // Clear errors on input
    $("input[name='first_name'], input[name='last_name'], input[name='email']").on('keyup', function() {
        $(this).next('.error_message').hide();
    });
    $("select[name='age_range'], select[name='employment_status'], select[name='income_bracket']").on('change', function() {
        $(this).next('.error_message').hide();
    });

    // Form submission
    $('.apiBtn').on('click', function() {
        var errors = [];
        validateCheckbox();

        $('input[name=phone], input[name=email], input[name=first_name], input[name=last_name], select[name=age_range], select[name=income_bracket], select[name=employment_status]').each(function() {
            var input = $(this);
            if (input.hasClass('required') && input.val().trim() == '') {
                input.next('.error_message').show().text(input.attr('data-error-message'));
                errors.push(input.attr('data-error-message'));
            }
        });

        if (errors.length == 0 && phoneErrors.length == 0 && termsError.length == 0) {
            submitLead();
        }
    });

    function submitLead() {
        $('#loading-indicator').show();
        let phoneDigits = $("input[name='phone']").val().replace(/\D/g, '');

        let formData = {
            _token: $('meta[name="csrf-token"]').attr('content'),
            product_type: 'funeral_cover',
            first_name: $("input[name='first_name']").val(),
            last_name: $("input[name='last_name']").val(),
            phone: phoneDigits,
            email: $("input[name='email']").val(),
            age_range: $("select[name='age_range']").val(),
            employment_status: $("select[name='employment_status']").val(),
            income_bracket: $("select[name='income_bracket']").val(),
            consent: $('#checkbox_terms').is(':checked') ? 1 : 0,
            funnel_id: 'Funeral'
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
                    $('#error_handler_overlay p').text(response.message || "Please check the information you entered and try again.");
                }
            },
            error: function(xhr) {
                $('#loading-indicator').hide();
                $('#error_handler_overlay').show();
                $('#error_handler_overlay p').text("Unfortunately, we're unable to submit your information at this time. Please try again.");
            }
        });
    }

    // Error handler close
    $('#error_handler_overlay_close').on('click', function() {
        $('#error_handler_overlay').hide();
    });

    // Tab functionality
    $(".inner_sec3_tab-col").click(function() {
        $(".inner_sec3_tab-col").removeClass('active');
        $(this).addClass('active');
        var target = $(this).data("target");
        $(".inner_sec3_tab_content-box").hide();
        $(target).show();
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
</script>
@endpush
