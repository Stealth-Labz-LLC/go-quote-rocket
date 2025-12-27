@extends('layouts.app')

@section('title', 'Affordable Car Insurance Quotes in the USA | Go Quote Rocket')
@section('description', 'Get competitive car insurance quotes in the USA with Go Quote Rocket. Compare options and save on affordable coverage for your vehicle today.')
@section('body-class', 'inner_pg car_insurance')

@push('preload')
<link rel="preload" href="{{ asset('images/inner-sec1-car-insur.webp') }}" type="image/webp" as="image">
<link rel="preload" href="{{ asset('images/inner-sec2-img1.webp') }}" type="image/webp" as="image">
<link rel="preload" href="{{ asset('images/inner-sec2-img2.webp') }}" type="image/webp" as="image">
<link rel="preload" href="{{ asset('images/inner-sec2-img3.webp') }}" type="image/webp" as="image">
@endpush

@push('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What's the most affordable car insurance in the USA?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Liability-only insurance is generally the least expensive because it only covers damages you cause to others. For more extensive protection, comprehensive insurance is a better option, though it costs more."
            }
        },
        {
            "@type": "Question",
            "name": "Why is car insurance important?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Car insurance is required by law in most states. It protects you financially in case of accidents, theft, or damage to your vehicle, and covers liability for injuries or damage you may cause to others."
            }
        },
        {
            "@type": "Question",
            "name": "How are car insurance premiums calculated?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Premiums depend on factors such as your driving record, age, location, vehicle type, coverage level, and credit score. Having safety features or anti-theft devices can also lower your premium."
            }
        },
        {
            "@type": "Question",
            "name": "What does it cost to use Go Quote Rocket?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Using Go Quote Rocket is completely free. There are no hidden charges, and you can easily compare quotes at no cost to find a policy that suits you."
            }
        }
    ]
}
</script>
@endpush

