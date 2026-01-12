<?php
$queryParams = !empty($_SERVER['QUERY_STRING']) ? "&" . $_SERVER['QUERY_STRING'] : '';

$aff_sub = $_REQUEST['aff_sub'] ?? '0022';
$aff_sub2 = $_REQUEST['aff_sub2'] ?? null;
$aff_sub3 = $_REQUEST['aff_sub3'] ?? 'organic';
$funnelId = "Funeral";

?>

<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Affordable Funeral Cover in the USA | Go Quote Rocket</title>

    <meta name="description" content="Compare funeral cover quotes to protect your family during difficult times. Find affordable funeral plans in the USA with Go Quote Rocket.">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!--PreloadFile -->
    <link rel="preload" href="images/inner-sec1-fureral-loans.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img1.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img2.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img3.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-funeral-tab1.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-funeral-tab2.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-funeral-tab3.webp" type="image/webp" as="image" />
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
                    "name": "Why do I need a funeral plan?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Funeral plans are designed to help you plan ahead and reduce the financial burden that funeral costs may present. By having a funeral plan, you ensure your loved ones are not left with unexpected expenses during a difficult time."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Do I have to have a medical examination before I am eligible for a Funeral Plan?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "No, most funeral plans do not require a medical examination, making it quick and easy to get covered."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What does a funeral plan cover?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "A funeral plan provides a lump sum payout upon your passing. You can also opt for a family funeral plan, which extends coverage to your partner, children, and other family members of your choice."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How much will the policy cost me?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The cost of your funeral plan depends on the level of cover you select, the number of family members included, and factors like the age of extended family members added to your policy."
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
                    "name": "How long does funeral cover last?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Funeral cover remains active as long as premiums are paid. Cover for your children may extend until they turn 21, or 25 if they are full-time students or have certain impairments."
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
                    "name": "What is the waiting period for funeral benefits?",
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



<body class="inner_pg funeral_expense">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPP3PH3H"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include 'header.php'; ?>



    <div class="inner_sec1" id="choosePack">

        <div class="container">

            <p class="inner_sec1-rat-txt"><img src="images/sec1-star.png" alt="Customer Reviews" width="148" height="26"> <span>4.8 stars</span> 2,000+ reviews</p>

            <p class="inner_sec1-hdg">Get Up-To R50,000<br class="showDesk"> Funeral Cover in Minutes</p>

            <p class="inner_sec1_txt">Qualifying claims approved in <strong>under 5 minutes</strong>—secure financial peace<br class="showDesk"> of mind for your loved ones today.</p>



            <div class="inner_sec1-form" id="toForm">

                <form method="POST" name="funeral_api1" class="auto_zip">
                    <input type="hidden" name="funeralApi" value="Yes">
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



                        <div class="form__input form__input--3">

                            <div class="form_input_box">
                                <select name="age" id="" class="input-fld required" data-error-message="Please opt your age range.">

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
                                <select name="employment" id="" class="input-fld required" data-error-message="Please opt your employment status.">

                                    <option value="" selected>Are you currently employed?</option>

                                    <option value="true">Yes</option>

                                    <option value="false">No</option>

                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                            <div class="form_input_box">
                                <select name="income" id="" class="input-fld required" data-error-message="Please opt your monthly income.">

                                    <option value="" selected>What is your monthly income?</option>
                                    <option value="R0 - R5,000">R0 - R5,000</option>
                                    <option value="R5,001 - R15,000">R5,001 - R15,000</option>
                                    <option value="R15,001 - R30,000">R15,001 - R30,000</option>
                                    <option value="R30,001 - R50,000">R30,001 - R50,000</option>
                                    <option value="R50,001+">R50,001+</option>

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



