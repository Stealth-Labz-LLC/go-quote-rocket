<?php
/**
 * Universal Landing Page Template
 *
 * Works for ALL verticals - reads content from $vertical config
 */
$v = $vertical; // Shorthand
$b = $brand;
$queryString = $queryString ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $v['landing']['page_title'] ?? $v['name'] . ' | ' . $b['company_name'] ?></title>
    <meta name="description" content="<?= $v['landing']['meta_description'] ?? '' ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<?= $b['fonts']['google_url'] ?>" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= $b['logo']['favicon'] ?? buildUrl('cdn', '/images/brand/favicon.png') ?>">

    <!-- Brand CSS Variables (Inline Injection) -->
    <style>
    :root {
        --injected-primary: <?= $b['colors']['primary'] ?>;
        --injected-secondary: <?= $b['colors']['secondary'] ?>;
        --injected-accent: <?= $b['colors']['accent'] ?>;
        --injected-success: <?= $b['colors']['success'] ?>;
        --injected-error: <?= $b['colors']['error'] ?? '#DC2626' ?>;
        --injected-warning: <?= $b['colors']['warning'] ?? '#ffc107' ?>;
        --injected-text: <?= $b['colors']['text_primary'] ?>;
        --injected-text-secondary: <?= $b['colors']['text_secondary'] ?>;
        --injected-text-light: <?= $b['colors']['text_light'] ?? '#a8b0c1' ?>;
        --injected-bg-light: <?= $b['colors']['bg_light'] ?>;
        --injected-bg-dark: <?= $b['colors']['bg_dark'] ?>;
        --injected-border: <?= $b['colors']['border'] ?>;
        --injected-font-primary: <?= $b['fonts']['family'] ?>;
        --injected-font-secondary: '<?= $b['fonts']['secondary'] ?>', <?= $b['fonts']['family'] ?>;
    }
    </style>

    <!-- Styles -->
    <link rel="stylesheet" href="<?= buildUrl('cdn', '/css/style.css') ?>">
    <link rel="stylesheet" href="<?= buildUrl('cdn', '/css/slick.css') ?>">

    <!-- Tracking -->
    <?php if (isset($tracking['gtm'][$v['id']])): ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?= $tracking['gtm'][$v['id']] ?>');</script>
    <?php endif; ?>