@section('content')
<div class="inner_sec1" id="choosePack">
    <div class="container">
        <div class="inner_sec1-form" id="toForm">
            <form method="POST" name="lead_form" id="lead_form">
                @csrf
                <input type="hidden" name="product_type" value="car_insurance">
                <input type="hidden" name="funnel_id" value="{{ $funnel_id ?? 'Car' }}">
                <input type="hidden" name="aff_sub" value="{{ $aff_sub ?? '0022' }}">
                <input type="hidden" name="aff_sub2" value="{{ $aff_sub2 ?? '' }}">
                <input type="hidden" name="aff_sub3" value="{{ $aff_sub3 ?? 'organic' }}">

                <div class="ban_slide1" id="ban_slide_1">
                    <p class="inner_sec1-rat-txt">
                        <img src="{{ asset('images/sec1-star.png') }}" alt="Customer Reviews" width="148" height="26">
                        <span>4.8 stars</span> 2,000+ reviews
                    </p>

                    <p class="inner_sec1-hdg">Get Free Car Insurance<br class="showDesk"> Quotes in <em>1 Minute!</em></p>

                    <p class="inner_sec1_txt">Compare affordable car insurance offers from America's top<br class="hideMob"> providers and <strong>save up to $500 per year.</strong></p>

                    <div class="form__field">
                        <div class="form__input form__input--3">
                            <div class="form_input_box">
                                <input type="text" name="first_name" placeholder="First Name" class="input-fld required" data-error-message="Please enter your first name.">
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                            <div class="form_input_box">
                                <input type="text" name="last_name" class="input-fld required" data-error-message="Please enter your last name." placeholder="Last Name">
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                            <div class="form_input_box">
                                <input type="email" name="email" placeholder="Email Address" class="input-fld required" data-error-message="Please enter your email address.">
                                <div class="error_message text-left" style="display:none"></div>
                            </div>
                        </div>

                        <div class="form__input form__input--2">
                            <div class="form_input_box">
                                <input type="tel" name="phone" placeholder="Phone Number (XXX) XXX-XXXX" class="input-fld required" data-error-message="Please enter your phone number." maxlength="14">
                                <div class="error_message text-left" style="display: none;" id="phone_prompt">
                                    <span class="phone-prompt-error">Please enter a valid US phone number.</span>
                                </div>
                            </div>

                            <div class="form_input_box">
                                <select name="state" class="input-fld required" data-error-message="Please select your state.">
                                    <option value="" selected>Select Your State</option>
                                    @foreach(config('us.states') as $code => $name)
                                        <option value="{{ $name }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>
                        </div>

                        <div class="form__input form__input--2">
                            <div class="form_input_box">
                                <select name="employment_status" class="input-fld required" data-error-message="Please select your employment status.">
                                    <option value="" selected>Are you currently employed?</option>
                                    <option value="Employed">Yes</option>
                                    <option value="Unemployed">No</option>
                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                            <div class="form_input_box">
                                <select class="input-fld required" name="income_bracket" data-error-message="Please select your income bracket.">
                                    <option value="">What's your annual income?</option>
                                    @foreach(config('us.income_brackets') as $value => $label)
                                        <option value="{{ $value }}">{{ $label }}</option>
                                    @endforeach
                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>
                        </div>

                        <div class="form__input form__input--2">
                            <div class="form_input_box">
                                <select name="vehicle_make" class="input-fld required" data-error-message="Please select your vehicle make.">
                                    <option value="" selected>What vehicle would you like to insure?</option>
                                    @foreach(config('us.vehicle_makes') as $value => $label)
                                        <option value="{{ $value }}">{{ $label }}</option>
                                    @endforeach
                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                            <div class="form_input_box">
                                <select class="input-fld required" name="currently_insured" data-error-message="Please provide insurance status.">
                                    <option value="">Are you currently insured?</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>
                        </div>
                    </div>

                    <div class="form_bottom">
                        <ul class="form_lst">
                            <li><img src="{{ asset('images/secure.svg') }}" alt="100% Secure Form Icon"> 100% SECURE FORM</li>
                            <li><img src="{{ asset('images/heart.svg') }}" alt="Heart Icon"> NO COMMITMENT REQUIRED</li>
                        </ul>

                        <div class="form__button err_msg_ottr">
                            <button type="button" class="apiBtn" id="submitBtn">Get Started Today!</button>
                            <p class="form_terms">
                                <input type="checkbox" name="consent" id="checkbox_terms" class="form_checkbox" checked value="1">
                                <span></span>
                                <label for="checkbox_terms">Yes, I accept the <a href="{{ route('terms') }}" target="_blank">terms and conditions</a></label>.
                            </p>
                            <div class="error_message text-left err_msg" id="checkbox_error_message" style="display: none;">You must agree to our terms to submit your information.</div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Brands Section -->
<div class="as-seen">
    <div class="container">
        <p class="as-seen__heading">Quotes by America's top providers, including:</p>
    </div>
    <div class="brand__strip__scroller">
        <ul class="scroll__brand__list">
            <li><img src="{{ asset('images/first-for-women-logo.svg') }}" alt="Insurance Provider Logo"></li>
            <li><img src="{{ asset('images/virseker-logo.svg') }}" alt="Insurance Provider Logo" class="virseker_logo"></li>
            <li><img src="{{ asset('images/dial-direct-logo.svg') }}" alt="Insurance Provider Logo" class="dial-direct_logo"></li>
            <li><img src="{{ asset('images/budget-logo.svg') }}" alt="Insurance Provider Logo" class="budget_logo"></li>
            <li><img src="{{ asset('images/auto-general-logo.svg') }}" alt="Insurance Provider Logo" class="auto-general_logo"></li>
            <li><img src="{{ asset('images/king-price-logo.svg') }}" alt="Insurance Provider Logo"></li>
        </ul>
        <ul class="scroll__brand__list">
            <li><img src="{{ asset('images/first-for-women-logo.svg') }}" alt="Insurance Provider Logo"></li>
            <li><img src="{{ asset('images/virseker-logo.svg') }}" alt="Insurance Provider Logo" class="virseker_logo"></li>
            <li><img src="{{ asset('images/dial-direct-logo.svg') }}" alt="Insurance Provider Logo" class="dial-direct_logo"></li>
            <li><img src="{{ asset('images/budget-logo.svg') }}" alt="Insurance Provider Logo" class="budget_logo"></li>
            <li><img src="{{ asset('images/auto-general-logo.svg') }}" alt="Insurance Provider Logo" class="auto-general_logo"></li>
            <li><img src="{{ asset('images/king-price-logo.svg') }}" alt="Insurance Provider Logo"></li>
        </ul>
    </div>
