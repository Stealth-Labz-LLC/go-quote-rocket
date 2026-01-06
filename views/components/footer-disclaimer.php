<?php
/**
 * Footer Disclaimer Component
 *
 * Legal disclaimer text for insurance funnel landing pages
 * Can be customized per brand in config/brands.php
 */

// Get disclaimer from brand config or use default
$disclaimer = $brand['footer_disclaimer_legal'] ?? null;

// Default disclaimer if not set in brand config
if (!$disclaimer) {
    $disclaimer = [
        'paragraph_1' => $brand['company_name'] . ' provides educational information and tools to help consumers compare insurance options from licensed providers across all 50 U.S. states, including Washington, D.C. The insurance quotes shown are non-binding and subject to provider review and approval. Not all products are available in all states. Product eligibility varies based on factors such as resident state, age, gender, and each provider\'s medical underwriting guidelines. Plans with no waiting period require medical approval and are subject to the insurer\'s incontestability period. Guaranteed acceptance plans with no health questions include a waiting period defined by the insurer before benefits become payable.',
        'paragraph_2' => 'By submitting your information, you agree to be contacted by ' . $brand['company_name'] . ' or its partners, even if your number appears on any internal, state, or national "Do Not Call" list. This website is intended for U.S. persons only. The information provided does not constitute an advertisement, solicitation, or offer for sale in any jurisdiction outside the United States.'
    ];
}
?>

<!-- Legal Disclaimer -->
<div class="footer-disclaimer">
    <?php if (is_array($disclaimer)): ?>
        <?php foreach ($disclaimer as $paragraph): ?>
            <p><?= $paragraph ?></p>
        <?php endforeach; ?>
    <?php else: ?>
        <p><?= $disclaimer ?></p>
    <?php endif; ?>
</div>
