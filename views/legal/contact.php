<?php
/**
 * Contact Us Page
 *
 * Brand-specific contact page
 */

use App\Core\View;

// Get brand-specific content
$legal = $brand['legal'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php View::component('head', [
        'title' => 'Contact Us - ' . $brand['company_name'],
        'description' => 'Get in touch with ' . $brand['company_name'],
        'brand' => $brand
    ]); ?>
</head>
<body class="legal-page">
    <!-- Header Component -->
    <?php View::component('header', ['brand' => $brand]); ?>

    <!-- Legal Content -->
    <main class="legal-content">
        <div class="container">
            <div class="legal-content__inner">
                <h1 class="legal-content__title">Contact Us</h1>

                <section class="legal-section">
                    <p>
                        Have questions or need assistance? Our team is here to help you find the right insurance coverage for your needs.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>Get In Touch</h2>

                    <?php if (!empty($brand['phone'])): ?>
                    <div class="contact-method">
                        <h3>
                            <svg class="contact-method__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            Phone
                        </h3>
                        <p>
                            Speak with a licensed insurance agent:<br>
                            <a href="tel:<?= $brand['phone_tel'] ?>" class="contact-method__link"><?= $brand['phone'] ?></a>
                        </p>
                        <p class="contact-method__hours">
                            <?= $legal['phone_hours'] ?? 'Monday - Friday: 9:00 AM - 6:00 PM EST' ?>
                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if (!empty($brand['email'])): ?>
                    <div class="contact-method">
                        <h3>
                            <svg class="contact-method__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                            Email
                        </h3>
                        <p>
                            Send us an email and we'll respond within 24 hours:<br>
                            <a href="mailto:<?= $brand['email'] ?>" class="contact-method__link"><?= $brand['email'] ?></a>
                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if (!empty($legal['address'])): ?>
                    <div class="contact-method">
                        <h3>
                            <svg class="contact-method__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            Mailing Address
                        </h3>
                        <p>
                            <?= nl2br($legal['address']) ?>
                        </p>
                    </div>
                    <?php endif; ?>
                </section>

                <section class="legal-section">
                    <h2>Frequently Asked Questions</h2>
                    <div class="faq-item">
                        <h3>How does <?= $brand['company_name'] ?> work?</h3>
                        <p>
                            We provide a free comparison service that connects you with licensed insurance providers. Simply fill out one form, and we'll match you with multiple carriers who can provide competitive quotes.
                        </p>
                    </div>

                    <div class="faq-item">
                        <h3>Is there any cost to use your service?</h3>
                        <p>
                            No, our comparison service is completely free. There is no obligation to purchase any insurance product.
                        </p>
                    </div>

                    <div class="faq-item">
                        <h3>Are the quotes binding?</h3>
                        <p>
                            No, all quotes are estimates based on the information you provide. Final rates are determined by the insurance provider after review and approval.
                        </p>
                    </div>

                    <div class="faq-item">
                        <h3>How is my information used?</h3>
                        <p>
                            Your information is shared with licensed insurance providers so they can provide you with accurate quotes. For more details, please review our <a href="<?= buildUrl('www', '/privacy') ?>">Privacy Policy</a>.
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!-- Footer Component -->
    <?php View::component('footer', ['brand' => $brand]); ?>
</body>
</html>