</div>

<!-- How It Works Section -->
<div class="inner_sec2">
    <div class="container">
        <p class="heading">How We Make<br class="showDesk"> Finding Car Insurance Easy</p>
        <p class="comn_text comn_text--center">We know getting car insurance quotes can feel overwhelming. That's why Go Quote Rocket simplifies the process for you. In just a few steps, we'll connect you with top-rated insurers, helping you secure the most reliable and affordable car insurance, hassle-free.</p>

        <div class="sec2_inr">
            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img1.webp') }}" alt="Go Quote Rocket Insurance Form" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>One Quick Form</h3>
                    <p>Fill out our secure, straightforward form in just 60 seconds. Your information is always protected, and we do the hard work from there.</p>
                </div>
            </div>

            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img2.webp') }}" alt="Tailored Insurance Options" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>Tailored Insurance Options</h3>
                    <p>We'll instantly search and present the <a href="{{ route('home') }}" alt="Best Insurance Plans">best insurance plans</a> that fit your personal needs and budget, ensuring you find the perfect match.</p>
                </div>
            </div>

            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img3.webp') }}" alt="Trusted Insurance Agent" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>Trusted Experts Ready</h3>
                    <p>Connect with a vetted, experienced insurance partner who will guide you through the process, giving you peace of mind and confidence in your coverage.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Coverage Types Section -->
<div class="inner_sec3">
    <div class="container">
        <p class="heading">Compare & Save On<br class="showDesk"> All Types Of Car Insurance</p>
        <p class="comn_text">Car insurance in the USA typically comes in several types: <strong>comprehensive, collision, liability,<br class="showDesk"> and full coverage</strong>. Each option provides different levels of protection, ensuring you can choose<br class="showDesk"> the coverage that best fits your needs and circumstances.</p>

        <div class="inner_sec3_row">
            <div class="inner_sec3_tab-row hideMob">
                <div class="inner_sec3_tab-col active" id="tab_col_1"><p>Comprehensive</p></div>
                <div class="inner_sec3_tab-col" id="tab_col_2"><p>Collision Coverage</p></div>
                <div class="inner_sec3_tab-col" id="tab_col_3"><p>Liability Only</p></div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob"><p>Comprehensive</p><span class="icon">+</span></div>
                <div class="inner_sec3_tab_content-box hideMob" id="tab_cont_1">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Comprehensive</h3>
                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-tab-img1.webp') }}" alt="Comprehensive Car Insurance" width="500" height="450">
                        </div>
                        <p class="inner_sec3_tab_content_tx">Comprehensive car insurance offers the highest level of protection, covering risks like theft, fire, vandalism, weather damage, and animal collisions. This coverage protects your vehicle from non-collision incidents that could otherwise result in expensive repairs or total loss.</p>
                        <p class="inner_sec3_tab_content_tx">With comprehensive insurance, you're protected from more than just accidents. Whether it's a fallen tree, hail damage, or a break-in, this policy provides peace of mind, allowing you to focus on the road instead of worrying about potential expenses.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of Comprehensive Car Insurance</p>
                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Broad Coverage:</strong> Protects against theft, fire, vandalism, and natural disasters.</li>
                            <li><strong>Financial Security:</strong> Covers costly repairs or replacements.</li>
                            <li><strong>Peace of Mind:</strong> Drive with confidence, knowing you're protected.</li>
                        </ul>
                    </div>
                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-tab-img1.webp') }}" alt="Comprehensive Car Insurance" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob"><p>Collision Coverage</p><span class="icon">+</span></div>
                <div class="inner_sec3_tab_content-box" id="tab_cont_2" style="display: none;">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Collision Coverage</h3>
                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-tab-img2.webp') }}" alt="Collision Insurance" width="500" height="450">
                        </div>
                        <p class="inner_sec3_tab_content_tx">Collision coverage pays for damage to your vehicle resulting from a collision with another car or object, regardless of who's at fault. This is essential coverage for protecting your investment, especially if you have a newer or financed vehicle.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of Collision Coverage</p>
                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Accident Protection:</strong> Covers damage from collisions with vehicles or objects.</li>
                            <li><strong>No-Fault Coverage:</strong> Pays regardless of who caused the accident.</li>
                            <li><strong>Vehicle Protection:</strong> Essential for new or financed vehicles.</li>
                        </ul>
                    </div>
                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-tab-img2.webp') }}" alt="Collision Insurance" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob"><p>Liability Only</p><span class="icon">+</span></div>
                <div class="inner_sec3_tab_content-box" id="tab_cont_3" style="display: none;">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Liability Only</h3>
                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-tab-img3.webp') }}" alt="Liability Only Insurance" width="500" height="450">
                        </div>
                        <p class="inner_sec3_tab_content_tx">Liability insurance is the minimum coverage required by most states. It covers damages you cause to other people and their property in an accident. While it doesn't cover your own vehicle, it protects you from potentially devastating financial liability.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of Liability Insurance</p>
                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Affordable Coverage:</strong> The most cost-effective way to get legally insured.</li>
                            <li><strong>Liability Protection:</strong> Covers damages you cause to others' property or vehicles.</li>
                            <li><strong>Legal Compliance:</strong> Meets minimum state insurance requirements.</li>
                        </ul>
                    </div>
                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-tab-img3.webp') }}" alt="Liability Only Insurance" width="500" height="450">
                    </div>
                </div>
            </div>
        </div>

        <div class="clearall"></div>
        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Car Insurance Quotes">Get Started Today</a>
        </div>
    </div>
