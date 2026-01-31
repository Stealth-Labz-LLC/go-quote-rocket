<?php
/**
 * Universal Flow Template - Questionnaire
 *
 * Works for ALL verticals - renders questions from config
 */
$v = $vertical;
$b = $brand;
$t = $tracking;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title><?= $v['flow']['page_title'] ?? $v['flow']['title'] ?> | <?= $b['company_name'] ?></title>

    <!-- Fonts -->
    <link href="<?= $b['fonts']['google_url'] ?>" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= $b['logo']['favicon'] ?? buildUrl('cdn', '/images/brand/favicon.png') ?>">

    <!-- Styles -->
    <!-- Core -->
    <link rel="stylesheet" href="<?= buildUrl('cdn', '/css/core/reset.css') ?>">
    <link rel="stylesheet" href="<?= buildUrl('cdn', '/css/core/tokens.css') ?>">
    <link rel="stylesheet" href="<?= buildUrl('cdn', '/css/core/typography.css') ?>">
    <link rel="stylesheet" href="<?= buildUrl('cdn', '/css/core/layout.css') ?>">
    <link rel="stylesheet" href="<?= buildUrl('cdn', '/css/core/utilities.css') ?>">
    <!-- Components -->
    <link rel="stylesheet" href="<?= buildUrl('cdn', '/css/components/buttons.css') ?>">
    <link rel="stylesheet" href="<?= buildUrl('cdn', '/css/components/forms.css') ?>">
    <link rel="stylesheet" href="<?= buildUrl('cdn', '/css/components/header.css') ?>">
    <link rel="stylesheet" href="<?= buildUrl('cdn', '/css/components/footer.css') ?>">
    <!-- Funnel -->
    <link rel="stylesheet" href="<?= buildUrl('cdn', '/css/funnel.css') ?>">
    <link rel="stylesheet" href="<?= buildUrl('cdn', '/css/slick.css') ?>">

    <!-- Tracking - GTM -->
    <?php if (!empty($t['gtm'][$v['id']])): ?>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?= $t['gtm'][$v['id']] ?>');</script>
    <?php endif; ?>
