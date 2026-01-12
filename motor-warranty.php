<?php
$queryParams = !empty($_SERVER['QUERY_STRING']) ? "&" . $_SERVER['QUERY_STRING'] : '';
// Extract the 'id2' parameter value
//$id2 = $_REQUEST['id2'] ?? '';
// Split the id2 string into parts
//$parts = explode('--', $id2);

//$aff_id = explode('_', $parts[0])[1] ?? null;
//$offer_id = explode('_', $parts[0])[2] ?? null;
$aff_sub = $_REQUEST['aff_sub'] ?? '0022';
$aff_sub2 = $_REQUEST['aff_sub2'] ?? null;
$aff_sub3 = $_REQUEST['aff_sub3'] ?? 'organic';
$funnelId = "Warranty";

?>
<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Reliable Motor Warranty Quotes in the USA | Go Quote Rocket</title>

    <meta name="description" content="Protect your car with a motor warranty. Compare affordable motor warranty options with Go Quote Rocket and ensure peace of mind on the road.">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!--PreloadFile -->
    <link rel="preload" href="images/inner-sec1-motor-wrnty.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img1.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img2.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img3.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-motor-tab1.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-motor-tab2.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-motor-tab3.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/footer-logos-gray.svg" type="image/svg+xml" as="image" />
    <!--PreloadFile End-->

    <link rel="preload" href="css/style.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="css/slick.css" as="style" onload="this.rel='stylesheet'">
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
                    "name": "What is a motor warranty?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "A motor warranty is a policy that helps cover the cost of repairs for certain parts of your vehicle, such as the engine, gearbox, or electrical system, protecting you from expensive out-of-pocket expenses."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Is a motor warranty the same as car insurance?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "No, a motor warranty covers mechanical and electrical breakdowns, while car insurance protects against accidents, theft, and third-party damage."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Who needs a motor warranty?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Anyone who owns a vehicle can benefit from a motor warranty, especially if the manufacturer’s warranty has expired or if you want added financial protection for potential repairs."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Does a motor warranty cover all repairs?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "No, warranties typically cover specific components and exclude wear-and-tear items like brake pads, tires, and routine maintenance. Always review the policy details to know what’s included."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can I purchase a motor warranty for an older car?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, many providers offer motor warranties for older or high-mileage vehicles, although the coverage may vary depending on the car’s age and condition."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How do I claim on my motor warranty?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "If your car experiences a covered breakdown, contact your warranty provider, and take your vehicle to an approved repair center for assessment and repairs."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Are motor warranties transferable to a new owner?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, most motor warranties can be transferred to the new owner when you sell your vehicle, adding value to your car during resale."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How much does a motor warranty cost?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The cost of a motor warranty depends on your vehicle’s make, model, age, and the level of coverage you choose. Comparing quotes can help you find the best deal."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can I cancel my motor warranty?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, most providers allow you to cancel your warranty, although there may be cancellation fees or terms to consider. Always check the policy before committing."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Do I need a motor warranty if I already have car insurance?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, car insurance and motor warranties cover different things. A motor warranty protects against mechanical and electrical failures, complementing your insurance policy by reducing repair costs."
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