</div>

<!-- Why Choose Section -->
<div class="why_choose">
    <div class="container">
        <div class="why_choose_left">
            <p class="heading">Why Choose<br class="hideMob"> Go Quote Rocket</p>
            <p class="comn_text">Finding the right car insurance can feel overwhelming, but we're here to make it simple. At <a href="{{ route('home') }}" alt="Affordable Insurance Quotes USA">Go Quote Rocket</a>, we connect you with an insurance expert who can guide you through the process. You'll be able to make the right choice for your needs and budget.</p>
        </div>
        <div class="why_choose_right">
            <ul class="why_choose_lst">
                <li>
                    <img src="{{ asset('images/why-chose-icn1.png') }}" alt="Save Time with Go Quote Rocket" class="why-chose_icn" width="84" height="92">
                    <h3>Save Time</h3>
                    <p>Find all the prices and benefits you need in 1 minute.</p>
                </li>
                <li>
                    <img src="{{ asset('images/why-chose-icn2.png') }}" alt="Save Money with Go Quote Rocket" class="why-chose_icn" width="84" height="92">
                    <h3>Save Money</h3>
                    <p>Compare insurance quotes. Choose the best for you.</p>
                </li>
                <li>
                    <img src="{{ asset('images/why-chose-icn3.png') }}" alt="Save Stress with Go Quote Rocket" class="why-chose_icn" width="84" height="92">
                    <h3>Save Stress</h3>
                    <p>Avoid hidden fees and keep your personal information private.</p>
                </li>
                <li>
                    <img src="{{ asset('images/why-chose-icn4.png') }}" alt="Save Smart with Go Quote Rocket" class="why-chose_icn" width="84" height="92">
                    <h3>Save Smart</h3>
                    <p>Quick comparisons, explained by a trusted expert.</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Reviews Section -->
