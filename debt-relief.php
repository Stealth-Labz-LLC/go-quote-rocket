<?php
$queryParams = !empty($_SERVER['QUERY_STRING']) ? "&" . $_SERVER['QUERY_STRING'] : '';

$aff_sub = $_REQUEST['aff_sub'] ?? '0022';
$aff_sub2 = $_REQUEST['aff_sub2'] ?? null;
$aff_sub3 = $_REQUEST['aff_sub3'] ?? 'organic';
$funnelId = "Debt";

?>
<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Get Debt Relief Quotes in the USA | Go Quote Rocket</title>

    <meta name="description" content="Debt is crippling and getting out of debt is difficult. Compare quotes and find the best coverage in the USA with Go Quote Rocket.">
    <link rel="canonical" href="https://goquoterocket.com/debt-relief.php">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!--PreloadFile -->
    <link rel="preload" href="images/inner-sec1-debt.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img1.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img2.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner-sec2-img3.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-debt-tab1.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-debt-tab2.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/inner_sec3-debt-tab3.webp" type="image/webp" as="image" />
    <link rel="preload" href="images/footer-logos-gray.svg" type="image/svg+xml" as="image" />
    <!--PreloadFile End-->

    <link rel="preload" href="css/style.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="css/slick.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="css/error-handler.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="css/loader-design.css" as="style" onload="this.rel='stylesheet'">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap-grid.min.css">
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
                    "name": "What is debt relief?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Debt relief involves programs designed to help you manage, reduce, or eliminate debt through strategies like consolidation, negotiation, or structured repayment plans."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Who qualifies for debt relief?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Eligibility depends on factors like your total debt amount, income, and the type of debt you have. Most unsecured debts, like credit card balances and personal loans, qualify for relief."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How does debt consolidation work?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Debt consolidation combines multiple debts into a single loan or repayment plan with a lower interest rate, making payments more manageable."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Will debt relief hurt my credit score?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Debt relief may temporarily affect your credit score, but it can improve over time as you pay down your debts and rebuild your financial health."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How long does debt relief take?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The duration of debt relief depends on your plan and debt amount but typically ranges from 12 to 60 months."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can I include all my debts in a relief program?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Most unsecured debts, such as credit cards, medical bills, and personal loans, are eligible. Secured debts like mortgages and car loans usually aren’t included."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How much does debt relief cost?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Costs vary by provider and plan, but many programs charge a percentage of your enrolled debt as a fee. Be sure to review the terms before committing."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Can debt relief stop collection calls?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, once you enroll in a program, many providers will work with creditors to halt collection calls and harassment."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Is debt relief the same as bankruptcy?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "No, debt relief focuses on negotiating with creditors or consolidating payments, while bankruptcy is a legal process that can discharge debts but has significant long-term consequences."
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



