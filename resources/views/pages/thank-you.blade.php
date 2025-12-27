@extends('layouts.app')

@section('title', 'Thank You | Go Quote Rocket')
@section('description', 'Thank you for your submission. An insurance specialist will contact you shortly.')
@section('body-class', 'thank_you_pg')

@section('content')
<div class="thank_you_section">
    <div class="container">
        <div class="thank_you_content">
            <img src="{{ asset('images/check-icon.png') }}" alt="Success" class="thank_you_icon" width="100" height="100">

            <h1 class="thank_you_hdg">Thank You!</h1>

            <p class="thank_you_txt">Your information has been submitted successfully.</p>

            <p class="thank_you_txt">An insurance specialist will contact you shortly to discuss your options and help you find the best coverage for your needs.</p>

            <div class="thank_you_info">
                <h3>What Happens Next?</h3>
                <ul>
                    <li><strong>Step 1:</strong> A licensed insurance agent will call you within the next few minutes.</li>
                    <li><strong>Step 2:</strong> They'll review your information and answer any questions.</li>
                    <li><strong>Step 3:</strong> You'll receive personalized quotes tailored to your needs.</li>
                </ul>
            </div>

            <div class="thank_you_cta">
                <p>While you wait, explore our other insurance products:</p>
                <div class="thank_you_links">
                    <a href="{{ route('car-insurance') }}" class="comn-btn">Car Insurance</a>
                    <a href="{{ route('life-insurance') }}" class="comn-btn">Life Insurance</a>
                    <a href="{{ route('medical-insurance') }}" class="comn-btn">Medical Insurance</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.thank_you_section {
    padding: 80px 0;
    text-align: center;
    min-height: 60vh;
}
.thank_you_content {
    max-width: 600px;
    margin: 0 auto;
}
.thank_you_icon {
    margin-bottom: 30px;
}
.thank_you_hdg {
    font-size: 48px;
    color: #1a1a1a;
    margin-bottom: 20px;
}
.thank_you_txt {
    font-size: 18px;
    color: #666;
    margin-bottom: 15px;
    line-height: 1.6;
}
.thank_you_info {
    background: #f8f9fa;
    padding: 30px;
    border-radius: 10px;
    margin: 40px 0;
    text-align: left;
}
.thank_you_info h3 {
    margin-bottom: 20px;
    color: #1a1a1a;
}
.thank_you_info ul {
    list-style: none;
    padding: 0;
}
.thank_you_info li {
    padding: 10px 0;
    border-bottom: 1px solid #eee;
}
.thank_you_info li:last-child {
    border-bottom: none;
}
.thank_you_cta {
    margin-top: 40px;
}
.thank_you_cta p {
    margin-bottom: 20px;
    color: #666;
}
.thank_you_links {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
}
.thank_you_links .comn-btn {
    padding: 12px 25px;
    font-size: 14px;
}
</style>
@endpush