<div class="sec3">
    <div class="container">
        <p class="heading">Thousands of<br class="showMob"> Americans Trust Us.</p>
        <div class="feefo_box">
            <img src="{{ asset('images/feefo-logo.png') }}" alt="" class="feefo_log" width="366" height="84">
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
                <div class="reviews_name">
                    <img src="{{ asset('images/ntombi.jpg') }}" alt="Customer Named Sarah" width="100" height="100" class="rev_fc">
                    <p><span>Sarah</span><br> California</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Go Quote Rocket's customer service was outstanding. They answered all my questions and helped me choose a plan that worked perfectly for my budget."</p>
                <div class="reviews_name">
                    <img src="{{ asset('images/themba.jpg') }}" alt="Customer Named Michael" width="100" height="100" class="rev_fc">
                    <p><span>Michael</span><br> Texas</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"I'm so glad I used Go Quote Rocket! They compared multiple options for me and found the best deal in minutes. Highly efficient and reliable."</p>
                <div class="reviews_name">
                    <img src="{{ asset('images/lebo.jpg') }}" alt="Customer Named David" width="100" height="100" class="rev_fc">
                    <p><span>David</span><br> Florida</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Rating" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Go Quote Rocket's service was incredibly fast and efficient. They provided me with great options and unbeatable prices. Highly recommend them."</p>
                <div class="reviews_name">
                    <img src="{{ asset('images/marthinus.jpg') }}" alt="Customer Named Jennifer" width="100" height="100" class="rev_fc">
                    <p><span>Jennifer</span><br> New York</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Rated" class="reviews_star" width="228" height="40">
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="sec7">
    <div class="container" id="faq-section">
        <p class="heading">Frequently Asked Questions</p>

        <div class="faq-container" style="overflow:hidden;">
            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-open">What's the most affordable car insurance in the USA?</div>
                    <div class="acdn-content">
                        <p class="acdn-para">Liability-only insurance is generally the least expensive because it only covers damages you cause to others. For more extensive protection, comprehensive or full coverage insurance is a better option, though it costs more.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Why is car insurance important?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Car insurance is required by law in most states and protects you financially. It covers expenses from accidents, theft, or damage to your vehicle, and provides liability coverage for injuries or damage you may cause to others.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">How are car insurance premiums calculated?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Premiums depend on factors such as your driving record, age, location, vehicle type, coverage level, and credit score. Having safety features, anti-theft devices, or bundling policies can help lower your premium.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">What does it cost to use Go Quote Rocket?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Using Go Quote Rocket is <strong>completely free</strong>. There are no hidden charges, and you can easily compare quotes at no cost to find a policy that suits you.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Am I obligated to purchase if I request a quote?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">No commitment is required when you request a quote. A representative from the insurer will contact you to discuss the details and help you decide if it's the right fit.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">What is a deductible, and how does it affect my premium?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">A deductible is the portion you pay out of pocket for a claim. Opting for a higher deductible can reduce your monthly costs, while a lower deductible will increase your premium.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="blue_strip">
    <div class="blue_strip_cont">
        <h3>Ready to get started?</h3>
        <p>Compare insurance quotes today!</p>
    </div>
    <div class="blue_strip_btn">
        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn">Get Quote Now</a>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    // Tab functionality
    $('.inner_sec3_tab-col').click(function(e) {
        $('.inner_sec3_tab-col').removeClass('active');
        $(this).addClass('active');
    });
    $('#tab_col_1').click(function(e) {
        $('#tab_cont_1').show();
        $('#tab_cont_2, #tab_cont_3').hide();
    });
    $('#tab_col_2').click(function(e) {
        $('#tab_cont_2').show();
        $('#tab_cont_1, #tab_cont_3').hide();
    });
    $('#tab_col_3').click(function(e) {
        $('#tab_cont_3').show();
        $('#tab_cont_1, #tab_cont_2').hide();
    });

    // Mobile accordion
    $('.accdn-hd').click(function() {
        const content = $(this).next('.inner_sec3_tab_content-box');
        const icon = $(this).find('.icon');
        var trg = $(this);
        window.setTimeout(function() {
            $('html, body').animate({ scrollTop: $(trg).offset().top - 75 }, 1000);
        }, 700);
        $('.inner_sec3_tab_content-box').not(content).slideUp(500);
        $('.icon').not(icon).text('+');
        content.slideToggle(500);
        icon.text(icon.text() === '+' ? '-' : '+');
    });

    // Phone number formatting
    $("input[name='phone']").on('input', function() {
        let value = $(this).val().replace(/\D/g, '');
        if (value.length > 0) {
            if (value.length <= 3) {
                value = '(' + value;
            } else if (value.length <= 6) {
                value = '(' + value.substring(0, 3) + ') ' + value.substring(3);
            } else {
                value = '(' + value.substring(0, 3) + ') ' + value.substring(3, 6) + '-' + value.substring(6, 10);
            }
        }
        $(this).val(value);
    });

    // Form validation
    var termsError = [];

    $('#submitBtn').on('click', function(event) {
        var errors = [];
        termsError = [];

        validateCheckbox();

        // Validate required fields
        $('input.required, select.required').each(function() {
            var input = $(this);
            if (input.val().trim() == '') {
                input.next('.error_message').show().text(input.attr('data-error-message'));
                errors.push(input.attr('data-error-message'));
            } else {
                input.next('.error_message').hide();
            }
        });

        // Validate email
        var email = $("input[name='email']").val();
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email && !emailRegex.test(email)) {
            $("input[name='email']").next('.error_message').show().text('Please enter a valid email address.');
            errors.push('Invalid email');
        }

        // Validate phone (10 digits)
        var phone = $("input[name='phone']").val().replace(/\D/g, '');
        if (phone.length !== 10) {
            $('#phone_prompt').show();
            errors.push('Invalid phone');
        } else {
            $('#phone_prompt').hide();
        }

        if (errors.length == 0 && termsError.length == 0) {
            submitLead();
        }
    });

    // Clear errors on input
    $('select.required').on('change', function() {
        $(this).next('.error_message').hide();
    });
    $('input.required').on('keyup', function() {
        $(this).next('.error_message').hide();
    });

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

    // Submit lead to API
    function submitLead() {
        $('#loading-indicator').show();

        var formData = {
            first_name: $("input[name='first_name']").val(),
            last_name: $("input[name='last_name']").val(),
            email: $("input[name='email']").val(),
            phone: $("input[name='phone']").val().replace(/\D/g, ''),
            state: $("select[name='state']").val(),
            product_type: $("input[name='product_type']").val(),
            funnel_id: $("input[name='funnel_id']").val(),
            consent: $('#checkbox_terms').is(':checked') ? 1 : 0,
            employment_status: $("select[name='employment_status']").val(),
            income_bracket: $("select[name='income_bracket']").val(),
            vehicle_make: $("select[name='vehicle_make']").val(),
            currently_insured: $("select[name='currently_insured']").val(),
            aff_sub: $("input[name='aff_sub']").val(),
            aff_sub2: $("input[name='aff_sub2']").val(),
            aff_sub3: $("input[name='aff_sub3']").val(),
            utm_campaign: '{{ $utm_campaign ?? "" }}'
        };

        $.ajax({
            url: '{{ route("leads.submit") }}',
            type: 'POST',
            data: formData,
            success: function(data) {
                $('#loading-indicator').hide();
                if (data.success || data.code === 1) {
                    window.location.href = '{{ route("thank-you") }}';
                } else {
                    $('#error_handler_overlay').show();
                    $('#error_handler_overlay p').text(data.message || "Unfortunately, we're unable to submit your information at this time. Please try again.");
                }
            },
            error: function(xhr) {
                $('#loading-indicator').hide();
                var errorMsg = "Unfortunately, we're unable to submit your information at this time. Please try again.";
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    var errors = xhr.responseJSON.errors;
                    errorMsg = Object.values(errors).flat().join(' ');
                }
                $('#error_handler_overlay').show();
                $('#error_handler_overlay p').text(errorMsg);
            }
        });
    }
});
</script>
@endpush
