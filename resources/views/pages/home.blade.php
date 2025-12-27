@extends('layouts.app')

@section('title', 'Affordable Insurance Quotes in the USA | Go Quote Rocket')
@section('description', 'Compare insurance quotes from top US providers. Car, life, health, pet insurance and more. Save time and money with Go Quote Rocket.')
@section('body-class', 'home_pg')

@section('content')
<div class="home_banner">
    <div class="container">
        <div class="home_banner_content">
            <p class="inner_sec1-rat-txt">
                <img src="{{ asset('images/sec1-star.png') }}" alt="Customer Reviews" width="148" height="26">
                <span>4.8 stars</span> 2,000+ reviews
            </p>

            <h1 class="home_banner_hdg">Find Affordable Insurance<br class="showDesk"> Quotes in <em>Minutes!</em></h1>

            <p class="home_banner_txt">Compare insurance offers from America's top providers.<br class="hideMob"> <strong>Save time and money today.</strong></p>

            <div class="home_products">
                <div class="home_product_row">
                    <a href="{{ route('car-insurance') }}" class="home_product_item">
                        <img src="{{ asset('images/car-icon.png') }}" alt="Car Insurance" width="60" height="60">
                        <span>Car Insurance</span>
                    </a>
                    <a href="{{ route('life-insurance') }}" class="home_product_item">
                        <img src="{{ asset('images/life-icon.png') }}" alt="Life Insurance" width="60" height="60">
                        <span>Life Insurance</span>
                    </a>
                    <a href="{{ route('medical-insurance') }}" class="home_product_item">
                        <img src="{{ asset('images/health-icon.png') }}" alt="Medical Insurance" width="60" height="60">
                        <span>Medical Insurance</span>
                    </a>
                    <a href="{{ route('pet-insurance') }}" class="home_product_item">
                        <img src="{{ asset('images/pet-icon.png') }}" alt="Pet Insurance" width="60" height="60">
                        <span>Pet Insurance</span>
                    </a>
                </div>
                <div class="home_product_row">
                    <a href="{{ route('business-insurance') }}" class="home_product_item">
                        <img src="{{ asset('images/business-icon.png') }}" alt="Business Insurance" width="60" height="60">
                        <span>Business Insurance</span>
                    </a>
                    <a href="{{ route('legal-insurance') }}" class="home_product_item">
                        <img src="{{ asset('images/legal-icon.png') }}" alt="Legal Insurance" width="60" height="60">
                        <span>Legal Insurance</span>
                    </a>
                    <a href="{{ route('personal-loans') }}" class="home_product_item">
                        <img src="{{ asset('images/loan-icon.png') }}" alt="Personal Loans" width="60" height="60">
                        <span>Personal Loans</span>
                    </a>
                    <a href="{{ route('debt-relief') }}" class="home_product_item">
                        <img src="{{ asset('images/debt-icon.png') }}" alt="Debt Relief" width="60" height="60">
                        <span>Debt Relief</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Brands Section -->
<div class="as-seen">
    <div class="container">
        <p class="as-seen__heading">Quotes by America's top providers, including:</p>
    </div>
    <div class="brand__strip__scroller">
        <ul class="scroll__brand__list">
            <li><img src="{{ asset('images/first-for-women-logo.svg') }}" alt="Insurance Provider"></li>
            <li><img src="{{ asset('images/virseker-logo.svg') }}" alt="Insurance Provider" class="virseker_logo"></li>
            <li><img src="{{ asset('images/dial-direct-logo.svg') }}" alt="Insurance Provider" class="dial-direct_logo"></li>
            <li><img src="{{ asset('images/budget-logo.svg') }}" alt="Insurance Provider" class="budget_logo"></li>
            <li><img src="{{ asset('images/auto-general-logo.svg') }}" alt="Insurance Provider" class="auto-general_logo"></li>
            <li><img src="{{ asset('images/king-price-logo.svg') }}" alt="Insurance Provider"></li>
        </ul>
        <ul class="scroll__brand__list">
            <li><img src="{{ asset('images/first-for-women-logo.svg') }}" alt="Insurance Provider"></li>
            <li><img src="{{ asset('images/virseker-logo.svg') }}" alt="Insurance Provider" class="virseker_logo"></li>
            <li><img src="{{ asset('images/dial-direct-logo.svg') }}" alt="Insurance Provider" class="dial-direct_logo"></li>
            <li><img src="{{ asset('images/budget-logo.svg') }}" alt="Insurance Provider" class="budget_logo"></li>
            <li><img src="{{ asset('images/auto-general-logo.svg') }}" alt="Insurance Provider" class="auto-general_logo"></li>
            <li><img src="{{ asset('images/king-price-logo.svg') }}" alt="Insurance Provider"></li>
        </ul>
    </div>
</div>

<!-- How It Works Section -->
<div class="inner_sec2">
    <div class="container">
        <p class="heading">How Go Quote Rocket Works</p>
        <p class="comn_text comn_text--center">We make finding the right insurance simple. In just a few steps, we'll connect you with top-rated insurers to help you find affordable coverage.</p>

        <div class="sec2_inr">
            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img1.webp') }}" alt="Quick Form" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>One Quick Form</h3>
                    <p>Fill out our secure form in just 60 seconds. Your information is always protected.</p>
                </div>
            </div>
            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img2.webp') }}" alt="Tailored Options" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>Tailored Options</h3>
                    <p>We'll instantly find the best insurance plans that fit your needs and budget.</p>
                </div>
            </div>
            <div class="sec2_inr_bx">
                <img src="{{ asset('images/inner-sec2-img3.webp') }}" alt="Expert Guidance" width="381" height="291">
                <div class="sec2_bx_content">
                    <h3>Expert Guidance</h3>
                    <p>Connect with experienced insurance partners who will guide you through the process.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Products Section -->
