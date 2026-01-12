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
$funnelId = "Car";

?>
<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Affordable Car Insurance Quotes in the USA | Go Quote Rocket</title>
    <meta name="description" content="Get competitive car insurance quotes in the USA with Go Quote Rocket. Compare options and save on affordable coverage for your vehicle today.">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!--PreloadFile -->
    <link rel="preload" href="images/inner-sec1-car-insur.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img1.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img2.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img3.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-tab-img1.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-tab-img2.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-tab-img3.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/footer-logos-gray.svg" type="image/svg+xml" as="image" />
    <!--PreloadFile End-->

    <link rel="preload" href="css/style.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="css/slick.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="css/error-handler.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="css/loader-design.css" as="style" onload="this.rel='stylesheet'">


    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link href="css/error-handler.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/loader-design.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Manrope:wght@200..800&display=swap" rel="stylesheet">


    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                    "@type": "Question",
                    "name": "What’s the most affordable car insurance in the USA?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Third-party insurance is generally the least expensive because it only covers damages you cause to others. For more extensive protection, comprehensive insurance is a better option, though it costs more."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Why is car insurance important?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "In the USA, most drivers are uninsured, which means you could be left covering costs if someone else damages your car. Insurance helps you manage expenses from accidents, theft, or breakdowns and often includes useful extras like roadside assistance."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How are car insurance premiums calculated?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Premiums depend on factors such as the type of cover you choose, your vehicle’s condition, added security features, and any custom modifications. If you have a GPS vehicle tracking device or an extended motor warranty, these items can also impact your premium."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What does it cost to use Go Quote Rocket?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Using Go Quote Rocket is completely free. There are no hidden charges, and you can easily compare quotes at no cost to find a policy that suits you."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Am I obligated to purchase if I select a quote?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "No commitment is required when you choose a quote. A representative from the insurer will contact you to discuss the details and help you decide if it’s the right fit."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What is excess, and how does it affect my premium?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Excess is the portion you pay out of pocket for a claim. Opting for a higher excess can reduce your monthly costs, while a lower excess will increase your premium."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can I insure multiple vehicles?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Absolutely! Each vehicle can be insured, but you’ll need to request a separate quote for each one to ensure the coverage is tailored appropriately."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Does car insurance cover me when driving someone else’s car?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "No, insurance typically covers the vehicle itself. If you drive another person’s car, their policy would handle any claims, not yours."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How do I claim on my car insurance?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "You’ll need to report the incident to the police and provide the case number to your insurer. They’ll guide you through the process, which might include an assessment of your vehicle."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What are the benefits of using Go Quote Rocket?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Go Quote Rocket simplifies comparing insurance options, helping you find affordable and reliable coverage quickly and without hassle. It’s an easy way to save time and money."
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



