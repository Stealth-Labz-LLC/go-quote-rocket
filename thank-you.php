<?php

session_start();

foreach ($_POST as $key => $value) {

    $_SESSION['post'][$key] = $value;
}

$data = $_SESSION;

//echo '<pre>'; print_r($data);

?>
<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Thank You for Using Go Quote Rocket</title>

    <meta name="description" content="Thank you for trusting Go Quote Rocket for your insurance quote needs. Explore more affordable options on car, medical, and life insurance today.">
    <link rel="canonical" href="https://goquoterocket.com/thank-you.php">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Manrope:wght@200..800&display=swap" rel="stylesheet">

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



<body class="thankyou_page">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPP3PH3H"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php include 'header.php'; ?>



    <div class="thankyou_content">

        <div class="container-xl">

            <p class="thankyou_heading">Congratulations!</p>

            <p class="thankyou_text">You're about to save big <strong><?= $data['prevFormData']['given-name']; ?></strong> with Go Quote Rocket. One of our<br class="showDesk"> agents will be calling you momentarily to discuss your options.</p>



            <div class="agent_box">

                <p class="agent_box_rated"><img src="images/star.svg" alt=""> Top Rated Agent</p>

                <img src="images/agent-img.jpg" alt="" class="agent_img" width="400" height="400">

                <img src="images/5stars.svg" alt="" class="agent_5star">

                <img src="images/hellopeter.svg" alt="" class="agent_logo">

                <p class="overall_rating">4.9 Overall Satisfaction Rating</p>

                <p class="base_rating">Based on <span>236 Ratings</span></p>

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
                        <a href="/" class="comn-btn" alt="Get Insurance Quotes">Get Quote Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <?php include 'footer.php'; ?>



    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>

    <script type="text/javascript" src="js/slick.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {



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



            if ($(window).innerWidth() <= 767) {

                $('.colapse-hd').click(function(e) {

                    $(this).next('.info-sec-links-list').slideToggle();

                    $(this).toggleClass('active');

                });

            }



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
    </script>

</body>

</html>