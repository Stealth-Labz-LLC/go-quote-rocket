@extends('layouts.app')

@section('title', 'Compare Life Insurance Plans in the USA | Go Quote Rocket')
@section('description', 'Protect your loved ones with affordable life insurance. Compare quotes and find the best coverage in the USA with Go Quote Rocket.')
@section('body-class', 'inner_pg life_insurance')

@push('preload')
<link rel="preload" href="{{ asset('images/inner-sec1-life-insur.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img1.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img2.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img3.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-life-tab1.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-life-tab2.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-life-tab3.webp') }}" type="image/webp" as="image" />
@endpush

@push('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [{
            "@type": "Question",
            "name": "What is life insurance?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Life insurance protects those who depend on you, such as your spouse, children, and possibly your parents. If you die prematurely, life insurance can settle your outstanding debt and provide ongoing income to your dependents until they are financially secure. It can also cover everyday expenses, legal fees, medical bills, and funeral costs if family savings are insufficient."
            }
        },
        {
            "@type": "Question",
            "name": "Why do I need life insurance?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Life insurance provides financial security for your family in the event of your death. It ensures they can cover basic needs, future expenses, funeral costs, or outstanding debts like a mortgage."
            }
        },
        {
            "@type": "Question",
            "name": "How much life insurance is enough?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Life insurance should replace your income-earning potential and cover your financial liabilities. Calculate by multiplying your gross annual income by the years until retirement, adding debt liabilities, and subtracting existing coverage."
            }
        },
        {
            "@type": "Question",
            "name": "What is a beneficiary?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A beneficiary is the person nominated to receive the payout from your life insurance policy in the event of your death."
            }
        },
        {
            "@type": "Question",
            "name": "Who should be my beneficiary?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "You might choose your spouse, children, or multiple beneficiaries. Review your plan periodically to align it with life changes."
            }
        },
        {
            "@type": "Question",
            "name": "When does my coverage begin?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Your coverage begins once your policy is approved and your first premium is paid. Some insurers offer temporary conditional coverage during the application process."
            }
        },
        {
            "@type": "Question",
            "name": "Do I require a medical exam to qualify for a life insurance policy?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Many insurers offer no-exam life insurance policies. However, policies requiring a medical exam often have lower premiums and higher coverage amounts."
            }
        },
        {
            "@type": "Question",
            "name": "What happens if I can't afford my premium anymore?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Failing to pay a premium may result in a lapse in coverage for that month. Contact your insurer to make arrangements, as multiple unpaid premiums can cause the policy to lapse."
            }
        },
        {
            "@type": "Question",
            "name": "How is my life insurance premium calculated?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Premiums are based on your risk profile, including age, gender, health, and lifestyle. Younger individuals and women generally pay lower premiums, while high-risk activities or pre-existing conditions may increase costs."
            }
        },
        {
            "@type": "Question",
            "name": "What constitutes a high-risk client for an insurance company?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "High-risk clients include smokers, individuals with hazardous jobs or hobbies, those with certain health conditions, or a history of alcohol or drug dependency. Transparency about your health and lifestyle is crucial when applying."
            }
        }
    ]
}
</script>
@endpush

