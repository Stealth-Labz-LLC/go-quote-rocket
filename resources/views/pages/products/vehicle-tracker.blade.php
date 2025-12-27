@extends('layouts.app')

@section('title', 'Find the Best GPS Vehicle Tracker Deals | Go Quote Rocket')
@section('description', 'Lower your insurance premiums with a reliable vehicle tracker. Compare affordable tracker solutions in the USA with Go Quote Rocket.')
@section('body-class', 'inner_pg vehicle_insurance')

@push('preload')
<link rel="preload" href="{{ asset('images/inner-sec1-vehicle-trck.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img1.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img2.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner-sec2-img3.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-vehicle-tab1.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-vehicle-tab2.webp') }}" type="image/webp" as="image" />
<link rel="preload" href="{{ asset('images/inner_sec3-vehicle-tab3.webp') }}" type="image/webp" as="image" />
@endpush

@push('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [{
            "@type": "Question",
            "name": "What is a GPS vehicle tracking device?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A GPS vehicle tracking device uses satellite technology to monitor and report the real-time location of your car. It's designed to improve vehicle security, help recover stolen cars, and even lower your insurance premiums."
            }
        },
        {
            "@type": "Question",
            "name": "How does installing a GPS tracker reduce my insurance premium?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Many insurers in the USA offer discounts for vehicles equipped with GPS trackers because they lower the risk of theft and increase recovery chances, making them a cost-effective security solution."
            }
        },
        {
            "@type": "Question",
            "name": "Is a GPS tracker suitable for all types of vehicles?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, GPS trackers can be installed on most vehicles, including cars, trucks, and motorcycles. They are also widely used for fleet management in businesses."
            }
        },
        {
            "@type": "Question",
            "name": "Can I track my vehicle in real-time?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, GPS trackers provide live location updates, allowing you to monitor your vehicle's movements in real-time via a smartphone app or web platform."
            }
        },
        {
            "@type": "Question",
            "name": "What happens if my vehicle is stolen?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "If your vehicle is stolen, the GPS tracker enables authorities to locate and recover it quickly. Many devices also offer direct integration with recovery services for added convenience."
            }
        },
        {
            "@type": "Question",
            "name": "Are there any additional costs for using a GPS tracker?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Some GPS trackers may require a monthly subscription for accessing advanced features like live tracking, geofencing, and recovery support. Be sure to check the details when comparing quotes."
            }
        },
        {
            "@type": "Question",
            "name": "Can I use a GPS tracker to monitor someone else's driving?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, you can monitor driving behavior, such as speed and route, which is especially useful for managing fleets or ensuring safe driving habits for young or inexperienced drivers."
            }
        },
        {
            "@type": "Question",
            "name": "How does geofencing work?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Geofencing allows you to set virtual boundaries around specific areas. If your vehicle enters or exits these zones, you'll receive an alert on your device."
            }
        },
        {
            "@type": "Question",
            "name": "Is the installation process complicated?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, most GPS trackers are easy to install. Some devices are plug-and-play, while others may require professional installation for optimal performance."
            }
        },
        {
            "@type": "Question",
            "name": "Can I compare multiple GPS tracking quotes before committing?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, comparing quotes is a great way to find the best GPS tracking device for your needs and budget. You're under no obligation to commit until you agree to the terms of the provider."
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

        <p class="inner_sec1-hdg">A Car is Stolen Every<br class="showMob"> 40 Seconds<br class="hideMob"> in America</p>

        <p class="inner_sec1_txt">Get a free vehicle tracker quote in minutes and <strong>save up to 27%</strong> <br class="hideMob">on your monthly car insurance premium today.</p>

        <div class="inner_sec1-form" id="toForm">

            <form method="post" name="track_api1" id="vehicleTrackerForm">
                @csrf

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

                    <div class="form__input form__input--3">

                        <div class="form_input_box">
                            <select class="input-fld required" name="state" data-error-message="Please select your state.">
                                <option value="" selected="">Select State</option>
                                @foreach(config('us.states') as $code => $name)
                                    <option value="{{ $code }}">{{ $name }}</option>
                                @endforeach
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>

                        <div class="form_input_box">
                            <select class="input-fld required" name="vehicle_use" data-error-message="Please select your use of vehicle.">
                                <option value="" selected="">Use of Vehicle</option>
                                <option value="personal_use">Personal Use</option>
                                <option value="business_use">Business Use</option>
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>

                        <div class="form_input_box">
                            <select name="vehicle_make" class="input-fld required" data-error-message="Please select your vehicle make.">
                                <option value="" selected>What vehicle would you like to track?</option>
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
                                <option value="Jaguar">Jaguar</option>
                                <option value="Jeep">Jeep</option>
                                <option value="Kia">Kia</option>
                                <option value="Land Rover">Land Rover</option>
                                <option value="Lexus">Lexus</option>
                                <option value="Lincoln">Lincoln</option>
                                <option value="Mazda">Mazda</option>
                                <option value="Mercedes-Benz">Mercedes-Benz</option>
                                <option value="Nissan">Nissan</option>
                                <option value="Porsche">Porsche</option>
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

                    </div>

                    <div class="form__input form__input--1">
                        <div class="form_input_box">
                            <select class="input-fld required" name="has_tracker" data-error-message="Please answer if you have a tracking device.">
                                <option value="" selected="">Do you currently have a tracking device installed?</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <div class="error_message text-left" style="display:none"></div>
                        </div>
                    </div>

                </div>

                <div class="form_bottom">

                    <ul class="form_lst">

                        <li><img src="{{ asset('images/secure.svg') }}" alt="Secure Form Icon"> 100% SECURE FORM</li>

                        <li><img src="{{ asset('images/heart.svg') }}" alt="No Commitment Icon"> NO COMMITMENT REQUIRED</li>

                    </ul>

                    <div class="form__button err_msg_ottr">

                        <button type="button" class="apiBtn" onclick="submitLead()">Get Started Today!</button>

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

        <p class="as-seen__heading">Quotes by America's top GPS tracking providers, including:</p>

    </div>

    <div class="brand__strip__scroller">

        <ul class="scroll__brand__list">

            <li><img src="{{ asset('images/vyncs-logo.svg') }}" alt="Vyncs GPS Vehicle Tracking Device Logo"></li>

            <li><img src="{{ asset('images/bouncie-logo.svg') }}" alt="Bouncie GPS Vehicle Tracking Device Logo" class="matrix_logo"></li>

        </ul>

    </div>

</div>



<div class="inner_sec2">

    <div class="container">

        <p class="heading">How We Make Getting a<br> Vehicle Tracker Easy</p>

        <p class="comn_text comn_text--center">We know searching for the right vehicle tracker can feel overwhelming. That's why <a href="{{ route('home') }}" alt="Affordable Insurance Quotes">Go Quote Rocket</a> simplifies the process for you. In just a few steps, we'll connect you with trusted providers, helping you secure the most reliable and affordable vehicle tracker, hassle-free.</p>

        <div class="sec2_inr">

            <div class="sec2_inr_bx">

                <img src="{{ asset('images/inner-sec2-img1.webp') }}" alt="Guy On Computer Using Go Quote Rocket" width="381" height="291">

                <div class="sec2_bx_content">

                    <h3>One Quick Form</h3>

                    <p>Fill out our secure, straightforward form in just 60 seconds. Your information is always protected, and we'll handle the rest to find the best tracker for your needs.</p>

                </div>

            </div>

            <div class="sec2_inr_bx">

                <img src="{{ asset('images/inner-sec2-img2.webp') }}" alt="Checklist of Tracking Device Options" width="381" height="291">

                <div class="sec2_bx_content">

                    <h3>Tailored Tracker Options</h3>

                    <p>We'll instantly search and present the best vehicle tracking solutions that match your personal needs and budget, ensuring you find the perfect fit for your car and lifestyle.</p>

                </div>

            </div>

            <div class="sec2_inr_bx">

                <img src="{{ asset('images/inner-sec2-img3.webp') }}" alt="Trusted GPS Tracking Device Providers" width="381" height="291">

                <div class="sec2_bx_content">

                    <h3>Trusted Providers Ready</h3>

                    <p>Connect with a vetted, experienced vehicle tracker provider who will guide you through the process, giving you peace of mind and confidence in your vehicle's security.</p>

                </div>

            </div>

        </div>

    </div>

</div>



<div class="inner_sec3">

    <div class="container">

        <p class="heading">Compare & Save On<br class="hideMob"> A<br class="showMob"> Vehicle Tracking Device</p>

        <p class="comn_text">Protect your vehicle, <strong>reduce your insurance premiums</strong>, and gain peace of mind<br class="hideMob"> with GPS tracking solutions for American drivers.</p>

        <div class="inner_sec3_row">

            <div class="inner_sec3_tab-row hideMob">

                <div class="inner_sec3_tab-col active" data-target="#tab_col_1">
                    <p>GPS Trackers</p>
                </div>

                <div class="inner_sec3_tab-col" data-target="#tab_col_2">
                    <p>OBD-II Trackers</p>
                </div>

                <div class="inner_sec3_tab-col" data-target="#tab_col_3">
                    <p>Hybrid Trackers</p>
                </div>

            </div>



            <div class="mob-div">

                <div class="accdn-hd showMob">
                    <p>GPS Vehicle Trackers</p><span class="icon">+</span>
                </div>

                <div class="inner_sec3_tab_content-box hideMob" id="tab_col_1">

                    <div class="inner_sec3_tab_content">

                        <h3 class="inner_sec3_tab_content_hd hideMob">GPS Vehicle Trackers</h3>



                        <div class="inner_sec3_tab_img e-com_img showMob">

                            <img src="{{ asset('images/inner_sec3-vehicle-tab1.webp') }}" alt="GPS Vehicle Tracking Device" width="500" height="450">

                        </div>

                        <p class="inner_sec3_tab_content_tx">GPS trackers are the most popular car tracking devices in the USA, using satellite technology to provide highly accurate location data. These devices can pinpoint a vehicle's position with precision, making them ideal for theft recovery and fleet management. While GPS trackers require a clear view of the sky to function and are often more expensive, they remain a top choice for reliable and comprehensive tracking.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of Comprehensive GPS Vehicle Tracking</p>

                        <ul class="inner_sec3_tab-lst">

                            <li><strong>High Accuracy:</strong> Pinpoints a vehicle's location within a few feet.</li>
                            <li><strong>Wide Coverage:</strong> Operates in areas without cellular networks.</li>
                            <li><strong>Enhanced Security:</strong> Ideal for theft recovery with real-time tracking.</li>
                            <li><strong>Fleet Management:</strong> Helps businesses monitor and manage vehicles effectively.</li>
                            <li><strong>Peace of Mind:</strong> Provides constant updates on vehicle location.</li>

                        </ul>

                    </div>

                    <div class="inner_sec3_tab_img hideMob">

                        <img src="{{ asset('images/inner_sec3-vehicle-tab1.webp') }}" alt="GPS Vehicle Tracking Device" width="500" height="450">

                    </div>

                </div>

            </div>



            <div class="mob-div">

                <div class="accdn-hd showMob">
                    <p>OBD-II Vehicle Trackers</p> <span class="icon">+</span>
                </div>

                <div class="inner_sec3_tab_content-box" id="tab_col_2" style="display: none;">

                    <div class="inner_sec3_tab_content">

                        <h3 class="inner_sec3_tab_content_hd hideMob">OBD-II Vehicle Trackers</h3>



                        <div class="inner_sec3_tab_img e-com_img showMob">

                            <img src="{{ asset('images/inner_sec3-vehicle-tab2.webp') }}" alt="OBD-II Vehicle Tracking Device" width="500" height="450">

                        </div>

                        <p class="inner_sec3_tab_content_tx">OBD-II trackers plug directly into your vehicle's diagnostic port, offering an easy-to-install alternative to traditional GPS trackers. These devices access your car's onboard computer to provide not only location data but also vehicle health information, making them perfect for drivers who want comprehensive insights into their vehicle's performance.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of OBD-II Vehicle Trackers</p>

                        <ul class="inner_sec3_tab-lst">

                            <li><strong>Easy Installation:</strong> Simply plugs into the OBD-II port—no wiring needed.</li>
                            <li><strong>Vehicle Diagnostics:</strong> Monitors engine health, fuel efficiency, and more.</li>
                            <li><strong>Real-Time Updates:</strong> Provides instant location updates via cellular networks.</li>
                            <li><strong>Driver Behavior:</strong> Tracks speed, hard braking, and acceleration patterns.</li>
                            <li><strong>Trip History:</strong> Records detailed logs of all vehicle trips.</li>

                        </ul>

                    </div>



                    <div class="inner_sec3_tab_img hideMob">

                        <img src="{{ asset('images/inner_sec3-vehicle-tab2.webp') }}" alt="OBD-II Vehicle Tracking Device" width="500" height="450">

                    </div>

                </div>

            </div>



            <div class="mob-div">

                <div class="accdn-hd showMob">
                    <p>Hybrid Vehicle Trackers</p> <span class="icon">+</span>
                </div>

                <div class="inner_sec3_tab_content-box" id="tab_col_3" style="display: none;">

                    <div class="inner_sec3_tab_content">

                        <h3 class="inner_sec3_tab_content_hd hideMob">Hybrid Vehicle Trackers</h3>

                        <div class="inner_sec3_tab_img e-com_img showMob">

                            <img src="{{ asset('images/inner_sec3-vehicle-tab3.webp') }}" alt="Hybrid Vehicle Tracking Device" width="500" height="450">

                        </div>

                        <p class="inner_sec3_tab_content_tx">Hybrid trackers combine GPS and cellular technologies, offering the best of both worlds. They provide highly accurate location data from satellites and maintain connectivity through cellular networks when GPS signals are weak. This makes them ideal for both urban and rural environments across America.</p>
                        <p class="inner_sec3-content-sub_hd">Benefits of Hybrid Vehicle Trackers</p>

                        <ul class="inner_sec3_tab-lst">
                            <li><strong>Dual Technology:</strong> Combines GPS accuracy with cellular connectivity.</li>
                            <li><strong>Reliable Coverage:</strong> Performs well in areas with spotty satellite signals.</li>
                            <li><strong>Enhanced Accuracy:</strong> Offers better tracking reliability than cellular-only devices.</li>
                            <li><strong>Versatility:</strong> Suitable for use across urban, rural, and remote areas.</li>
                            <li><strong>Backup Communication:</strong> Cellular networks act as a fail-safe for continuous tracking.</li>
                        </ul>

                    </div>

                    <div class="inner_sec3_tab_img hideMob">

                        <img src="{{ asset('images/inner_sec3-vehicle-tab3.webp') }}" alt="Hybrid Vehicle Tracking Device" width="500" height="450">

                    </div>

                </div>

            </div>

        </div>



        <div class="clearall"></div>

        <div class="btn-bx">

            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Vehicle Tracking Device Quotes">Get Started Today</a>

        </div>

    </div>

</div>



<div class="why_choose">

    <div class="container">

        <div class="why_choose_left">

            <p class="heading">Why Choose<br class="hideMob"> Go Quote Rocket</p>

            <p class="comn_text">Finding the right GPS tracking device can feel overwhelming, but we're here to make it simple. At <a href="{{ route('home') }}" alt="Affordable Insurance Quotes USA">Go Quote Rocket</a>, we connect you with a reliable, trusted provider who can guide you through the process of picking the right GPS tracking device. You'll be able to make the right choice for your needs and budget.</p>
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

                    <p>Compare tracking device quotes. Choose the best for you.</p>

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

        <p class="heading">Why Every American<br> Driver Needs A Vehicle Tracker</p>

        <p class="comn_text">With car theft on the rise, a GPS tracker is your ultimate defense. From <strong>recovering stolen vehicles to lowering insurance premiums</strong>,<br class="showDesk"> it offers unmatched security, peace of mind, and control over your car's safety.</p>



        <div class="inner_sec4_inr">

            <div class="inner_sec4_inr_bx">

                <img src="{{ asset('images/inner-sec4-vehicle-icon1.png') }}" alt="Location Tracking Icon" class="inner_sec4_icn" width="200" height="124">

                <h3>Real-Time<br class="hideMob"> Location Tracking</h3>

                <p>Know where your vehicle is at all times with live updates accessible from your smartphone or computer.</p>

            </div>

            <div class="inner_sec4_inr_bx">

                <img src="{{ asset('images/inner-sec4-vehicle-icon2.png') }}" alt="Car Theft Prevention Icon" class="inner_sec4_icn" width="200" height="124">

                <h3>Theft<br class="hideMob"> Prevention</h3>

                <p>Deter criminals with a visible GPS tracker and advanced anti-theft features designed to keep your car safe.</p>

            </div>

            <div class="inner_sec4_inr_bx">

                <img src="{{ asset('images/inner-sec4-vehicle-icon3.png') }}" alt="Stolen Vehicle Recovery Icon" class="inner_sec4_icn" width="200" height="124">

                <h3>Stolen Vehicle<br class="hideMob"> Recovery</h3>

                <p>If your car is stolen, GPS tracking enables quick recovery by pinpointing its exact location.</p>

            </div>

            <div class="inner_sec4_inr_bx">

                <img src="{{ asset('images/inner-sec4-vehicle-icon4.png') }}" alt="Lower Insurance Premium Icon" class="inner_sec4_icn" width="200" height="124">

                <h3>Lower Insurance<br class="hideMob"> Premiums</h3>

                <p>Many insurers offer discounts for vehicles equipped with GPS trackers, helping you save money on premiums.</p>

            </div>

            <div class="inner_sec4_inr_bx">

                <img src="{{ asset('images/inner-sec4-vehicle-icon5.png') }}" alt="Speed Alert Icon" class="inner_sec4_icn" width="200" height="124">

                <h3>Speed<br class="hideMob"> Alerts</h3>

                <p>Receive notifications when your vehicle exceeds a pre-set speed limit, promoting safer driving habits.</p>

            </div>

            <div class="inner_sec4_inr_bx">

                <img src="{{ asset('images/inner-sec4-vehicle-icon6.png') }}" alt="Geofencing Icon" class="inner_sec4_icn" width="200" height="124">

                <h3>Geofencing<br class="hideMob"> Capabilities</h3>

                <p>Set virtual boundaries and get alerts when your vehicle enters or exits specific areas, ensuring it stays within authorized zones.</p>

            </div>

            <div class="inner_sec4_inr_bx">

                <img src="{{ asset('images/inner-sec4-vehicle-icon7.png') }}" alt="Driver Behavior Monitoring Icon" class="inner_sec4_icn" width="200" height="124">

                <h3>Driver Behavior<br class="hideMob"> Monitoring</h3>

                <p>Track driving habits like harsh braking, rapid acceleration, or excessive speeding to promote safer and more responsible driving.</p>

            </div>

            <div class="inner_sec4_inr_bx">

                <img src="{{ asset('images/inner-sec4-vehicle-icon8.png') }}" alt="Trip History Reporting Icon" class="inner_sec4_icn" width="200" height="124">

                <h3>Trip History<br class="hideMob"> Reports</h3>

                <p>Access detailed reports of your vehicle's travel routes, stops, and mileage for better planning and tracking.</p>

            </div>

            <div class="inner_sec4_inr_bx">

                <img src="{{ asset('images/inner-sec4-vehicle-icon9.png') }}" alt="Emergency Assistance Icon" class="inner_sec4_icn" width="200" height="124">

                <h3>Emergency<br class="hideMob"> Assistance</h3>

                <p>Some GPS trackers offer emergency features like SOS alerts or direct communication with recovery teams, ensuring help is always within reach.</p>

            </div>

        </div>



        <div class="btn-bx">

            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Vehicle Tracking Device Quotes">Get Started Today</a>

        </div>

    </div>

</div>



<div class="sec3">

    <div class="container">

        <p class="heading">Over 500,000<br class="showMob"> Americans Trust Us.</p>

        <div class="feefo_box">

            <img src="{{ asset('images/feefo-logo.png') }}" alt="" class="feefo_log" width="366" height="84">

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

                <p class="reviews_text">"I couldn't believe how quickly Go Quote Rocket found me the best tracker options. The whole process was stress-free and saved me so much time."</p>

                <div class="reviews_name"><img src="{{ asset('images/jennifer.jpg') }}" alt="Customer Named Jennifer" width="100" height="100" class="rev_fc">
                    <p><span>Jennifer</span><br> Phoenix, AZ</p>
                </div>

                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">

            </div>

        </div>



        <div class="reviews_box">

            <div class="reviews_content">

                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                <p class="reviews_text">"Go Quote Rocket's customer service was outstanding. They answered all my questions and helped me choose a tracker that worked perfectly for my budget."</p>

                <div class="reviews_name"><img src="{{ asset('images/marcus.jpg') }}" alt="Customer Named Marcus" width="100" height="100" class="rev_fc">
                    <p><span>Marcus</span><br> Atlanta, GA</p>
                </div>

                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">

            </div>

        </div>



        <div class="reviews_box">

            <div class="reviews_content">

                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                <p class="reviews_text">"I'm so glad I used Go Quote Rocket! They compared multiple options for me and found the best deal in minutes. Highly efficient and reliable."</p>

                <div class="reviews_name"><img src="{{ asset('images/mike.jpg') }}" alt="Customer Named Mike" width="100" height="100" class="rev_fc">
                    <p><span>Mike</span><br> Denver, CO</p>
                </div>

                <img src="{{ asset('images/star.png') }}" alt="5 Star Rating" class="reviews_star" width="228" height="40">

            </div>

        </div>



        <div class="reviews_box">

            <div class="reviews_content">

                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                <p class="reviews_text">"Go Quote Rocket's service was incredibly fast and efficient. They provided me with great options and unbeatable prices. I'm thrilled with the deal I got."</p>

                <div class="reviews_name"><img src="{{ asset('images/david.jpg') }}" alt="Customer Named David" width="100" height="100" class="rev_fc">
                    <p><span>David</span><br> Houston, TX</p>
                </div>

                <img src="{{ asset('images/star.png') }}" alt="5 Star Rated" class="reviews_star" width="228" height="40">

            </div>

        </div>



        <div class="reviews_box">

            <div class="reviews_content">

                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                <p class="reviews_text">"Finding the right GPS tracker was so easy with Go Quote Rocket. The options were tailored to my needs, and everything was simple and straightforward."</p>

                <div class="reviews_name"><img src="{{ asset('images/ashley.jpg') }}" alt="Customer Named Ashley" width="100" height="100" class="rev_fc">
                    <p><span>Ashley</span><br> Miami, FL</p>
                </div>

                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">

            </div>

        </div>



        <div class="reviews_box">

            <div class="reviews_content">

                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                <p class="reviews_text">"Excellent service! Go Quote Rocket made it easy to find a great GPS tracker deal. They were professional and very helpful throughout the process."</p>

                <div class="reviews_name"><img src="{{ asset('images/james.jpg') }}" alt="Customer Named James" width="100" height="100" class="rev_fc">
                    <p><span>James</span><br> Los Angeles, CA</p>
                </div>

                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">

            </div>

        </div>



        <div class="reviews_box">

            <div class="reviews_content">

                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                <p class="reviews_text">"Go Quote Rocket was a lifesaver! They helped me find a tracker quickly with a smooth, convenient process. Highly recommended."</p>

                <div class="reviews_name"><img src="{{ asset('images/sarah.jpg') }}" alt="Customer Named Sarah" width="100" height="100" class="rev_fc">
                    <p><span>Sarah</span><br> Chicago, IL</p>
                </div>

                <img src="{{ asset('images/star.png') }}" alt="5 Star Review" class="reviews_star" width="228" height="40">

            </div>

        </div>

        <div class="reviews_box reviews_box-last">

            <div class="reviews_content">

                <img src="{{ asset('images/rev-quote.png') }}" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                <p class="reviews_text">"Go Quote Rocket's system was so easy to use. I quickly found the coverage I needed without any hassle. Fantastic experience!"</p>

                <div class="reviews_name"><img src="{{ asset('images/emily.jpg') }}" alt="Customer Named Emily" width="100" height="100" class="rev_fc">
                    <p><span>Emily</span><br> Seattle, WA</p>
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

                    <div class="accordion acdn-heading accordion-open" id="hd-one">What is a GPS vehicle tracking device?</div>

                    <div class="acdn-content">

                        <p class="acdn-para">A GPS vehicle tracking device uses satellite technology to monitor and report the real-time location of your <a href="{{ route('products.car-insurance') }}" alt="Car Insurance Quotes">car</a>. It's designed to improve vehicle security, help recover stolen cars, and even lower your insurance premiums.</p>

                    </div>

                </div>

            </div>



            <div class="up-slide-dwn">

                <div class="faq-innr">

                    <div class="accordion acdn-heading accordion-close">How does installing a GPS tracker reduce my insurance premium?</div>

                    <div class="acdn-content" style="display: none;">

                        <p class="acdn-para">Many <a href="{{ route('home') }}" alt="Insurance Quotes USA">insurers</a> in the USA offer discounts for vehicles equipped with GPS trackers because they lower the risk of theft and increase recovery chances, making them a cost-effective security solution.</p>

                    </div>

                </div>

            </div>



            <div class="up-slide-dwn">

                <div class="faq-innr">

                    <div class="accordion acdn-heading accordion-close">Is a GPS tracker suitable for all types of vehicles?</div>

                    <div class="acdn-content" style="display: none;">

                        <p class="acdn-para">Yes, GPS trackers can be installed on most <a href="{{ route('products.motor-warranty') }}" alt="Extended Auto Warranty Quotes">vehicles</a>, including cars, trucks, and motorcycles. They are also widely used for fleet management in businesses.</p>

                    </div>

                </div>

            </div>



            <div class="up-slide-dwn">

                <div class="faq-innr">

                    <div class="accordion acdn-heading accordion-close">Can I track my vehicle in real-time?</div>

                    <div class="acdn-content" style="display: none;">

                        <p class="acdn-para">Yes, GPS trackers provide live location updates, allowing you to monitor your vehicle's movements in real-time via a smartphone app or web platform.</p>

                    </div>

                </div>

            </div>



            <div class="up-slide-dwn">

                <div class="faq-innr">

                    <div class="accordion acdn-heading accordion-close">What happens if my vehicle is stolen?</div>

                    <div class="acdn-content" style="display: none;">

                        <p class="acdn-para">If your vehicle is stolen, the GPS tracker enables authorities to locate and recover it quickly. Many devices also offer direct integration with recovery services for added convenience.</p>

                    </div>

                </div>

            </div>



            <div class="up-slide-dwn">

                <div class="faq-innr">

                    <div class="accordion acdn-heading accordion-close">Are there any additional costs for using a GPS tracker?</div>

                    <div class="acdn-content" style="display: none;">

                        <p class="acdn-para">Some GPS trackers may require a monthly subscription for accessing advanced features like live tracking, geofencing, and recovery support. Be sure to check the details when comparing quotes.</p>

                    </div>

                </div>

            </div>



            <div class="up-slide-dwn">

                <div class="faq-innr">

                    <div class="accordion acdn-heading accordion-close">Can I use a GPS tracker to monitor someone else's driving?</div>

                    <div class="acdn-content" style="display: none;">

                        <p class="acdn-para">Yes, you can monitor driving behavior, such as speed and route, which is especially useful for managing fleets or ensuring safe driving habits for young or inexperienced drivers.</p>

                    </div>

                </div>

            </div>



            <div class="up-slide-dwn">

                <div class="faq-innr">

                    <div class="accordion acdn-heading accordion-close">How does geofencing work?</div>

                    <div class="acdn-content" style="display: none;">

                        <p class="acdn-para">Geofencing allows you to set virtual boundaries around specific areas. If your vehicle enters or exits these zones, you'll receive an alert on your device.</p>

                    </div>

                </div>

            </div>



            <div class="up-slide-dwn">

                <div class="faq-innr">

                    <div class="accordion acdn-heading accordion-close">Is the installation process complicated?</div>

                    <div class="acdn-content" style="display: none;">

                        <p class="acdn-para">No, most GPS trackers are easy to install. Some devices are plug-and-play, while others may require professional installation for optimal performance.</p>

                    </div>

                </div>

            </div>



            <div class="up-slide-dwn">

                <div class="faq-innr">

                    <div class="accordion acdn-heading accordion-close">Can I compare multiple GPS tracking quotes before committing?</div>

                    <div class="acdn-content" style="display: none;">

                        <p class="acdn-para">Yes, comparing quotes is a great way to find the best GPS tracking device for your needs and budget. You're under no obligation to commit until you agree to the terms of the provider.</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



<div class="blue_strip">

    <div class="blue_strip_cont">

        <h3>Ready to get started?</h3>

        <p>Compare GPS tracker quotes today!</p>

    </div>



    <div class="blue_strip_btn">

        <div class="btn-bx">

            <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn">Get Quote Now</a>

        </div>

    </div>

</div>

<div id="error_handler_overlay" style="display: none;">
    <div class="error_handler_body"><a href="javascript:void(0);" id="error_handler_overlay_close">X</a>
        <p>Unfortunately, we're unable to submit your information at this time. Please check the information you provided to ensure it's correct before submitting again.</p>
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
        var phoneErrors = [];
        var termsError = [];

        // US Phone formatting (XXX) XXX-XXXX
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

        // Phone validation
        $("input[name='phone']").keyup(function() {
            let phoneNumber = $(this).val().replace(/\D/g, '');
            validateUSPhone(phoneNumber);
            $(this).next('.error_message').hide();
        });

        function validateUSPhone(phoneNumber) {
            const promptText = 'Please enter a valid 10-digit US phone number.';
            if (phoneNumber.length < 10) {
                phoneErrors = [promptText];
                $('#phone_prompt').text(promptText).show();
            } else if (phoneNumber.length === 10) {
                $('#phone_prompt').hide();
                phoneErrors = [];
            }
        }

        // Terms checkbox validation
        document.getElementById('checkbox_terms').addEventListener('click', validateCheckbox);

        function validateCheckbox() {
            const checkbox = document.getElementById('checkbox_terms');
            const errorMessage = 'You must agree to our terms to submit your information.';
            if (checkbox.checked) {
                $('#checkbox_error_message').hide();
                termsError = [];
            } else {
                $('#checkbox_error_message').text(errorMessage).show();
                termsError = [errorMessage];
            }
        }

        // Clear errors on input
        $("select[name=state], select[name=vehicle_use], select[name=vehicle_make], select[name=has_tracker]").on('change', function() {
            $(this).next('.error_message').hide();
        });

        $("input[name='first_name'], input[name='last_name'], input[name='email']").keyup(function() {
            $(this).next('.error_message').hide();
        });

        // Error handler close
        $(document).on('click', '#error_handler_overlay_close', function() {
            $('#error_handler_overlay').hide();
        });

        // TAB functionality
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

    function submitLead() {
        var errors = [];
        var phoneErrors = [];
        var termsError = [];

        // Validate checkbox
        const checkbox = document.getElementById('checkbox_terms');
        if (!checkbox.checked) {
            $('#checkbox_error_message').text('You must agree to our terms to submit your information.').show();
            termsError.push('Terms error');
        } else {
            $('#checkbox_error_message').hide();
        }

        // Validate required fields
        $('input.required, select.required').each(function() {
            var input = $(this);
            if (input.val().trim() === '') {
                input.next('.error_message').show();
                input.next().text(input.attr('data-error-message'));
                errors.push(input.attr('data-error-message'));
            }
        });

        // Validate phone
        let phoneNumber = $("input[name='phone']").val().replace(/\D/g, '');
        if (phoneNumber.length < 10) {
            $('#phone_prompt').show();
            phoneErrors.push('Phone error');
        }

        if (errors.length === 0 && phoneErrors.length === 0 && termsError.length === 0) {
            $('#loading-indicator').show();

            let phoneDigits = $("input[name='phone']").val().replace(/\D/g, '');

            let formData = {
                _token: $('meta[name="csrf-token"]').attr('content'),
                product_type: 'vehicle_tracker',
                first_name: $("input[name='first_name']").val(),
                last_name: $("input[name='last_name']").val(),
                phone: phoneDigits,
                email: $("input[name='email']").val(),
                state: $("select[name='state']").val(),
                vehicle_use: $("select[name='vehicle_use']").val(),
                vehicle_make: $("select[name='vehicle_make']").val(),
                has_tracker: $("select[name='has_tracker']").val(),
                consent: $('#checkbox_terms').is(':checked') ? 1 : 0,
                funnel_id: 'GPS'
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
    }
</script>
@endpush
