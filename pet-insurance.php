<?php
$queryParams = !empty($_SERVER['QUERY_STRING']) ? "&" . $_SERVER['QUERY_STRING'] : '';

$aff_sub = $_REQUEST['aff_sub'] ?? '0022';
$aff_sub2 = $_REQUEST['aff_sub2'] ?? null;
$aff_sub3 = $_REQUEST['aff_sub3'] ?? 'organic';
$funnelId = "Pet";

?>
<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Affordable Pet Insurance Quotes in the USA | Go Quote Rocket</title>

    <meta name="description" content="Protect your furry friends with affordable pet insurance. Compare pet insurance quotes in the USA and save with Go Quote Rocket.">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!--PreloadFile -->
    <link rel="preload" href="images/inner-sec1-pet-insur.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img1.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img2.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img3.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-pet-tab1.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-pet-tab2.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-pet-tab3.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/footer-logos-gray.svg" type="image/svg+xml" as="image" />
    <!--PreloadFile End-->

    <link rel="preload" href="css/error-handler.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="css/loader-design.css" as="style" onload="this.rel='stylesheet'">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/slick.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Manrope:wght@200..800&display=swap" rel="stylesheet">


    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                    "@type": "Question",
                    "name": "What is pet insurance?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Pet insurance is a policy that helps cover the cost of veterinary care for your pet, including accidents, illnesses, and routine treatments, depending on the plan."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Does pet insurance cover all breeds and types of pets?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, most providers cover dogs and cats of all breeds. Some also offer coverage for exotic pets, but this may vary by provider."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What’s included in a pet insurance policy?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Policies vary but generally cover accidents, illnesses, surgeries, and optional routine care like vaccinations and check-ups."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How much does pet insurance cost?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The cost depends on your pet’s age, breed, health, and the level of coverage. Comparing quotes can help you find an affordable plan."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can I get insurance for an older pet?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, many providers offer coverage for senior pets, although premiums may be higher, and pre-existing conditions might not be covered."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Does pet insurance cover pre-existing conditions?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "No, most pet insurance plans exclude pre-existing conditions, but some may offer coverage for certain conditions after a waiting period."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How do I claim on my pet insurance?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Simply submit your vet bills and necessary documentation to your insurance provider for reimbursement, as per your policy terms."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can I visit any vet?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, most pet insurance plans allow you to visit any licensed veterinarian in the USA."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Is routine care covered by pet insurance?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Routine care is typically an optional add-on that covers vaccinations, dental care, and preventative treatments."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What happens if I cancel my pet insurance?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "If you cancel your policy, coverage will end immediately, and any claims made after cancellation won’t be covered."
                    }
                }
            ]
        }
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NPP3PH3H');
    </script>
    <!-- End Google Tag Manager -->
</head>