<body class="inner_pg debt_relief">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPP3PH3H"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php include 'header.php'; ?>

    <div class="inner_sec1" id="choosePack">

        <nav class="breadcrumbs container-xl" itemscope itemtype="https://schema.org/BreadcrumbList">
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="/" itemprop="item"><span itemprop="name">Home</span></a>
                <meta itemprop="position" content="1">
                <span class="breadcrumb-separator">/</span>
            </span>
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span class="breadcrumb-current" itemprop="name">Debt Relief</span>
                <meta itemprop="position" content="2">
            </span>
        </nav>

        <div class="container-xl">

            <p class="inner_sec1-rat-txt"><img src="images/sec1-star.png" alt="Customer Reviews" width="148" height="26"> <span>4.8 stars</span> 2,000+ reviews</p>

            <h1 class="inner_sec1-hdg">Find Your Path To Debt Freedom<br class="showDesk"> In Just 60 Seconds!</h1>

            <p class="inner_sec1_txt">Regain peace of mind by consolidating your debts into <strong>one manageable<br class="showDesk"> monthly payment</strong>—tailored to your needs.</p>

            <div class="inner_sec1-form" id="toForm">

                <form method="POST" name="debt_api1">
                    <input type="hidden" name="debtApi" value="Yes">
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
                                <input type="text" value="" name="family-name" placeholder="Last Name" class="input-fld required" data-error-message="Please enter your last name.">
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                        </div>

                        <div class="form__input form__input--2">

                            <div class="form_input_box">
                                <input type="tel" value="" name="phone" placeholder="Phone Number" class="input-fld required" data-error-message="Please enter your phone number without the country code first" maxlength="10" onkeyup="javascript: this.value = this.value.replace(/[^0-9 + ]/g, '');">
                                <div class="error_message text-left" style="display: none;" id="phone_prompt"></div>
                            </div>

                            <div class="form_input_box">
                                <input type="email" value="" name="email" placeholder="Email" class="input-fld required" data-error-message="Please enter your email address.">
                                <div class="error_message text-left" style="display:none"></div>
                            </div>
                        </div>
                        <div class="form__input form__input--2">

                            <div>
                                <select name="age" class="input-fld required" data-error-message="Please opt your age.">
                                    <option value="" selected>How old are you?</option>
                                    <option value="18-24">18-24</option>
                                    <option value="25-64">25-64</option>
                                    <option value="65+">65+</option>
                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>
                            <div>
                                <select name="employment" class="input-fld required" data-error-message="Please select your employment status.">
                                    <option value="" selected>Are you currently employed?</option>
                                    <option value="true">Yes</option>
                                    <option value="false">No</option>
                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>


                        </div>
                        <div class="form__input form__input--3">

                            <div>
                                <select name="monthly_income" class="input-fld required" data-error-message="Please opt your monthly earn.">
                                    <option value="" selected>Do you earn more than $15K monthly?</option>
                                    <option value="true">Yes</option>
                                    <option value="false">No</option>
                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>
                            <div>
                                <select name="debt_greater_than_40_000" class="input-fld required" data-error-message="Please select your debt amount.">
                                    <option value="" selected>Is your debt more than $40K?</option>
                                    <option value="true">Yes</option>
                                    <option value="false">No</option>
                                </select>
                                <div class="error_message text-left" style="display:none"></div>
                            </div>

                            <div>
                                <select name="underdebtreview" class="input-fld required" data-error-message="Please select your debt review answer.">
                                    <option value="" selected>Are you currently under Debt Review?</option>
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

                            <li><img src="images/heart.svg" alt="No Commitment Icon"> NO COMMITMENT REQUIRED</li>

                        </ul>

                        <div class="form__button err_msg_ottr">

                            <button class="apiBtn" type="button">Get Started Today!</button>

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

        <div class="container-xl">

            <p class="heading">How We Simplify<br> Debt Relief & Consolidation</p>

            <p class="comn_text">We understand that being in debt can feel overwhelming. That’s why Debt Rocket simplifies the path<br class="showDesk"> to financial freedom. In just a few steps, we’ll connect you with trusted debt counselors to help you<br class="showDesk"> regain control of your finances, stress-free.
            </p>
            <div class="sec2_inr row g-3">

                <div class="sec2_inr_bx col-lg-4">

                    <img src="images/inner-sec2-img1.webp" alt="Guy Using Go Quote Rocket on Computer for Debt Relief" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>One Quick Form</h3>

                        <p>Complete our secure and simple form in just 60 seconds. Your information is always protected, and we’ll take care of finding the best debt relief solutions for you.</p>
                    </div>

                </div>

                <div class="sec2_inr_bx col-lg-4">

                    <img src="images/inner-sec2-img2.webp" alt="Debt Relief And Consolidation Options" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>Tailored Debt Relief Options</h3>

                        <p>We’ll instantly assess your situation and present customized debt relief plans designed to fit your financial needs, helping you achieve long-term stability.</p>
                    </div>

                </div>

                <div class="sec2_inr_bx col-lg-4">

                    <img src="images/inner-sec2-img3.webp" alt="Trust Debt Counselor" width="381" height="291">

                    <div class="sec2_bx_content">

                        <h3>Trusted Debt Counselors</h3>

                        <p>Work with experienced, vetted professionals who will guide you through the debt relief process, giving you the confidence and support to rebuild your financial future.</p>
                    </div>

                </div>

            </div>

        </div>

    </div>



    <div class="inner_sec3">

        <div class="container-xl">

            <p class="heading">Understanding Your Options<br> To Get Out Of Debt Fast</p>

            <p class="comn_text">Explore the key solutions to tackle your debt—debt relief, consolidation, or bankruptcy—and take<br class="showDesk">the <strong>first step toward regaining control of your finances</strong>.</p>
            <div class="inner_sec3_row">

                <div class="inner_sec3_tab-row hideMob">

                    <div class="inner_sec3_tab-col active" data-target="#tab_col_1">
                        <p>Debt Relief</p>
                    </div>

                    <div class="inner_sec3_tab-col" data-target="#tab_col_2">
                        <p>Debt Consolidation</p>
                    </div>

                    <div class="inner_sec3_tab-col" data-target="#tab_col_3">
                        <p>Voluntary Sequestration</p>
                    </div>

                </div>



                <div class="mob-div">

                    <div class="accdn-hd showMob">
                        <p>Debt Relief</p><span class="icon">+</span>
                    </div>

                    <div class="inner_sec3_tab_content-box hideMob" id="tab_col_1">

                        <div class="inner_sec3_tab_content">

                            <h3 class="inner_sec3_tab_content_hd hideMob">Debt Relief</h3>

                            <div class="inner_sec3_tab_img e-com_img showMob">
                                <img src="images/inner_sec3-debt-tab1.webp" alt="Debt Relief" width="500" height="450">
                            </div>

                            <p class="inner_sec3_tab_content_tx">Debt relief in the USA involves negotiating with creditors to reduce the total amount owed or arranging for more manageable repayment terms. It’s a viable solution for individuals facing mounting debts and struggling to keep up with payments. Debt relief is often handled through professional debt counselors registered with the National Credit Regulator (NCR).</p>
                            <p class="inner_sec3-content-sub_hd">Benefits of Debt Relief</p>

                            <ul class="inner_sec3_tab-lst">
                                <li><strong>Debt Forgiveness:</strong> Most debts are written off, providing financial relief.</li>
                                <li><strong>Legal Protection:</strong> Stop creditor harassment, judgments, and garnishments immediately.</li>
                                <li><strong>Fresh Start:</strong> Begin anew with a clean financial slate.</li>
                                <li><strong>Court Supervision:</strong> The process is regulated and managed by the legal system.</li>
                                <li><strong>Asset Retention:</strong> Retain exempt assets as per the USAn insolvency laws.</li>
                            </ul>

                        </div>

                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-debt-tab1.webp" alt="Debt Relief" width="500" height="450">

                        </div>

                    </div>

                </div>



                <div class="mob-div">

                    <div class="accdn-hd showMob">
                        <p>Debt Consolidation</p> <span class="icon">+</span>
                    </div>

                    <div class="inner_sec3_tab_content-box" id="tab_col_2" style="display: none;">

                        <div class="inner_sec3_tab_content">

                            <h3 class="inner_sec3_tab_content_hd hideMob">Debt Consolidation</h3>



                            <div class="inner_sec3_tab_img e-com_img showMob">

                                <img src="images/inner_sec3-debt-tab2.webp" alt="Debt Consolidation" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">Debt consolidation in the USA combines multiple debts into a single payment plan or loan, simplifying financial management and potentially reducing monthly payments. This option is particularly helpful for managing credit card debt, personal loans, or store accounts. Many Americans choose this option to streamline their repayments and reduce interest costs.</p>
                            <p class="inner_sec3-content-sub_hd">Benefits of Debt Consolidation</p>

                            <ul class="inner_sec3_tab-lst">
                                <li><strong>Simplified Payments:</strong> Combine all your debts into one easy-to-manage monthly payment.</li>
                                <li><strong>Lower Interest Rates:</strong> Pay less interest, saving money in the long run.</li>
                                <li><strong>Avoid Default:</strong> Stay on track with a structured and predictable repayment plan.</li>
                                <li><strong>Improve Credit:</strong> Consistent repayments help rebuild your credit score over time.</li>
                            </ul>
                        </div>

                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-debt-tab2.webp" alt="Debt Consolidation" width="500" height="450">

                        </div>

                    </div>

                </div>



                <div class="mob-div">

                    <div class="accdn-hd showMob">
                        <p>Voluntary Sequestration</p> <span class="icon">+</span>
                    </div>

                    <div class="inner_sec3_tab_content-box" id="tab_col_3" style="display: none;">

                        <div class="inner_sec3_tab_content">

                            <h3 class="inner_sec3_tab_content_hd hideMob">Voluntary Sequestration</h3>



                            <div class="inner_sec3_tab_img e-com_img showMob">

                                <img src="images/inner_sec3-debt-tab3.webp" alt="Voluntary Sequestration" width="500" height="450">

                            </div>

                            <p class="inner_sec3_tab_content_tx">Voluntary sequestration is a legal process in the USA where individuals declare insolvency and hand over their assets to a court-appointed trustee. The trustee sells these assets to repay creditors, providing a fresh financial start by erasing most debts. This is a last-resort option for those with debts exceeding their assets and income.</p>
                            <p class="inner_sec3-content-sub_hd">Benefits of Voluntary Sequestration</p>

                            <ul class="inner_sec3_tab-lst">
                                <li><strong>Reduced Debt:</strong> Negotiate with creditors to lower the total amount owed.</li>
                                <li><strong>Avoid Legal Action:</strong> Prevent judgments or garnishments by restructuring your debt.</li>
                                <li><strong>Faster Repayment:</strong> Create a clear plan to settle your debts in less time.</li>
                                <li><strong>Professional Support:</strong> Work with NCR-registered counselors who understand local laws.</li>
                            </ul>

                        </div>

                        <div class="inner_sec3_tab_img hideMob">

                            <img src="images/inner_sec3-debt-tab3.webp" alt="Voluntary Sequestration" width="500" height="450">

                        </div>

                    </div>

                </div>



                <div class="clearall"></div>

                <div class="btn-bx">

                    <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Debt Relief Options">Get Started Today</a>

                </div>

            </div>

        </div>
    </div>


    <div class="why_choose">

        <div class="container-xl">

            <div class="why_choose_left col-lg-5">

                <p class="heading">Why Choose<br class="hideMob"> Go Quote Rocket</p>

                <p class="comn_text">Dealing with debt is overwhelming, but we’re here to make your debt consolidation simple. At <a href="/" alt="Affordable Insurance Options">Go Quote Rocket</a>, we connect you with debt counselors who can guide you through the process of selecting the right debt relief option for you.</p>

            </div>

            <div class="why_choose_right col-lg-7">

                <ul class="why_choose_lst">

                    <li>

                        <img src="images/why-chose-icn1.png" alt="Save Time Icon" class="why-chose_icn" width="84" height="92">

                        <h3>Save Time</h3>

                        <p>Find all the prices and benefits you need in 1 minute.</p>

                    </li>

                    <li>

                        <img src="images/why-chose-icn2.png" alt="Save Money Icon" class="why-chose_icn" width="84" height="92">

                        <h3>Save Money</h3>

                        <p>Compare relief options. Choose the best for you.</p>

                    </li>

                    <li>

                        <img src="images/why-chose-icn3.png" alt="Save Stress Icon" class="why-chose_icn" width="84" height="92">

                        <h3>Save Stress</h3>

                        <p>Avoid hidden fees and keep your personal information private.</p>

                    </li>

                    <li>

                        <img src="images/why-chose-icn4.png" alt="Save Smart Icon" class="why-chose_icn" width="84" height="92">

                        <h3>Save Smart</h3>

                        <p>Quick comparisons, explained by a debt counselor.</p>

                    </li>

                </ul>

            </div>

        </div>

    </div>



    <div class="inner_sec4">

        <div class="container-xl">

            <p class="heading">Get Your Life Back<br class="showDesk"> On Track With Debt Relief</p>

            <p class="comn_text">Debt relief and consolidation is a powerful tool for anyone struggling to manage overwhelming financial burdens. Learn how<br class="showDesk"> it can help you <strong>reduce stress, protect your assets, and regain control of your money</strong>.</p>

            <div class="inner_sec4_inr">

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-life-icon1.png" alt="" class="inner_sec4_icn" width="200" height="124">

                    <h3>Consolidate<br>All Your Debt</h3>

                    <p>Simplify your payments by consolidating multiple debts into one manageable monthly installment, often with a lower interest rate.</p>
                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-life-icon2.png" alt="" class="inner_sec4_icn" width="200" height="124">

                    <h3>Reduce<br>Monthly Payments</h3>

                    <p>Work with debt relief providers to lower your monthly payments, freeing up cash flow for essential expenses.</p>

                </div>

                <div class="inner_sec4_inr_bx">
                    <img src="images/inner-sec4-life-icon8.png" alt="" class="inner_sec4_icn" width="200" height="124">
                    <h3>Avoid<br>Legal Action</h3>

                    <p>Debt relief programs can help you avoid lawsuits, judgments, or wage garnishments by creating structured repayment plans.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-life-icon9.png" alt="" class="inner_sec4_icn" width="200" height="124">

                    <h3>Eliminate<br>Debt Faster</h3>

                    <p>With a customized plan, you can pay off your debt more quickly than sticking to minimum payments, saving you time and money.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-life-icon7.png" alt="" class="inner_sec4_icn" width="200" height="124">
                    <h3>Reduce<br>Unwanted Stress</h3>

                    <p>By addressing your debt proactively, you can reduce the emotional burden of financial stress and focus on your goals.</p>

                </div>

                <div class="inner_sec4_inr_bx">

                    <img src="images/inner-sec4-life-icon4.png" alt="" class="inner_sec4_icn" width="200" height="124">

                    <h3>Get Life<br>Back On Track</h3>

                    <p>Ensure your life is financially secure and you're in a position to live the future you've been planning.</p>

                </div>

            </div>



            <div class="btn-bx">

                <a onclick="scrollToSection();" href="javascript:void(0)" class="comn-btn" alt="Debt Relief Options">Get Started Today</a>

            </div>

        </div>

    </div>



    <div class="sec3">

        <div class="container-xl">

            <p class="heading">Over 744 409<br class="showMob"> Americans Trust Us.</p>

            <div class="feefo_box">

                <img src="images/feefo-logo.png" alt="Feefo Reviews" class="feefo_log" width="366" height="84">

                <div class="feefo_review">

                    <img src="images/star.png" alt="5 Star Rating" width="228" height="40">

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
                        <p><span>Lauren</span><br> Jacksonville, FL</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Review" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"Go Quote Rocket’s customer service was outstanding. They answered all my questions and helped me choose a plan that worked perfectly for my budget."</p>

                    <div class="reviews_name"><img src="images/themba.jpg" alt="Customer Named Themba" width="100" height="100" class="rev_fc">
                        <p><span>James</span><br> Austin, TX</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Review" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"I’m so glad I used Go Quote Rocket! They compared multiple options for me and found the best deal in minutes. Highly efficient and reliable."</p>

                    <div class="reviews_name"><img src="images/lebo.jpg" alt="Customer Named Mike" width="100" height="100" class="rev_fc">
                        <p><span>Mike</span><br> Denver, CO</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Rating" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"Go Quote Rocket’s service was incredibly fast and efficient. They provided me with great options and unbeatable prices. I’m thrilled with the deal I got and highly recommend them."</p>

                    <div class="reviews_name"><img src="images/marthinus.jpg" alt="Customer Named Marthinus" width="100" height="100" class="rev_fc">
                        <p><span>Martin</span><br> Chicago, IL</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Rated" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"Finding the right insurance was so easy with Go Quote Rocket. The options were tailored to my needs, and everything was simple and straightforward."</p>

                    <div class="reviews_name"><img src="images/thandi.jpg" alt="Customer Named Thandi" width="100" height="100" class="rev_fc">
                        <p><span>Sarah</span><br> Phoenix, AZ</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Review" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"Excellent service! Go Quote Rocket made it easy to find a great insurance deal. They were professional and very helpful throughout the process."</p>

                    <div class="reviews_name"><img src="images/sipho.jpg" alt="Customer Named Sipho" width="100" height="100" class="rev_fc">
                        <p><span>David</span><br> Atlanta, GA</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Review" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"Go Quote Rocket was a lifesaver! They helped me find insurance quickly with a smooth, convenient process. Highly recommended."</p>

                    <div class="reviews_name"><img src="images/zanele.jpg" alt="Customer Named Zanele" width="100" height="100" class="rev_fc">
                        <p><span>Jessica</span><br> Dallas, TX</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Review" class="reviews_star" width="228" height="40">

                </div>

            </div>



            <div class="reviews_box reviews_box-last">

                <div class="reviews_content">

                    <img src="images/rev-quote.png" alt="Testimonial Quote" class="reviews_quote" width="54" height="46">

                    <p class="reviews_text">"Go Quote Rocket’s system was so easy to use. I quickly found the coverage I needed without any hassle. Fantastic experience!"</p>

                    <div class="reviews_name"><img src="images/loraine.jpg" alt="Customer Named Loraine" width="100" height="100" class="rev_fc">
                        <p><span>Loraine</span><br> Miami, FL</p>
                    </div>

                    <img src="images/star.png" alt="5 Star Review" class="reviews_star" width="228" height="40">

                </div>

            </div>

        </div>

    </div>



    <div class="sec7">

        <div class="container-xl" id="faq-section">

            <p class="heading">Frequently Asked Questions</p>

            <div class="faq-container" style="overflow:hidden;">

                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-open" id="hd-one">What is debt relief?</div>

                        <div class="acdn-content">

                            <p class="acdn-para">Debt relief involves programs designed to help you manage, reduce, or eliminate debt through strategies like consolidation, negotiation, or structured repayment plans.</p>
                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Who qualifies for debt relief?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Eligibility depends on factors like your total debt amount, income, and the type of debt you have. Most unsecured debts, like credit card balances and personal loans, qualify for relief.</p>
                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">How does debt consolidation work?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Debt consolidation combines multiple debts into a single loan or repayment plan with a lower interest rate, making payments more manageable.</p>

                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Will debt relief hurt my credit score?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Debt relief may temporarily affect your credit score, but it can improve over time as you pay down your debts and rebuild your financial health.</p>
                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">How long does debt relief take?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">The duration of debt relief depends on your plan and debt amount but typically ranges from 12 to 60 months.</p>
                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Can I include all my debts in a relief program?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Most unsecured debts, such as credit cards, medical bills, and <a href="personal-loans.php" alt="">personal loans</a>, are eligible. Secured debts like mortgages and <a href="car-insurance.php" alt="Car Insurance Quotes">car</a> loans usually aren’t included.</p>
                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">How much does debt relief cost?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Costs vary by provider and plan, but many programs charge a percentage of your enrolled debt as a fee. Be sure to review the terms before committing.</p>
                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Can debt relief stop collection calls?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">Yes, once you enroll in a program, many providers will work with creditors to halt collection calls and harassment.</p>
                        </div>

                    </div>

                </div>



                <div class="up-slide-dwn">

                    <div class="faq-innr">

                        <div class="accordion acdn-heading accordion-close">Is debt relief the same as bankruptcy?</div>

                        <div class="acdn-content" style="display: none;">

                            <p class="acdn-para">No, debt relief focuses on negotiating with creditors or consolidating payments, while bankruptcy is a <a href="legal-insurance.php" alt="Legal Insurance">legal process</a> that can discharge debts but has significant long-term consequences.</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