<div class="products_section">
    <div class="container">
        <p class="heading">Our Insurance Products</p>
        <p class="comn_text comn_text--center">Explore our range of insurance products designed to protect what matters most to you.</p>

        <div class="products_grid">
            <a href="{{ route('car-insurance') }}" class="product_card">
                <h3>Car Insurance</h3>
                <p>Protect your vehicle with comprehensive coverage options.</p>
                <span class="product_link">Get Quotes &rarr;</span>
            </a>
            <a href="{{ route('life-insurance') }}" class="product_card">
                <h3>Life Insurance</h3>
                <p>Secure your family's future with affordable life coverage.</p>
                <span class="product_link">Get Quotes &rarr;</span>
            </a>
            <a href="{{ route('medical-insurance') }}" class="product_card">
                <h3>Medical Insurance</h3>
                <p>Find health insurance plans that fit your needs.</p>
                <span class="product_link">Get Quotes &rarr;</span>
            </a>
            <a href="{{ route('pet-insurance') }}" class="product_card">
                <h3>Pet Insurance</h3>
                <p>Keep your furry friends protected with pet coverage.</p>
                <span class="product_link">Get Quotes &rarr;</span>
            </a>
            <a href="{{ route('business-insurance') }}" class="product_card">
                <h3>Business Insurance</h3>
                <p>Protect your business with comprehensive coverage.</p>
                <span class="product_link">Get Quotes &rarr;</span>
            </a>
            <a href="{{ route('personal-loans') }}" class="product_card">
                <h3>Personal Loans</h3>
                <p>Find competitive loan rates for your financial needs.</p>
                <span class="product_link">Get Quotes &rarr;</span>
            </a>
        </div>
    </div>
</div>

<!-- Why Choose Section -->
<div class="why_choose">
    <div class="container">
        <div class="why_choose_left">
            <p class="heading">Why Choose<br class="hideMob"> Go Quote Rocket</p>
            <p class="comn_text">Finding the right insurance can feel overwhelming, but we're here to make it simple. We connect you with insurance experts who can guide you through the process.</p>
        </div>
        <div class="why_choose_right">
            <ul class="why_choose_lst">
                <li>
                    <img src="{{ asset('images/why-chose-icn1.png') }}" alt="Save Time" class="why-chose_icn" width="84" height="92">
                    <h3>Save Time</h3>
                    <p>Find all the prices and benefits you need in 1 minute.</p>
                </li>
                <li>
                    <img src="{{ asset('images/why-chose-icn2.png') }}" alt="Save Money" class="why-chose_icn" width="84" height="92">
                    <h3>Save Money</h3>
                    <p>Compare insurance quotes. Choose the best for you.</p>
                </li>
                <li>
                    <img src="{{ asset('images/why-chose-icn3.png') }}" alt="Save Stress" class="why-chose_icn" width="84" height="92">
                    <h3>Save Stress</h3>
                    <p>Avoid hidden fees and keep your information private.</p>
                </li>
                <li>
                    <img src="{{ asset('images/why-chose-icn4.png') }}" alt="Save Smart" class="why-chose_icn" width="84" height="92">
                    <h3>Save Smart</h3>
                    <p>Quick comparisons, explained by a trusted expert.</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Reviews Section -->
<div class="sec3">
    <div class="container">
        <p class="heading">Thousands of Americans Trust Us.</p>
        <div class="feefo_box">
            <img src="{{ asset('images/feefo-logo.png') }}" alt="Reviews" class="feefo_log" width="366" height="84">
            <div class="feefo_review">
                <img src="{{ asset('images/star.png') }}" alt="5 Star Reviews" width="228" height="40">
                <p>4.8/5 Based On 2000+ reviews</p>
            </div>
        </div>
    </div>

    <div class="reviews">
        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Go Quote Rocket made finding insurance so easy. I saved hundreds on my car insurance!"</p>
                <div class="reviews_name">
                    <img src="{{ asset('images/ntombi.jpg') }}" alt="Sarah" width="100" height="100" class="rev_fc">
                    <p><span>Sarah</span><br> California</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Stars" class="reviews_star" width="228" height="40">
            </div>
        </div>
        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Excellent service! Found great life insurance coverage in minutes."</p>
                <div class="reviews_name">
                    <img src="{{ asset('images/themba.jpg') }}" alt="Michael" width="100" height="100" class="rev_fc">
                    <p><span>Michael</span><br> Texas</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Stars" class="reviews_star" width="228" height="40">
            </div>
        </div>
        <div class="reviews_box">
            <div class="reviews_content">
                <img src="{{ asset('images/rev-quote.png') }}" alt="Quote" class="reviews_quote" width="54" height="46">
                <p class="reviews_text">"Quick, easy, and saved me money. Highly recommend!"</p>
                <div class="reviews_name">
                    <img src="{{ asset('images/lebo.jpg') }}" alt="Jennifer" width="100" height="100" class="rev_fc">
                    <p><span>Jennifer</span><br> Florida</p>
                </div>
                <img src="{{ asset('images/star.png') }}" alt="5 Stars" class="reviews_star" width="228" height="40">
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="blue_strip">
    <div class="blue_strip_cont">
        <h3>Ready to get started?</h3>
        <p>Compare insurance quotes today!</p>
    </div>
    <div class="blue_strip_btn">
        <div class="btn-bx">
            <a href="{{ route('car-insurance') }}" class="comn-btn">Get Quote Now</a>
        </div>
    </div>
</div>
@endsection