</head>
<body class="landing-page">
    <!-- GTM noscript -->
    <?php if (isset($tracking['gtm'][$v['id']])): ?>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $tracking['gtm'][$v['id']] ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <?php endif; ?>

    <!-- Header Component -->
    <?php
    use App\Core\View;
    View::component('header', ['brand' => $b]);
    ?>

    <!-- Hero Section -->
    <section class="hero hero--<?= $v['id'] ?>">
        <div class="container">
            <div class="hero__content">
                <!-- Rating Badge -->
                <div class="hero__badge">
                    <span class="hero__badge-stars">★★★★★</span>
                    <span class="hero__badge-text">4.8 stars 2,000+ reviews</span>
                </div>

                <!-- Main Headline -->
                <h1 class="hero__heading">
                    <?= $v['landing']['headline'] ?>
                </h1>

                <!-- Subheadline -->
                <p class="hero__subheading">
                    <?= $v['landing']['subheadline'] ?>
                </p>

                <!-- CTA Button -->
                <div class="hero__cta">
                    <a href="<?= buildUrl('www', '/flow?vertical=' . $v['id'] . ($queryString ? '&' . ltrim($queryString, '?') : '')) ?>" class="btn btn--primary btn--lg">
                        <?= $v['landing']['cta_text'] ?>
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="hero__trust">
                    <div class="hero__trust-item">
                        <span class="hero__trust-icon">✓</span>
                        100% SECURE FORM
                    </div>
                    <div class="hero__trust-item">
                        <span class="hero__trust-icon">✓</span>
                        NO COMMITMENT REQUIRED
                    </div>
                </div>

                <!-- Phone Section -->
                <?php if (isset($v['landing']['show_phone']) && $v['landing']['show_phone']): ?>
                <div class="hero__phone">
                    <p class="hero__phone-label">Or speak with a licensed agent</p>
                    <a href="tel:<?= $b['phone_tel'] ?>" class="hero__phone-number">
                        <?= $b['phone'] ?>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <?php if (isset($v['landing']['benefits']) && !empty($v['landing']['benefits'])): ?>
    <section class="features">
        <div class="container">
            <div class="features__grid">
                <?php foreach ($v['landing']['benefits'] as $benefit): ?>
                <div class="feature-card">
                    <?php
                    // Support both old string format and new array format
                    $icon = is_array($benefit) ? $benefit['icon'] : 'check-circle';
                    $text = is_array($benefit) ? $benefit['text'] : $benefit;
                    ?>
                    <svg class="feature-card__icon" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <?php
                        // Lucide icon SVG paths
                        switch($icon) {
                            case 'search':
                                echo '<circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.35-4.35"></path>';
                                break;
                            case 'piggy-bank':
                                echo '<path d="M19 5c-1.5 0-2.8 1.4-3 2-3.5-1.5-11-.3-11 5 0 1.8 0 3 2 4.5V20h4v-2h3v2h4v-4c1-.5 1.7-1 2-2h2v-4h-2c0-1-.5-1.5-1-2h0V5z"></path><path d="M2 9v1c0 1.1.9 2 2 2h1"></path><path d="M16 11h0"></path>';
                                break;
                            case 'zap':
                                echo '<path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"></path>';
                                break;
                            case 'shield-check':
                                echo '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"></path><path d="m9 12 2 2 4-4"></path>';
                                break;
                            case 'headset':
                                echo '<path d="M3 11h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5Zm0 0a9 9 0 1 1 18 0m0 0v5a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3Z"></path><path d="M21 16v2a4 4 0 0 1-4 4h-5"></path>';
                                break;
                            default:
                                echo '<path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path><path d="m9 12 2 2 4-4"></path>';
                        }
                        ?>
                    </svg>
                    <p class="feature-card__text"><?= $text ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Carrier Strip -->
    <?php
    use App\Models\Carrier;
    $carriers = Carrier::getForVertical($v['id'], 6);
    ?>
    <?php if (!empty($carriers)): ?>
    <section class="carrier-strip">
        <div class="container">
            <p class="carrier-strip__heading">
                Compare rates from top providers, including:
            </p>
            <div class="carrier-strip__logos">
                <?php foreach ($carriers as $carrier): ?>
                <img src="<?= Carrier::getLogoUrl($carrier['id'], 'color') ?>"
                     alt="<?= $carrier['name'] ?>"
                     class="carrier-strip__logo">
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Testimonial Section -->
    <?php if (isset($v['landing']['testimonial'])): ?>
    <section class="testimonials">
        <div class="container">
            <div class="testimonial-card">
                <div class="testimonial-card__stars">★★★★★</div>
                <blockquote class="testimonial-card__quote">
                    "<?= $v['landing']['testimonial']['quote'] ?>"
                </blockquote>
                <p class="testimonial-card__author">
                    — <?= $v['landing']['testimonial']['author'] ?>
                    <?php if (isset($v['landing']['testimonial']['location'])): ?>
                    , <?= $v['landing']['testimonial']['location'] ?>
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Final CTA Section -->
    <section class="cta-banner">
        <div class="container">
            <h2 class="cta-banner__heading">
                Ready to <?= strtolower($v['action_verb'] ?? 'get started') ?>?
            </h2>
            <p class="cta-banner__text">
                Compare rates from top providers in minutes
            </p>
            <div class="cta-banner__action">
                <a href="/flow?<?= $queryString ?>" class="btn btn--secondary btn--lg">
                    <?= $v['landing']['cta_text'] ?>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer Component -->
    <?php View::component('footer', ['brand' => $b]); ?>

    <!-- JavaScript -->
    <script src="<?= buildUrl('cdn', '/js/jquery-3.6.0.min.js') ?>"></script>
    <script>window.$ = window.jQuery;</script>
    <script src="<?= buildUrl('cdn', '/js/slick.js') ?>"></script>
    <script src="<?= buildUrl('cdn', '/js/menu.js') ?>"></script>
    <script src="<?= buildUrl('cdn', '/js/faq.js') ?>"></script>
</body>
</html>
