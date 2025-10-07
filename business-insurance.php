<?php
$queryParams = !empty($_SERVER['QUERY_STRING']) ? "&" . $_SERVER['QUERY_STRING'] : '';
// Extract the 'id2' parameter value test
//$id2 = $_REQUEST['id2'] ?? '';
// Split the id2 string into parts
//$parts = explode('--', $id2);

//$aff_id = explode('_', $parts[0])[1] ?? null;
//$offer_id = explode('_', $parts[0])[2] ?? null;

$aff_sub = $_REQUEST['aff_sub'] ?? '0022';
$aff_sub2 = $_REQUEST['aff_sub2'] ?? null;
$aff_sub3 = $_REQUEST['aff_sub3'] ?? 'organic';
$funnelId = "Biz";
?>
<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Affordable Business Insurance in South Africa | Quote Rocket</title>

    <meta name="description" content="Secure your business with comprehensive and affordable insurance. Compare business insurance quotes in South Africa with Quote Rocket today.">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!--PreloadFile -->
    <link rel="preload" href="images/inner-sec1-business-loans.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img1.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img2.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img3.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-business-tab1.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-business-tab2.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-business-tab3.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/footer-logos-gray.svg" type="image/svg+xml" as="image" />
    <!--PreloadFile End-->
    <link rel="preload" href="css/error-handler.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="css/loader-design.css" as="style" onload="this.rel='stylesheet'">

    <link rel="preload" href="css/style.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="css/slick.css" as="style" onload="this.rel='stylesheet'">

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
                    "name": "Why is a business insurance plan essential?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Running a business comes with unpredictable risks like fires, theft, natural disasters, or employee injuries. Without insurance, these unexpected events could lead to significant financial losses that might shut down your business. A Business Insurance plan provides the protection you need to keep your operations running smoothly."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What if I think business insurance is too expensive?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Many small business owners assume that business insurance is unaffordable, but the cost of being uninsured can be far greater. Affordable options, like business owner's policies (BOPs), bundle essential coverages at a lower price. Increasing your deductible is another way to lower premiums while maintaining strong protection."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How often should I evaluate my business insurance?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "It's crucial to review your insurance policies annually to ensure they align with your business's needs. If your business undergoes changes like expansion, moving locations, or adding new services, a review ensures your coverage keeps up with these developments."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Does incorporation eliminate the need for Business Insurance?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "While incorporation safeguards your personal assets, it doesn’t cover your business risks, such as lawsuits or damages. Business insurance fills this gap by offering financial protection for your business operations and additional security for your assets."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Why should business owners analyze risks?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Every business faces risks, whether from accidents, theft, or operational interruptions. Assessing these risks allows you to prepare for them, minimizing their financial impact. Proper insurance coverage ensures your business can withstand unexpected events and thrive."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What are the most common risks businesses should prepare for?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Businesses encounter risks such as property damage, inventory theft, liability claims, and operational disruptions. Employee-related risks, such as workplace injuries, and leadership risks, like the loss of a key individual, also require consideration to ensure comprehensive protection."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What types of insurance should new businesses prioritize?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "A thorough risk assessment will identify the insurance types you need. Business owner's policies (BOPs) are an affordable option for small businesses, bundling essential coverages like property and liability insurance. You can also add specialized coverage based on your business activities."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How can I save on business insurance costs?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Opting for higher deductibles is a simple way to lower your premiums. Additionally, bundled policies like BOPs offer cost-effective solutions by covering multiple risks under a single plan. Comparing quotes from various providers also ensures you get the best value."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Is workers' compensation insurance necessary for my business?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "If you have employees, workers' compensation insurance is essential. It protects your business financially in case of workplace injuries or illnesses, and it’s often legally required depending on your location."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What determines the cost of business insurance?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The price of business insurance depends on factors like your industry, the location of your business, and the size of your operations. Exploring options like packaged policies or negotiating deductibles can help reduce costs while ensuring comprehensive coverage."
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
        })(window, document, 'script', 'dataLayer', 'GTM-WJCXPHPK');
    </script>
    <!-- End Google Tag Manager -->