<body class="inner_pg motor_warranty">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPP3PH3H"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php include 'header.php'; ?>



    <div class="inner_sec1" id="choosePack">

        <div class="container">

            <p class="inner_sec1-rat-txt"><img src="images/sec1-star.png" alt="Customer Reviews" width="148" height="26"> <span>4.8 stars</span> 2,000+ reviews</p>

            <p class="inner_sec1-hdg">Unexpected Car Repairs<br class="showDesk"> Can Be Expensive</p>

            <p class="inner_sec1_txt">Shield yourself with a motor warranty and get coverage <strong>up-to $50,000</strong> <br class="showDesk">on unexpected repair costs.</p>



            <div class="inner_sec1-form" id="toForm">

                <form method="POST" name="motor_api1">
                    <input type="hidden" name="motorApi" value="Yes">
                    <input type="hidden" name="aff_id" value="<?= $aff_id; ?>" />
                    <input type="hidden" name="offer_id" value="<?= $offer_id; ?>" />
                    <input type="hidden" name="aff_sub" value="<?= $aff_sub; ?>" />
                    <input type="hidden" name="aff_sub2" value="<?= $aff_sub2; ?>" />
                    <input type="hidden" name="aff_sub3" value="<?= $aff_sub3; ?>" />
                    <input type="hidden" name="funnelId" value="<?= $funnelId; ?>" />

                    <div class="form__field">

                        <div class="form__input form__input--2">

                            <div class="form_input_box">
                                <input type="text" name="given-name" placeholder="First Name" class="input-fld required" data-error-message="Please enter your first name.">
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                            <div class="form_input_box">
                                <input type="text" name="family-name" class="input-fld required" data-error-message="Please enter your surname." placeholder="Surname">
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                        </div>

                        <div class="form__input form__input--2">

                            <div class="form_input_box">
                                <input type="tel" name="phone" placeholder="Phone Number" class="input-fld required" data-error-message="Please enter your phone number without the country code first" maxlength="10" onkeyup="javascript: this.value = this.value.replace(/[^0-9 + ]/g, '');">

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

                            <div>

                                <select name="income" class="input-fld required" data-error-message="Please select your monthly income.">

                                    <option value="" selected="">What's your monthly income?</option>

                                    <option value="$0 - $2,999">$0 - $2,999</option>

                                    <option value="$3,000+">$3,000+</option>

                                </select>

                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                            <div>
                                <select name="manufacturer_warranty" class="input-fld required" data-error-message="Please opt your manufacturer warranty question.">

                                    <option value="" selected="">Are you still covered under your manufacturer warranty?</option>
                                    <option value="true">Yes</option>
                                    <option value="false+">No</option>

                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                        </div>
                        <div class="form__input form__input--3">

                            <div class="form_input_box">
                                <select name="make" class="input-fld required" data-error-message="Please select your vehicle make.">

                                    <option value="" selected="">Vehicle Make</option>

                                    <option value="Audi">Audi</option>

                                    <option value="AlfaRomeo">AlfaRomeo</option>

                                    <option value="BMW">BMW</option>

                                    <option value="Mercedes">Mercedes</option>

                                    <option value="Buick">Buick</option>

                                    <option value="Cadillac">Cadillac</option>

                                    <option value="Chevrolet">Chevrolet</option>

                                    <option value="Chrysler">Chrysler</option>

                                    <option value="Citroen">Citroen</option>

                                    <option value="Daewoo">Daewoo</option>

                                    <option value="Daihatsu">Daihatsu</option>

                                    <option value="Ferrari">Ferrari</option>

                                    <option value="Fiat">Fiat</option>

                                    <option value="Ford">Ford</option>

                                    <option value="GMC">GMC</option>

                                    <option value="Hyundai">Hyundai</option>

                                    <option value="Isuzu">Isuzu</option>

                                    <option value="Jaguar">Jaguar</option>

                                    <option value="Jeep">Jeep</option>

                                    <option value="Land">Land</option>

                                    <option value="RangeRover">RangeRover</option>

                                    <option value="Lexus">Lexus</option>

                                    <option value="Mazda">Mazda</option>

                                    <option value="Mini">Mini</option>

                                    <option value="Mitsubishi">Mitsubishi</option>

                                    <option value="Nissan">Nissan</option>

                                    <option value="Opel">Opel</option>

                                    <option value="Peugeot">Peugeot</option>

                                    <option value="Renault">Renault</option>

                                    <option value="Smart">Smart</option>

                                    <option value="Subaru">Subaru</option>

                                    <option value="Suzuki">Suzuki</option>

                                    <option value="Tata">Tata</option>

                                    <option value="Toyota">Toyota</option>

                                    <option value="Volkswagen">Volkswagen</option>

                                    <option value="Kia">Kia</option>

                                    <option value="Citreon">Citreon</option>

                                    <option value="Dihatsu">Dihatsu</option>

                                    <option value="Volvo">Volvo</option>

                                    <option value="Honda">Honda</option>

                                    <option value="Mahindra">Mahindra</option>

                                    <option value="Other">Other</option>

                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>


                            <div class="form_input_box">

                                <select name="milage" class="input-fld required" data-error-message="Please select your vehicle milage.">

                                    <option value="" selected="">Vehicle Mileage</option>

                                    <option value="0 - 50 000 KM">0 - 50 000 KM</option>

                                    <option value="49 001 - 100 000 KM">49 001 - 100 000 KM</option>

                                    <option value="100 001 - 150 000 KM">100 001 - 150 000 KM</option>

                                    <option value="150 001 - 250 000 KM">150 001 - 250 000 KM</option>

                                    <option value="250 001+ KM">250 001+ KM</option>

                                    <option value="Don’t Know">I Don’t Know</option>

                                </select>

                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                            <div class="form_input_box">
                                <select name="vehicle-age" class="input-fld required" data-error-message="Please select your age.">

                                    <option value="" selected="">Vehicle Age (Years Old)</option>

                                    <option value="0-5">0–5</option>

                                    <option value="6-10">6–10</option>

                                    <option value="11-15">11–15</option>

                                    <option value="16-20">16–20</option>

                                    <option value="21-25">21–25</option>

                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                        </div>

                    </div>



                    <div class="form_bottom">

                        <ul class="form_lst">

                            <li><img src="images/secure.svg" alt=""> 100% SECURE FORM</li>

                            <li><img src="images/heart.svg" alt=""> NO COMMITMENT REQUIRED</li>

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



