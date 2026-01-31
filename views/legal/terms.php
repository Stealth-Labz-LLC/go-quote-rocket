<?php
/**
 * Terms of Service Page
 *
 * Brand-specific terms page with shared template structure
 */

use App\Core\View;

// Get brand-specific legal content
$legal = $brand['legal'] ?? [];
$terms = $legal['terms'] ?? [];
$effectiveDate = $terms['effective_date'] ?? date('F j, Y');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php View::component('head', [
        'title' => 'Terms of Service - ' . $brand['company_name'],
        'description' => 'Terms of Service for ' . $brand['company_name'],
        'brand' => $brand
    ]); ?>
</head>
<body class="legal-page">
    <!-- Header Component -->
    <?php View::component('header', ['brand' => $brand]); ?>

    <!-- Legal Content -->
    <main class="legal-content">
        <div class="container-fluid">
            <div class="legal-content__inner">
                <h1 class="legal-content__title">Terms of Service</h1>
                <p class="legal-content__date">Effective Date: <?= $effectiveDate ?></p>

                <section class="legal-section">
                    <h2>1. Acceptance of Terms</h2>
                    <p>
                        By accessing and using <?= $brand['company_name'] ?> ("we," "our," or "us"), you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to these Terms of Service, please do not use our services.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>2. Description of Service</h2>
                    <p>
                        <?= $brand['company_name'] ?> provides an online platform that allows consumers to compare insurance quotes from multiple providers. Our service is designed to help you find competitive rates for various insurance products.
                    </p>
                    <p>
                        We are not an insurance company or insurance agent. We do not sell, solicit, or negotiate insurance. We provide educational information and tools to help consumers compare options from licensed insurance providers.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>3. User Information and Privacy</h2>
                    <p>
                        By submitting your information through our platform, you consent to be contacted by <?= $brand['company_name'] ?> and/or our partner insurance providers via telephone, email, or mail, even if your number appears on any internal, state, or national "Do Not Call" list.
                    </p>
                    <p>
                        Your use of our services is also governed by our <a href="<?= buildUrl('www', '/privacy') ?>">Privacy Policy</a>, which is incorporated into these Terms by reference.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>4. Accuracy of Information</h2>
                    <p>
                        You agree to provide accurate, current, and complete information when using our services. The insurance quotes you receive are based on the information you provide. Inaccurate information may result in incorrect quotes or denial of coverage.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>5. No Guarantee of Coverage or Rates</h2>
                    <p>
                        All insurance quotes displayed are estimates only and are subject to insurance provider review and approval. We do not guarantee that you will be approved for coverage or that the rates shown will be the final rates offered by insurance providers.
                    </p>
                    <p>
                        Not all products are available in all states. Product eligibility varies based on factors including but not limited to resident state, age, gender, and insurance provider underwriting guidelines.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>6. Third-Party Links and Services</h2>
                    <p>
                        Our website may contain links to third-party websites and services. We are not responsible for the content, privacy policies, or practices of third-party sites. Your interactions with third-party insurance providers are governed by their own terms and conditions.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>7. Limitation of Liability</h2>
                    <p>
                        <?= $legal['company_legal_name'] ?? $brand['company_name'] . ' LLC' ?> and its officers, directors, employees, and agents shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of our services.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>8. Modifications to Terms</h2>
                    <p>
                        We reserve the right to modify these Terms of Service at any time. Changes will be effective immediately upon posting to this page. Your continued use of our services after any modifications constitutes acceptance of the updated terms.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>9. Governing Law</h2>
                    <p>
                        These Terms of Service shall be governed by and construed in accordance with the laws of the United States and the state in which <?= $legal['company_legal_name'] ?? $brand['company_name'] . ' LLC' ?> is registered, without regard to its conflict of law provisions.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>10. Contact Information</h2>
                    <p>
                        If you have any questions about these Terms of Service, please contact us:
                    </p>
                    <ul>
                        <?php if (!empty($brand['email'])): ?>
                        <li><strong>Email:</strong> <a href="mailto:<?= $brand['email'] ?>"><?= $brand['email'] ?></a></li>
                        <?php endif; ?>
                        <?php if (!empty($brand['phone'])): ?>
                        <li><strong>Phone:</strong> <a href="tel:<?= $brand['phone_tel'] ?>"><?= $brand['phone'] ?></a></li>
                        <?php endif; ?>
                        <?php if (!empty($legal['address'])): ?>
                        <li><strong>Address:</strong> <?= nl2br($legal['address']) ?></li>
                        <?php endif; ?>
                    </ul>
                </section>

                <?php if (!empty($terms['additional_sections'])): ?>
                    <?php foreach ($terms['additional_sections'] as $section): ?>
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