</head>
<body class="flow-page">
    <!-- GTM noscript -->
    <?php if (!empty($t['gtm'][$v['id']])): ?>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $t['gtm'][$v['id']] ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <?php endif; ?>

    <!-- Header Component -->
    <?php
    use App\Core\View;
    View::component('header', ['brand' => $b]);
    ?>

    <!-- Progress Bar -->
    <div class="progress-wrapper">
        <div class="progress-bar-bg">
            <div class="progress-bar" id="progressBar" style="width: 0%;"></div>
        </div>
        <?php if (isset($v['flow']['show_progress_percentage']) && $v['flow']['show_progress_percentage']): ?>
        <div class="progress-percentage" id="progressPercentage">0%</div>
        <?php endif; ?>
    </div>

    <!-- Main Funnel -->
    <main class="funnel-main">
        <div class="container" style="max-width: 700px; margin: 0 auto; padding: 2rem 1rem;">
            <h1 class="funnel-title text-center"><?= $v['flow']['title'] ?></h1>

            <form id="funnelForm" class="funnel-form">
                <!-- Question Container (populated by JavaScript) -->
                <div id="questionContainer" class="question-container"></div>

                <!-- Hidden Tracking Fields -->
                <input type="hidden" name="vertical" value="<?= $v['id'] ?>">
                <input type="hidden" name="offer_id" value="<?= $v['flow']['offer_id'] ?>">
                <input type="hidden" name="aff_id" value="<?= $_GET['aff_id'] ?? '' ?>">
                <input type="hidden" name="aff_sub" value="<?= $_GET['aff_sub'] ?? '' ?>">
                <input type="hidden" name="aff_sub2" value="<?= $_GET['aff_sub2'] ?? '' ?>">
                <input type="hidden" name="transaction_id" value="<?= $_GET['transaction_id'] ?? uniqid('txn_') ?>">

                <!-- Navigation Buttons -->
                <div class="funnel-navigation">
                    <div class="prev-wrapper" id="prevBtn">
                        <img src="<?= buildUrl('cdn', '/images/left-arrow.png') ?>" alt="">
                        <div class="cPointer">
                            <span>Previous</span>
                        </div>
                    </div>
                    <div class="next-wrapper vibible_button" id="nextBtn">
                        <div class="cPointer">
                            <span>Continue</span>
                        </div>
                        <img src="<?= buildUrl('cdn', '/images/right-arrow.png') ?>" alt="">
                    </div>
                </div>
            </form>

            <!-- Carrier Logos Strip -->
            <?php
            use App\Models\Carrier;
            $funnelCarriers = Carrier::getForVertical($v['id'], 5);
            ?>
            <?php if (!empty($funnelCarriers)): ?>
            <div class="funnel-carriers">
                <p class="funnel-carriers__label">Comparing rates from top providers:</p>
                <div class="funnel-carriers__logos">
                    <?php foreach ($funnelCarriers as $carrier): ?>
                    <img src="<?= Carrier::getLogoUrl($carrier['id'], 'color') ?>"
                         alt="<?= $carrier['name'] ?>"
                         class="funnel-carriers__logo">
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

            <!-- Trust Symbols Bar -->
            <div class="funnel-trust">
                <div class="funnel-trust__item">
                    <svg class="funnel-trust__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                    <span class="funnel-trust__text">Secure Form</span>
                </div>
                <div class="funnel-trust__item">
                    <svg class="funnel-trust__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"></path>
                        <path d="m9 12 2 2 4-4"></path>
                    </svg>
                    <span class="funnel-trust__text">SSL Encrypted</span>
                </div>
                <div class="funnel-trust__item">
                    <svg class="funnel-trust__icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                        <path d="m9 12 2 2 4-4"></path>
                    </svg>
                    <span class="funnel-trust__text">No Commitment Required</span>
                </div>
            </div>
        </div>
    </main>

    <!-- Loading Modal -->
    <div id="loadingModal" class="loading-modal" style="display: none;">
        <div class="loading-content">
            <h2 class="loading-title">Sit tight <span id="userName"></span> while we secure your <strong>free quotes</strong>...</h2>
            <ul class="loading-steps">
                <li id="step1">
                    <span class="status-dot loading"></span>
                    <span class="status-text">Analyzing your information...</span>
                </li>
                <li id="step2">
                    <span class="status-dot loading"></span>
                    <span class="status-text">Comparing quotes from top providers...</span>
                </li>
                <li id="step3">
                    <span class="status-dot loading"></span>
                    <span class="status-text">Finding your best rates...</span>
                </li>
                <li id="step4" class="final-step">
                    <span class="status-dot final-dot"></span>
                    <span class="final-check-text">Complete! Your personalized matches are ready.</span>
                </li>
            </ul>
            <div class="loading-progress">
                <div class="progress-bar-loading"></div>
            </div>
            <div class="secure-message">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
                Your data is <span>encrypted</span> and kept <span>confidential</span>.
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="<?= buildUrl('cdn', '/js/FunnelEngine.js') ?>"></script>
    <script>
        // Initialize Funnel Engine
        const funnelConfig = {
            vertical: '<?= $v['id'] ?>',
            questions: <?= json_encode($v['flow']['questions']) ?>,
            progressLabels: <?= json_encode($v['flow']['progress_labels'] ?? []) ?>,
            apiEndpoint: '<?= buildUrl('api', '/submit.php') ?>',
            redirectUrl: '<?= buildUrl('www', '/' . ($v['flow']['redirect_type'] ?? 'owl') . '?vertical=' . $v['id']) ?>',
            tracking: <?= json_encode($v['tracking'] ?? []) ?>,
            loadingMessages: <?= json_encode($v['flow']['loading_modal']['messages'] ?? [
                'Analyzing your information...',
                'Comparing quotes from top providers...',
                'Finding your best rates...',
                'Complete! Your matches are ready.'
            ]) ?>
        };

        const funnel = new FunnelEngine(funnelConfig);
        funnel.init();
    </script>

    <!-- Footer Component -->
    <?php View::component('footer', ['brand' => $b]); ?>

    <!-- Menu JavaScript -->
    <script src="<?= buildUrl('cdn', '/js/menu.js') ?>"></script>
</body>
</html>
