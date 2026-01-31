<?php
$queryParams = !empty($_SERVER['QUERY_STRING']) ? "&" . $_SERVER['QUERY_STRING'] : '';
?>

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
            <a href="/"><img src="/images/logo.svg" class="logo" width="506" height="48" alt="Go Quote Rocket Logo"></a>
            <div class="header_right">
                <!--<a href="tel:19049425529">
                    <img src="/images/phone_icon.png" width="58" height="58" alt="icn" class="phone_call">
                    <p class="header_right_txt1">Speak with a Licensed Insurance Agent</p>
                    <p class="header_right_txt2">(904) 942-5529</p>
                    <p class="header_right_txt1">Available: Mon - Sun 9AM - 6PM EST</p>
                </a>-->
            </div>


            <div class="showDesk">
                <ul class="topMenu">
                    <li>
                        <a href="#">Insurance<img src="/images/d_menu_ic.png" class="d_menu_ic" alt="ic" width="22" height="14"></a>
                        <div class="dropMenu">
                            <ul>
                                <li><a href="legal-insurance.php<?= $queryParams ?>" alt="Legal Insurance Quotes">Legal Insurance</a></li>
                                <li><a href="pet-insurance.php<?= $queryParams ?>" alt="Pet Insurance Quotes">Pet Insurance</a></li>
                                <li><a href="life-insurance.php<?= $queryParams ?>" alt="Life Insurance Quotes">Life Insurance</a></li>
                                <li><a href="business-insurance.php<?= $queryParams ?>" alt="Business Insurance Quotes">Business Insurance</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Medical<img src="/images/d_menu_ic.png" class="d_menu_ic" alt="ic" width="22" height="14"></a>
                        <div class="dropMenu">
                            <ul>
                                <li><a href="medical-insurance.php<?= $queryParams ?>" alt="Medical Insurance Quotes">Medical Insurance</a></li>
                                <li><a href="funeral-cover.php<?= $queryParams ?>" alt="Funeral Cover Quotes">Funeral Cover</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Finance<img src="/images/d_menu_ic.png" class="d_menu_ic" alt="ic" width="22" height="14"></a>
                        <div class="dropMenu">
                            <ul>
                                <li><a href="personal-loans.php<?= $queryParams ?>" alt="Personal Loan Quotes">Personal Loans</a></li>
                                <li><a href="debt-relief.php<?= $queryParams ?>" alt="Debt Relief Quotes">Debt Relief</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">Auto<img src="/images/d_menu_ic.png" class="d_menu_ic" alt="ic" width="22" height="14"></a>
                        <div class="dropMenu">
                            <ul>
                                <li><a href="car-insurance.php<?= $queryParams ?>" alt="Car Insurance">Car Insurance</a></li>
                                <li><a href="vehicle-tracker.php<?= $queryParams ?>" alt="GPS Vehicle Tracking Device Quotes">Vehicle Tracker</a></li>
                                <li><a href="motor-warranty.php<?= $queryParams ?>" alt="Motor Warranty Quotes">Motor Warranty</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="about.php<?= $queryParams ?>" alt="About Go Quote Rocket">About</a></li>
                    <li><a href="/articles/" alt="Insurance Articles & Guides">Articles</a></li>
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
                <li><a href="legal-insurance.php<?= $queryParams ?>" alt="Legal Insurance Quotes">Legal Insurance</a></li>
                <li><a href="pet-insurance.php<?= $queryParams ?>" alt="Pet Insurance Quotes">Pet Insurance</a></li>
                <li><a href="life-insurance.php<?= $queryParams ?>" alt="Life Insurance Quotes">Life Insurance</a></li>
                <li><a href="business-insurance.php<?= $queryParams ?>" alt="Business Insurance Quotes">Business Insurance</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="menuOpen">Medical</a>
            <ul class="dropdown-mobile" style="display: none;">
                <li><a href="medical-insurance.php<?= $queryParams ?>" alt="Medical Insurance Quotes">Medical Insurance</a></li>
                <li><a href="funeral-cover.php<?= $queryParams ?>" alt="Funeral Cover Quotes">Funeral Cover</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="menuOpen">Finance</a>
            <ul class="dropdown-mobile" style="display: none;">
                <li><a href="personal-loans.php<?= $queryParams ?>" alt="Personal Loan Quotes">Personal Loans</a></li>
                <li><a href="debt-relief.php<?= $queryParams ?>" alt="Debt Relief Quotes">Debt Relief</a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="menuOpen">Auto</a>
            <ul class="dropdown-mobile" style="display: none;">
                <li><a href="car-insurance.php<?= $queryParams ?>" alt="Car Insurance">Car Insurance</a></li>
                <li><a href="vehicle-tracker.php<?= $queryParams ?>" alt="GPS Vehicle Tracking Device Quotes">Vehicle Tracker</a></li>
                <li><a href="motor-warranty.php<?= $queryParams ?>" alt="Motor Warranty Quotes">Motor Warranty</a></li>
            </ul>
        </li>

        <li><a href="about.php<?= $queryParams ?>" alt="About Go Quote Rocket">About</a></li>
        <li><a href="/articles/" alt="Insurance Articles & Guides">Articles</a></li>
    </ul>

</div>