<?php include 'carrier-logos.php'; ?>



    <div class="inner_sec2">

        <div class="container">

            <p class="heading">How We Make Finding<br class="showDesk"> A Motor Warranty Easy</p>

            <p class="comn_text">We know searching for the right motor warranty can feel overwhelming. That’s why <a href="/" alt="Affordable Insurance Quotes">Go Quote Rocket</a> simplifies <br class="showDesk">the process for you. In just a few steps, we’ll connect you with trusted providers, helping you secure <br class="showDesk">the most reliable and affordable motor warranty, hassle-free.</p>



            <div class="sec2_inr">

                <div class="sec2_inr_bx">

                    <img src="images/inner-sec2-img1.webp" alt="Guy On Computer Looking At Go Quote Rocket" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>One Quick Form</h3>

                        <p>Fill out our secure, straightforward form in just 60 seconds. Your information is always protected, and we’ll handle the rest to find the best motor warranty for your vehicle.</p>

                    </div>

                </div>

                <div class="sec2_inr_bx">

                    <img src="images/inner-sec2-img2.jpg" alt="Motor Warranty Options Checklist" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>Tailored Warranty Options</h3>

                        <p>We’ll instantly search and present the best motor warranty plans that match your car’s needs and your budget, ensuring you get the perfect coverage for your peace of mind.</p>

                    </div>

                </div>

                <div class="sec2_inr_bx">

                    <img src="images/inner-sec2-img3.webp" alt="Trusted Motor Warranty Expert" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>Trusted Experts Ready</h3>

                        <p>Connect with a vetted, experienced warranty provider who will guide you through the process, giving you confidence in your vehicle’s protection and long-term reliability.</p>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <div class="inner_sec3">

        <div class="container">

            <p class="heading">Compare & Save On <br>A Motor Warranty Plan</p>

            <p class="comn_text">Protect your car and budget with the right motor warranty. Understanding the top options available in<br class="showDesk"> the USA will ensure you save on repairs and drive confidently.</p>

            <div class="inner_sec3_row">

                <div class="inner_sec3_tab-row hideMob">

                    <div class="inner_sec3_tab-col active" data-target="#tab_col_1">
                        <p>Manufacturer Warranty</p>
                    </div>

                    <div class="inner_sec3_tab-col" data-target="#tab_col_2">
                        <p>Extended Warranty</p>
                    </div>

                    <div class="inner_sec3_tab-col" data-target="#tab_col_3">
                        <p>Service Plan</p>
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

                                <img src="images/inner_sec3-motor-tab1.webp" alt="Manufacturer Motor Warranty Option" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">A Manufacturer Warranty is the coverage provided by the vehicle manufacturer when you purchase a new car. It protects you against mechanical or electrical failures during the initial years of ownership, ensuring that any repairs or part replacements needed due to manufacturing defects are taken care of at no additional cost.</p>
                            <p class="inner_sec3-content-sub_hd">Benefits of a Manufacturer Warrantyy</p>

                            <ul class="inner_sec3_tab-lst">
                                <li><strong>Comprehensive Coverage:</strong> Protects against mechanical and electrical failures.</li>
                                <li><strong>Genuine Parts:</strong> Ensures all replacements are done with manufacturer-approved parts.</li>
                                <li><strong>Cost Savings:</strong> Avoid out-of-pocket expenses for repairs during the warranty period.</li>
                                <li><strong>Authorized Repairs:</strong> Work is completed at approved service centers, maintaining vehicle quality.</li>
                            </ul>

                        </div>

                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-motor-tab1.webp" alt="Manufacturer Motor Warranty Option" width="500" height="450">

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

                                <img src="images/inner_sec3-motor-tab2.webp" alt="Extended Motor Warranty Option" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">An Extended Warranty is a continuation of your original Manufacturer Warranty, designed to provide coverage after the initial period expires. It protects you from costly repairs on major components, such as the engine or transmission, and is ideal for those who plan to keep their car for many years or buy a used vehicle.</p>
                            <p class="inner_sec3-content-sub_hd">Benefits of an Extended Warranty</p>

                            <ul class="inner_sec3_tab-lst">
                                <li><strong>Long-Term Protection:</strong> Covers critical components beyond the manufacturer’s warranty.</li>
                                <li><strong>Financial Security:</strong> Reduces unexpected repair costs for older vehicles.</li>
                                <li><strong>Increased Resale Value:</strong> A transferable warranty can boost the value of your car.</li>
                                <li><strong>Customizable Coverage:</strong> Select the level of protection that suits your needs.</li>
                            </ul>

                        </div>



                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-motor-tab2.webp" alt="Extended Motor Warranty Option" width="500" height="450">

                        </div>

                    </div>

                </div>



                <div class="mob-div">

                    <div class="accdn-hd showMob">
                        <p>Service Plan</p> <span class="icon">+</span>
                    </div>

                    <div class="inner_sec3_tab_content-box" id="tab_col_3" style="display: none;">

                        <div class="inner_sec3_tab_content">

                            <h3 class="inner_sec3_tab_content_hd hideMob">Service Plan</h3>



                            <div class="inner_sec3_tab_img e-com_img showMob">

                                <img src="images/inner_sec3-motor-tab3.webp" alt="Service Plan Motor Warranty Option" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">A Service Plan is designed to cover the routine maintenance of your vehicle, such as oil changes, filters, and inspections. It ensures that your car remains in top condition without the stress of unplanned expenses. Service Plans are often prepaid, offering fixed costs for scheduled servicing.</p>
                            <p class="inner_sec3-content-sub_hd">Benefits of Service Plan</p>

                            <ul class="inner_sec3_tab-lst">
                                <li><strong>Budget-Friendly:</strong> Spread the cost of maintenance over time, avoiding lump-sum payments.</li>
                                <li><strong>Routine Care:</strong> Covers essential maintenance like oil changes and inspections.</li>
                                <li><strong>Prepaid Convenience:</strong> Lock in servicing costs and avoid future price increases.</li>
                                <li><strong>Hassle-Free Servicing:</strong> Work is done by authorized technicians using quality parts.</li>

                            </ul>

                        </div>

                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-motor-tab3.webp" alt="Service Plan Motor Warranty Option" width="500" height="450">

                        </div>

                    </div>

                </div>

            </div>



            <div class="clearall"></div>

            <div class="btn-bx">

                <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Motor Warranty Quotes">Get Started Today</a>

            </div>

        </div>

    </div>



    <div class="why_choose">

        <div class="container">

            <div class="why_choose_left">

                <p class="heading">Why Choose<br class="hideMob"> Go Quote Rocket</p>

                <p class="comn_text">Finding the right motor warranty can feel overwhelming, but we’re here to make it simple. At <a href="/" alt="Affordable Insurance Quotes">Go Quote Rocket</a>, we connect you with multiple authorized motor warranty providers, so you can compare options side by side. Our process is designed to save you time, reduce stress, and help you secure the most reliable and affordable coverage available.</p>

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

                        <p>Compare warranty quotes. Choose the best for you.</p>

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

            <p class="heading">Protect Your Vehicle & Wallet<br class="hideMob"> With A Motor Warranty</p>

            <p class="comn_text comn_text--center">A motor warranty is your <a href="personal-loans.php" alt="Personal Loan Quotes">financial safety net</a> for unexpected vehicle repair costs. From engine trouble to electrical failures, a <strong>motor warranty protects your wallet and keeps your vehicle in top shape</strong> without the stress of unplanned expenses.</p>



            <div class="inner_sec4_inr">

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-motor-icon1.png" alt="Financial Protection Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Financial<br class="hideMob"> Protection</h3>

                    <p>Avoid the high costs of unexpected vehicle repairs by letting your warranty cover the bill for major mechanical and electrical issues.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-motor-icon2.png" alt="Wide Ranging Coverage Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Wide Ranging<br class="hideMob"> Coverage Options</h3>

                    <p>Motor warranties often include coverage for key components like the engine, transmission, gearbox, and more, ensuring peace of mind for every journey.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-motor-icon3.png" alt="Affordable Monthly Payments Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Affordable<br class="hideMob"> Monthly Payments</h3>

                    <p>Break down costly repairs into manageable monthly premiums, giving you financial predictability and peace of mind.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-motor-icon4.png" alt="Reduced Out-of-Pocket Expenses Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Reduced Out-of-Pocket Expenses</h3>

                    <p>Cover parts and labor costs that would otherwise leave a significant dent in your budget.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-motor-icon5.png" alt="Roadside Assistance Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Roadside<br class="hideMob"> Assistance</h3>

                    <p>Many motor warranties include roadside assistance for emergencies like breakdowns, flat tires, or towing needs.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-motor-icon6.png" alt="Nationwide Coverage Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Nationwide<br class="hideMob"> Coverage</h3>

                    <p>Access approved repair shops and service centers across the USA, ensuring high-quality repairs no matter where you are.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-motor-icon7.png" alt="Increased Vehicle Resale Value Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Increased Vehicle<br> Resale Value</h3>

                    <p>A valid motor warranty can increase your vehicle’s resale value, offering potential buyers added confidence in its condition.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-motor-icon8.png" alt="Flexible Plan Options Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Flexible<br class="hideMob"> Plans</h3>

                    <p>Choose a warranty that fits your needs, from extended coverage for new cars to specialized plans for older vehicles.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-motor-icon9.png" alt="Pease Of Mind Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Peace of<br class="hideMob"> Mind</h3>

                    <p>Drive confidently, knowing that costly repairs are covered, allowing you to enjoy the road without financial worry.</p>

                </div>

            </div>



            <div class="btn-bx">

                <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Motor Warranty Quotes">Get Started Today</a>

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

                        <div class="accordion acdn-heading accordion-open" id="hd-one">What is a motor warranty?</div>

                        <div class="acdn-content">

                            <p class="acdn-para">A motor warranty is a policy that helps cover the cost of repairs for certain parts of your vehicle, such as the engine, gearbox, or electrical system, protecting you from expensive out-of-pocket expenses.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Is a motor warranty the same as car insurance?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">No, a motor warranty covers mechanical and electrical breakdowns, while car insurance protects against accidents, theft, and third-party damage.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Who needs a motor warranty?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Anyone who owns a vehicle can benefit from a motor warranty, especially if the manufacturer’s warranty has expired or if you want added financial protection for potential repairs.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Does a motor warranty cover all repairs?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">No, warranties typically cover specific components and exclude wear-and-tear items like brake pads, tires, and routine maintenance. Always review the policy details to know what’s included.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Can I purchase a motor warranty for an older car?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Yes, many providers offer motor warranties for older or high-mileage vehicles, although the coverage may vary depending on the car’s age and condition.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">How do I claim on my motor warranty?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">If your car experiences a covered breakdown, contact your warranty provider, and take your vehicle to an approved repair center for assessment and repairs.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Are motor warranties transferable to a new owner?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Yes, most motor warranties can be transferred to the new owner when you sell your vehicle, adding value to your car during resale.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">How much does a motor warranty cost?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">The cost of a motor warranty depends on your vehicle’s make, model, age, and the level of coverage you choose. Comparing quotes can help you find the best deal.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Can I cancel my motor warranty?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Yes, most providers allow you to cancel your warranty, although there may be cancellation fees or terms to consider. Always check the policy before committing.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Do I need a motor warranty if I already have car insurance?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Yes, car insurance and motor warranties cover different things. A motor warranty protects against mechanical and electrical failures, complementing your insurance policy by reducing repair costs.</p>

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

                <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn">Get Quote Now</a>

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
                let formData = $('[name=motor_api1]').serialize();
                var PhoneNumber = $("input[name='phone']").val();
                //console.log(formData);
                var errors = new Array();
                validateCheckbox();
                $('input[name=phone],input[name=email],input[name=given-name],input[name=family-name],select[name=make],select[name=milage],select[name=vehicle-age],select[name=income],select[name=manufacturer_warranty]')
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
                    motorApiCall(formData);
                }
            });
            $("select[name=make],select[name=milage],select[name=vehicle-age],select[name=income],select[name=manufacturer_warranty]").on('change', function(e) {
                $(this).next('.error_message ').hide();

            });
            $("input[name='given-name'], input[name='family-name'],input[name=email],input[name=phone]").keyup(function() {
                $(this).next('.error_message ').hide();

            });

            function motorApiCall(formData) {
                $('#loading-indicator').show();
                let queryStringValue = window.location.search;
                $.ajax({
                    url: 'https://goquoterocket.com/leads-api/motor-api-call.php?' + formData,
                    // Type of Request
                    type: 'post',
                    success: function(data) {
                        let resultData = JSON.parse(data);
                        console.log(resultData)

                        if (resultData.code === 1) {
                            window.location.href = "https://goquoterocket.com/thank-you.php" + queryStringValue;
                        } else {
                            $('#loading-indicator').hide();
                            $('#error_handler_overlay').show();
                            $('#error_handler_overlay p').text("Unfortunately, we're unable to submit your information at this time.  Please check the information you provided to ensure it's correct before submitting again.");
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
            $("input[name='phone']").keyup(function() {
                let phoneNumber = $(this).val();
                validateUSPhone(phoneNumber);

            });

            function validateUSPhone(PhoneNumber) {
                const prompText = `Please enter a valid 10-digit US phone number.`;
                if (PhoneNumber.length < 10) {
                    phoneErrors.push("Please enter a valid 10-digit US phone number.");
                    $('#phone_prompt').text(prompText).show();
                } else if (PhoneNumber.length == 10) {
                    $('#phone_prompt').hide();
                    phoneErrors.length = 0;
                } else {
                    phoneErrors.push("Please enter a valid 10-digit US phone number.");
                    $('#phone_prompt').text(prompText).show();
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
                const formElement = document.forms['motor_api1'];
                const formDataObj = Object.fromEntries(new FormData(formElement).entries());
                //console.log(formDataObj);
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
            // banner form validation 


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