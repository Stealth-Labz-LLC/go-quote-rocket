@extends('layouts.app')

@section('title', 'Reliable Extended Auto Warranty Quotes in the USA | Go Quote Rocket')

@section('meta_description', 'Protect your car with an extended auto warranty. Compare affordable warranty options with Go Quote Rocket and ensure peace of mind on the road.')

@section('body-class', 'inner_pg motor_warranty')

@push('head')
<link rel="preload" href="{{ asset('images/inner-sec1-motor-wrnty.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img1.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img2.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img3.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-motor-tab1.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-motor-tab2.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-motor-tab3.webp') }}" type="image/webp" as="image" />

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [{
            "@type": "Question",
            "name": "What is an extended auto warranty?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "An extended auto warranty is a service contract that helps cover the cost of repairs for certain parts of your vehicle, such as the engine, transmission, or electrical system, protecting you from expensive out-of-pocket expenses."
            }
        },
        {
            "@type": "Question",
            "name": "Is an extended warranty the same as car insurance?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, an extended warranty covers mechanical and electrical breakdowns, while car insurance protects against accidents, theft, and third-party damage."
            }
        },
        {
            "@type": "Question",
            "name": "Who needs an extended auto warranty?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Anyone who owns a vehicle can benefit from an extended warranty, especially if the manufacturer's warranty has expired or if you want added financial protection for potential repairs."
            }
        },
        {
            "@type": "Question",
            "name": "Does an extended warranty cover all repairs?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, warranties typically cover specific components and exclude wear-and-tear items like brake pads, tires, and routine maintenance. Always review the policy details to know what's included."
            }
        },
        {
            "@type": "Question",
            "name": "Can I purchase an extended warranty for an older car?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, many providers offer extended warranties for older or high-mileage vehicles, although the coverage may vary depending on the car's age and condition."
            }
        },
        {
            "@type": "Question",
            "name": "How do I make a warranty claim?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "If your car experiences a covered breakdown, contact your warranty provider, and take your vehicle to an approved repair center for assessment and repairs."
            }
        },
        {
            "@type": "Question",
            "name": "Are extended warranties transferable to a new owner?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, most extended warranties can be transferred to the new owner when you sell your vehicle, adding value to your car during resale."
            }
        },
        {
            "@type": "Question",
            "name": "How much does an extended auto warranty cost?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The cost of an extended warranty depends on your vehicle's make, model, age, and the level of coverage you choose. Comparing quotes can help you find the best deal."
            }
        },
        {
            "@type": "Question",
            "name": "Can I cancel my extended warranty?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, most providers allow you to cancel your warranty, although there may be cancellation fees or terms to consider. Always check the policy before committing."
            }
        },
        {
            "@type": "Question",
            "name": "Do I need an extended warranty if I already have car insurance?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, car insurance and extended warranties cover different things. An extended warranty protects against mechanical and electrical failures, complementing your insurance policy by reducing repair costs."
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

        <p class="inner_sec1-hdg">Unexpected Car Repairs<br class="showDesk"> Can Be Expensive</p>

        <p class="inner_sec1_txt">Shield yourself with an extended auto warranty and get coverage <strong>up to $100,000</strong> <br class="showDesk">on unexpected repair costs.</p>

        <div class="inner_sec1-form" id="toForm">
            <form method="POST" name="warranty_form" id="warranty_form">
                @csrf
                <input type="hidden" name="product_type" value="motor_warranty">
                <input type="hidden" name="funnel_id" value="Warranty">

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

                    <div class="form__input form__input--2">
                        <div class="form_input_box">
                            <input type="tel" name="phone" placeholder="Phone Number (XXX) XXX-XXXX" class="input-fld required" data-error-message="Please enter your phone number." maxlength="14">
                            <div class="error_message text-left" style="display: none;" id="phone_prompt">
                                <span class="phone-prompt-error">Please enter a valid 10-digit US phone number.</span>
                            </div>
                        </div>
                        <div class="form_input_box">
                            <input type="email" name="email" class="input-fld required" placeholder="Email" data-error-message="Please enter your email address.">
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
                            <select name="manufacturer_warranty" class="input-fld required" data-error-message="Please answer this question.">
                                <option value="" selected>Still covered under manufacturer warranty?</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                    </div>

                    <div class="form__input form__input--3">
                        <div class="form_input_box">
                            <select name="vehicle_make" class="input-fld required" data-error-message="Please select your vehicle make.">
                                <option value="" selected>Vehicle Make</option>
                                <option value="Acura">Acura</option>
                                <option value="Audi">Audi</option>
                                <option value="BMW">BMW</option>
                                <option value="Buick">Buick</option>
                                <option value="Cadillac">Cadillac</option>
                                <option value="Chevrolet">Chevrolet</option>
                                <option value="Chrysler">Chrysler</option>
                                <option value="Dodge">Dodge</option>
                                <option value="Ford">Ford</option>
                                <option value="GMC">GMC</option>
                                <option value="Honda">Honda</option>
                                <option value="Hyundai">Hyundai</option>
                                <option value="Infiniti">Infiniti</option>
                                <option value="Jeep">Jeep</option>
                                <option value="Kia">Kia</option>
                                <option value="Lexus">Lexus</option>
                                <option value="Lincoln">Lincoln</option>
                                <option value="Mazda">Mazda</option>
                                <option value="Mercedes-Benz">Mercedes-Benz</option>
                                <option value="Nissan">Nissan</option>
                                <option value="Ram">Ram</option>
                                <option value="Subaru">Subaru</option>
                                <option value="Tesla">Tesla</option>
                                <option value="Toyota">Toyota</option>
                                <option value="Volkswagen">Volkswagen</option>
                                <option value="Volvo">Volvo</option>
                                <option value="Other">Other</option>
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>

                        <div class="form_input_box">
                            <select name="vehicle_mileage" class="input-fld required" data-error-message="Please select your vehicle mileage.">
                                <option value="" selected>Vehicle Mileage</option>
                                <option value="0-30000">0 - 30,000 Miles</option>
                                <option value="30001-60000">30,001 - 60,000 Miles</option>
                                <option value="60001-100000">60,001 - 100,000 Miles</option>
                                <option value="100001-150000">100,001 - 150,000 Miles</option>
                                <option value="150001+">150,001+ Miles</option>
                                <option value="unknown">I Don't Know</option>
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>

                        <div class="form_input_box">
                            <select name="vehicle_age" class="input-fld required" data-error-message="Please select vehicle age.">
                                <option value="" selected>Vehicle Age (Years Old)</option>
                                <option value="0-3">0-3</option>
                                <option value="4-7">4-7</option>
                                <option value="8-12">8-12</option>
                                <option value="13-20">13-20</option>
                                <option value="20+">20+</option>
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
        <p class="as-seen__heading">Quotes from America's top warranty providers, including:</p>
    </div>

    <div class="hideMob">
        <div class="brand__strip__scroller">
            <ul class="scroll__brand__list">
                <li><img src="{{ asset('images/warranty-provider-1.svg') }}" alt="Auto Warranty Provider"></li>
                <li><img src="{{ asset('images/warranty-provider-2.svg') }}" alt="Auto Warranty Provider"></li>
                <li><img src="{{ asset('images/warranty-provider-3.svg') }}" alt="Auto Warranty Provider"></li>
                <li><img src="{{ asset('images/warranty-provider-4.svg') }}" alt="Auto Warranty Provider"></li>
            </ul>
        </div>
    </div>

    <div class="showMob">
        <div class="brand__strip__scroller">
            <ul class="scroll__brand__list">
                <li><img src="{{ asset('images/warranty-provider-1.svg') }}" alt="Auto Warranty Provider"></li>
                <li><img src="{{ asset('images/warranty-provider-2.svg') }}" alt="Auto Warranty Provider"></li>
                <li><img src="{{ asset('images/warranty-provider-3.svg') }}" alt="Auto Warranty Provider"></li>
                <li><img src="{{ asset('images/warranty-provider-4.svg') }}" alt="Auto Warranty Provider"></li>
            </ul>
        </div>
    </div>
</div>

<div class="inner_sec2">
    <div class="container">
        <p class="heading">How We Make Finding<br class="showDesk"> An Extended Warranty Easy</p>

        <p class="comn_text">We know searching for the right auto warranty can feel overwhelming. That's why <a href="{{ route('home') }}" alt="Affordable Insurance Quotes">Go Quote Rocket</a> simplifies <br class="showDesk">the process for you. In just a few steps, we'll connect you with trusted providers, helping you secure <br class="showDesk">the most reliable and affordable extended warranty, hassle-free.</p>

        <div class="sec2_inr">
            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img1.webp') }}" alt="Guy On Computer Looking At Go Quote Rocket" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>One Quick Form</h3>
                    <p>Fill out our secure, straightforward form in just 60 seconds. Your information is always protected, and we'll handle the rest to find the best auto warranty for your vehicle.</p>
                </div>
            </div>

            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img2.jpg') }}" alt="Auto Warranty Options Checklist" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>Tailored Warranty Options</h3>
                    <p>We'll instantly search and present the best extended warranty plans that match your car's needs and your budget, ensuring you get the perfect coverage for your peace of mind.</p>
                </div>
            </div>

            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img3.webp') }}" alt="Trusted Auto Warranty Expert" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>Trusted Experts Ready</h3>
                    <p>Connect with a vetted, experienced warranty provider who will guide you through the process, giving you confidence in your vehicle's protection and long-term reliability.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="inner_sec3">
    <div class="container">
        <p class="heading">Compare & Save On <br>An Extended Warranty Plan</p>

        <p class="comn_text">Protect your car and budget with the right extended warranty. Understanding the top options available<br class="showDesk"> will ensure you save on repairs and drive confidently.</p>

        <div class="inner_sec3_row">
            <div class="inner_sec3_tab-row hideMob">
                <div class="inner_sec3_tab-col active" data-target="#tab_col_1">
                    <p>Manufacturer Warranty</p>
                </div>
                <div class="inner_sec3_tab-col" data-target="#tab_col_2">
                    <p>Extended Warranty</p>
                </div>
                <div class="inner_sec3_tab-col" data-target="#tab_col_3">
                    <p>Maintenance Plan</p>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Manufacturer Warranty</p><span class="icon">+</span>
                </div>

                <div class="inner_sec3_tab_content-box hideMob" id="tab_col_1">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Manufacturer Warranty</h3>

                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-motor-tab1.webp') }}" alt="Manufacturer Auto Warranty Option" width="500" height="450">
                        </div>

                        <p class="inner_sec3_tab_content_tx">A Manufacturer Warranty is the coverage provided by the vehicle manufacturer when you purchase a new car. It protects you against mechanical or electrical failures during the initial years of ownership, ensuring that any repairs or part replacements needed due to manufacturing defects are taken care of at no additional cost.</p>

                        <p class="inner_sec3-content-sub_hd">Benefits of a Manufacturer Warranty</p>

                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Comprehensive Coverage:</strong> Protects against mechanical and electrical failures.</li>
                            <li><strong>Genuine Parts:</strong> Ensures all replacements are done with manufacturer-approved parts.</li>
                            <li><strong>Cost Savings:</strong> Avoid out-of-pocket expenses for repairs during the warranty period.</li>
                            <li><strong>Authorized Repairs:</strong> Work is completed at approved service centers, maintaining vehicle quality.</li>
                        </ul>
                    </div>

                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-motor-tab1.webp') }}" alt="Manufacturer Auto Warranty Option" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Extended Warranty</p> <span class="icon">+</span>
                </div>

                <div class="inner_sec3_tab_content-box" id="tab_col_2" style="display: none;">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Extended Warranty</h3>

                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-motor-tab2.webp') }}" alt="Extended Auto Warranty Option" width="500" height="450">
                        </div>

                        <p class="inner_sec3_tab_content_tx">An Extended Warranty is a continuation of your original Manufacturer Warranty, designed to provide coverage after the initial period expires. It protects you from costly repairs on major components, such as the engine or transmission, and is ideal for those who plan to keep their car for many years or buy a used vehicle.</p>

                        <p class="inner_sec3-content-sub_hd">Benefits of an Extended Warranty</p>

                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Long-Term Protection:</strong> Covers critical components beyond the manufacturer's warranty.</li>
                            <li><strong>Financial Security:</strong> Reduces unexpected repair costs for older vehicles.</li>
                            <li><strong>Increased Resale Value:</strong> A transferable warranty can boost the value of your car.</li>
                            <li><strong>Customizable Coverage:</strong> Select the level of protection that suits your needs.</li>
                        </ul>
                    </div>

                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-motor-tab2.webp') }}" alt="Extended Auto Warranty Option" width="500" height="450">
                    </div>
                </div>
            </div>

            <div class="mob-div">
                <div class="accdn-hd showMob">
                    <p>Maintenance Plan</p> <span class="icon">+</span>
                </div>

                <div class="inner_sec3_tab_content-box" id="tab_col_3" style="display: none;">
                    <div class="inner_sec3_tab_content">
                        <h3 class="inner_sec3_tab_content_hd hideMob">Maintenance Plan</h3>

                        <div class="inner_sec3_tab_img e-com_img showMob">
                            <img src="{{ asset('images/inner_sec3-motor-tab3.webp') }}" alt="Maintenance Plan Auto Warranty Option" width="500" height="450">
                        </div>

                        <p class="inner_sec3_tab_content_tx">A Maintenance Plan is designed to cover the routine maintenance of your vehicle, such as oil changes, filters, and inspections. It ensures that your car remains in top condition without the stress of unplanned expenses. Maintenance Plans are often prepaid, offering fixed costs for scheduled servicing.</p>

                        <p class="inner_sec3-content-sub_hd">Benefits of Maintenance Plan</p>

                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Budget-Friendly:</strong> Spread the cost of maintenance over time, avoiding lump-sum payments.</li>
                            <li><strong>Routine Care:</strong> Covers essential maintenance like oil changes and inspections.</li>
                            <li><strong>Prepaid Convenience:</strong> Lock in servicing costs and avoid future price increases.</li>
                            <li><strong>Hassle-Free Servicing:</strong> Work is done by authorized technicians using quality parts.</li>
                        </ul>
                    </div>

                    <div class="inner_sec3_tab_img hideMob">
                        <img src="{{ asset('images/inner_sec3-motor-tab3.webp') }}" alt="Maintenance Plan Auto Warranty Option" width="500" height="450">
                    </div>
                </div>
            </div>
        </div>

        <div class="clearall"></div>

        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Auto Warranty Quotes">Get Started Today</a>
        </div>
    </div>
</div>

<div class="why_choose">
    <div class="container">
        <div class="why_choose_left">
            <p class="heading">Why Choose<br class="hideMob"> Go Quote Rocket</p>
            <p class="comn_text">Finding the right extended warranty can feel overwhelming, but we're here to make it simple. At <a href="{{ route('home') }}" alt="Affordable Insurance Quotes">Go Quote Rocket</a>, we connect you with multiple authorized auto warranty providers, so you can compare options side by side. Our process is designed to save you time, reduce stress, and help you secure the most reliable and affordable coverage available.</p>
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
                    <p>Compare warranty quotes. Choose the best for you.</p>
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
        <p class="heading">Protect Your Vehicle & Wallet<br class="hideMob"> With An Extended Warranty</p>

        <p class="comn_text comn_text--center">An extended warranty is your <a href="{{ route('products.personal-loans') }}" alt="Personal Loan Quotes">financial safety net</a> for unexpected vehicle repair costs. From engine trouble to electrical failures, an <strong>extended warranty protects your wallet and keeps your vehicle in top shape</strong> without the stress of unplanned expenses.</p>

        <div class="inner_sec4_inr">
            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-motor-icon1.png') }}" alt="Financial Protection Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Financial<br class="hideMob"> Protection</h3>
                <p>Avoid the high costs of unexpected vehicle repairs by letting your warranty cover the bill for major mechanical and electrical issues.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-motor-icon2.png') }}" alt="Wide Ranging Coverage Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Wide Ranging<br class="hideMob"> Coverage Options</h3>
                <p>Extended warranties often include coverage for key components like the engine, transmission, and more, ensuring peace of mind for every journey.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-motor-icon3.png') }}" alt="Affordable Monthly Payments Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Affordable<br class="hideMob"> Monthly Payments</h3>
                <p>Break down costly repairs into manageable monthly premiums, giving you financial predictability and peace of mind.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-motor-icon4.png') }}" alt="Reduced Out-of-Pocket Expenses Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Reduced Out-of-Pocket Expenses</h3>
                <p>Cover parts and labor costs that would otherwise leave a significant dent in your budget.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-motor-icon5.png') }}" alt="Roadside Assistance Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Roadside<br class="hideMob"> Assistance</h3>
                <p>Many extended warranties include roadside assistance for emergencies like breakdowns, flat tires, or towing needs.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-motor-icon6.png') }}" alt="Nationwide Coverage Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Nationwide<br class="hideMob"> Coverage</h3>
                <p>Access approved repair shops and service centers across the USA, ensuring high-quality repairs no matter where you are.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-motor-icon7.png') }}" alt="Increased Vehicle Resale Value Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Increased Vehicle<br> Resale Value</h3>
                <p>A valid extended warranty can increase your vehicle's resale value, offering potential buyers added confidence in its condition.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-motor-icon8.png') }}" alt="Flexible Plan Options Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Flexible<br class="hideMob"> Plans</h3>
                <p>Choose a warranty that fits your needs, from extended coverage for new cars to specialized plans for older vehicles.</p>
            </div>

            <div class="inner_sec4_inr_bx">
                <img src="{{ asset('images/inner-sec4-motor-icon9.png') }}" alt="Peace Of Mind Icon" class="inner_sec4_icn" width="200" height="124">
                <h3>Peace of<br class="hideMob"> Mind</h3>
                <p>Drive confidently, knowing that costly repairs are covered, allowing you to enjoy the road without financial worry.</p>
            </div>
        </div>

        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Auto Warranty Quotes">Get Started Today</a>
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
                <p class="reviews_text">"I couldn't believe how quickly Go Quote Rocket found me the best warranty options. The whole process was stress-free and saved me so much time."</p>
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
                <p class="reviews_text">"Go Quote Rocket's service was incredibly fast and efficient. They provided me with great options and unbeatable prices. I'm thrilled with the warranty I got."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-4.jpg') }}" alt="Customer Named Robert" width="100" height="100" class="rev_fc">
                    <p><span>Robert</span><br> Houston, TX</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Rated" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Finding the right warranty was so easy with Go Quote Rocket. The options were tailored to my needs, and everything was simple and straightforward."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-5.jpg') }}" alt="Customer Named Michelle" width="100" height="100" class="rev_fc">
                    <p><span>Michelle</span><br> Chicago, IL</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Excellent service! Go Quote Rocket made it easy to find a great warranty deal. They were professional and very helpful throughout the process."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-6.jpg') }}" alt="Customer Named James" width="100" height="100" class="rev_fc">
                    <p><span>James</span><br> Los Angeles, CA</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Go Quote Rocket was a lifesaver! They helped me find warranty coverage quickly with a smooth, convenient process. Highly recommended."</p>
                <div class="reviews_name"><img src="{{ asset('images/reviewer-7.jpg') }}" alt="Customer Named Sarah" width="100" height="100" class="rev_fc">
                    <p><span>Sarah</span><br> Miami, FL</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">
            </div>
        </div>

        <div class="reviews_box reviews_box-last">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Go Quote Rocket's system was so easy to use. I quickly found the warranty coverage I needed without any hassle. Fantastic experience!"</p>
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
                    <div class="accordion acdn-heading accordion-open" id="hd-one">What is an extended auto warranty?</div>
                    <div class="acdn-content">
                        <p class="acdn-para">An extended auto warranty is a service contract that helps cover the cost of repairs for certain parts of your vehicle, such as the engine, transmission, or electrical system, protecting you from expensive out-of-pocket expenses.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Is an extended warranty the same as car insurance?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">No, an extended warranty covers mechanical and electrical breakdowns, while car insurance protects against accidents, theft, and third-party damage.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Who needs an extended auto warranty?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Anyone who owns a vehicle can benefit from an extended warranty, especially if the manufacturer's warranty has expired or if you want added financial protection for potential repairs.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Does an extended warranty cover all repairs?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">No, warranties typically cover specific components and exclude wear-and-tear items like brake pads, tires, and routine maintenance. Always review the policy details to know what's included.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Can I purchase an extended warranty for an older car?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Yes, many providers offer extended warranties for older or high-mileage vehicles, although the coverage may vary depending on the car's age and condition.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">How do I make a warranty claim?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">If your car experiences a covered breakdown, contact your warranty provider, and take your vehicle to an approved repair center for assessment and repairs.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Are extended warranties transferable to a new owner?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Yes, most extended warranties can be transferred to the new owner when you sell your vehicle, adding value to your car during resale.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">How much does an extended auto warranty cost?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">The cost of an extended warranty depends on your vehicle's make, model, age, and the level of coverage you choose. Comparing quotes can help you find the best deal.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Can I cancel my extended warranty?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Yes, most providers allow you to cancel your warranty, although there may be cancellation fees or terms to consider. Always check the policy before committing.</p>
                    </div>
                </div>
            </div>

            <div class="up-slide-dwn">
                <div class="faq-innr">
                    <div class="accordion acdn-heading accordion-close">Do I need an extended warranty if I already have car insurance?</div>
                    <div class="acdn-content" style="display: none;">
                        <p class="acdn-para">Yes, car insurance and extended warranties cover different things. An extended warranty protects against mechanical and electrical failures, complementing your <a href="{{ route('products.car-insurance') }}" alt="Car Insurance Quotes">insurance policy</a> by reducing repair costs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blue_strip">
    <div class="blue_strip_cont">
        <h3>Ready to get started?</h3>
        <p>Compare auto warranty quotes today!</p>
    </div>

    <div class="blue_strip_btn">
        <div class="btn-bx">
            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn">Get Quote Now</a>
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
            product_type: 'motor_warranty',
            first_name: $("input[name='first_name']").val(),
            last_name: $("input[name='last_name']").val(),
            phone: phoneDigits,
            email: $("input[name='email']").val(),
            state: $("select[name='state']").val(),
            manufacturer_warranty: $("select[name='manufacturer_warranty']").val(),
            vehicle_make: $("select[name='vehicle_make']").val(),
            vehicle_mileage: $("select[name='vehicle_mileage']").val(),
            vehicle_age: $("select[name='vehicle_age']").val(),
            consent: $('#checkbox_terms').is(':checked') ? 1 : 0,
            funnel_id: 'Warranty'
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
