<?php
$queryParams = !empty($_SERVER['QUERY_STRING']) ? "&" . $_SERVER['QUERY_STRING'] : '';

$aff_sub = $_REQUEST['aff_sub'] ?? '0022';
$aff_sub2 = $_REQUEST['aff_sub2'] ?? null;
$aff_sub3 = $_REQUEST['aff_sub3'] ?? 'organic';
$funnelId = "Health";

?>
<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Compare Medical Insurance Plans in the USA | Go Quote Rocket</title>

    <meta name="description" content="Find affordable medical insurance options with Go Quote Rocket. Compare quotes from top providers and secure the best health coverage for you and your family.">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!--PreloadFile -->
    <link rel="preload" href="images/inner-sec1-medical-insur.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img1.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img2.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img3.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-medical-tab1.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-medical-tab2.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-medical-tab3.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/footer-logos-gray.svg" type="image/svg+xml" as="image" />
    <!--PreloadFile End-->

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/slick.css">

    <link rel=" preload" href="css/error-handler.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="css/loader-design.css" as="style" onload="this.rel='stylesheet'">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Manrope:wght@200..800&display=swap" rel="stylesheet">


    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                    "@type": "Question",
                    "name": "What’s the cheapest medical insurance in the USA?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The cost of medical insurance in the USA varies based on factors like your age, health, and the coverage you need. To find the most affordable plan that suits your requirements, compare multiple quotes to ensure you get the best value for your money."
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
                        "text": "No, selecting a quote does not mean you’re making a commitment. It’s simply a way to explore your insurance options and get more details. You’re only committed once you agree to and sign a policy with the provider."
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
                        "text": "Yes, you can usually switch plans if your needs change. Be sure to check with your provider about cancellation policies and waiting periods for new coverage."
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



<body class="inner_pg medical_insurance">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPP3PH3H"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php include 'header.php'; ?>



    <div class="inner_sec1" id="choosePack">

        <div class="container">

            <p class="inner_sec1-rat-txt"><img src="images/sec1-star.png" alt="Customer Reviews" width="148" height="26"> <span>4.8 stars</span> 2,000+ reviews</p>

            <p class="inner_sec1-hdg">Get Free Medical Insurance<br class="showDesk"> Quotes in <em>1 Minute!</em></p>

            <p class="inner_sec1_txt">Get unlimited private doctor (GPs) visits, medication, and<br class="hideMob"> dentists for <strong>less than $150 per month.</strong></p>



            <div class="inner_sec1-form" id="toForm">

                <form method="POST" name="health_api1">
                    <input type="hidden" name="healthApi" value="Yes">
                    <input type="hidden" name="aff_id" value="<?= $aff_id; ?>" />
                    <input type="hidden" name="offer_id" value="<?= $offer_id; ?>" />
                    <input type="hidden" name="aff_sub" value="<?= $aff_sub; ?>" />
                    <input type="hidden" name="aff_sub2" value="<?= $aff_sub2; ?>" />
                    <input type="hidden" name="aff_sub3" value="<?= $aff_sub3; ?>" />
                    <input type="hidden" name="funnelId" value="<?= $funnelId; ?>" />

                    <div class="form__field">

                        <div class="form__input form__input--3">

                            <div class="form_input_box">
                                <input type="text" value="" name="given-name" placeholder="First Name" class="input-fld required" data-error-message="Please enter your first name.">
                                <div class="error_message text-left" style="display:none"></div>
                            </div>
                            <div class="form_input_box">
                                <input type="text" value="" name="family-name" placeholder="Surname" class="input-fld required" data-error-message="Please enter your surname.">
                                <div class="error_message text-left" style="display:none"></div>
                            </div>
                            <div class="form_input_box">
                                <input type="tel" value="" name="phone" placeholder="Phone Number" class="input-fld required" data-error-message="Please enter your phone number without the country code first" maxlength="10" onkeyup="javascript: this.value = this.value.replace(/[^0-9 + ]/g, '');">
                                <div class="error_message text-left" style="display: none;" id="phone_prompt">
                                    <span class="phone-prompt-error">Please check that your phone number is in local format 0xx xxx xxxx. Numbers starting with 086, 085, 080,or 09 aren't supported.</span>
                                </div>
                            </div>

                        </div>

                        <div class="form__input form__input--3">

                            <div class="form_input_box">
                                <select name="age" class="input-fld required" data-error-message="Please select your age.">
                                    <option value="" selected>What is your current age?</option>
                                    <option value="18-24">18 - 24</option>
                                    <option value="25-34">25 - 34</option>
                                    <option value="35-44">35 - 44</option>
                                    <option value="45-55">45 - 55</option>
                                    <option value="56-64">56 - 64</option>
                                    <option value="65+">65 +</option>
                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                            <div class="form_input_box">
                                <select name="employmentStatus" class="input-fld required" data-error-message="Please selcect your employment status.">
                                    <option value="" selected>What is your employment status?</option>
                                    <option value="Employed">Employed</option>
                                    <option value="Self-Employed">Self-Employed</option>
                                    <option value="Retired">Retired</option>
                                    <option value="Student">Student</option>
                                    <option value="Stay-At-Home">Stay-At-Home Parent</option>
                                    <option value="Not Working">Not Currently Working</option>
                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                            <div class="form_input_box">
                                <select name="income" class="input-fld required" data-error-message="Please select your monthly income.">
                                    <option value="" selected>What is your monthly income?</option>
                                    <option value="$0 - $5,000">$0 - $5,000</option>
                                    <option value="$5,001 - $15,000">$5,001 - $15,000</option>
                                    <option value="$15,001 - $30,000">$15,001 - $30,000</option>
                                    <option value="$30,001 - $50,000">$30,001 - $50,000</option>
                                    <option value="$50,001+">$50,001+</option>
                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                        </div>

                    </div>



                    <div class="form_bottom">

                        <ul class="form_lst">

                            <li><img src="images/secure.svg" alt="100% Secure Icon"> 100% SECURE FORM</li>

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