@section('content')
<div class="inner_sec1" id="choosePack">
    <div class="container">
        <p class="inner_sec1-rat-txt"><img src="{{ asset('images/sec1-star.png') }}" alt="Star Rating" width="148" height="26"> <span>4.8 stars</span> 2,000+ reviews</p>
        <p class="inner_sec1-hdg">Get Life Insurance Quotes in<br class="showDesk"> 30 Seconds or Less!</p>
        <p class="inner_sec1_txt">Compare plans and <strong>save up-to 35%</strong> on your monthly premium—protect<br class="showDesk"> your loved ones with affordable, tailored coverage today.</p>

        <div class="inner_sec1-form" id="toForm">
            <form method="POST" name="life_api1" id="lifeForm">
                @csrf
                <input type="hidden" name="product_type" value="life_insurance">
                <input type="hidden" name="funnel_id" value="Life">

                <div class="form__field">
                    <div class="form__input form__input--2">
                        <div>
                            <input type="text" name="first_name" placeholder="First Name" class="input-fld required" data-error-message="Please enter your first name.">
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                        <div>
                            <input type="text" name="last_name" placeholder="Last Name" class="input-fld required" data-error-message="Please enter your last name.">
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                    </div>

                    <div class="form__input form__input--2">
                        <div>
                            <input type="tel" name="phone" placeholder="Phone Number" class="input-fld required" data-error-message="Please enter your phone number." maxlength="14">
                            <div class="error_message text-left" style="display:none" id="phone_prompt"></div>
                        </div>
                        <div>
                            <input type="email" name="email" class="input-fld required" placeholder="Email" data-error-message="Please enter your email address.">
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                    </div>

                    <div class="form__input form__input--3">
                        <div>
                            <select name="age_range" class="input-fld required" data-error-message="Please select your age range.">
                                <option value="" selected>What is your current age?</option>
                                @foreach(config('us.age_ranges') as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>

                        <div>
                            <select name="employment_status" class="input-fld required" data-error-message="Please select your employment status.">
                                <option value="" selected>Are you currently employed?</option>
                                <option value="employed">Yes</option>
                                <option value="unemployed">No</option>
                                <option value="self-employed">Self-Employed</option>
                                <option value="retired">Retired</option>
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>

                        <div>
                            <select name="income_bracket" class="input-fld required" data-error-message="Please select your annual income.">
                                <option value="" selected>What is your annual income?</option>
                                @foreach(config('us.income_brackets') as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                    </div>
                </div>

                <div class="form_bottom">
                    <ul class="form_lst">
                        <li><img src="{{ asset('images/secure.svg') }}" alt="100% Secure form Icon"> 100% SECURE FORM</li>
                        <li><img src="{{ asset('images/heart.svg') }}" alt="No Commitment Required Icon"> NO COMMITMENT REQUIRED</li>
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
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Life Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Life Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Life Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Life Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Life Insurance Provider" class="provider_logo"></li>
            </ul>
            <ul class="scroll__brand__list">
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Life Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Life Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Life Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Life Insurance Provider" class="provider_logo"></li>
                <li><img src="{{ asset('images/provider-placeholder.svg') }}" alt="Life Insurance Provider" class="provider_logo"></li>
            </ul>
        </div>
    </div>
</div>

<div class="inner_sec2">
    <div class="container">
        <p class="heading">How We Make<br> Finding Life Insurance Easy</p>
        <p class="comn_text">We understand that choosing the right life insurance can feel overwhelming. That's why Go Quote Rocket simplifies<br class="showDesk"> the process, guiding you every step of the way. With just a few clicks, we'll connect you to trusted providers,<br class="showDesk"> helping you secure affordable, reliable coverage to protect your loved ones.</p>

        <div class="sec2_inr">
            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img1.webp') }}" alt="Quick Form" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>One Quick Form</h3>
                    <p>Fill out our secure, straightforward form in just 30 seconds. Your information is always protected, and we'll handle the rest to find the best life insurance options for your needs.</p>
                </div>
            </div>

            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img2.webp') }}" alt="Tailored Options" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>Tailored Insurance Options</h3>
                    <p>We'll instantly match you with personalized life insurance plans that align with your budget and unique circumstances. Whether you're looking for comprehensive coverage or a specific benefit, we ensure you get the right plan.</p>
                </div>
            </div>

            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img3.webp') }}" alt="Trusted Providers" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>Trusted Providers Ready</h3>
                    <p>Connect with vetted, experienced life insurance providers who will guide you through the process, giving you confidence and peace of mind that your family's financial future is secure.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="inner_sec3">
    <div class="container">
        <p class="heading">Compare Life Insurance<br class="showDesk"> Plans To Find Your Perfect Fit</p>
        <p class="comn_text">Explore term life, whole life, and specialized insurance options to <strong>protect your loved ones and<br class="showDesk"> safeguard your financial future</strong>.</p>

        <div class="inner_sec3_row">
            <div class="inner_sec3_tab-row hideMob">
                <div class="inner_sec3_tab-col active" data-target="#tab_col_1">
                    <p>Term Life Insurance</p>
                </div>
                <div class="inner_sec3_tab-col" data-target="#tab_col_2">
                    <p>Whole Life Insurance</p>
                </div>
                <div class="inner_sec3_tab-col" data-target="#tab_col_3">
                    <p>Disability & Critical Illness Insurance</p>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Term Life Insurance</p><span class="icon">+</span>
                </div>
                <div class="inner_sec3_tab_content-box hideMob" id="tab_col_1">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Term Life Insurance</h3>
                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-life-tab1.webp') }}" alt="Term Life Insurance" width="500" height="450">
                        </div>
                        <p class="inner_sec3_tab_content_tx">Term life insurance provides coverage for a specific period, such as 10, 15, or 20 years, and is typically more affordable than whole life insurance. If you pass away during the term, your beneficiaries receive a payout. However, once the term ends, the policy expires without value, and renewing later in life may result in higher premiums due to age or health changes. Term life insurance is ideal for younger individuals looking for affordable, temporary coverage.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of Term Life Insurance</p>
                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Affordable Premiums:</strong> Lower costs compared to whole life insurance.</li>
                            <li><strong>Flexible Terms:</strong> Choose a coverage period that aligns with your financial needs.</li>
                            <li><strong>Family Protection:</strong> Ensures your loved ones are financially secure during critical years.</li>
                            <li><strong>Simple and Straightforward:</strong> Easy to understand and manage.</li>
                            <li><strong>Customizable Coverage:</strong> Adjust the term length and payout amount to suit your goals.</li>
                        </ul>
                    </div>
                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-life-tab1.webp') }}" alt="Term Life Insurance" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Whole Life Insurance</p> <span class="icon">+</span>
                </div>
                <div class="inner_sec3_tab_content-box" id="tab_col_2" style="display: none;">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Whole Life Insurance</h3>
                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-life-tab2.webp') }}" alt="Whole Life Insurance" width="500" height="450">
                        </div>
                        <p class="inner_sec3_tab_content_tx">Whole life insurance provides lifetime coverage with a guaranteed death benefit and a cash value component that grows over time. Unlike term insurance, it never expires as long as premiums are paid. While premiums are higher, the policy builds savings that can be borrowed against or used in emergencies. Whole life insurance is ideal for those seeking permanent coverage and a long-term financial planning tool.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of Whole Life Insurance</p>
                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Lifetime Coverage:</strong> Protects your family for your entire life.</li>
                            <li><strong>Guaranteed Payout:</strong> Beneficiaries receive a lump sum whenever the policyholder passes.</li>
                            <li><strong>Cash Value Growth:</strong> Build savings over time that can be borrowed against or used for emergencies.</li>
                            <li><strong>Inflation Protection:</strong> Coverage amounts may grow to offset rising costs.</li>
                            <li><strong>Peace of Mind:</strong> Permanent security for your family, no matter what happens.</li>
                        </ul>
                    </div>
                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-life-tab2.webp') }}" alt="Whole Life Insurance" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Disability & Critical Illness Insurance</p> <span class="icon">+</span>
                </div>
                <div class="inner_sec3_tab_content-box" id="tab_col_3" style="display: none;">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Disability & Critical Illness Insurance</h3>
                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-life-tab3.webp') }}" alt="Disability and Critical Illness Insurance" width="500" height="450">
                        </div>
                        <p class="inner_sec3_tab_content_tx">These specialized policies provide targeted financial protection for unexpected life events. Disability insurance replaces income if an injury or illness prevents you from working, while critical illness insurance pays a lump sum upon diagnosis of severe conditions like cancer or heart disease. These plans complement life insurance by addressing specific risks that can disrupt your financial stability.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of Disability and Critical Illness Insurance</p>
                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Income Replacement:</strong> Disability insurance ensures financial stability if you can't work.</li>
                            <li><strong>Critical Illness Support:</strong> Receive a lump sum payout to manage medical and living expenses.</li>
                            <li><strong>Targeted Protection:</strong> Designed to address specific risks like disability or terminal illness.</li>
                            <li><strong>Flexibility:</strong> Funds can be used for medical bills, caregiving, or daily expenses.</li>
                            <li><strong>Enhanced Security:</strong> A safety net for life's unexpected challenges.</li>
                        </ul>
                    </div>
                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-life-tab3.webp') }}" alt="Disability and Critical Illness Insurance" width="500" height="450">
                    </div>
                </div>
            </div>
        </div>

        <div class="clearall"></div>
        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Life Insurance Quotes">Get Started Today</a>
        </div>
    </div>
</div>

<div class="why_choose">
    <div class="container">
        <div class="why_choose_left">
            <p class="heading">Why Choose<br class="hideMob"> Go Quote Rocket</p>
            <p class="comn_text">Finding the right life insurance can feel overwhelming, but we're here to make it simple. At <a href="{{ route('home') }}" alt="Affordable Insurance Quotes">Go Quote Rocket</a>, we connect you with multiple authorized insurers, so you can compare options side by side. Our process is designed to save you time, reduce stress, and help you secure the most reliable and affordable coverage available.</p>
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
                    <p>Compare life insurance quotes. Choose the best for you.</p>
                </li>
                <li>
                    <img src="{{ asset('images/why-chose-icn3.png') }}" alt="Save Stress Icon" class="why-chose_icn" width="84" height="92">
                    <h3>Save Stress</h3>
                    <p>Avoid hidden fees and keep your personal information private.</p>
                </li>
                <li>
                    <img src="{{ asset('images/why-chose-icn4.png') }}" alt="Save Smart Icons" class="why-chose_icn" width="84" height="92">
                    <h3>Save Smart</h3>
                    <p>Quick comparisons, explained by an insurance expert.</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="inner_sec4">
    <div class="container">
        <p class="heading">Secure Your Family's<br class="showDesk"> Future With Life Insurance</p>
        <p class="comn_text">Life insurance offers more than financial security—it provides your loved ones with <strong>stability, dignity, and peace of mind <br class="showDesk"> when they need it most</strong>. Discover why it's the smartest decision you can make today.</p>

        <div class="inner_sec4_inr">
            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-life-icon1.png') }}" alt="Financial Security for Loved Ones Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Financial Security<br> For Loved Ones</h3>
                <p>Life insurance ensures your family won't struggle financially after your passing. From covering daily living expenses to supporting future goals, it's a safety net that keeps them stable and secure.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-life-icon2.png') }}" alt="Debt Repayment Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Debt<br> Repayment</h3>
                <p>Prevent your family from inheriting debts like loans, mortgages, or credit card balances. Life insurance ensures they can start fresh without financial burdens.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-life-icon3.png') }}" alt="Funeral and Burial Costs Coverage Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Funeral and Burial<br> Costs Coverage</h3>
                <p>Don't let <a href="{{ route('funeral-cover') }}" alt="Funeral Cover Quotes">funeral expenses</a> overwhelm your loved ones during an emotional time. Life insurance covers these costs, letting them focus on what truly matters.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-life-icon4.png') }}" alt="Income Replacement Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Income<br> Replacement</h3>
                <p>If you're the primary breadwinner, life insurance provides a steady stream of income, ensuring your family can maintain their current lifestyle and meet essential needs without disruption.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-life-icon5.png') }}" alt="Estate Planning Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Estate<br> Planning</h3>
                <p>Avoid the financial strain of estate taxes and legal fees. With life insurance, you can protect the value of your estate and ensure your heirs receive what you've worked hard to build.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-life-icon6.png') }}" alt="Education Support Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Education<br> Support</h3>
                <p>Life insurance keeps your children's dreams alive by covering school fees, college tuition, and other education-related expenses, giving them the future you always envisioned.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-life-icon7.png') }}" alt="Peace of Mind Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Peace of<br> Mind</h3>
                <p>Rest easy knowing your family will be cared for financially, no matter what. Life insurance provides the ultimate reassurance for you and your loved ones.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-life-icon8.png') }}" alt="Affordable Financial Protection Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Affordable Financial<br> Protection</h3>
                <p>Life insurance is one of the most affordable ways to secure a large payout, with flexible options that adapt to your budget and personal needs.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-life-icon9.png') }}" alt="Customizable Life Insurance Plans Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Customizable<br> Plans</h3>
                <p>Whether you need minimal coverage or a robust policy, life insurance plans can be customized to your health, lifestyle, and goals, ensuring the perfect fit for your family's future.</p>
            </div>
        </div>

        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Life Insurance Quotes">Get Started Today</a>
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
                    <div class="accordion acdn-heading accordion-open" id="hd-one">What is life insurance?</div>
                    <div class="acdn-content">
                        <p class="acdn-para">Life insurance protects those who depend on you, such as your spouse, children, and possibly your parents. If you die prematurely, life insurance can settle your outstanding debt and provide ongoing income to your dependents until they are financially secure. It can also cover everyday expenses, <a href="{{ route('legal-insurance') }}" alt="Legal Insurance Quotes">legal fees</a>, medical bills, and funeral costs if family savings are insufficient.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Why do I need life insurance?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Life insurance provides financial security for your family in the event of your death. It ensures they can cover basic needs, future expenses, funeral costs, or <a href="{{ route('debt-relief') }}" alt="Debt Relief Options">outstanding debts</a> like a mortgage. If you don't yet have life insurance, now might be the time to consider it for your peace of mind and your family's financial well-being.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">How much life insurance is enough?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Life insurance should replace your income-earning potential and cover your financial liabilities. A general guideline is:</p>
                        <ul class="acdn_list">
                            <li>Multiply your gross annual income by the number of years left until your retirement age.</li>
                            <li>Add your current debt liabilities.</li>
                            <li>Subtract any existing life insurance coverage. This calculation gives an estimate of how much life insurance you need.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">What is a beneficiary?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">A beneficiary is the person nominated to receive the payout from your life insurance policy in the event of your death.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Who should be my beneficiary?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">This is entirely up to you. You might choose your spouse, children, or multiple beneficiaries to distribute the payout. It's a good idea to review your plan periodically to ensure it aligns with changes in your life.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">When does my coverage begin?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Your coverage begins once your policy is approved and your first premium is paid. Some insurers provide temporary conditional coverage during the application process, provided specific conditions are met.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Do I require a medical exam to qualify for a life insurance policy?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Many insurers now offer no-exam life insurance policies. However, policies that require a medical exam often come with lower premiums and higher coverage amounts. The exam is typically free and conducted at your convenience.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">What happens if I can't afford my premium anymore?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Failing to pay a premium may result in a lapse in coverage for that specific month. It's important to contact your insurer to make alternative arrangements. The policy may fully lapse if multiple premiums go unpaid.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">How is my life insurance premium calculated?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Premiums are based on your specific risk profile, which includes factors like:</p>
                        <ul class="acdn_list">
                            <li><strong>Age:</strong> Younger individuals typically pay lower premiums.</li>
                            <li><strong>Gender:</strong> Women often pay less due to longer life expectancy.</li>
                            <li><strong>Health:</strong> Pre-existing conditions or a history of illness may increase premiums.</li>
                            <li><strong>Lifestyle:</strong> High-risk activities or hobbies, like skydiving, can raise premiums.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">What constitutes a high-risk client for an insurance company?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">High-risk clients include smokers, individuals with hazardous jobs or hobbies, past dependencies on alcohol or drugs, or those with certain health conditions. Being honest about your health and lifestyle is crucial when applying for life insurance.</p>
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
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Life Insurance Quotes">Get Quote Now</a>
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

        // Get phone number in E.164 format
        let phoneDigits = $("input[name='phone']").val().replace(/\D/g, '');

        let formData = {
            _token: $('meta[name="csrf-token"]').attr('content'),
            product_type: 'life_insurance',
            first_name: $("input[name='first_name']").val(),
            last_name: $("input[name='last_name']").val(),
            phone: phoneDigits,
            email: $("input[name='email']").val(),
            age_range: $("select[name='age_range']").val(),
            employment_status: $("select[name='employment_status']").val(),
            income_bracket: $("select[name='income_bracket']").val(),
            consent: $('#checkbox_terms').is(':checked') ? 1 : 0,
            funnel_id: 'Life'
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
