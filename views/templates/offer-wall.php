<?php
/**
 * Universal Offer Wall Template
 *
 * Works for ALL verticals - displays carriers from config
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
    <title>Your <?= $v['name'] ?> Quotes | <?= $b['company_name'] ?></title>

    <!-- Fonts -->
    <link href="<?= $b['fonts']['google_url'] ?>" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="<?= buildUrl('cdn', '/css/global.css') ?>">
    <style>
        .offer-wall-header {
            background: var(--primary);
            color: white;
            padding: 2rem 0;
            text-align: center;
        }
        .carrier-grid {
            display: grid;
            gap: 1.5rem;
            max-width: 1000px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        .carrier-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .carrier-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .carrier-name {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-primary);
        }
        .carrier-rating {
            background: var(--success);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-weight: 600;
        }
        .carrier-highlights {
            list-style: none;
            padding: 0;
        }
        .carrier-highlights li {
            padding: 0.5rem 0;
            padding-left: 1.5rem;
            position: relative;
        }
        .carrier-highlights li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--success);
            font-weight: bold;
        }
        .carrier-cta {
            margin-top: auto;
        }
    </style>

    <!-- Tracking -->
    <?php if (isset($t['gtm'][$v['id']])): ?>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?= $t['gtm'][$v['id']] ?>');</script>
    <?php endif; ?>

    <!-- Everflow SDK -->
    <?php if (isset($t['everflow'])): ?>
    <script src="<?= $t['everflow']['sdk_url'] ?>" data-nid="<?= $t['everflow']['network_id'] ?>"></script>
    <?php endif; ?>
</head>
<body>
    <!-- GTM noscript -->
    <?php if (isset($t['gtm'][$v['id']])): ?>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $t['gtm'][$v['id']] ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <?php endif; ?>

    <!-- Header -->
    <div class="offer-wall-header">
        <h1>Great News! You Have <?= count($carriers) ?> Matches</h1>
        <p style="font-size: 1.125rem; margin-top: 0.5rem;">Compare your personalized <?= strtolower($v['name']) ?> quotes below</p>
    </div>

    <!-- Carriers -->
    <div class="carrier-grid">
        <?php foreach ($carriers as $carrier): ?>
        <div class="carrier-card">
            <div class="carrier-header">
                <div class="carrier-name"><?= $carrier['name'] ?></div>
                <?php if (isset($carrier['rating'])): ?>
                <div class="carrier-rating"><?= $carrier['rating'] ?></div>
                <?php endif; ?>
            </div>

            <?php if (isset($carrier['highlights']) && !empty($carrier['highlights'])): ?>
            <ul class="carrier-highlights">
                <?php foreach ($carrier['highlights'] as $highlight): ?>
                <li><?= $highlight ?></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>

            <div class="carrier-cta">
                <?php
                $carrierUrl = \App\Models\Vertical::getCarrierUrl($v['id'], $carrier['url_key'], [
                    'transaction_id' => $_GET['transaction_id'] ?? '',
                    'aff_id' => $_GET['aff_id'] ?? ''
                ]);
                ?>
                <a href="<?= $carrierUrl ?>"
                   class="btn btn-primary btn-lg"
                   style="width: 100%; text-align: center;"
                   onclick="trackCarrierClick('<?= $carrier['id'] ?>')">
                    Get Quote from <?= $carrier['name'] ?>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Footer -->
    <footer style="background: #1f2937; color: white; padding: 2rem 0; text-align: center; margin-top: 3rem;">
        <p>&copy; <?= date('Y') ?> <?= $b['company_name'] ?>. All rights reserved.</p>
    </footer>

    <script>
        function trackCarrierClick(carrierId) {
            // Fire Everflow event
            <?php if (isset($t['everflow']) && isset($t['everflow']['event_ids']['offer_click'])): ?>
            if (typeof EF !== 'undefined') {
                fetch(`<?= $t['everflow']['pixel_url'] ?>?nid=<?= $t['everflow']['network_id'] ?>&event_id=<?= $t['everflow']['event_ids']['offer_click'] ?>&transaction_id=${EF.urlParameter('transaction_id') || ''}`);
            }
            <?php endif; ?>

            // GTM event
            if (typeof dataLayer !== 'undefined') {
                dataLayer.push({
                    event: 'carrier_click',
                    carrier_id: carrierId
                });
            }
        }
    </script>
</body>
</html>