<?php include 'carrier-logos.php'; ?>



    <div class="inner_sec2">

        <div class="container">

            <p class="heading">How We Make<br class="showDesk"> Finding Medical Insurance Easy</p>

            <p class="comn_text comn_text--center">We know getting medical insurance quotes can feel overwhelming. That’s why <a href="/" alt="the USA Insurance Quotes Affordable">Go Quote Rocket</a> simplifies the process for you. In just a few steps, we'll connect you with top-rated insurers, helping you secure the most reliable and affordable medical insurance, hassle-free.</p>



            <div class="sec2_inr">

                <div class="sec2_inr_bx">

                    <img src="images/inner-sec2-img1.webp" alt="Guy On Computer Using Go Quote Rocket" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>One Quick Form</h3>

                        <p>Fill out our secure, straightforward form in just 60 seconds. Your information is always protected, and we do the hard work from there.</p>

                    </div>

                </div>

                <div class="sec2_inr_bx">

                    <img src="images/inner-sec2-img2.webp" alt="Tailored Insurance Options" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>Tailored Insurance Options</h3>

                        <p>We’ll instantly search and present the best medical insurance plans that fit your personal needs and budget, ensuring you find the perfect match.</p>

                    </div>

                </div>

                <div class="sec2_inr_bx">

                    <img src="images/inner-sec2-img3.webp" alt="Trusted Medical Insurance Expert" width="381" height="291">

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

                    <!--<div class="inner_sec3_tab-col" data-target="#tab_col_2">
                        <p>Hospital Plans </p>
                    </div>-->

                    <div class="inner_sec3_tab-col" data-target="#tab_col_3">
                        <p>Day-to-Day Coverage</p>
                    </div>

                    <!--<div class="inner_sec3_tab-col" data-target="#tab_col_4">
                        <p>Gap Cover</p>
                    </div>-->

                </div>



                <div class="mob-div">

                    <div class="accdn-hd showMob">
                        <p>Comprehensive Coverage</p><span class="icon">+</span>
                    </div>

                    <div class="inner_sec3_tab_content-box hideMob" id="tab_col_1">

                        <div class="inner_sec3_tab_content">

                            <h3 class="inner_sec3_tab_content_hd hideMob">Comprehensive Coverage</h3>



                            <div class="inner_sec3_tab_img e-com_img showMob">

                                <img src="images/inner_sec3-medical-tab1.webp" alt="Comprehensive Medical Insurance" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">Comprehensive medical insurance provides the highest level of coverage, ensuring you're prepared for both routine and unexpected healthcare expenses. In the USA, where medical costs can quickly add up, this plan includes benefits for hospital stays, specialist visits, chronic medication, and more. With comprehensive coverage, you can focus on your health without worrying about financial strain. It’s the ultimate solution for those seeking complete peace of mind.</p>

                            <p class="inner_sec3-content-sub_hd">Benefits of Comprehensive Medical Insurance</p>

                            <ul class="inner_sec3_tab-lst">

                                <li><strong>Full Coverage:</strong> Includes in-hospital care, specialist consultations, and chronic illness treatment.</li>

                                <li><strong>Financial Protection:</strong> Reduces out-of-pocket expenses for costly medical treatments.</li>

                                <li><strong>Wellness Support:</strong> Often includes preventative care and wellness benefits, helping you stay healthy year-round.</li>

                            </ul>

                        </div>

                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-medical-tab1.webp" alt="Comprehensive Medical Insurance" width="500" height="450">

                        </div>

                    </div>

                </div>



                <!--<div class="mob-div">

                    <div class="accdn-hd showMob">
                        <p>Hospital Plans </p> <span class="icon">+</span>
                    </div>

                    <div class="inner_sec3_tab_content-box" id="tab_col_2" style="display: none;">

                        <div class="inner_sec3_tab_content">

                            <h3 class="inner_sec3_tab_content_hd hideMob">Hospital Plans </h3>



                            <div class="inner_sec3_tab_img e-com_img showMob">

                                <img src="images/inner_sec3-medical-tab2.webp" alt="Hospital Insurance Plans" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">A hospital plan is a medical aid option in the USA designed to cover in-hospital medical treatment costs, such as hospital bills, specialists' fees, and in-hospital medication, but it does not include savings accounts or day-to-day benefits. Regulated by the Medical Schemes Act, it provides essential coverage for clinically required procedures, although coverage limits and shortfalls may apply for certain treatments like dentistry or back and neck procedures.</p>
                            <p class="inner_sec3-content-sub_hd">Benefits of Hospital Plans</p>

                            <ul class="inner_sec3_tab-lst">
                                <li><strong>Affordability:</strong> Cost-effective coverage for major emergencies.</li>
                                <li><strong>Emergency Protection:</strong> Covers in-hospital treatment, surgeries, and specialists.</li>
                                <li><strong>Private Healthcare: Access</strong> to private hospitals and quality care.</li>
                                <li><strong>Financial Security:</strong> Shields you from high hospital bills.</li>
                            </ul>

                        </div>



                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-medical-tab2.webp" alt="Hospital Insurance Plans" width="500" height="450">

                        </div>

                    </div>

                </div>-->



                <div class="mob-div">

                    <div class="accdn-hd showMob">
                        <p>Day-to-Day Coverage</p> <span class="icon">+</span>
                    </div>

                    <div class="inner_sec3_tab_content-box" id="tab_col_3" style="display: none;">

                        <div class="inner_sec3_tab_content">

                            <h3 class="inner_sec3_tab_content_hd hideMob">Day-to-Day Coverage</h3>



                            <div class="inner_sec3_tab_img e-com_img showMob">

                                <img src="images/inner_sec3-medical-tab3.webp" alt="Day-to-Day Insurance Plans" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">A Day-to-Day insurance plan in the USA provides coverage for routine healthcare expenses, such as doctor visits, prescribed medication, dental care, and optometry. Unlike hospital plans, it focuses on everyday medical needs, helping you manage out-of-pocket expenses for general healthcare. These policies are ideal for individuals or families who require frequent medical consultations or treatments and want the financial security of knowing routine costs are covered.</p>
                            <p class="inner_sec3-content-sub_hd">Benefits of Day-to-Day Medical Insurance</p>

                            <ul class="inner_sec3_tab-lst">
                                <li><strong>Routine Coverage:</strong> Pays for GP visits, medications, and minor treatments.</li>
                                <li><strong>Preventative Care:</strong> Includes benefits like dental check-ups and optometry.</li>
                                <li><strong>Family-Friendly:</strong> Ideal for households with frequent medical needs.</li>
                                <li><strong>Budget Control:</strong> Reduces out-of-pocket costs for everyday healthcare.</li>
                            </ul>

                        </div>

                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-medical-tab3.webp" alt="Day-to-Day Insurance Plans" width="500" height="450">

                        </div>

                    </div>

                </div>



                <!--<div class="mob-div">

                    <div class="accdn-hd showMob">
                        <p>Gap Cover</p> <span class="icon">+</span>
                    </div>

                    <div class="inner_sec3_tab_content-box" id="tab_col_4" style="display: none;">

                        <div class="inner_sec3_tab_content">

                            <h3 class="inner_sec3_tab_content_hd hideMob">Gap Cover</h3>



                            <div class="inner_sec3_tab_img e-com_img showMob">

                                <img src="images/inner_sec3-medical-tab4.jpg" alt="Gap Cover Insurance" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">Gap cover in the USA is a short-term insurance policy designed to bridge the gap between what your medical aid pays and the actual costs of in-hospital treatments or procedures. It covers co-payments, shortfalls, and additional costs for specialists, ensuring you’re not left with unexpected expenses. Ideal for those with medical aid, gap cover provides financial protection against rising healthcare costs and helps maintain access to quality medical care without straining your budget.</p>


                            <p class="inner_sec3-content-sub_hd">Benefits of Gap Cover</p>

                            <ul class="inner_sec3_tab-lst">

                                <li><strong>Shortfall Protection:</strong> Covers the gap between medical aid payouts and actual costs.</li>
                                <li><strong>Specialist Coverage:</strong> Pays for co-payments and additional specialist fees.</li>
                                <li><strong>Affordable Security:</strong> Protects against rising medical costs without high premiums.</li>
                                <li><strong>Peace of Mind:</strong> Ensures access to quality care without unexpected expenses.</li>

                            </ul>

                        </div>

                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-medical-tab4.jpg" alt="Gap Cover Insurance" width="500" height="450">

                        </div>

                    </div>

                </div>-->

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

                <p class="comn_text">Finding the right medical insurance can feel overwhelming, but we’re here to make it simple. At <a href="/" alt="Affordable Insurance Quotes">Go Quote Rocket</a>, we connect you with an insurance expert who can guide you through the process. You’ll be able to make the right choice for your needs and budget.</p>

            </div>

            <div class="why_choose_right">

                <ul class="why_choose_lst">

                    <li>

                        <img src="images/why-chose-icn1.png" alt="Save Time Icon" class="why-chose_icn" width="84" height="92">

                        <h3>Save Time</h3>

                        <p>Find all the prices and benefits you need in 1 minute.</p>

                    </li>

                    <li>

                        <img src="images/why-chose-icn2.png" alt="Save Money" class="why-chose_icn" width="84" height="92">

                        <h3>Save Money</h3>

                        <p>Compare insurance quotes. Choose the best for you.</p>

                    </li>

                    <li>

                        <img src="images/why-chose-icn3.png" alt="Save Stress" class="why-chose_icn" width="84" height="92">

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

            <p class="heading">Get The Most From<br class="showDesk"> Medical Insurance In the USA</p>

            <p class="comn_text comn_text--center">Medical insurance empowers you to manage the increasing costs of healthcare, giving you access to <strong>quality private hospitals, expert specialists, and vital treatments</strong> when you need them most. Protect your health, your family, and your finances with comprehensive coverage designed for peace of mind and security.</p>

            <div class="inner_sec4_inr">

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-medical-icon1.png" alt="Affordable Medical Insurance Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Affordability</h3>
                    <p>Enjoy quality healthcare at a fraction of the cost of traditional medical aid, making private healthcare accessible without straining your budget.</p>
                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-medical-icon2.png" alt="Comprehensive Insurance Coverage Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Wide Ranging Coverage</h3>

                    <p>From GP visits and chronic medications to dental care and maternity benefits, these plans cover a wide range of everyday and specialized healthcare needs.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-medical-icon3.png" alt="Flexible Medical Insurance Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Flexible Options</h3>

                    <p>Choose a plan tailored to your unique healthcare requirements and budget, ensuring the perfect balance between cost and coverage.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-medical-icon4.png" alt="Hospital Cash-Back Insurance Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Hospital Cash-Back</h3>

                    <p>Get financial relief with cash payouts for extended hospital stays, helping ease the burden of unexpected medical expenses.</p>
                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-medical-icon5.png" alt="Easy Access To Care Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Easy Access to Care</h3>

                    <p>Skip the long waits in public facilities and gain immediate access to private healthcare for faster, more reliable treatment.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-medical-icon6.png" alt="Wellness Benefit Insurance Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Wellness Benefits</h3>

                    <p>Take advantage of health screenings, fitness perks, and preventative care programs designed to support healthier, happier living while lowering future medical costs.</p>
                </div>

            </div>



            <div class="btn-bx">

                <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Medical Insurance Quotes">Get Started Today</a>

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

                        <div class="accordion acdn-heading accordion-open" id="hd-one">What’s the cheapest medical insurance in the USA?</div>

                        <div class="acdn-content">

                            <p class="acdn-para">The cost of medical insurance in the USA varies based on factors like your age, health, and the coverage you need. To find the most affordable plan that suits your requirements, compare multiple quotes to ensure you get the best value for your money.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Why do you need medical insurance?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Medical insurance provides <a href="personal-loans.php" alt="Personal Loan Quotes">financial protection</a> against unexpected healthcare costs. It ensures you can access quality medical care when needed without worrying about high out-of-pocket expenses. It also offers peace of mind for you and your family.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">If I choose a quote, does that mean I'm making a commitment?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">No, selecting a quote does not mean you’re making a commitment. It’s simply a way to explore your <a href="business-insurance.php" alt"Business Insurance Quotes">insurance options</a> and get more details. You’re only committed once you agree to and sign a policy with the provider.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Can I insure others like family?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Yes, most medical insurance plans allow you to include <a href="funeral-cover.php" alt"Funeral Cover Quotes">family members</a>, such as your spouse, children, or dependents, under the same policy. This often provides comprehensive coverage at a more affordable combined rate.</p>

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

                            <p class="acdn-para">Yes, you can usually switch plans if your needs change. Be sure to check with your provider about cancellation policies and waiting periods for new coverage.</p>

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

    <div id="error_handler_overlay" style="display: none;">
        <div class="error_handler_body"><a href="javascript:void(0);" id="error_handler_overlay_close">X</a>
            <p>Lead was detected as being a duplicate.</p>
        </div>
    </div>
    <p id="loading-indicator" style="display:none">Redirecting...</p>

    <?php include 'footer.php'; ?>

    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>

    <script type="text/javascript" src="js/slick.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            //insurance api call
            var phoneErrors = new Array();
            var termsError = new Array();
            $('.apiBtn').on('click', function(event) {
                //event.preventDefault()
                let formData = $('[name=health_api1]').serialize();
                var PhoneNumber = $("input[name='phone']").val();
                var errors = new Array();
                validateCheckbox();
                $('input[name=phone],input[name=given-name],input[name=family-name],select[name=age],select[name=income],select[name=employmentStatus]')
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
                    healthApiCall(formData);
                    $('#phone_prompt').hide();
                }
            });
            $("select[name=age],select[name=employmentStatus],select[name=income]").on('change', function(e) {
                $(this).next('.error_message ').hide();

            });
            $("input[name='given-name'], input[name='family-name']").keyup(function() {
                $(this).next('.error_message ').hide();

            });

            function healthApiCall(formData) {
                $('#loading-indicator').show();
                let queryStringValue = window.location.search;
                $.ajax({
                    url: 'https://goquoterocket.com/leads-api/health-api-call.php?' + formData,
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
                validateUSPhone(phoneNumber);
            });

            function validateUSPhone(phoneNumber) {
                const promptText = "Please enter a valid 10-digit US phone number.";

                let errorMessage = "";
                if (phoneNumber.length !== 10) {
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
                const formElement = document.forms['health_api1'];
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