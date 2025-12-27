<div class="top-fix-bar">
    <div class="header">
        <div class="container">
            <div class="mob-mnu-ic showTab">
                <button class="dl-trigger" id="mobMenuBtn">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </button>
            </div>
            <a href="{{ route('home') }}"><img src="{{ asset('images/logo.svg') }}" class="logo" width="506" height="48" alt="Go Quote Rocket Logo"></a>
            <div class="header_right">
                {{-- Phone number can be added here if needed --}}
            </div>

            <div class="showDesk">
                <ul class="topMenu">
                    <li>
                        <a href="#">Insurance<img src="{{ asset('images/d_menu_ic.png') }}" class="d_menu_ic" alt="ic" width="22" height="14"></a>
                        <div class="dropMenu">
                            <ul>
                                <li><a href="{{ route('legal-insurance') }}" alt="Legal Insurance Quotes">Legal Insurance</a></li>
                                <li><a href="{{ route('pet-insurance') }}" alt="Pet Insurance Quotes">Pet Insurance</a></li>
                                <li><a href="{{ route('life-insurance') }}" alt="Life Insurance Quotes">Life Insurance</a></li>
                                <li><a href="{{ route('business-insurance') }}" alt="Business Insurance Quotes">Business Insurance</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Medical<img src="{{ asset('images/d_menu_ic.png') }}" class="d_menu_ic" alt="ic" width="22" height="14"></a>
                        <div class="dropMenu">
                            <ul>
                                <li><a href="{{ route('medical-insurance') }}" alt="Medical Insurance Quotes">Medical Insurance</a></li>
                                <li><a href="{{ route('funeral-cover') }}" alt="Funeral Cover Quotes">Funeral Cover</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Finance<img src="{{ asset('images/d_menu_ic.png') }}" class="d_menu_ic" alt="ic" width="22" height="14"></a>
                        <div class="dropMenu">
                            <ul>
                                <li><a href="{{ route('personal-loans') }}" alt="Personal Loan Quotes">Personal Loans</a></li>
                                <li><a href="{{ route('debt-relief') }}" alt="Debt Relief Quotes">Debt Relief</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Auto<img src="{{ asset('images/d_menu_ic.png') }}" class="d_menu_ic" alt="ic" width="22" height="14"></a>
                        <div class="dropMenu">
                            <ul>
                                <li><a href="{{ route('car-insurance') }}" alt="Car Insurance">Car Insurance</a></li>
                                <li><a href="{{ route('vehicle-tracker') }}" alt="GPS Vehicle Tracking Device Quotes">Vehicle Tracker</a></li>
                                <li><a href="{{ route('motor-warranty') }}" alt="Motor Warranty Quotes">Motor Warranty</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="{{ route('about') }}" alt="About Go Quote Rocket">About</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="showTab">
    <ul class="mobilemenu">
        <li>
            <a href="#" class="menuOpen">Insurance</a>
            <ul class="dropdown-mobile" style="display: none;">
                <li><a href="{{ route('legal-insurance') }}" alt="Legal Insurance Quotes">Legal Insurance</a></li>
                <li><a href="{{ route('pet-insurance') }}" alt="Pet Insurance Quotes">Pet Insurance</a></li>
                <li><a href="{{ route('life-insurance') }}" alt="Life Insurance Quotes">Life Insurance</a></li>
                <li><a href="{{ route('business-insurance') }}" alt="Business Insurance Quotes">Business Insurance</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="menuOpen">Medical</a>
            <ul class="dropdown-mobile" style="display: none;">
                <li><a href="{{ route('medical-insurance') }}" alt="Medical Insurance Quotes">Medical Insurance</a></li>
                <li><a href="{{ route('funeral-cover') }}" alt="Funeral Cover Quotes">Funeral Cover</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="menuOpen">Finance</a>
            <ul class="dropdown-mobile" style="display: none;">
                <li><a href="{{ route('personal-loans') }}" alt="Personal Loan Quotes">Personal Loans</a></li>
                <li><a href="{{ route('debt-relief') }}" alt="Debt Relief Quotes">Debt Relief</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="menuOpen">Auto</a>
            <ul class="dropdown-mobile" style="display: none;">
                <li><a href="{{ route('car-insurance') }}" alt="Car Insurance">Car Insurance</a></li>
                <li><a href="{{ route('vehicle-tracker') }}" alt="GPS Vehicle Tracking Device Quotes">Vehicle Tracker</a></li>
                <li><a href="{{ route('motor-warranty') }}" alt="Motor Warranty Quotes">Motor Warranty</a></li>
            </ul>
        </li>
        <li><a href="{{ route('about') }}" alt="About Go Quote Rocket">About</a></li>
    </ul>
</div>