<body class="inner_pg car_insurance">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPP3PH3H"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php include 'header.php'; ?>



    <div class="inner_sec1" id="choosePack">

        <div class="container">

            <div class="inner_sec1-form" id="toForm">

                <form method="POST" name="insurance_api1">

                    <div class="ban_slide1" id="ban_slide_1">

                        <p class="inner_sec1-rat-txt"><img src="images/sec1-star.png" alt="Customer Reviews" width="148" height="26"> <span>4.8 stars</span> 2,000+ reviews</p>

                        <p class="inner_sec1-hdg">Get Free Car Insurance<br class="showDesk"> Quotes in <em>1 Minute!</em></p>

                        <p class="inner_sec1_txt">Compare cheap car insurance offers from the USA's top<br class="hideMob"> providers and <strong>save up-to $150 per month.</strong></p>


                        <input type="hidden" name="insuranceApi" value="Yes">
                        <input type="hidden" name="aff_id" value="<?= $aff_id; ?>" />
                        <input type="hidden" name="offer_id" value="<?= $offer_id; ?>" />
                        <input type="hidden" name="aff_sub" value="<?= $aff_sub; ?>" />
                        <input type="hidden" name="aff_sub2" value="<?= $aff_sub2; ?>" />
                        <input type="hidden" name="aff_sub3" value="<?= $aff_sub3; ?>" />
                        <input type="hidden" name="funnelId" value="<?= $funnelId; ?>" />


                        <div class="form__field">

                            <div class="form__input form__input--3">

                                <div class="form_input_box">
                                    <input type="text" name="given-name" placeholder="First Name" class="input-fld required" data-error-message="Please enter your first name.">
                                    <div class="error_message text-left" style="display:none"></div>
                                </div>

                                <div class="form_input_box">
                                    <input type="text" name="family-name" class="input-fld required" data-error-message="Please enter your surname." placeholder="Surname">
                                    <div class="error_message text-left" style="display:none"></div>
                                </div>

                                <div class="form_input_box">
                                    <input type="tel" name="phone" placeholder="Phone Number" class="input-fld required" data-error-message="Please enter your phone number without the country code first" maxlength="10" onkeyup="javascript: this.value = this.value.replace(/[^0-9 + ]/g, '');">

                                    <div class="error_message text-left" style="display: none;" id="phone_prompt">
                                        <span class="phone-prompt-error">Please enter a valid US phone number.</span>
                                    </div>
                                </div>

                                <div class="form_input_box">
                                    <input type="email" name="email" placeholder="Email Address" class="input-fld required" data-error-message="Please enter your email address.">
                                    <div class="error_message text-left" style="display:none"></div>
                                </div>

                            </div>
                            <div class="form__input form__input--2">

                                <div class="form_input_box">
                                    <select name="employment" class="input-fld required" data-error-message="Please select your employment status.">
                                        <option value="" selected="">Are you currently employed?</option>
                                        <option value="true">Yes</option>
                                        <option value="false">No</option>
                                    </select>
                                    <div class="error_message text-left" style="display:none"></div>
                                </div>
                                <div class="form_input_box">
                                    <select class="input-fld required" name="monthly_income" data-error-message="Please opt your monthly income.">

                                        <option value="">What's your monthly income?</option>

                                        <option value="$0 - $2,999">$0 - $2,999</option>
                                        <option value="$3,000 - $4,999">$3,000 - $4,999</option>
                                        <option value="$5,000+">$5,000+</option>

                                    </select>
                                    <div class="error_message text-left" style="display:none"></div>
                                </div>

                            </div>
                            <div class="form__input form__input--2">

                                <div class="form_input_box">
                                    <select name="make" class="input-fld required" data-error-message="Please select your vehicle type.">

                                        <option value="" selected>What vehicle would you like to insure?</option>
                                        <option value="BMW">BMW</option>
                                        <option value="Mercedes">Mercedes-Benz</option>
                                        <option value="Ford">Ford</option>
                                        <option value="Hyundai">Hyundai</option>
                                        <option value="Isuzu">Isuzu</option>
                                        <option value="Nissan">Nissan</option>
                                        <option value="Renault">Renault</option>
                                        <option value="Suzuki">Suzuki</option>
                                        <option value="Toyota">Toyota</option>
                                        <option value="Volkswagen">Volkswagen</option>
                                        <option value="Kia">Kia</option>
                                        <option value="AlfaRomeo">AlfaRomeo</option>
                                        <option value="Buick">Buick</option>
                                        <option value="Cadillac">Cadillac</option>
                                        <option value="Chevrolet">Chevrolet</option>
                                        <option value="Chrysler">Chrysler</option>
                                        <option value="Citroen">Citroen</option>
                                        <option value="Daewoo">Daewoo</option>
                                        <option value="Daihatsu">Daihatsu</option>
                                        <option value="Ferrari">Ferrari</option>
                                        <option value="Fiat">Fiat</option>
                                        <option value="GMC">GMC</option>
                                        <option value="Jaguar">Jaguar</option>
                                        <option value="Jeep">Jeep</option>
                                        <option value="Land/RangeRover">Land/RangeRover</option>
                                        <option value="Lexus">Lexus</option>
                                        <option value="Mazda">Mazda</option>
                                        <option value="MINI">MINI</option>
                                        <option value="Mitsubishi">Mitsubishi</option>
                                        <option value="Opel">Opel</option>
                                        <option value="Peugeot">Peugeot</option>
                                        <option value="Smart">Smart</option>
                                        <option value="Subaru">Subaru</option>
                                        <option value="Tata">Tata</option>
                                        <option value="Citreon">Citreon</option>
                                        <option value="Volvo">Volvo</option>
                                        <option value="Honda">Honda</option>
                                        <option value="Mahindra">Mahindra</option>
                                    </select>
                                    <div class="error_message text-left" style="display:none"></div>
                                </div>



                                <div class="form_input_box">
                                    <select class="input-fld required" name="currentlyinsured" data-error-message="Please provide insurance status.">

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

                                <li><img src="images/secure.svg" alt="100% Secure Form Icon"> 100% SECURE FORM</li>

                                <li><img src="images/heart.svg" alt="Heart Icon"> NO COMMITMENT REQUIRED</li>

                            </ul>

                            <div class="form__button err_msg_ottr">

                                <a href="http://auto.funnel.quoterocket.local/flow" class="apiBtn" style="display: inline-block; text-align: center; cursor: pointer; border: none;">Get Started Today!</a>

                                <p class="form_terms"><input type="checkbox" name="consent" value="yes" id="checkbox_terms" class="form_checkbox" checked> <span></span> <label for="checkbox_terms">Yes, I accept the <a href="terms.php" target="_blank">terms and conditions</a></label>.</p>
                                <input type="hidden" name="consent_text" value="I agree to the terms and conditions and consent to be contacted by phone, SMS, and email regarding insurance quotes.">

                                <div class="error_message text-left err_msg" id="checkbox_error_message" style="display: none;">You must agree to our terms to submit your information.</div>
                            </div>

                        </div>

                    </div>


                    <div class="ban_slide2" id="ban_slide_2" style="display: none;">

                        <div class="action-row">
                            <a href="javascript:void(0)" class="back-btn">
                                <img width="40" height="40" src="images/left-arrow.svg?v=1" class="action-icon" alt="" id="back_btn_2">
                            </a>
                            <a href="javascript:void(0)" class="cross-btn">
                                <img width="40" height="40" src="images/exit-icon.svg?v=1" class="action-icon" alt="">
                            </a>
                        </div>

                        <p class="inner_sec1-hdg slide-hdg">
                            Would you like a free quote to install <br class="showDesk">
                            a vehicle tracking device?
                        </p>

                        <p class="inner_sec1-rat-txt">
                            <img src="images/bulb-icon.svg?v=2" class="bulb-img" alt="Customer Reviews" width="24" height="24">
                            <span class="text-left">
                                Instantly <span><u>lower your monthly premium</u></span> by installing a tracking device on your vehicle.
                            </span>
                        </p>

                        <div class="approve-bx">
                            <div class="approve-btn">
                                <a href="javascript:void(0)" class="comn-btn no-btn" id="slide_2_no_btn" alt="no">No</a>
                            </div>
                            <div class="approve-btn">
                                <a href="javascript:void(0)" class="comn-btn yes-btn" id="slide_2_yes_btn" alt="no">Yes</a>
                            </div>
                        </div>

                        <div class="ban-slide-dots">
                            <span class="ban-slide-dot active"></span>
                            <span class="ban-slide-dot"></span>
                        </div>

                    </div>

                    <div class="ban_slide3" id="ban_slide_3" style="display: none;">

                        <div class="action-row">
                            <a href="javascript:void(0)" class="back-btn" id="back_btn_3">
                                <img width="40" height="40" src="images/left-arrow.svg?v=1" class="action-icon" alt="">
                            </a>
                            <a href="javascript:void(0)" class="cross-btn">
                                <img width="40" height="40" src="images/exit-icon.svg?v=1" class="action-icon" alt="">
                            </a>
                        </div>

                        <p class="inner_sec1-hdg slide-hdg">
                            Do you currently have a <br class="showDesk">
                            vehicle tracker installed?
                        </p>

                        <p class="inner_sec1-rat-txt">
                            <img src="images/bulb-icon.svg?v=2" class="bulb-img" alt="Customer Reviews" width="24" height="24">
                            <span class="text-left">
                                <span><u>1 car is stolen every 9 minutes</u></span> in the USA. Your vehicle is at risk!
                            </span>
                        </p>

                        <div class="approve-bx">
                            <div class="approve-btn">
                                <a href="javascript:void(0)" class="comn-btn no-btn" id="slide_3_no_btn" alt="no">No</a>
                            </div>
                            <div class="approve-btn">
                                <a href="javascript:void(0)" class="comn-btn yes-btn" id="slide_3_yes_btn" alt="no">Yes</a>
                            </div>
                        </div>

                        <div class="ban-slide-dots">
                            <span class="ban-slide-dot"></span>
                            <span class="ban-slide-dot active"></span>
                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>



    <?php include 'carrier-logos.php'; ?>



    <div class="inner_sec2">

        <div class="container">

            <p class="heading">How We Make<br class="showDesk"> Finding Car Insurance Easy</p>

            <p class="comn_text comn_text--center">We know getting car insurance quotes can feel overwhelming. That’s why Go Quote Rocket simplifies the process for you. In just a few steps, we'll connect you with top-rated insurers, helping you secure the most reliable and affordable car insurance, hassle-free.</p>



            <div class="sec2_inr">

                <div class="sec2_inr_bx">

                    <img src="images/inner-sec2-img1.webp" alt="Go Quote Rocket Insurance Form" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>One Quick Form</h3>

                        <p>Fill out our secure, straightforward form in just 60 seconds. Your information is always protected, and we do the hard work from there.</p>

                    </div>

                </div>

                <div class="sec2_inr_bx">

                    <img src="images/inner-sec2-img2.webp" alt="Tailored Insurance Options" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>Tailored Insurance Options</h3>

                        <p>We’ll instantly search and present the <a href="/" alt="Best Insurance Plans" target="_blank">best insurance plans</a> that fit your personal needs and budget, ensuring you find the perfect match.</p>

                    </div>

                </div>

                <div class="sec2_inr_bx">

                    <img src="images/inner-sec2-img3.webp" alt="Trusted Insurance Agent" width="381" height="291">

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

            <p class="heading">Compare & Save On<br class="showDesk"> All Types Of Car Insurance</p>

            <p class="comn_text">Car insurance in the USA typically comes in three types: <strong>comprehensive, third-party fire and theft,<br class="showDesk"> and third-party only</strong>. Each option provides different levels of coverage, ensuring you can choose<br class="showDesk"> the protection that best fits your needs and circumstances.</p>

            <div class="inner_sec3_row">

                <div class="inner_sec3_tab-row hideMob">

                    <div class="inner_sec3_tab-col active" id="tab_col_1">
                        <p>Comprehensive </p>
                    </div>

                    <div class="inner_sec3_tab-col" id="tab_col_2">
                        <p>Third Party, Fire & Theft </p>
                    </div>

                    <div class="inner_sec3_tab-col" id="tab_col_3">
                        <p>Third Party Only</p>
                    </div>

                </div>



                <div class="mob-div">

                    <div class="accdn-hd showMob">
                        <p>Comprehensive</p><span class="icon">+</span>
                    </div>

                    <div class="inner_sec3_tab_content-box hideMob" id="tab_cont_1">

                        <div class="inner_sec3_tab_content">

                            <h3 class="inner_sec3_tab_content_hd hideMob">Comprehensive</h3>



                            <div class="inner_sec3_tab_img e-com_img showMob">

                                <img src="images/inner_sec3-tab-img1.webp" alt="Comprehensive Car Insurance" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">Comprehensive car insurance offers the highest level of protection, covering risks like accidents, theft, fire, and vandalism. In the USA, where road hazards and vehicle theft are common, this coverage ensures your car—and your wallet—are safeguarded against unexpected costs.</p>

                            <p class="inner_sec3_tab_content_tx">With comprehensive insurance, you’re protected from more than just accidents. Whether it’s natural disasters, vandalism, or theft, this all-in-one policy provides peace of mind, allowing you to focus on the road instead of worrying about potential expenses.</p>

                            <p class="inner_sec3-content-sub_hd">Benefits of Comprehensive Car Insurance</p>

                            <ul class="inner_sec3_tab-lst">

                                <li><strong>Broad Coverage:</strong> Protects against accidents, theft, fire, and natural disasters.</li>

                                <li><strong>Financial Security:</strong> Covers costly repairs or replacements.</li>

                                <li><strong>Peace of Mind:</strong> Drive with confidence, knowing you’re protected.</li>

                            </ul>

                        </div>

                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-tab-img1.webp" alt="Comprehensive Car Insurance" width="500" height="450">

                        </div>

                    </div>

                </div>



                <div class="mob-div">

                    <div class="accdn-hd showMob">
                        <p>Third Party, Fire & Theft </p> <span class="icon">+</span>
                    </div>

                    <div class="inner_sec3_tab_content-box" id="tab_cont_2" style="display: none;">

                        <div class="inner_sec3_tab_content">

                            <h3 class="inner_sec3_tab_content_hd hideMob">Third Party, Fire & Theft </h3>



                            <div class="inner_sec3_tab_img e-com_img showMob">

                                <img src="images/inner_sec3-tab-img2.webp" alt="Third Party, Fire, & Theft Insurance" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">Third Party, Fire & Theft car insurance offers a cost-effective way to protect yourself and others on the road. It covers damages you may cause to another person’s vehicle or property while safeguarding your own car against theft, hijacking, or fire damage. Though not as comprehensive as full coverage, it provides essential protection for major risks and is particularly valuable in the USA, where vehicle theft and fire incidents are common. Balancing affordability with peace of mind, this insurance is an ideal choice for budget-conscious drivers.</p>

                            <p class="inner_sec3-content-sub_hd">Benefits of Third Party, Fire & Theft Car Insurance</p>

                            <ul class="inner_sec3_tab-lst">

                                <li><strong>Affordable Protection:</strong> A budget-friendly alternative to comprehensive insurance.</li>

                                <li><strong>Theft and Fire Coverage:</strong> Protects your car in cases of theft, hijacking, or fire damage.</li>

                                <li><strong>Third-Party Liability:</strong> Covers damages you may cause to others’ property or vehicles.</li>

                                <li><strong>Peace of Mind:</strong> Essential coverage for key risks without the high costs of comprehensive insurance.</li>

                            </ul>

                        </div>



                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-tab-img2.webp" alt="Third Party, Fire, & Theft Insurance" width="500" height="450">

                        </div>

                    </div>

                </div>



                <div class="mob-div">

                    <div class="accdn-hd showMob">
                        <p>Third Party Only</p> <span class="icon">+</span>
                    </div>

                    <div class="inner_sec3_tab_content-box" id="tab_cont_3" style="display: none;">

                        <div class="inner_sec3_tab_content">

                            <h3 class="inner_sec3_tab_content_hd hideMob">Third Party Only</h3>



                            <div class="inner_sec3_tab_img e-com_img showMob">

                                <img src="images/inner_sec3-tab-img3.webp" alt="Third Party Only Insurance" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">Third Party Only car insurance is the most basic and affordable coverage, protecting you against financial liability for damages caused to another person’s vehicle or property. While it doesn’t cover your own car, it ensures you meet legal and financial obligations and avoids out-of-pocket expenses in case of an accident. Ideal for budget-conscious drivers, this policy provides essential protection and peace of mind, especially in the USA, where accidents are common.</p>

                            <p class="inner_sec3-content-sub_hd">Benefits of Third Party Only Car Insurance</p>

                            <ul class="inner_sec3_tab-lst">

                                <li><strong>Affordable Coverage:</strong> The most cost-effective way to get insured.</li>

                                <li><strong>Liability Protection:</strong> Covers damages you cause to other vehicles or property.</li>

                                <li><strong>Peace of Mind:</strong> Drive confidently, knowing you’re protected against third-party claims.</li>

                            </ul>

                        </div>

                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-tab-img3.webp" alt="Third Party Only Insurance" width="500" height="450">

                        </div>

                    </div>

                </div>

            </div>



            <div class="clearall"></div>

            <div class="btn-bx">

                <a href="http://auto.funnel.quoterocket.local/flow" class="comn-btn" alt="Car Insurance Quotes">Get Started Today</a>

            </div>

        </div>

    </div>



    <div class="why_choose">

        <div class="container">

            <div class="why_choose_left">

                <p class="heading">Why Choose<br class="hideMob"> Go Quote Rocket</p>

                <p class="comn_text">Finding the right car insurance can feel overwhelming, but we’re here to make it simple. At <a href="/" alt="Affordable Insurance Quotes the USA">Go Quote Rocket</a>, we connect you with an insurance expert who can guide you through the process. You'll be able to make the right choice for your needs and budget.</p>

            </div>

            <div class="why_choose_right">

                <ul class="why_choose_lst">

                    <li>

                        <img src="images/why-chose-icn1.png" alt="Save Time with Go Quote Rocket" class="why-chose_icn" width="84" height="92">

                        <h3>Save Time</h3>

                        <p>Find all the prices and benefits you need in 1 minute.</p>

                    </li>

                    <li>

                        <img src="images/why-chose-icn2.png" alt="Save Money with Go Quote Rocket" class="why-chose_icn" width="84" height="92">

                        <h3>Save Money</h3>

                        <p>Compare insurance quotes. Choose the best for you.</p>

                    </li>

                    <li>

                        <img src="images/why-chose-icn3.png" alt="Save Stress with Go Quote Rocket" class="why-chose_icn" width="84" height="92">

                        <h3>Save Stress</h3>

                        <p>Avoid hidden fees and keep your personal information private.</p>

                    </li>

                    <li>

                        <img src="images/why-chose-icn4.png" alt="Save Smart with Go Quote Rocket" class="why-chose_icn" width="84" height="92">

                        <h3>Save Smart</h3>

                        <p>Quick comparisons, explained by a trusted expert.</p>

                    </li>

                </ul>

            </div>

        </div>

    </div>



    <div class="inner_sec4">

        <div class="container">

            <p class="heading">Cost to Insure<br class="showDesk"> the USA’s Top-Selling Cars</p>

            <p class="comn_text comn_text--center">Your insurance premium is determined by a range of factors, from safety features of your vehicle to risk profiles. Discover the <strong>average costs to insure some of the USA’s most popular car brands</strong> and find out what you could be paying.</p>



            <div class="inner_sec4_inr">

                <div class="inner_sec4_inr_bx">

                    <img src="images/vw-polo-icon.png" alt="Volkswagon Polo Car Insurance" class="inner_sec4_icn" width="200" height="124">

                    <p>Insurance for a <strong>Honda Civic</strong> averages <strong>$175/mo*</strong>, but can be as low as <strong>$89/mo*</strong>.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/toyota-icon.png" alt="Toyota Corolla Car Insurance" class="inner_sec4_icn" width="200" height="124">

                    <p>Insurance for a <strong>Toyota Corolla</strong> averages <strong>$165/mo*</strong>, but can be as low as <strong>$78/mo*</strong>.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/hyundai-icon.png" alt="Hyundai i20 Car Insurance" class="inner_sec4_icn" width="200" height="124">

                    <p>Insurance for a <strong>Honda Accord</strong> averages <strong>$168/mo*</strong>, but can be as low as <strong>$95/mo*</strong>.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/kia-icon.png" alt="Kia Rio Car Insurance" class="inner_sec4_icn" width="200" height="124">

                    <p>Insurance for a <strong>Ford F-150</strong> averages <strong>$185/mo*</strong>, but can be as low as <strong>$105/mo*</strong>.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/suzuki-icon.png" alt="Suzuki Swift Car Insurance" class="inner_sec4_icn" width="200" height="124">

                    <p>Insurance for a <strong>Chevrolet Equinox</strong> averages <strong>$172/mo*</strong>, but can be as low as <strong>$92/mo*</strong>.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/renault-icon.png" alt="Renault Kwid Car Insurance" class="inner_sec4_icn" width="200" height="124">

                    <p>Insurance for a <strong>Nissan Altima</strong> averages <strong>$158/mo*</strong>, but can be as low as <strong>$85/mo*</strong>.</p>

                </div>

            </div>



            <div class="btn-bx">

                <a href="http://auto.funnel.quoterocket.local/flow" class="comn-btn" alt="Car Insurance Quotes">Get Started Today</a>

            </div>

        </div>

    </div>



    <div class="sec3">

        <div class="container">

            <p class="heading">Over 744 409<br class="showMob"> Americans Trust Us.</p>

            <div class="feefo_box">

                <img src="images/feefo-logo.png" alt="" class="feefo_log" width="366" height="84">

                <div class="feefo_review">

                    <img src="images/star.png" alt="5 Star Reviews" width="228" height="40">

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

                        <div class="accordion acdn-heading accordion-open" id="hd-one">What’s the most affordable car insurance in the USA?</div>

                        <div class="acdn-content">

                            <p class="acdn-para">Third-party insurance is generally the least expensive because it only covers damages you cause to others. For more extensive protection, comprehensive insurance is a better option, though it costs more.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Why is car insurance important?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">In the USA, most drivers are uninsured, which means you could be left covering costs if someone else damages your car. Insurance helps you manage expenses from accidents, theft, or breakdowns and often includes useful extras like roadside assistance.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">How are car insurance premiums calculated?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Premiums depend on factors such as the type of cover you choose, your vehicle’s condition, added security features, and any custom modifications. If you have a <a href="vehicle-tracker.php" alt="GPS Tracking Device Quotes">GPS vehicle tracking device</a> or an extended <a href="motor-warranty.php" alt="Motor Warranty Policy Quotes">motor warranty</a>, these items can also impact your premium.</p>

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

                        <div class="accordion acdn-heading accordion-close">Am I obligated to purchase if I select a quote?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">No commitment is required when you choose a quote. A representative from the insurer will contact you to discuss the details and help you decide if it’s the right fit.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">What is excess, and how does it affect my premium?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Excess is the portion you pay out of pocket for a claim. Opting for a higher excess can reduce your monthly costs, while a lower excess will increase your premium.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Can I insure multiple vehicles?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Absolutely! Each vehicle can be insured, but you’ll need to request a separate quote for each one to ensure the coverage is tailored appropriately.</p>

                        </div>

                    </div>

                </div>







                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Does car insurance cover me when driving someone else’s car?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">No, insurance typically covers the vehicle itself. If you drive another person’s car, their policy would handle any claims, not yours.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">How do I claim on my car insurance?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">You’ll need to report the incident to the police and provide the case number to your insurer. They’ll guide you through the process, which might include an assessment of your vehicle.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">What are the benefits of using Go Quote Rocket?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Go Quote Rocket simplifies comparing <a href="medical-insurance.php" alt="Medical Insurance Quotes">insurance options</a>, helping you find affordable and reliable coverage quickly and without hassle. It’s an easy way to save time and money.</p>

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

                <a href="http://auto.funnel.quoterocket.local/flow" class="comn-btn">Get Quote Now</a>

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
        function scrollToSection() {
            var section = document.getElementById("toForm");
            var offset = section.offsetTop - 72;
            if ($(window).width() < 767) {
                var offset = section.offsetTop - 50
            }
            window.scrollTo({
                top: offset,
                behavior: 'smooth'
            })
        }
        $(document).ready(function() {
            //insurance api call
            var phoneErrors = new Array();
            var termsError = new Array();
            $('.apiBtn').on('click', function(event) {
                //event.preventDefault()
                let formData = $('[name=insurance_api1]').serialize();
                var PhoneNumber = $("input[name='phone']").val();
                var errors = new Array();
                validateCheckbox();
                $('input[name=phone],input[name=email],input[name=given-name],input[name=family-name],select[name=make],select[name=currentlyinsured],select[name=monthly_income],select[name=employment]')
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
                    insuranceApiCall(formData);
                    // $('#ban_slide_1').css('display', 'none');
                    // $('#ban_slide_2').css('display', 'block');
                    $('#phone_prompt').hide();
                }
            });
            $("select[name=make],select[name=currentlyinsured],select[name=monthly_income],select[name=employment]").on('change', function(e) {
                $(this).next('.error_message ').hide();

            });
            $("input[name='given-name'], input[name='family-name'], input[name='email']").keyup(function() {
                $(this).next('.error_message ').hide();

            });

            function insuranceApiCall(formData) {
                $('#loading-indicator').show();
                let queryStringValue = window.location.search;
                $.ajax({
                    url: '/api/submit.php?vertical=auto',
                    // Type of Request
                    type: 'post',
                    data: formData + '&vertical=auto',
                    success: function(data) {
                        let resultData = JSON.parse(data);
                        //console.log(resultData)

                        if (resultData.code === 1) {
                            $('#ban_slide_1').css('display', 'none');
                            $('#ban_slide_2').css('display', 'block');
                            $('#loading-indicator').hide();
                        } else {
                            $('#loading-indicator').hide();
                            $('#error_handler_overlay').show();

                            $('#ban_slide_3').css('display', 'none');
                            $('#ban_slide_1').css('display', 'block');

                            $('#slide_2_value').val("");
                            $('#slide_3_value').val("");

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
                const cleanPhone = PhoneNumber.replace(/\D/g, '');
                if (cleanPhone.length < 10) {
                    phoneErrors.push("Please enter a valid 10-digit US phone number.");
                    $('#phone_prompt').text(prompText).show();
                } else if (cleanPhone.length >= 10 && cleanPhone.charAt(0) === '0') {
                    phoneErrors.push("Please enter a valid 10-digit US phone number.");
                    $('#phone_prompt').text(prompText).show();
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

            //for ups-trck api
            $('#back_btn_2').click(function() {
                $('#ban_slide_2').css('display', 'none');
                $('#ban_slide_1').css('display', 'block');
            });

            $('#back_btn_3').click(function() {
                $('#ban_slide_3').css('display', 'none');
                $('#ban_slide_2').css('display', 'block');
            });

            let isTrackApiRequired = '';
            $('#slide_2_no_btn, #slide_2_yes_btn').click(function() {
                isTrackApiRequired = $(this).text();
                //console.log(isTrackApiRequired);
                $('#ban_slide_2').css('display', 'none');
                $('#ban_slide_3').css('display', 'block');
            });

            $('#slide_3_yes_btn').click(function() {
                let queryStringValue = window.location.search;
                window.location.href = "https://goquoterocket.com/thank-you.php" + queryStringValue;
            });

            $('#slide_3_no_btn').click(function() {
                console.log(isTrackApiRequired);
                if (isTrackApiRequired === 'Yes') {
                    trackApiCall(isTrackApiRequired);
                } else {
                    let queryStringValue = window.location.search;
                    window.location.href = "https://goquoterocket.com/thank-you.php" + queryStringValue;
                }
            });
            // Track API call function for "Yes" responses
            function trackApiCall(optData) {
                let queryStringValue = window.location.search;
                //$('#loading-indicator').show();
                $.ajax({
                    url: '/api/submit.php?vertical=auto&trackApi=' + optData,
                    type: 'post',
                    data: { vertical: 'auto' },
                    success: function(data) {
                        let resultData = JSON.parse(data);
                        console.log(resultData);

                        if (resultData.code === 1) {
                            window.location.href = 'https://goquoterocket.com/thank-you.php' + queryStringValue;
                        } else {
                            //$('#loading-indicator').hide();
                            $('#error_handler_overlay').show();
                            $('#error_handler_overlay p').text(resultData.response);
                        }
                    },
                    error: function(error) {
                        $('#loading-indicator').hide();
                        console.log(`Error ${error}`);
                    }
                });
            }
            //end ups-trck
            $('.mob-mnu-ic').click(function(e) {
                $('.mobilemenu').slideToggle();
                $('.dl-trigger').toggleClass('dl-active')
            });
            $('.menuOpen').click(function(e) {
                e.preventDefault();
                $('.dropdown-mobile').slideUp();
                $('.menuOpen').removeClass('mnutog');
                if (!$(this).next('.dropdown-mobile').is(':visible')) {
                    $(this).next('.dropdown-mobile').slideDown();
                    $(this).addClass('mnutog')
                }
            });
            $('.inner_sec3_tab-col').click(function(e) {
                $('.inner_sec3_tab-col').removeClass('active');
                $(this).addClass('active')
            });
            $('#tab_col_1').click(function(e) {
                $('#tab_cont_1').show();
                $('#tab_cont_2, #tab_cont_3').hide()
            });
            $('#tab_col_2').click(function(e) {
                $('#tab_cont_2').show();
                $('#tab_cont_1, #tab_cont_3').hide()
            });
            $('#tab_col_3').click(function(e) {
                $('#tab_cont_3').show();
                $('#tab_cont_1, #tab_cont_2').hide()
            });
            $('.accdn-hd').click(function() {
                const content = $(this).next('.inner_sec3_tab_content-box');
                const icon = $(this).find('.icon');
                var trg = $(this);
                window.setTimeout(function() {
                    $('html, body').animate({
                        scrollTop: $(trg).offset().top - 75
                    }, 1000)
                }, 700);
                $('.inner_sec3_tab_content-box').not(content).slideUp(500);
                $('.icon').not(icon).text('+');
                content.slideToggle(500);
                icon.text(icon.text() === '+' ? '-' : '+')
            });
            $('.reviews').slick({
                dots: !1,
                arrows: !1,
                autoplay: !1,
                slidesToShow: 3,
                slidesToScroll: 1,
                variableWidth: !0,
                responsive: [{
                    breakpoint: 2200,
                    settings: {
                        centerMode: !0,
                    }
                }, {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        centerMode: !1,
                        autoplay: !0,
                        autoplaySpeed: 3000,
                        dots: !0,
                        variableWidth: !1,
                    }
                }]
            });
            if ($(window).innerWidth() <= 767) {
                $('.colapse-hd').click(function(e) {
                    $(this).next('.info-sec-links-list').slideToggle();
                    $(this).toggleClass('active')
                })
            }
            $(".acdn-heading").click(function() {
                var questionDiv = $(this);
                var answerDiv = $(this).next('.acdn-content');
                var idx = $('.acdn-content').index(answerDiv);
                $('.acdn-content').each(function(index, ansDiv) {
                    if (index != idx && $(ansDiv).is(':visible')) {
                        $(ansDiv).slideUp(500, function() {
                            $(ansDiv).prev('.acdn-heading').removeClass('accordion-open')
                        })
                    }
                });
                if (answerDiv.is(':visible')) {
                    answerDiv.stop().slideUp(500, function() {
                        questionDiv.removeClass('accordion-open')
                    })
                } else {
                    questionDiv.addClass('accordion-open');
                    answerDiv.stop().slideDown(500)
                }
            })


            $(document).scroll(function() {
                if ($(this).scrollTop() > 110) {
                    $('.top-fix-bar').addClass('fixed-nav')
                } else {
                    $('.top-fix-bar').removeClass('fixed-nav')
                }
                if ($(this).scrollTop() > 10) {
                    $('.mobilemenu').addClass('mobimenu-top')
                } else {
                    $('.mobilemenu').removeClass('mobimenu-top')
                }
            });


        });
    </script>

</body>

</html>
