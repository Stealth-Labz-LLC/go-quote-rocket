<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Affordable Insurance Quotes in the USA | Go Quote Rocket')</title>
    <meta name="description" content="@yield('description', 'Get competitive insurance quotes in the USA with Go Quote Rocket. Compare options and save on affordable coverage today.')">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

    <!-- Preload Critical Assets -->
    @stack('preload')

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/error-handler.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loader-design.css') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <!-- Schema.org Structured Data -->
    @stack('schema')

    <!-- Google Tag Manager -->
    {{-- TODO: Add your GTM container ID --}}
    {{-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-XXXXXXX');
    </script> --}}

    <!-- CSRF Token for AJAX -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('styles')
</head>

<body class="@yield('body-class')">
    {{-- Google Tag Manager (noscript) --}}
    {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXXXX" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> --}}

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    <!-- Error Handler Overlay -->
    <div id="error_handler_overlay" style="display: none;">
        <div class="error_handler_body">
            <a href="javascript:void(0);" id="error_handler_overlay_close">X</a>
            <p>There was an error processing your request.</p>
        </div>
    </div>

    <!-- Loading Indicator -->
    <p id="loading-indicator" style="display:none">Processing...</p>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <!-- Common JS -->
    <script>
        // CSRF Token for AJAX
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Common Functions
        function scrollToSection() {
            var section = document.getElementById("toForm");
            if (!section) return;
            var offset = section.offsetTop - 72;
            if ($(window).width() < 767) {
                offset = section.offsetTop - 50;
            }
            window.scrollTo({ top: offset, behavior: 'smooth' });
        }

        $(document).ready(function() {
            // Mobile menu toggle
            $('.mob-mnu-ic').click(function(e) {
                $('.mobilemenu').slideToggle();
                $('.dl-trigger').toggleClass('dl-active');
            });

            // Mobile dropdown menus
            $('.menuOpen').click(function(e) {
                e.preventDefault();
                $('.dropdown-mobile').slideUp();
                $('.menuOpen').removeClass('mnutog');
                if (!$(this).next('.dropdown-mobile').is(':visible')) {
                    $(this).next('.dropdown-mobile').slideDown();
                    $(this).addClass('mnutog');
                }
            });

            // Error handler close
            $(document).on('click', '#error_handler_overlay_close', function(event) {
                $('#error_handler_overlay').hide();
            });

            // Sticky header on scroll
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

            // Footer collapse on mobile
            if ($(window).innerWidth() <= 767) {
                $('.colapse-hd').click(function(e) {
                    $(this).next('.info-sec-links-list').slideToggle();
                    $(this).toggleClass('active');
                });
            }

            // FAQ Accordion
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

            // Reviews Slider
            if ($('.reviews').length) {
                $('.reviews').slick({
                    dots: false,
                    arrows: false,
                    autoplay: false,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    variableWidth: true,
                    responsive: [{
                        breakpoint: 2200,
                        settings: { centerMode: true }
                    }, {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            centerMode: false,
                            autoplay: true,
                            autoplaySpeed: 3000,
                            dots: true,
                            variableWidth: false
                        }
                    }]
                });
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