</head>



<body class="inner_pg business_insurance">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJCXPHPK"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php include 'header.php'; ?>



    <div class="inner_sec1" id="choosePack">

        <div class="container">

            <p class="inner_sec1-rat-txt"><img src="images/sec1-star.png" alt="Customer Reviews" width="148" height="26"> <span>4.8 stars</span> 2,000+ reviews</p>

            <p class="inner_sec1-hdg">Protect Your Business<br class="showMob"> with<br class="hideMob"> Insurance Coverage<br class="showMob"> Up-To R300 000</p>

            <p class="inner_sec1_txt">Get a customized business insurance quote in <strong>just 60 seconds</strong>—no hassle,<br class="showDesk"> no hidden fees, and complete peace of mind.</p>



            <div class="inner_sec1-form" id="toForm">

                <form method="POST" name="business_api1">
                    <input type="hidden" name="businessApi" value="Yes">
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
                                    <span class="phone-prompt-error">Please check that your phone number is in local format 0xx xxx xxxx. Numbers starting with 086, 085, 080,or 09 aren't supported.</span>
                                </div>
                            </div>

                        </div>

                        <div class="form__input form__input--3">

                            <div class="form_input_box">
                                <input type="email" name="email" id="" class="input-fld required" placeholder="Email" data-error-message="Please enter your email address.">
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                            <div class="form_input_box">
                                <select name="city" id="" class="input-fld required" data-error-message="Select your city from the options in the dropdown. If you city isn't listed, please select Other.">

                                    <option value="" selected="">Select your city...</option>

                                    <option value="Bloemfontein">Bloemfontein</option>

                                    <option value="CapeTown">CapeTown</option>

                                    <option value="Durban">Durban</option>

                                    <option value="Johannesburg">Johannesburg</option>

                                    <option value="Pietermaritzburg">Pietermaritzburg</option>

                                    <option value="Polokwane">Polokwane</option>

                                    <option value="PortElizabeth">PortElizabeth</option>

                                    <option value="Pretoria">Pretoria</option>

                                    <option value="Other">Other</option>

                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                            <div class="form_input_box">
                                <select name="businesscovertype" id="" class="input-fld required" data-error-message="Please select your insurance type.">

                                    <option value="" selected="">Select type of insurance needed...</option>

                                    <option value="Business_All_Risk">Business All Risk</option>

                                    <option value="Building_Insurance">Building Insurance</option>

                                    <option value="Business_Vehicles">Business Vehicles</option>

                                    <option value="E_Hailing">E-Hailing</option>

                                    <option value="Construction_Earth_Moving_Vehicles">Construction Earth Moving Vehicles</option>

                                    <option value="Contractors_All_Risk">Contractors All Risk</option>

                                    <option value="Goods_In_Transit">Goods In Transit</option>

                                    <option value="Motor_Only">Motor Only</option>

                                    <option value="Professional_Indemnity">Professional Indemnity</option>

                                    <option value="Public_Liability">Public Liability</option>

                                    <option value="Trucking_Fleets">Trucking & Fleets</option>

                                    <option value="Tow_Trucks">Tow Trucks</option>

                                    <option value="Unknown">Unknown</option>

                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>


                        </div>

                    </div>



                    <div class="form_bottom">

                        <ul class="form_lst">

                            <li><img src="images/secure.svg" alt="100% Secure Form Icon"> 100% SECURE FORM</li>

                            <li><img src="images/heart.svg" alt="No Commitment Icon"> NO COMMITMENT REQUIRED</li>

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

            <p class="as-seen__heading">Quotes by South Africa's top providers, including:</p>

        </div>



        <div class="hide-1024">

            <div class="brand__strip__scroller">

                <ul class="scroll__brand__list">

                    <li><img src="images/dial-direct-logo.svg" alt="Dial Direct Business Insurance Logo" class="dial-direct_logo"></li>

                    <li><img src="images/virseker-logo.svg" alt="Virseker Business Insurance Logo" class="virseker_logo"></li>

                    <li><img src="images/miway-logo.svg" alt="Miiway Business Insurance Logo"></li>

                    <li><img src="images/momentum-logo.svg" alt="Momentum Business Insurance Logo" class="momentum_logo"></li>

                    <li><img src="images/first-for-women-logo.svg" alt="First For Women Business Insurance Logo"></li>

                    <li><img src="images/budget-logo.svg" alt="Budget Insurance Business Insurance Logo" class="budget_logo"></li>

                </ul>

            </div>

        </div>



        <div class="show-1024">

            <div class="brand__strip__scroller">

                <ul class="scroll__brand__list">

                    <li><img src="images/dial-direct-logo.svg" alt="Dial Direct Business Insurance Logo" class="dial-direct_logo"></li>

                    <li><img src="images/virseker-logo.svg" alt="Virseker Business Insurance Logo" class="virseker_logo"></li>

                    <li><img src="images/miway-logo.svg" alt="Miiway Business Insurance Logo"></li>

                    <li><img src="images/momentum-logo.svg" alt="Momentum Business Insurance Logo" class="momentum_logo"></li>

                    <li><img src="images/first-for-women-logo.svg" alt="First For Women Business Insurance Logo"></li>

                    <li><img src="images/budget-logo.svg" alt="Budget Insurance Business Insurance Logo" class="budget_logo"></li>

                </ul>



                <ul class="scroll__brand__list">

                    <li><img src="images/dial-direct-logo.svg" alt="Dial Direct Business Insurance Logo" class="dial-direct_logo"></li>

                    <li><img src="images/virseker-logo.svg" alt="Virseker Business Insurance Logo" class="virseker_logo"></li>

                    <li><img src="images/miway-logo.svg" alt="Miiway Business Insurance Logo"></li>

                    <li><img src="images/momentum-logo.svg" alt="Momentum Business Insurance Logo" class="momentum_logo"></li>

                    <li><img src="images/first-for-women-logo.svg" alt="First For Women Business Insurance Logo"></li>

                    <li><img src="images/budget-logo.svg" alt="Budget Insurance Business Insurance Logo" class="budget_logo"></li>

                </ul>



                <ul class="scroll__brand__list">

                    <li><img src="images/dial-direct-logo.svg" alt="Dial Direct Business Insurance Logo" class="dial-direct_logo"></li>

                    <li><img src="images/virseker-logo.svg" alt="Virseker Business Insurance Logo" class="virseker_logo"></li>

                    <li><img src="images/miway-logo.svg" alt="Miiway Business Insurance Logo"></li>

                    <li><img src="images/momentum-logo.svg" alt="Momentum Business Insurance Logo" class="momentum_logo"></li>

                    <li><img src="images/first-for-women-logo.svg" alt="First For Women Business Insurance Logo"></li>

                    <li><img src="images/budget-logo.svg" alt="Budget Insurance Business Insurance Logo" class="budget_logo"></li>

                </ul>



                <ul class="scroll__brand__list">

                    <li><img src="images/dial-direct-logo.svg" alt="Dial Direct Business Insurance Logo" class="dial-direct_logo"></li>

                    <li><img src="images/virseker-logo.svg" alt="Virseker Business Insurance Logo" class="virseker_logo"></li>

                    <li><img src="images/miway-logo.svg" alt="Miiway Business Insurance Logo"></li>

                    <li><img src="images/momentum-logo.svg" alt="Momentum Business Insurance Logo" class="momentum_logo"></li>

                    <li><img src="images/first-for-women-logo.svg" alt="First For Women Business Insurance Logo"></li>

                    <li><img src="images/budget-logo.svg" alt="Budget Insurance Business Insurance Logo" class="budget_logo"></li>

                </ul>

            </div>

        </div>

    </div>



    <div class="inner_sec2">

        <div class="container">

            <p class="heading">How We Make<br class="showDesk"> Finding Business Insurance Easy</p>

            <p class="comn_text">We understand that finding the right business insurance can feel overwhelming. That’s why Quote Rocket simplifies<br class="showDesk"> the process for you. In just a few steps, we’ll connect you with trusted providers, helping you secure the<br class="showDesk"> most reliable and affordable coverage for your business, hassle-free.</p>



            <div class="sec2_inr">

                <div class="sec2_inr_bx">

                    <img src="images/inner-sec2-img1.webp" alt="Guy Using Quote Rocket For Insurance Quotes" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>One Quick Form</h3>

                        <p>Fill out our secure, straightforward form in just 60 seconds. Your information is always protected, and we’ll handle the rest to find the best business insurance for your needs.</p>

                    </div>

                </div>

                <div class="sec2_inr_bx">

                    <img src="images/inner-sec2-img2.webp" alt="Tailored Insurance Options" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>Tailored Insurance Options</h3>

                        <p>We’ll instantly search and present the best business insurance plans that match your company’s unique requirements and budget, ensuring your business gets the right protection for peace of mind.</p>

                    </div>

                </div>

                <div class="sec2_inr_bx">

                    <img src="images/inner-sec2-img3.webp" alt="Trusted Business Insurance Experts" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>Trusted Providers Ready</h3>

                        <p>Connect with a vetted, experienced business insurance provider who will guide you through the process, giving you confidence in your protection against unexpected risks and financial losses.</p>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <div class="inner_sec3">

        <div class="container">

            <p class="heading">Compare & Save On<br> Business Insurance Coverage</p>

            <p class="comn_text comn_text--center">Protect your business from unexpected risks with tailored insurance options. From commercial property coverage to professional indemnity policies, we help you <strong>find the perfect protection for your business at competitive rates</strong>.</p>

            <div class="inner_sec3_row">

                <div class="inner_sec3_tab-row hideMob">

                    <div class="inner_sec3_tab-col active" data-target="#tab_col_1">
                        <p>Commercial Property</p>
                    </div>

                    <div class="inner_sec3_tab-col" data-target="#tab_col_2">
                        <p>Employers’ Liability</p>
                    </div>

                    <div class="inner_sec3_tab-col" data-target="#tab_col_3">
                        <p>Product Liability</p>
                    </div>

                    <div class="inner_sec3_tab-col" data-target="#tab_col_4">
                        <p>Professional Indemnity</p>
                    </div>

                </div>



                <div class="mob-div">

                    <div class="accdn-hd showMob">
                        <p>Commercial Property Insurance</p><span class="icon">+</span>
                    </div>

                    <div class="inner_sec3_tab_content-box hideMob" id="tab_col_1">

                        <div class="inner_sec3_tab_content">

                            <h3 class="inner_sec3_tab_content_hd hideMob">Commercial Property Insurance</h3>



                            <div class="inner_sec3_tab_img e-com_img showMob">

                                <img src="images/inner_sec3-business-tab1.webp" alt="Commercial Property Insurance" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">Commercial property insurance is essential for protecting your business premises, equipment, and inventory. It covers damages or losses caused by risks like fire, theft, or natural disasters, allowing you to recover quickly and minimize downtime. This type of coverage ensures your business remains operational even in the face of unforeseen challenges.</p>
                            <p class="inner_sec3-content-sub_hd">Benefits of Commercial Property Insurance</p>

                            <ul class="inner_sec3_tab-lst">

                                <li><strong>Comprehensive Property Protection:</strong> Covers physical structures, machinery, inventory, and office equipment.</li>
                                <li><strong>Risk Mitigation:</strong> Shields your business from damages caused by fire, theft, floods, or storms.</li>
                                <li><strong>Business Continuity:</strong> Provides financial support to help you resume operations swiftly after a loss.</li>
                                <li><strong>Customizable Coverage:</strong> Tailored plans to fit the specific needs of your business and industry.</li>
                                <li><strong>Peace of Mind:</strong> Ensures your property investments are safeguarded against unexpected events.</li>
                            </ul>

                        </div>

                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-business-tab1.webp" alt="Commercial Property Insurance" width="500" height="450">

                        </div>

                    </div>

                </div>



                <div class="mob-div">

                    <div class="accdn-hd showMob">
                        <p>Employers’ Liability Insurance</p> <span class="icon">+</span>
                    </div>

                    <div class="inner_sec3_tab_content-box" id="tab_col_2" style="display: none;">

                        <div class="inner_sec3_tab_content">

                            <h3 class="inner_sec3_tab_content_hd hideMob">Employers’ Liability Insurance</h3>



                            <div class="inner_sec3_tab_img e-com_img showMob">

                                <img src="images/inner_sec3-business-tab2.webp" alt="Employers' Liability Insurance" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">Employers’ liability insurance protects your business from the financial burden of employee injury, illness, or death resulting from work-related activities. It covers compensation claims, medical costs, and legal expenses, ensuring your business meets legal obligations while providing a secure environment for employees.</p>
                            <p class="inner_sec3-content-sub_hd">Benefits of Employers’ Liability Insurance</p>

                            <ul class="inner_sec3_tab-lst">

                                <li><strong>Employee Compensation:</strong> Covers medical costs, lost wages, and other compensation claims.</li>
                                <li><strong>Legal Cost Coverage:</strong> Protects your business from legal fees associated with employee claims.</li>
                                <li><strong>Regulatory Compliance:</strong> Ensures you meet workplace safety and liability laws in South Africa.</li>
                                <li><strong>Reputation Protection:</strong> Demonstrates your commitment to employee welfare.</li>
                                <li><strong>Financial Security:</strong> Shields your business from unexpected expenses related to employee claims.</li>

                            </ul>

                        </div>



                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-business-tab2.webp" alt="Employers' Liability Insurance" width="500" height="450">

                        </div>

                    </div>

                </div>



                <div class="mob-div">

                    <div class="accdn-hd showMob">
                        <p>Product Liability Insurance</p> <span class="icon">+</span>
                    </div>

                    <div class="inner_sec3_tab_content-box" id="tab_col_3" style="display: none;">

                        <div class="inner_sec3_tab_content">

                            <h3 class="inner_sec3_tab_content_hd hideMob">Product Liability Insurance</h3>



                            <div class="inner_sec3_tab_img e-com_img showMob">

                                <img src="images/inner_sec3-business-tab3.webp" alt="Product Liability Insurance" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">Product liability insurance safeguards your business if a product you sell or supply causes harm, injury, or damage. This coverage helps manage costs related to medical bills, legal fees, and compensation claims, ensuring your reputation and finances remain intact.</p>
                            <p class="inner_sec3-content-sub_hd">Benefits of Product Liability Insurance</p>

                            <ul class="inner_sec3_tab-lst">

                                <li><strong>Customer Protection:</strong> Covers claims from customers harmed by defective or dangerous products.</li>
                                <li><strong>Legal Cost Assistance:</strong> Pays for legal fees and defense costs in lawsuits.</li>
                                <li><strong>Financial Stability:</strong> Shields your business from costly settlements or judgments.</li>
                                <li><strong>Brand Reputation:</strong> Preserves trust and loyalty by addressing claims responsibly.</li>
                                <li><strong>Industry Compliance:</strong> Meets legal or regulatory requirements for product safety.</li>

                            </ul>

                        </div>

                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-business-tab3.webp" alt="Product Liability Insurance" width="500" height="450">

                        </div>

                    </div>

                </div>



                <div class="mob-div">

                    <div class="accdn-hd showMob">
                        <p>Professional Indemnity Cover</p> <span class="icon">+</span>
                    </div>

                    <div class="inner_sec3_tab_content-box" id="tab_col_4" style="display: none;">

                        <div class="inner_sec3_tab_content">

                            <h3 class="inner_sec3_tab_content_hd hideMob">Professional Indemnity Cover</h3>



                            <div class="inner_sec3_tab_img e-com_img showMob">

                                <img src="images/inner_sec3-business-tab4.jpg" alt="Professional Indemnity Cover" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">Professional indemnity insurance is designed for businesses that provide advice or services. It covers claims of negligence, errors, or omissions that result in client financial loss. This coverage is vital for industries like consulting, legal, and financial services, where expertise and accuracy are critical.</p>
                            <p class="inner_sec3-content-sub_hd">Benefits of Professional Indemnity Cover</p>

                            <ul class="inner_sec3_tab-lst">

                                <li><strong>Legal Defense Coverage:</strong> Pays for legal fees and settlements if clients sue for negligence or mistakes.</li>
                                <li><strong>Client Trust:</strong> Provides assurance to clients that your business is protected and accountable.</li>
                                <li><strong>Reputation Protection:</strong> Shields your business from damage caused by claims of professional errors.</li>
                                <li><strong>Industry Compliance:</strong> Meets legal and industry-specific insurance requirements.</li>
                                <li><strong>Peace of Mind:</strong> Allows you to focus on your work without fear of costly legal disputes.</li>

                            </ul>

                        </div>

                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-business-tab4.jpg" alt="Professional Indemnity Cover" width="500" height="450">

                        </div>

                    </div>

                </div>

            </div>



            <div class="clearall"></div>

            <div class="btn-bx">

                <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Business Insurance Quotes">Get Started Today</a>

            </div>

        </div>

    </div>



    <div class="why_choose">

        <div class="container">

            <div class="why_choose_left">

                <p class="heading">Why Choose<br class="hideMob"> Quote Rocket</p>

                <p class="comn_text">Finding the right business insurance can feel overwhelming, but we’re here to make it simple. At <a href="/" alt="Car Insurance Quotes For Free">Quote Rocket</a>, we connect you with multiple authorized insurers, so you can compare options side by side. Our process is designed to save you time, reduce stress, and help you secure the most reliable and affordable coverage available.</p>
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

            <p class="heading">Protect What You've<br class="showDesk"> Built with Business Insurance</p>

            <p class="comn_text">Mitigate risks, protect your assets, and <strong>secure your company’s future with tailored insurance solutions</strong>. Learn more<br class="showDesk"> about how business insurance can benefit you.</p>

            <div class="inner_sec4_inr">

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-business-icon1.png" alt="Property Damage Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Safeguard Against<br> Property Damage</h3>

                    <p>Protect your premises, equipment, and inventory from risks like fire, theft, or natural disasters, ensuring your business can recover quickly.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-business-icon2.png" alt="Financial Protection from Liability Claims Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Financial Protection<br> from Liability Claims</h3>

                    <p>Cover legal fees and compensation costs if your business is held liable for damages, injuries, or errors.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-business-icon3.png" alt="Employee Safety Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Employee Safety<br> and Well-Being</h3>

                    <p>Workers' compensation insurance provides financial support for workplace injuries or illnesses, helping you take care of your team.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-business-icon4.png" alt="Compliance with Legal Requirements Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Compliance with<br> Legal Requirements</h3>

                    <p>Many regions require certain types of insurance for businesses, such as workers' compensation or liability insurance, to operate legally.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-business-icon5.png" alt="Business Continuity After Disasters Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Business Continuity<br> After Disasters</h3>

                    <p>Insurance helps cover business interruption costs, such as lost income or relocation expenses, allowing you to keep operations running smoothly.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-business-icon6.png" alt="Peace of Mind Business Owner Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Peace of Mind<br> for Business Owners</h3>

                    <p>Knowing your business is protected against major risks allows you to focus on growth and strategy without constant worry.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-business-icon7.png" alt="Client & Partner Confidence Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Client and<br> Partner Confidence</h3>

                    <p>Having insurance demonstrates professionalism and reliability, fostering trust with clients, partners, and investors.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-business-icon8.png" alt="Protection from Cyber Threats Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Protection Against<br> Cyber Threats</h3>

                    <p>Cyber liability insurance safeguards your business from data breaches and cyberattacks, covering costs like legal fees and customer notifications.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-business-icon9.png" alt="Industry Specific Risks Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Tailored Solutions for<br class="showDesk"> Industry-Specific Risks</h3>

                    <p>Specialized policies address unique risks for your industry, from construction projects to professional services, ensuring comprehensive coverage.</p>

                </div>

            </div>



            <div class="btn-bx">

                <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Business Insurance Quotes">Get Started Today</a>

            </div>

        </div>

    </div>



    <div class="sec3">

        <div class="container">

            <p class="heading">Over 744 409<br class="showMob"> South Africans Trust Us.</p>

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

                    <p class="reviews_text">"I couldn’t believe how quickly Quote Rocket found me the best insurance options. The whole process was stress-free and saved me so much time."</p>

                    <div class="reviews_name"><img src="images/ntombi.jpg" alt="Customer Named Loren" width="100" height="100" class="rev_fc">
                        <p><span>Loren</span><br> Port Elizabeth</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Review" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"Quote Rocket’s customer service was outstanding. They answered all my questions and helped me choose a plan that worked perfectly for my budget."</p>

                    <div class="reviews_name"><img src="images/themba.jpg" alt="Customer Named Themba" width="100" height="100" class="rev_fc">
                        <p><span>Themba</span><br> Bloemfontein</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Review" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"I’m so glad I used Quote Rocket! They compared multiple options for me and found the best deal in minutes. Highly efficient and reliable."</p>

                    <div class="reviews_name"><img src="images/lebo.jpg" alt="Customer Named Mike" width="100" height="100" class="rev_fc">
                        <p><span>Mike</span><br> East London</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Rating" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"Quote Rocket’s service was incredibly fast and efficient. They provided me with great options and unbeatable prices. I’m thrilled with the deal I got and highly recommend them."</p>

                    <div class="reviews_name"><img src="images/marthinus.jpg" alt="Customer Named Marthinus" width="100" height="100" class="rev_fc">
                        <p><span>Marthinus</span><br> Johannesburg</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Rated" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"Finding the right insurance was so easy with Quote Rocket. The options were tailored to my needs, and everything was simple and straightforward."</p>

                    <div class="reviews_name"><img src="images/thandi.jpg" alt="Customer Named Thandi" width="100" height="100" class="rev_fc">
                        <p><span>Thandi</span><br> Durban</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Review" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"Excellent service! Quote Rocket made it easy to find a great insurance deal. They were professional and very helpful throughout the process."</p>

                    <div class="reviews_name"><img src="images/sipho.jpg" alt="Customer Named Sipho" width="100" height="100" class="rev_fc">
                        <p><span>Sipho</span><br> Cape Town</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Review" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"Quote Rocket was a lifesaver! They helped me find insurance quickly with a smooth, convenient process. Highly recommended."</p>

                    <div class="reviews_name"><img src="images/zanele.jpg" alt="Customer Named Zanele" width="100" height="100" class="rev_fc">
                        <p><span>Zanele</span><br> Pretoria</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Review" class="reviews_star" width="228" height="40">

                </div>

            </div>

            <div class="reviews_box reviews_box-last">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"Quote Rocket’s system was so easy to use. I quickly found the coverage I needed without any hassle. Fantastic experience!"</p>

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

                        <div class="accordion acdn-heading accordion-open" id="hd-one">Why is a business insurance plan essential?</div>

                        <div class="acdn-content">

                            <p class="acdn-para">Running a business comes with unpredictable risks like fires, theft, natural disasters, or employee injuries. Without insurance, these unexpected events could lead to significant financial losses that might shut down your business. A Business Insurance plan provides the protection you need to keep your operations running smoothly.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">What if I think business insurance is too expensive?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Many small business owners assume that business insurance is unaffordable, but the cost of being uninsured can be far greater. Affordable options, like business owner's policies (BOPs), bundle essential coverages at a lower price. Increasing your deductible is another way to lower premiums while maintaining strong protection.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">How often should I evaluate my business insurance?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">It's crucial to review your <a href="medical-insurance.php" alt="Medical Insurance Quotes">insurance policies</a> annually to ensure they align with your business's needs. If your business undergoes changes like expansion, moving locations, or adding new services, a review ensures your coverage keeps up with these developments.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Does incorporation eliminate the need for Business Insurance?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">While incorporation safeguards your personal assets, it doesn’t cover your business risks, such as lawsuits or damages. Business insurance fills this gap by offering financial protection for your business operations and additional security for your assets.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Why should business owners analyze risks?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Every business faces risks, whether from accidents, theft, or operational interruptions. Assessing these risks allows you to prepare for them, minimizing their financial impact. Proper insurance coverage ensures your business can withstand unexpected events and thrive.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">What are the most common risks businesses should prepare for?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Businesses encounter risks such as property damage, <a href="car-insurance.php" alt="Car Insurance Quotes">inventory theft</a>, liability claims, and operational disruptions. Employee-related risks, such as workplace injuries, and leadership risks, like the loss of a key individual, also require consideration to ensure comprehensive protection.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">What types of insurance should new businesses prioritize?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">A thorough risk assessment will identify the insurance types you need. Business owner's policies (BOPs) are an affordable option for small businesses, bundling essential coverages like property and liability insurance. You can also add specialized coverage based on your business activities.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">How can I save on business insurance costs?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Opting for higher deductibles is a simple way to lower your premiums. Additionally, bundled policies like BOPs offer cost-effective solutions by covering multiple risks under a single plan. Comparing quotes from various providers also ensures you get the best value.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Is workers' compensation insurance necessary for my business?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">If you have employees, workers' compensation insurance is essential. It protects your business financially in case of <a href="legal-insurance.php" alt="Legal Insurance Quotes">workplace injuries</a> or illnesses, and it’s often legally required depending on your location.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">What determines the cost of business insurance?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">The price of business insurance depends on factors like your industry, the location of your business, and the size of your operations. Exploring options like packaged policies or negotiating deductibles can help reduce costs while ensuring comprehensive coverage.</p>

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

                <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Business Insurance Quotes">Get Quote Now</a>

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
                let formData = $('[name=business_api1]').serialize();
                var PhoneNumber = $("input[name='phone']").val();
                var errors = new Array();
                validateCheckbox();
                $('input[name=phone],input[name=email],input[name=given-name],input[name=family-name],select[name=businesscovertype],select[name=city]')
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
                    businessApiCall(formData);
                }
            });
            $("select[name=businesscovertype],select[name=city]").on('change', function(e) {
                $(this).next('.error_message ').hide();

            });
            $("input[name='given-name'], input[name='family-name'],input[name=email],input[name=phone]").keyup(function() {
                $(this).next('.error_message ').hide();

            });

            function businessApiCall(formData) {
                $('#loading-indicator').show();
                let queryStringValue = window.location.search;
                $.ajax({
                    url: 'https://quoterocket.co.za/leads-api/business-api-call.php?' + formData,
                    // Type of Request
                    type: 'post',
                    success: function(data) {
                        let resultData = JSON.parse(data);
                        console.log(resultData)

                        if (resultData.code === 1) {
                            window.location.href = "https://quoterocket.co.za/thank-you.php" + queryStringValue;
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
                validateZAPhone(phoneNumber);

            });

            function validateZAPhone(PhoneNumber) {
                const prompText = `Please check that your phone number is in local format 0xx xxx xxxx. Numbers starting with 086, 085, 080, or 09 aren't supported.`;
                const phoneField = PhoneNumber.toLowerCase();
                const PhoneSub = phoneField.substring(0, 3);
                if (PhoneSub.includes("27") || PhoneSub.includes("+27") || PhoneSub.includes("080") || PhoneSub.includes("086") || PhoneSub.includes("085") || PhoneSub.includes("09")) {
                    $('#phone_prompt').text(prompText).show();
                    phoneErrors.push("Please check that your phone number is in local format 0xx xxx xxxx. Numbers starting with 086, 085, 080,  or 09 aren't supported.");
                } else
                if (PhoneNumber.length < 10) {
                    phoneErrors.push("Please check that your phone number is in local format 0xx xxx xxxx. Numbers starting with 086, 085, 080,  or 09 aren't supported.");
                    $('#phone_prompt').text(prompText).show();
                } else
                if (PhoneNumber.length == 10 && PhoneNumber.charAt(0) !== '0') {
                    phoneErrors.push("Please check that your phone number is in local format 0xx xxx xxxx. Numbers starting with 086, 085, 080,  or 09 aren't supported.");
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
            // Logger Feature Update
            $('.apiBtn').on('click', function() {
                const formElement = document.forms['business_api1'];
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
                    url: 'https://quoterocket.co.za/logger/logger.php',
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