<?php include 'carrier-logos.php'; ?>



    <div class="inner_sec2">

        <div class="container">

            <p class="heading">How We Make<br> Finding Funeral Cover Easy</p>

            <p class="comn_text">We understand that finding the right funeral cover can feel overwhelming. That’s why Go Quote Rocket simplifies<br class="showDesk"> the process for you. In just a few simple steps, we’ll connect you with trusted providers, helping you<br class="showDesk"> secure reliable and affordable funeral cover for you and your family, hassle-free.</p>



            <div class="sec2_inr">

                <div class="sec2_inr_bx">

                    <img src="images/inner-sec2-img1.webp" alt="Guy Using Go Quote Rocket on Computer for Funeral Cover" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>One Quick Form</h3>

                        <p>Complete our secure, straightforward form in just 60 seconds. Your information is always protected, and we’ll handle the rest to find the best funeral cover options for your needs.</p>

                    </div>

                </div>

                <div class="sec2_inr_bx">

                    <img src="images/inner-sec2-img2.webp" alt="Options Available For Funeral Cover" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>Tailored Cover Options</h3>

                        <p>We’ll instantly search and present personalized funeral cover plans that fit your budget and unique requirements, ensuring you get the right coverage for your family’s peace of mind.</p>

                    </div>

                </div>

                <div class="sec2_inr_bx">

                    <img src="images/inner-sec2-img3.webp" alt="Trusted Funeral Cover Providers" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>Trusted Providers Ready</h3>

                        <p>Connect with vetted, experienced funeral cover providers who will guide you through the process, giving you confidence in your decision and financial security for your loved ones.</p>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <div class="inner_sec3">

        <div class="container">

            <p class="heading">Compare Funeral Cover <br class="showMob"> Plans<br class="showDesk"> & Find The Perfect Fit<br class="showMob"> For Your Family</p>

            <p class="comn_text">Explore tailored funeral cover options for individuals, families, parents, and extended loved ones.<br class="showDesk"><strong> Protect those who matter most with the right plan</strong>.</p>
            <div class="inner_sec3_row">

                <div class="inner_sec3_tab-row hideMob">

                    <div class="inner_sec3_tab-col active" data-target="#tab_col_1">
                        <p>Immediate Personal Cover</p>
                    </div>

                    <div class="inner_sec3_tab-col" data-target="#tab_col_2">
                        <p>Direct Family Cover</p>
                    </div>

                    <div class="inner_sec3_tab-col" data-target="#tab_col_3">
                        <p>Parent & In-Law Cover
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

                                <img src="images/inner_sec3-funeral-tab1.webp" alt="Immediate Personal Cover Funeral Plan" width="500" height="450">

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

                            <img src="images/inner_sec3-funeral-tab1.webp" alt="Immediate Personal Cover Funeral Plan" width="500" height="450">

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

                                <img src="images/inner_sec3-funeral-tab2.webp" alt="Direct Family Cover Funeral Plan" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">Direct Family Cover provides comprehensive protection for your immediate family, including your spouse and children. This plan ensures a lump sum payout in the event of their passing, offering financial security during difficult times. It’s a perfect choice for those wanting peace of mind for their closest loved ones.</p>
                            <p class="inner_sec3-content-sub_hd">Benefits of Direct Family Cover</p>

                            <ul class="inner_sec3_tab-lst">
                                <li><strong>Complete Family Protection:</strong> Covers your spouse and children.</li>
                                <li><strong>Customizable Plans:</strong> Adjust coverage amounts to meet your family’s needs.</li>
                                <li><strong>Inclusive Age Bracket:</strong> Covers children up to 20 years old.</li>
                                <li><strong>Cost-Effective:</strong> One plan for multiple family members.</li>
                            </ul>

                        </div>



                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-funeral-tab2.webp" alt="Direct Family Cover Funeral Plan" width="500" height="450">

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

                                <img src="images/inner_sec3-funeral-tab3.webp" alt="Parent & In-Law Cover Funeral Plan" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">Parent & In-Law Cover extends funeral cover to your parents or in-laws, ensuring a lump sum payout to handle their funeral costs. This option allows you to cover up to four parents on a single policy, giving you the ability to honor and care for your elders.</p>
                            <p class="inner_sec3-content-sub_hd">Benefits of Parent & In-Law Cover</p>

                            <ul class="inner_sec3_tab-lst">

                                <li><strong>Family Support:</strong> Includes both your parents and your partner’s parents.</li>
                                <li><strong>Flexibility:</strong> Covers up to four parents on one policy.</li>
                                <li><strong>Secure Their Legacy:</strong> Provides financial assistance to honor their memory.</li>
                                <li><strong>Age Inclusive:</strong> Available for parents up to 75 years old.</li>

                            </ul>

                        </div>

                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-funeral-tab3.webp" alt="Parent & In-Law Cover Funeral Plan" width="500" height="450">

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

                                <img src="images/inner_sec3-funeral-tab4.jpg" alt="Extended Family Cover Funeral Plan" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">Extended Family Cover provides funeral benefits for relatives beyond your immediate family, such as siblings, uncles, or aunts. This ensures that no family member is left unprotected during unforeseen circumstances.</p>
                            <p class="inner_sec3-content-sub_hd">Benefits of Extended Family Cover</p>

                            <ul class="inner_sec3_tab-lst">
                                <li><strong>Comprehensive Protection:</strong> Extend coverage to additional family members.</li>
                                <li><strong>Customizable Options:</strong> Choose the coverage amount that works for your family.</li>
                                <li><strong>Peace of Mind:</strong> Avoid financial strain for unexpected losses.</li>
                                <li><strong>Broader Scope:</strong> Ideal for families with close extended relationships.</li>

                            </ul>

                        </div>

                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-funeral-tab4.jpg" alt="Extended Family Cover Funeral Plan" width="500" height="450">

                        </div>

                    </div>

                </div>

            </div>



            <div class="clearall"></div>

            <div class="btn-bx">

                <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Funeral Cover Quotes">Get Started Today</a>

            </div>

        </div>

    </div>



    <div class="why_choose">

        <div class="container">

            <div class="why_choose_left">

                <p class="heading">Why Choose<br class="hideMob"> Go Quote Rocket</p>

                <p class="comn_text">Finding the right funeral cover can feel overwhelming, but we’re here to make it simple. At <a href="/" alt="Affordable Insurance Options">Go Quote Rocket</a>, we connect you with multiple authorized providers, so you can compare options side by side. Our process is designed to save you time, reduce stress, and help you secure the most reliable and affordable coverage available.</p>

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

                        <p>Compare funeral cover quotes. Choose the best for you.</p>

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

            <p class="heading">Here's Why You Need<br class="showDesk"> Funeral Cover In Your Life</p>

            <p class="comn_text">Funeral cover <strong>provides financial security for your loved ones</strong>, ensuring they are not burdened by<br class="showDesk"> unexpected expenses during a difficult time. Here’s what you can expect:</p>



            <div class="inner_sec4_inr">

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-funeral-icon1.png" alt="Funerl Cover Payout Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Pay-outs of<br> Up to R50,000</h3>

                    <p>Policies offer pay-outs ranging from R5,000 to R50,000 per member, giving you the flexibility to choose the level of coverage that suits your needs.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-funeral-icon2.png" alt="Hassle Free Claims Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Hassle-Free<br> Claims</h3>

                    <p>Enjoy a quick and easy claims process, with qualifying claims approved in under 5 minutes for added convenience and peace of mind.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-funeral-icon3.png" alt="Fixed Monthly Premiums Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Fixed<br> Premiums</h3>

                    <p>No surprises—your premiums are fixed and guaranteed not to increase for the first 12 months of your policy.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-funeral-icon4.png" alt="Funeral Cover For Extended Family Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Cover for<br> Extended Family</h3>

                    <p>Protect your loved ones with a policy that allows you to insure up to 16 family members under one plan, offering comprehensive support for your family.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-funeral-icon5.png" alt="Enhanced Policy Benefits Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Enhanced<br> Policy Benefits</h3>

                    <p>Get additional benefits such as cover for Headstone Memorials, Groceries, and Repatriation Services for loved ones.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-funeral-icon6.png" alt="No Long Waiting Periods For Funds Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>No Long<br> Waiting Periods</h3>

                    <p>Experience no waiting periods for accidental death and a reduced, 6-month waiting period for natural deaths.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-funeral-icon7.png" alt="Affordable Month Premium Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Affordable<br> Monthly Premiums</h3>

                    <p>Plans are designed to suit any budget, ensuring you can provide essential cover for your family without financial strain.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-funeral-icon8.png" alt="Peace of Mind Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Peace of<br> Mind</h3>

                    <p>Knowing your loved ones are financially protected allows you to focus on what matters most during life’s challenging moments.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-funeral-icon9.png" alt="Flexible Payment Plans Icon" class="inner_sec4_icn" width="200" height="124">

                    <h3>Flexible<br> Plans</h3>

                    <p>Choose from a range of coverage options tailored to meet your family’s unique needs, with the ability to adjust as circumstances change.</p>

                </div>

            </div>



            <div class="btn-bx">

                <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Funeral Quotes">Get Started Today</a>

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

                        <div class="accordion acdn-heading accordion-open" id="hd-one">Why do I need a funeral plan?</div>

                        <div class="acdn-content">

                            <p class="acdn-para">Funeral plans are designed to help you plan ahead and reduce the <a href="/" alt="Debt Relief Ootions">financial burden</a> that funeral costs may present. By having a funeral plan, you ensure your loved ones are not left with unexpected expenses during a difficult time.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Do I have to have a medical examination before I am eligible for a Funeral Plan?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">No, most funeral plans do not require a <a href="medical-insurance.php" alt="Medical Insurance Quotes">medical examination</a>, making it quick and easy to get covered.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">What does a funeral plan cover?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">A funeral plan provides a lump sum payout upon your passing. You can also opt for a family funeral plan, which extends coverage to your partner, children, and other family members of your choice.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">How much will the policy cost me?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">The cost of your funeral plan depends on the level of cover you select, the number of family members included, and factors like the age of extended family members added to your policy.</p>

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

                        <div class="accordion acdn-heading accordion-close">How long does funeral cover last?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Funeral cover remains active as long as premiums are paid. Cover for your children may extend until they turn 21, or 25 if they are full-time students or have certain impairments.</p>

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

                        <div class="accordion acdn-heading accordion-close">What is the waiting period for funeral benefits?</div>

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

                <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Funeral Cover Quotes">Get Quote Now</a>

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
                let formData = $('[name=funeral_api1]').serialize();
                var PhoneNumber = $("input[name='phone']").val();
                var errors = new Array();
                validateCheckbox();
                $('input[name=phone],input[name=email],input[name=given-name],input[name=family-name],select[name=age],select[name=income],select[name=employment]')
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
                    funeralApiCall(formData);
                    $('#phone_prompt').hide();
                }
            });
            $("select[name=age],select[name=employment],select[name=income]").on('change', function(e) {
                $(this).next('.error_message ').hide();

            });
            $("input[name='given-name'],input[name=email], input[name='family-name']").keyup(function() {
                $(this).next('.error_message ').hide();

            });

            function funeralApiCall(formData) {
                $('#loading-indicator').show();
                let queryStringValue = window.location.search;
                $.ajax({
                    url: 'https://goquoterocket.com/leads-api/funeral-api-call.php?' + formData,
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
                const formElement = document.forms['funeral_api1'];
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