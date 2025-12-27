<div class="info-sec">
    <div class="container">
        <div class="info-sec-inr">
            <div class="info-sec-links-col info-sec-links-col-1">
                <img src="{{ asset('images/logo.svg') }}" alt="Go Quote Rocket Logo" class="info-sec-log" width="506" height="48">
                <p class="info-sec-tx">Go Quote Rocket is based in the USA, working hard to get you the rates you deserve.</p>
                {{-- Contact info can be added when available --}}
                {{-- <p class="contact_info"><img src="{{ asset('images/phn-icn.png') }}" alt="Customer Service" width="36" height="34">
                    <a href="tel:+18001234567" style="text-decoration: none;color: #000;">(800) 123-4567</a>
                </p>
                <p class="contact_info"><img src="{{ asset('images/mail-icn.png') }}" alt="Support email" width="36" height="34">
                    <a href="mailto:support@goquoterocket.com" style="text-decoration: none;color: #000;">support@goquoterocket.com</a>
                </p> --}}
            </div>

            <div class="info-sec-links-col info-sec-links-col-2">
                <p class="info-sec-links-hd colapse-hd">Insurance <span class="tot-img hide-desk"></span></p>
                <ul class="info-sec-links-list">
                    <li><a href="{{ route('legal-insurance') }}" alt="Legal Insurance Quotes">Legal Insurance</a></li>
                    <li><a href="{{ route('pet-insurance') }}" alt="Pet Insurance Quotes">Pet Insurance</a></li>
                    <li><a href="{{ route('life-insurance') }}" alt="Life Insurance Quotes">Life Insurance</a></li>
                    <li><a href="{{ route('business-insurance') }}" alt="Business Insurance Quotes">Business Insurance</a></li>
                </ul>
            </div>

            <div class="info-sec-links-col info-sec-links-col-4">
                <p class="info-sec-links-hd colapse-hd">Medical <span class="tot-img hide-desk"></span></p>
                <ul class="info-sec-links-list">
                    <li><a href="{{ route('medical-insurance') }}" alt="Medical Insurance Quotes">Medical Insurance</a></li>
                    <li><a href="{{ route('funeral-cover') }}" alt="Funeral Cover Quotes">Funeral Cover</a></li>
                </ul>
            </div>

            <div class="info-sec-links-col info-sec-links-col-3">
                <p class="info-sec-links-hd colapse-hd">Finance <span class="tot-img hide-desk"></span></p>
                <ul class="info-sec-links-list">
                    <li><a href="{{ route('personal-loans') }}" alt="Personal Loans Quotes">Personal Loans</a></li>
                    <li><a href="{{ route('debt-relief') }}" alt="Debt Relief Quotes">Debt Relief</a></li>
                </ul>
            </div>

            <div class="info-sec-links-col info-sec-links-col-5">
                <p class="info-sec-links-hd colapse-hd">Auto <span class="tot-img hide-desk"></span></p>
                <ul class="info-sec-links-list">
                    <li><a href="{{ route('car-insurance') }}" alt="Car Insurance Quotes">Car Insurance</a></li>
                    <li><a href="{{ route('vehicle-tracker') }}" alt="GPS Vehicle Tracking Device Quotes">Vehicle Tracker</a></li>
                    <li><a href="{{ route('motor-warranty') }}" alt="Motor Warranty Quotes">Motor Warranty</a></li>
                </ul>
            </div>
        </div>

        <div class="disclaimer">
            <p class="brand_hdg">Go Quote Rocket Partners</p>
            <img src="{{ asset('images/footer-logos-gray.svg') }}" alt="Insurance Partners" width="920" height="66" class="showDesk">
            <img src="{{ asset('images/footer-logos-gray-mobile.svg') }}" alt="Insurance Partners" width="420" height="90" class="showMob">
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        <div class="footer__inner">
            <p class="footer__text footer__text--1">&copy; {{ date('Y') }} Go Quote Rocket LLC | All Rights Reserved</p>
            <p class="footer__text footer__text--2">
                <a href="{{ route('contact') }}" alt="Contact Go Quote Rocket">Contact</a> |
                <a href="{{ route('about') }}" alt="About Go Quote Rocket">About</a> |
                <a href="{{ route('terms') }}" alt="Go Quote Rocket Terms">Terms</a> |
                <a href="{{ route('privacy') }}" alt="Go Quote Rocket Privacy Policy">Privacy</a>
            </p>
        </div>
    </div>
</div>
