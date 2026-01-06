<?php
/**
 * Footer Component - Simplified
 *
 * Minimal footer with logo, contact info, and legal links
 */

use App\Core\View;

// Preserve query parameters for navigation links
$queryParams = !empty($_SERVER['QUERY_STRING']) ? "?" . $_SERVER['QUERY_STRING'] : '';
?>

<div class="info-sec">
    <div class="container">
        <div class="info-sec-inr">
            <!-- Company Info Column -->
            <div class="info-sec-col">
                <img src="<?= $brand['logo']['main'] ?>"
                     alt="<?= $brand['company_name'] ?> Logo"
                     class="info-sec-log"
                     width="<?= $brand['logo']['width'] ?? '253px' ?>"
                     height="48">

                <div class="info-sec-contacts">
                    <?php if (!empty($brand['phone'])): ?>
                    <p class="contact_info">
                        <svg class="contact_info__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <a href="tel:<?= $brand['phone_tel'] ?>" class="contact_info__link">
                            <?= $brand['phone'] ?>
                        </a>
                    </p>
                    <?php endif; ?>

                    <?php if (!empty($brand['email'])): ?>
                    <p class="contact_info">
                        <svg class="contact_info__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                        <a href="mailto:<?= $brand['email'] ?>" class="contact_info__link">
                            <?= $brand['email'] ?>
                        </a>
                    </p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Legal Disclaimer Component -->
            <?php View::component('footer-disclaimer', ['brand' => $brand]); ?>
        </div>
    </div>
</div>

<!-- Legal Footer -->
<div class="footer">
    <div class="container">
        <div class="footer__inner">
            <p class="footer__text footer__text--1">
                © <?= date('Y') ?> <?= $brand['legal']['company_legal_name'] ?? $brand['company_name'] . ' LLC' ?> | All Rights Reserved
            </p>
            <p class="footer__text footer__text--2">
                <a href="<?= buildUrl('www', '/contact' . $queryParams) ?>" alt="Contact <?= $brand['company_name'] ?>">Contact</a> |
                <a href="<?= buildUrl('www', '/about' . $queryParams) ?>" alt="About <?= $brand['company_name'] ?>">About</a> |
                <a href="<?= buildUrl('www', '/terms' . $queryParams) ?>" alt="Terms of Service">Terms</a> |
                <a href="<?= buildUrl('www', '/privacy' . $queryParams) ?>" alt="Privacy Policy">Privacy</a>
            </p>
        </div>
    </div>
</div>
