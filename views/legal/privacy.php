<?php
/**
 * Privacy Policy Page
 *
 * Brand-specific privacy policy with shared template structure
 */

use App\Core\View;

// Get brand-specific legal content
$legal = $brand['legal'] ?? [];
$privacy = $legal['privacy'] ?? [];
$effectiveDate = $privacy['effective_date'] ?? date('F j, Y');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php View::component('head', [
        'title' => 'Privacy Policy - ' . $brand['company_name'],
        'description' => 'Privacy Policy for ' . $brand['company_name'],
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
                <h1 class="legal-content__title">Privacy Policy</h1>
                <p class="legal-content__date">Effective Date: <?= $effectiveDate ?></p>

                <section class="legal-section">
                    <h2>1. Information We Collect</h2>
                    <p>
                        When you use <?= $brand['company_name'] ?>, we collect information that you voluntarily provide to us, including:
                    </p>
                    <ul>
                        <li>Personal information (name, email address, phone number, date of birth)</li>
                        <li>Address and ZIP code</li>
                        <li>Insurance-related information (current coverage, coverage preferences)</li>
                        <li>Other information necessary to provide you with insurance quotes</li>
                    </ul>
                    <p>
                        We also automatically collect certain technical information when you visit our website, including IP address, browser type, device information, and usage data through cookies and similar technologies.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>2. How We Use Your Information</h2>
                    <p>
                        We use the information we collect to:
                    </p>
                    <ul>
                        <li>Provide you with insurance quotes from our partner providers</li>
                        <li>Connect you with licensed insurance agents and carriers</li>
                        <li>Improve our services and user experience</li>
                        <li>Send you relevant communications about insurance products</li>
                        <li>Comply with legal obligations and protect our rights</li>
                    </ul>
                </section>

                <section class="legal-section">
                    <h2>3. Information Sharing and Disclosure</h2>
                    <p>
                        We share your information with:
                    </p>
                    <ul>
                        <li><strong>Insurance Providers:</strong> Licensed insurance companies and agents who can provide you with quotes and coverage options</li>
                        <li><strong>Service Providers:</strong> Third-party vendors who help us operate our business</li>
                        <li><strong>Legal Compliance:</strong> When required by law or to protect our rights</li>
                    </ul>
                    <p>
                        By submitting your information, you consent to be contacted by <?= $brand['company_name'] ?> and our partner providers via telephone, email, or mail, even if your number is on a "Do Not Call" list.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>4. Cookies and Tracking Technologies</h2>
                    <p>
                        We use cookies, web beacons, and similar technologies to collect information about your browsing activities and to improve our services. You can control cookie preferences through your browser settings, though disabling cookies may limit certain features of our website.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>5. Data Security</h2>
                    <p>
                        We implement reasonable security measures to protect your personal information from unauthorized access, disclosure, alteration, or destruction. However, no internet transmission is completely secure, and we cannot guarantee absolute security.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>6. Your Privacy Rights</h2>
                    <p>
                        Depending on your state of residence, you may have certain rights regarding your personal information, including:
                    </p>
                    <ul>
                        <li>Right to access and review your personal information</li>
                        <li>Right to request deletion of your personal information</li>
                        <li>Right to opt-out of certain data sharing</li>
                        <li>Right to correct inaccurate information</li>
                    </ul>
                    <p>
                        To exercise these rights, please contact us using the information provided below.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>7. California Privacy Rights (CCPA)</h2>
                    <p>
                        California residents have additional rights under the California Consumer Privacy Act (CCPA), including the right to know what personal information we collect, the right to delete personal information, and the right to opt-out of the sale of personal information.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>8. Children's Privacy</h2>
                    <p>
                        Our services are not directed to individuals under the age of 18. We do not knowingly collect personal information from children under 18. If you believe we have collected information from a child, please contact us immediately.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>9. Changes to This Privacy Policy</h2>
                    <p>
                        We may update this Privacy Policy from time to time. We will notify you of any material changes by posting the new Privacy Policy on this page and updating the effective date.
                    </p>
                </section>

                <section class="legal-section">
                    <h2>10. Contact Us</h2>
                    <p>
                        If you have questions about this Privacy Policy or wish to exercise your privacy rights, please contact us:
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

                <?php if (!empty($privacy['additional_sections'])): ?>
                    <?php foreach ($privacy['additional_sections'] as $section): ?>
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