<body class="inner_pg pet_insurance">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPP3PH3H"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php include 'header.php'; ?>



    <div class="inner_sec1" id="choosePack">

        <div class="container">

            <p class="inner_sec1-rat-txt"><img src="images/sec1-star.png" alt="Customer Reviews" width="148" height="26"> <span>4.8 stars</span> 2,000+ reviews</p>

            <p class="inner_sec1-hdg">Pet Insurance Plans<br class="showDesk"> Starting at R84 per Month</p>

            <p class="inner_sec1_txt">Get coverage for <strong>accidents, illnesses, and routine car</strong> with<br class="showDesk"> pet insurance tailored to your needs.</p>


            <div class="inner_sec1-form" id="toForm">

                <form method="POST" name="pet_api1" class="auto_zip">
                    <input type="hidden" name="petApi" value="Yes">
                    <input type="hidden" name="aff_id" value="<?= $aff_id; ?>" />
                    <input type="hidden" name="offer_id" value="<?= $offer_id; ?>" />
                    <input type="hidden" name="aff_sub" value="<?= $aff_sub; ?>" />
                    <input type="hidden" name="aff_sub2" value="<?= $aff_sub2; ?>" />
                    <input type="hidden" name="aff_sub3" value="<?= $aff_sub3; ?>" />
                    <input type="hidden" name="funnelId" value="<?= $funnelId; ?>" />
                    <div class="form__field">

                        <div class="form__input form__input--2">

                            <div class="form_input_box">
                                <input type="text" value="" name="given-name" placeholder="First Name" class="input-fld required" data-error-message="Please enter your first name.">
                                <div class="error_message text-left" style="display:none"></div>
                            </div>
                            <div class="form_input_box">
                                <input type="text" value="" name="family-name" placeholder="Surname" class="input-fld required" data-error-message="Please enter your surname.">
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                        </div>

                        <div class="form__input form__input--2">

                            <div class="form_input_box">
                                <input type="tel" value="" name="phone" placeholder="Phone Number" class="input-fld required" data-error-message="Please enter your phone number without the country code first" maxlength="10" onkeyup="javascript: this.value = this.value.replace(/[^0-9 + ]/g, '');">
                                <div class="error_message text-left" style="display: none;" id="phone_prompt">
                                    <span class="phone-prompt-error">Please check that your phone number is in local format 0xx xxx xxxx. Numbers starting with 086, 085, 080,or 09 aren't supported.</span>
                                </div>
                            </div>

                            <div class="form_input_box">
                                <input type="email" name="email" id="" class="input-fld required" placeholder="Email" data-error-message="Please enter your email address.">
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                        </div>

                        <div class="form__input form__input--2">

                            <div class="form_input_box">
                                <select name="number_of_pets" class="input-fld required" data-error-message="Please opt your pets number.">

                                    <option value="" selected="">How many pets do you have?</option>

                                    <option value="1">1</option>

                                    <option value="2">2</option>

                                    <option value="3">3</option>

                                    <option value="4">4</option>

                                    <option value="5">5</option>

                                    <option value="6">6+</option>

                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                            <div class="form_input_box">
                                <select name="pet_age" class="input-fld required" data-error-message="Please opt your pets information.">

                                    <option value="" selected="">Are any of your pets older than 9 years?</option>

                                    <option value="true">Yes</option>

                                    <option value="false">No</option>

                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                        </div>

                    </div>



                    <div class="form_bottom">

                        <ul class="form_lst">

                            <li><img src="images/secure.svg" alt="100% Secure Form Icon"> 100% SECURE FORM</li>

                            <li><img src="images/heart.svg" alt="No Commitment Required Icon"> NO COMMITMENT REQUIRED</li>

                        </ul>

                        <div class="form__button err_msg_ottr">

                            <button type="button" class="apiBtn">Get Started Today!</button>

                            <p class="form_terms"><input type="checkbox" name="" id="checkbox_terms" class="form_checkbox" checked> <span></span> <label for="checkbox_terms">Yes, I accept the <a href="terms.php" target="_blank">terms and conditions</a></label>.</p>

                            <div class="error_message text-left err_msg" id="checkbox_error_message" style="display: none;">You must agree to our terms to submit your information.</div>
                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>



    <div class="as-seen">

        <div class="container">

            <p class="as-seen__heading">Quotes by the USA's top providers, including:</p>

        </div>



        <div class="brand__strip__scroller">

            <ul class="scroll__brand__list">

                <li><img src="images/auto-general-logo.svg" alt="Auto & General Pet Insurance Logo" class="auto-general_logo"></li>

                <li><img src="images/first-for-women-logo.svg" alt="First For Women Pet Insurance Logo"></li>

            </ul>

        </div>

    </div>



    <div class="inner_sec2">

        <div class="container">

            <p class="heading">How We Make Finding<br> Pet Insurance Easy</p>

            <p class="comn_text comn_text--center">We know choosing the right pet insurance can feel overwhelming. That’s why Go Quote Rocket simplifies the process for you. In just a few steps, we’ll connect you with trusted providers, helping you secure the most reliable and affordable pet insurance, hassle-free.</p>



            <div class="sec2_inr">

                <div class="sec2_inr_bx">

                    <img src="images/inner-sec2-img1.webp" alt="Guy Filling Put Form For Pet Insurance" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>One Quick Form</h3>

                        <p>Fill out our secure, straightforward form in just 60 seconds. Your information is always protected, and we’ll handle the rest to find the best insurance for your furry friend.</p>

                    </div>

                </div>

                <div class="sec2_inr_bx">

                    <img src="images/inner-sec2-img2.webp" alt="Options For Pet Insurance" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>Tailored Insurance</h3>

                        <p>We’ll instantly search and present the best pet insurance plans that match your pet’s needs and your budget, ensuring you find the perfect coverage for their health and your peace of mind.</p>

                    </div>

                </div>

                <div class="sec2_inr_bx">

                    <img src="images/inner-sec2-img3.webp" alt="Expert Pet Insurance Provider" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>Trusted Experts Ready</h3>

                        <p>Connect with a vetted, experienced pet insurance provider who will guide you through the process, giving you confidence that your pet is fully protected.</p>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <div class="inner_sec3">

        <div class="container">

            <p class="heading">Compare & Save<br class="showDesk"> On Pet Insurance</p>

            <p class="comn_text">Give your furry friend the care they deserve without worrying about high veterinary bills. Whether you’re<br class="showDesk"> looking for comprehensive coverage, accident-only plans, or routine care add-ons, we help<br class="showDesk"> you <strong>compare the best pet insurance options in the USA and save</strong>.</p>

            <div class="inner_sec3_row">

                <div class="inner_sec3_tab-row hideMob">

                    <div class="inner_sec3_tab-col active" data-target="#tab_col_1">
                        <p>Comprehensive Pet Insurance</p>
                    </div>

                    <div class="inner_sec3_tab-col" data-target="#tab_col_2">
                        <p>Accident-Only Pet Insurance</p>
                    </div>

                    <div class="inner_sec3_tab-col" data-target="#tab_col_3">
                        <p>Additional Add-Ons</p>
                    </div>

                </div>



                <div class="mob-div">

                    <div class="accdn-hd showMob">
                        <p>Comprehensive Pet Insurance</p><span class="icon">+</span>
                    </div>

                    <div class="inner_sec3_tab_content-box hideMob" id="tab_col_1">

                        <div class="inner_sec3_tab_content">

                            <h3 class="inner_sec3_tab_content_hd hideMob">Comprehensive Pet Insurance</h3>



                            <div class="inner_sec3_tab_img e-com_img showMob">

                                <img src="images/inner_sec3-pet-tab1.webp" alt="Comprehensive Pet Insurance" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">Comprehensive coverage is the most inclusive pet insurance option, providing protection for accidents, illnesses, diagnostics, surgeries, and hereditary conditions. It offers reimbursement for treatments, vet visits, and even post-operative care, ensuring your pet gets the best care possible. This plan is ideal for pet owners who want full coverage for their pet’s health needs.</p>
                            <p class="inner_sec3-content-sub_hd">Benefits of Comprehensive Pet Insurance</p>

                            <ul class="inner_sec3_tab-lst">

                                <li><strong>Vet Consultations:</strong> Routine visits and general check-ups.</li>
                                <li><strong>Diagnostics:</strong> Radiology, blood tests, biopsies, and more.</li>
                                <li><strong>Surgery:</strong> Coverage for necessary operations, including pre-authorized payments directly to vets.</li>
                                <li><strong>Cancer Treatment:</strong> Radiation and chemotherapy for severe illnesses.</li>
                                <li><strong>Hereditary Conditions:</strong> No exclusions based on breed-related health issues.</li>
                                <li><strong>Rehabilitation:</strong> Post-operative care, including physical therapy.</li>
                                <li><strong>Medications:</strong> Acute treatments for short-term conditions.</li>

                            </ul>

                        </div>

                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-pet-tab1.webp" alt="Comprehensive Pet Insurance Coverage" width="500" height="450">

                        </div>

                    </div>

                </div>



                <div class="mob-div">

                    <div class="accdn-hd showMob">
                        <p>Accident-Only Pet Insurance</p> <span class="icon">+</span>
                    </div>

                    <div class="inner_sec3_tab_content-box" id="tab_col_2" style="display: none;">

                        <div class="inner_sec3_tab_content">

                            <h3 class="inner_sec3_tab_content_hd hideMob">Accident-Only Pet Insurance</h3>



                            <div class="inner_sec3_tab_img e-com_img showMob">

                                <img src="images/inner_sec3-pet-tab2.webp" alt="Accident Coverage Pet Insurance" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">Accident coverage is designed for pet owners seeking affordable protection against unexpected events. It covers injuries and emergencies caused by accidents such as car collisions, falls, and poisonings. This plan is perfect for those wanting essential protection for their pets without the cost of comprehensive coverage.</p>
                            <p class="inner_sec3-content-sub_hd">What's Covered with Accident-Only Pet Insurance</p>

                            <ul class="inner_sec3_tab-lst">
                                <li><strong>Car Accidents:</strong> Injuries resulting from motor vehicle collisions.</li>
                                <li><strong>Burns and Electrocution:</strong> Cover for injuries caused by chewing cables or other hazards.</li>
                                <li><strong>Falls:</strong> Accidents from elevated positions or rough play.</li>
                                <li><strong>Animal Attacks:</strong> Injuries caused by fights with other animals.</li>
                                <li><strong>Foreign Object Removal:</strong> Surgical or endoscopic removal of swallowed objects.</li>
                                <li><strong>Snake and Insect Bites:</strong> Reactions to bites, including life-threatening scenarios.</li>
                                <li><strong>Poisoning:</strong> Accidental ingestion of harmful substances.</li>
                                <li><strong>Fractures and Wounds:</strong> Treatment for broken bones, ligament tears, and deep lacerations.</li>

                            </ul>

                        </div>



                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-pet-tab2.webp" alt="Accident Only Pet Insurance" width="500" height="450">

                        </div>

                    </div>

                </div>



                <div class="mob-div">

                    <div class="accdn-hd showMob">
                        <p>Additional Add-Ons</p> <span class="icon">+</span>
                    </div>

                    <div class="inner_sec3_tab_content-box" id="tab_col_3" style="display: none;">

                        <div class="inner_sec3_tab_content">

                            <h3 class="inner_sec3_tab_content_hd hideMob">Additional Add-Ons</h3>



                            <div class="inner_sec3_tab_img e-com_img showMob">

                                <img src="images/inner_sec3-pet-tab3.webp" alt="Pet Insurance Additional Add-Ons" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">Enhance your pet insurance plan with add-ons that cater to specific needs, including coverage for exotic pets, preventative care, and more. These options allow you to customize your policy for maximum peace of mind.</p>
                            <p class="inner_sec3-content-sub_hd">What's Covered with Additional Add-Ons</p>

                            <ul class="inner_sec3_tab-lst">

                                <li><strong>Exotic Pet Coverage:</strong> Insure reptiles, birds, or small mammals.</li>
                                <li><strong>Routine Care Benefits:</strong> Coverage for vaccinations, flea treatments, and deworming.</li>
                                <li><strong>Dental Care:</strong> Ensure your pet’s oral health with preventative and emergency dental coverage.</li>
                                <li><strong>Travel Insurance:</strong> Protection for pets traveling domestically or internationally.</li>
                                <li><strong>Chronic Condition Coverage:</strong> Ongoing care for pets with diabetes, arthritis, or similar conditions.</li>
                                <li><strong>Breeding and Pregnancy:</strong> Specialized care for breeding animals or pregnant pets.</li>

                            </ul>

                        </div>

                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-pet-tab3.webp" alt="Pet Insurance Additional Add-Ons" width="500" height="450">

                        </div>

                    </div>

                </div>

            </div>



            <div class="clearall"></div>

            <div class="btn-bx">

                <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Pet Insurance Quotes">Get Started Today</a>

            </div>

        </div>

    </div>



    <div class="why_choose">

        <div class="container">

            <div class="why_choose_left">

                <p class="heading">Why Choose<br class="hideMob"> Go Quote Rocket</p>

                <p class="comn_text">Finding the right pet insurance can feel overwhelming, but we’re here to make it simple. At <a href="/" alt="Insurance Quotes">Go Quote Rocket</a>, we connect you with multiple authorized insurers, so you can compare options side by side. Our process is designed to save you time, reduce stress, and help you secure the most reliable and affordable coverage available.</p>

            </div>

            <div class="why_choose_right">

                <ul class="why_choose_lst">

                    <li>

                        <img src="images/why-chose-icn1.png" alt="Save Time Icon" class="why-chose_icn" width="84" height="92">

                        <h3>Save Time</h3>

                        <p>Find all the prices and benefits you need in 1 minute.</p>

                    </li>

                    <li>

                        <img src="images/why-chose-icn2.png" alt="Save Money Icon" class="why-chose_icn" width="84" height="92">

                        <h3>Save Money</h3>

                        <p>Compare insurance quotes. Choose the best for you.</p>

                    </li>

                    <li>

                        <img src="images/why-chose-icn3.png" alt="Save Stress Icon" class="why-chose_icn" width="84" height="92">

                        <h3>Save Stress</h3>

                        <p>Avoid hidden fees and keep your personal information private.</p>

                    </li>

                    <li>

                        <img src="images/why-chose-icn4.png" alt="Save Smart Icon" class="why-chose_icn" width="84" height="92">

                        <h3>Save Smart</h3>

                        <p>Quick comparisons, explained by a trusted expert.</p>

                    </li>

                </ul>

            </div>

        </div>

    </div>



    <div class="inner_sec4">

        <div class="container">

            <p class="heading">Benefits of Pet Insurance<br> For Your Furbaby</p>

            <p class="comn_text">Pet insurance ensures your furry friend gets the care they need while protecting you from unexpected vet bills.<br class="showDesk"> It’s a smart way to manage costs and provide <strong>peace of mind for your pet’s health and happiness.</strong></p>



            <div class="inner_sec4_inr">

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-pet-icon1.png" alt="Financial Protection Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Financial<br> Protection</h3>

                    <p>Avoid high veterinary bills for unexpected illnesses or accidents.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-pet-icon2.png" alt="Pease of Mind Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Peace of<br> Mind</h3>

                    <p>Focus on your pet’s well-being without worrying about the cost.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-pet-icon3.png" alt="Comprehensive Care Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Comprehensive<br> Care</h3>

                    <p>Access a wide range of treatments, from emergency surgeries to routine check-ups.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-pet-icon4.png" alt="Affordable Monthly Premiums Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Affordable<br> Monthly Premiums</h3>

                    <p>Choose a plan that fits your budget and your pet’s needs.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-pet-icon5.png" alt="Emergency Coverage Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Emergency<br> Coverage</h3>

                    <p>Be prepared for accidents, injuries, and critical illnesses.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-pet-icon6.png" alt="Emergency Coverage Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Early Issue<br> Detection</h3>

                    <p>Routine care plans help catch potential health problems early.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-pet-icon8.png" alt="Early Issue Detection Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Flexible<br> Plans</h3>

                    <p>Tailor your coverage to suit your pet’s breed, age, and health status.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-pet-icon9.png" alt="Flexible Plans Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Long-Term<br> Savings</h3>

                    <p>Save money on unexpected medical costs over your pet’s lifetime.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-pet-icon10.png" alt="Increased Lifespan Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Increased<br> Lifespan</h3>

                    <p>Provide consistent and quality<br class="showMob"> care to keep your pet healthier<br class="showMob"> for longer.</p>

                </div>

            </div>



            <div class="btn-bx">

                <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Pet Insurance Quotes">Get Started Today</a>

            </div>

        </div>

    </div>



    <div class="sec3">

        <div class="container">

            <p class="heading">Over 744 409<br class="showMob"> Americans Trust Us.</p>

            <div class="feefo_box">

                <img src="images/feefo-logo.png" alt="" class="feefo_log" width="366" height="84">

                <div class="feefo_review">

                    <img src="images/star.png" alt="" width="228" height="40">

                    <p>4.8/5 Based On 2000+ reviews</p>

                </div>

            </div>

        </div>



        <div class="reviews">

            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"I couldn’t believe how quickly Go Quote Rocket found me the best insurance options. The whole process was stress-free and saved me so much time."</p>

                    <div class="reviews_name"><img src="images/ntombi.jpg" alt="Customer Named Loren" width="100" height="100" class="rev_fc">
                        <p><span>Loren</span><br> Port Elizabeth</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Review" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"Go Quote Rocket’s customer service was outstanding. They answered all my questions and helped me choose a plan that worked perfectly for my budget."</p>

                    <div class="reviews_name"><img src="images/themba.jpg" alt="Customer Named Themba" width="100" height="100" class="rev_fc">
                        <p><span>Themba</span><br> Bloemfontein</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Review" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"I’m so glad I used Go Quote Rocket! They compared multiple options for me and found the best deal in minutes. Highly efficient and reliable."</p>

                    <div class="reviews_name"><img src="images/lebo.jpg" alt="Customer Named Mike" width="100" height="100" class="rev_fc">
                        <p><span>Mike</span><br> East London</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Rating" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"Go Quote Rocket’s service was incredibly fast and efficient. They provided me with great options and unbeatable prices. I’m thrilled with the deal I got and highly recommend them."</p>

                    <div class="reviews_name"><img src="images/marthinus.jpg" alt="Customer Named Marthinus" width="100" height="100" class="rev_fc">
                        <p><span>Marthinus</span><br> Johannesburg</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Rated" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"Finding the right insurance was so easy with Go Quote Rocket. The options were tailored to my needs, and everything was simple and straightforward."</p>

                    <div class="reviews_name"><img src="images/thandi.jpg" alt="Customer Named Thandi" width="100" height="100" class="rev_fc">
                        <p><span>Thandi</span><br> Durban</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Review" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"Excellent service! Go Quote Rocket made it easy to find a great insurance deal. They were professional and very helpful throughout the process."</p>

                    <div class="reviews_name"><img src="images/sipho.jpg" alt="Customer Named Sipho" width="100" height="100" class="rev_fc">
                        <p><span>Sipho</span><br> Cape Town</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Review" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"Go Quote Rocket was a lifesaver! They helped me find insurance quickly with a smooth, convenient process. Highly recommended."</p>

                    <div class="reviews_name"><img src="images/zanele.jpg" alt="Customer Named Zanele" width="100" height="100" class="rev_fc">
                        <p><span>Zanele</span><br> Pretoria</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Review" class="reviews_star" width="228" height="40">

                </div>

            </div>

            <div class="reviews_box reviews_box-last">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"Go Quote Rocket’s system was so easy to use. I quickly found the coverage I needed without any hassle. Fantastic experience!"</p>

                    <div class="reviews_name"><img src="images/loraine.jpg" alt="Customer Named Loraine" width="100" height="100" class="rev_fc">
                        <p><span>Loraine</span><br> Cape Town</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Review" class="reviews_star" width="228" height="40">

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

                        <div class="accordion acdn-heading accordion-open" id="hd-one">What is pet insurance?</div>

                        <div class="acdn-content">

                            <p class="acdn-para">Pet insurance is a policy that helps cover the cost of veterinary care for your pet, including accidents, illnesses, and routine treatments, depending on the plan.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Does pet insurance cover all breeds and types of pets?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Yes, most providers cover dogs and cats of all breeds. Some also offer coverage for exotic pets, but this may vary by provider.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">What’s included in a pet insurance policy?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Policies vary but generally cover <a href="car-insurance.php" alt="Car Insurance Quotes">accidents</a>, illnesses, surgeries, and optional routine care like vaccinations and check-ups.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">How much does pet insurance cost?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">The cost depends on your pet’s age, breed, <a href="medical-insurance.php" alt="Medical Insurance Quotes">health</a>, and the level of coverage. Comparing quotes can help you find an affordable plan.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Can I get insurance for an older pet?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Yes, many providers offer coverage for <a href="funeral-cover.php" alt="Funeral Cover the USA">senior</a> pets, although premiums may be higher, and pre-existing conditions might not be covered.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Does pet insurance cover pre-existing conditions?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">No, most pet insurance plans exclude pre-existing conditions, but some may offer coverage for certain conditions after a waiting period.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">How do I claim on my pet insurance?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Simply submit your vet bills and necessary documentation to your insurance provider for reimbursement, as per your policy terms.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Can I visit any vet?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Yes, most pet insurance plans allow you to visit any licensed veterinarian in the USA.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Is routine care covered by pet insurance?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Routine care is typically an optional add-on that covers vaccinations, dental care, and preventative treatments.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">What happens if I cancel my pet insurance?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">If you cancel your policy, coverage will end immediately, and any claims made after cancellation won’t be covered.</p>

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

                <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Pet Insurance Quotes">Get Quote Now</a>

            </div>

        </div>

    </div>

    <div id="error_handler_overlay" style="display: none;">
        <div class="error_handler_body"><a href="javascript:void(0);" id="error_handler_overlay_close">X</a>
            <p>Lead was detected as being a duplicate.</p>
        </div>
    </div>
    <p id="loading-indicator" style="display:none">Redirecting...</p>

    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            //insurance api call
            var phoneErrors = new Array();
            var termsError = new Array();
            $('.apiBtn').on('click', function(event) {
                //event.preventDefault()
                let formData = $('[name=pet_api1]').serialize();
                var PhoneNumber = $("input[name='phone']").val();
                var errors = new Array();
                validateCheckbox();
                $('input[name=phone],input[name=email],input[name=given-name],input[name=family-name],select[name=pet_age],select[name=number_of_pets]')
                    .each(function(index) {
                        var input = $(this);
                        //console.log(input.val())
                        if (input.hasClass('required') == true) {
                            if (input.val().trim() == '') {
                                input.next('.error_message ').show();
                                input.next().text(input.attr('data-error-message'));
                                errors.push(input.attr('data-error-message'));
                            }
                        }
                    });

                if (errors.length == 0 && phoneErrors.length == 0 && termsError.length == 0) {
                    petApiCall(formData);
                    //$('#phone_prompt').hide();
                }
            });
            $("select[name=number_of_pets],select[name=pet_age]").on('change', function(e) {
                $(this).next('.error_message ').hide();

            });
            $("input[name='given-name'], input[name='family-name'],input[name=email]").keyup(function() {
                $(this).next('.error_message ').hide();

            });

            function petApiCall(formData) {
                $('#loading-indicator').show();
                let queryStringValue = window.location.search;
                $.ajax({
                    url: 'https://goquoterocket.com/leads-api/pet-api-call.php?' + formData,
                    // Type of Request
                    type: 'post',
                    success: function(data) {
                        let resultData = JSON.parse(data);
                        //console.log(resultData)

                        if (resultData.code === 1) {
                            window.location.href = "https://goquoterocket.com/thank-you.php" + queryStringValue;
                        } else {
                            $('#loading-indicator').hide();
                            $('#error_handler_overlay').show();
                            $('#error_handler_overlay p').text("Please check the information you entered and try again Unfortunately, we're unable to submit your information at this time.  Please check the information you provided to ensure it's correct before submitting again.");
                        }
                    },
                    // Error handling
                    error: function(error) {
                        $('#loading-indicator').hide();
                        console.log(`Error ${error}`);
                    }
                });
            }
            //phone number validation
            $("input[name='phone']").on('keyup blur', function() {
                let phoneNumber = $(this).val().replace(/[^0-9]/g, ''); // Remove non-digit characters and spaces
                $(this).val(phoneNumber); // Update the input field with the cleaned value
                if (phoneNumber.length < 1) return;
                validateZAPhone(phoneNumber);
            });

            function validateZAPhone(phoneNumber) {
                const promptText = "Please check that your phone number is in local format 0xx xxx xxxx. Numbers starting with 086, 085, 080, or 09 aren't supported.";
                const phoneSub = phoneNumber.substring(0, 3);

                const invalidPrefixes = ["27", "+27", "080", "086", "085", "09"];
                const isValidPrefix = !invalidPrefixes.some(prefix => phoneSub.includes(prefix));

                let errorMessage = "";
                if (!isValidPrefix) {
                    errorMessage = promptText;
                } else if (phoneNumber.length < 10) {
                    errorMessage = promptText;
                } else if (phoneNumber.length == 10 && phoneNumber.charAt(0) !== '0') {
                    errorMessage = promptText;
                }

                if (errorMessage) {
                    $('#phone_prompt').text(errorMessage).show();
                    phoneErrors.push(errorMessage);
                } else {
                    $('#phone_prompt').hide();
                    phoneErrors.length = 0;
                }
            }
            //validate terms checkbox
            document.getElementById('checkbox_terms').addEventListener('click', validateCheckbox);
            // Function to validate checkbox
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
            //END

            //Error Handler
            $(document).on('click', '#error_handler_overlay_close', function(event) {
                $('#error_handler_overlay').hide();
            });
            // Logger Feature Update
            $('.apiBtn').on('click', function() {
                const formElement = document.forms['pet_api1'];
                const formDataObj = Object.fromEntries(new FormData(formElement).entries());
                console.log(formDataObj);

                formDataObj.userIsAt = window.location.href;
                const requiredFields = ['funnelId', 'given-name', 'family-name', 'phone'];

                // Validate required fields
                for (const field of requiredFields) {
                    if (!formDataObj[field] || formDataObj[field].trim() === '') {
                        // alert(`The field "${field}" is required.`);
                        return;
                    }
                }

                $.ajax({
                    url: 'https://goquoterocket.com/logger/logger.php',
                    method: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify(formDataObj),
                    success: function(response) {
                        // console.log('Success:', response);
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            });
            //End
            $('.mob-mnu-ic').click(function(e) {

                $('.mobilemenu').slideToggle();

                $('.dl-trigger').toggleClass('dl-active');

            });



            $('.menuOpen').click(function(e) {

                // $(this).next('.dropdown-mobile').slideToggle();

                // $(this).toggleClass('mnutog');

                e.preventDefault();

                // Close all dropdowns and remove 'mnutog' class from all menu items
                $('.dropdown-mobile').slideUp();
                $('.menuOpen').removeClass('mnutog');

                // Check if the clicked dropdown is already open
                if (!$(this).next('.dropdown-mobile').is(':visible')) {
                    // If not open, open it and add the 'mnutog' class
                    $(this).next('.dropdown-mobile').slideDown();
                    $(this).addClass('mnutog');
                }

            });



            //TAB

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



            //MOBILE

            $('.accdn-hd').click(function() {

                const content = $(this).next('.inner_sec3_tab_content-box');

                const icon = $(this).find('.icon');



                var trg = $(this);



                window.setTimeout(function() {



                    $('html, body').animate({



                        scrollTop: $(trg).offset().top - 75



                    }, 1000);



                }, 700);



                // Close all other accordion items

                $('.inner_sec3_tab_content-box').not(content).slideUp(500);

                $('.icon').not(icon).text('+');



                // Toggle the current accordion item

                content.slideToggle(500);

                icon.text(icon.text() === '+' ? '-' : '+');

            });



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



            if ($(window).innerWidth() <= 767) {

                $('.colapse-hd').click(function(e) {

                    $(this).next('.info-sec-links-list').slideToggle();

                    $(this).toggleClass('active');

                });

            }



            //accordion JS

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



    <script type="text/javascript">
        $(document).scroll(function() {



            if ($(this).scrollTop() > 110) {

                $('.top-fix-bar').addClass('fixed-nav');

            } else {

                $('.top-fix-bar').removeClass('fixed-nav');

            }



            if ($(this).scrollTop() > 10) {

                $('.mobilemenu').addClass('mobimenu-top');

            } else {

                $('.mobilemenu').removeClass('mobimenu-top');

            }



        });



        function scrollToSection() {

            var section = document.getElementById("toForm");

            var offset = section.offsetTop - 72; // Calculate the offset position

            if ($(window).width() < 767) {

                var offset = section.offsetTop - 50; // Calculate the offset position

            }

            window.scrollTo({
                top: offset,
                behavior: 'smooth'
            });

        }
    </script>

</body>

</html>