<div class="blue_strip">
    <div class="container-xl">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="blue_strip_cont">
                    <h3>Ready to get started?</h3>
                    <p>Compare insurance quotes today!</p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="blue_strip_btn">
                    <div class="btn-bx">
                        <a href="javascript:void(0)" class="comn-btn" alt="Get Insurance Quotes">Get Quote Now</a>
                    </div>
                </div>
            </div>
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
                let formData = $('[name=debt_api1]').serialize();
                var PhoneNumber = $("input[name='phone']").val();
                var errors = new Array();
                validateCheckbox();
                $('input[name=phone],input[name=email],input[name=given-name],input[name=family-name],select[name=employment],select[name=debt_greater_than_40_000],select[name=underdebtreview],select[name=age],select[name=monthly_income]')
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
                    debtApiCall(formData);
                }
            });
            $("select[name=age],select[name=employment],select[name=debt_greater_than_40_000],select[name=underdebtreview],select[name=age],select[name=monthly_income]").on('change', function(e) {
                $(this).next('.error_message ').hide();

            });
            $("input[name='given-name'], input[name='family-name'],input[name=email]").keyup(function() {
                $(this).next('.error_message ').hide();

            });

            function debtApiCall(formData) {
                $('#loading-indicator').show();
                let queryStringValue = window.location.search;
                $.ajax({
                    url: '/api/submit.php?vertical=debt&' + formData,
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