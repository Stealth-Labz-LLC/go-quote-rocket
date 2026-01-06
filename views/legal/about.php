<?php
/**
 * About Us Page
 *
 * Brand-specific about page
 */

use App\Core\View;

// Get brand-specific content
$legal = $brand['legal'] ?? [];
$about = $legal['about'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php View::component('head', [
        'title' => 'About Us - ' . $brand['company_name'],
        'description' => 'Learn more about ' . $brand['company_name'],
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
                <h1 class="legal-content__title">About <?= $brand['company_name'] ?></h1>

                <section class="legal-section">
                    <h2>Who We Are</h2>
                    <p>
                        <?= $about['intro'] ?? $brand['company_name'] . ' is a leading online insurance comparison platform dedicated to helping consumers find the best insurance coverage at competitive rates. We work with top-rated insurance providers across the United States to bring you comprehensive quotes and options tailored to your needs.' ?>
                    </p>
                </section>

                <section class="legal-section">
                    <h2>Our Mission</h2>
                    <p>
                        <?= $about['mission'] ?? 'Our mission is to simplify the insurance shopping experience by providing transparent, easy-to-understand comparisons of insurance products. We believe everyone deserves access to quality insurance coverage without the hassle of contacting multiple providers individually.' ?>
                    </p>
                </section>

                <section class="legal-section">
                    <h2>How We Help You</h2>
                    <p>
                        Through our platform, you can:
                    </p>
                    <ul>
                        <li>Compare quotes from multiple top-rated insurance providers</li>
                        <li>Save time by submitting one simple form instead of contacting multiple companies</li>
                        <li>Access licensed insurance agents who can answer your questions</li>
                        <li>Find coverage options tailored to your specific needs and budget</li>
                        <li>Make informed decisions with educational resources and tools</li>
                    </ul>
                </section>

                <section class="legal-section">
                    <h2>Our Commitment to You</h2>
                    <p>
                        We are committed to:
                    </p>
                    <ul>
                        <li><strong>Transparency:</strong> Clear, honest information about insurance products and pricing</li>
                        <li><strong>Privacy:</strong> Protecting your personal information with industry-standard security measures</li>
                        <li><strong>Quality:</strong> Partnering only with licensed, reputable insurance providers</li>
                        <li><strong>Support:</strong> Providing excellent customer service throughout your insurance journey</li>
                    </ul>
                </section>

                <section class="legal-section">
                    <h2>Important Disclaimer</h2>
                    <p>
                        <?= $brand['company_name'] ?> is not an insurance company or insurance agent. We do not sell, solicit, or negotiate insurance. We provide educational information and comparison tools to help consumers make informed decisions about insurance coverage. All insurance products are provided by licensed third-party insurance carriers.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>Contact Us</h2>
                    <p>
                        We're here to help! If you have questions or need assistance:
                    </p>
                    <ul>
                        <?php if (!empty($brand['phone'])): ?>
                        <li><strong>Phone:</strong> <a href="tel:<?= $brand['phone_tel'] ?>"><?= $brand['phone'] ?></a></li>
                        <?php endif; ?>
                        <?php if (!empty($brand['email'])): ?>
                        <li><strong>Email:</strong> <a href="mailto:<?= $brand['email'] ?>"><?= $brand['email'] ?></a></li>
                        <?php endif; ?>
                    </ul>
                </section>

                <?php if (!empty($about['additional_sections'])): ?>
                    <?php foreach ($about['additional_sections'] as $section): ?>
                        <section class="legal-section">
                            <h2><?= $section['title'] ?></h2>
                            <?= $section['content'] ?>
                        </section>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </main>

    <!-- Footer Component -->
    <?php View::component('footer', ['brand' => $brand]); ?>
</body>
</html>
