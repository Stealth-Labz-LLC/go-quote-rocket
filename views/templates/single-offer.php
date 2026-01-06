<?php
/**
 * Universal Single Offer Wall Template
 *
 * Works for ALL verticals - displays single best carrier from config
 */
$v = $vertical;
$b = $brand;
$t = $tracking;

// Get the first carrier as the "best match"
$carrier = !empty($carriers) ? reset($carriers) : null;

if (!$carrier) {
    header('Location: /owl');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Best <?= $v['name'] ?> Match | <?= $b['company_name'] ?></title>

    <!-- Fonts -->
    <link href="<?= $b['fonts']['google_url'] ?>" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="<?= buildUrl('cdn', '/css/global.css') ?>">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }
        .single-offer-container {
            max-width: 600px;
            width: 100%;
        }
        .congrats-header {
            text-align: center;
            color: white;
            margin-bottom: 2rem;
        }
        .congrats-header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        .congrats-header p {
            font-size: 1.25rem;
            opacity: 0.9;
        }
        .carrier-card {
            background: white;
            border-radius: 16px;
            padding: 3rem 2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .best-match-badge {
            background: linear-gradient(90deg, #fbbf24, #f59e0b);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.875rem;
            display: inline-block;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .carrier-logo {
            max-width: 200px;
            height: auto;
            margin: 1rem auto;
        }
        .carrier-name {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-primary);
            margin: 1rem 0;
        }
        .carrier-rating {
            background: #10b981;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 700;
            font-size: 1.125rem;
            display: inline-block;
            margin: 1rem 0;
        }
        .carrier-highlights {
            list-style: none;
            padding: 0;
            margin: 2rem 0;
            text-align: left;
        }
        .carrier-highlights li {
            padding: 0.75rem 0;
            padding-left: 2rem;
            position: relative;
            font-size: 1.125rem;
        }
        .carrier-highlights li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #10b981;
            font-weight: bold;
            font-size: 1.5rem;
        }
        .cta-button {
            background: linear-gradient(90deg, #10b981, #059669);
            color: white;
            padding: 1.25rem 3rem;
            border-radius: 50px;
            font-size: 1.25rem;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            margin-top: 1.5rem;
            box-shadow: 0 10px 20px rgba(16, 185, 129, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(16, 185, 129, 0.4);
        }
        .secondary-link {
            margin-top: 1.5rem;
            text-align: center;
        }
        .secondary-link a {
            color: white;
            text-decoration: none;
            opacity: 0.8;
            font-size: 0.9rem;
        }
        .secondary-link a:hover {
            opacity: 1;
            text-decoration: underline;
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

    <div class="single-offer-container">
        <div class="congrats-header">
            <h1>🎉 Congratulations!</h1>
            <p>We found your perfect <?= strtolower($v['name']) ?> match</p>
        </div>

        <div class="carrier-card">
            <div class="best-match-badge">✨ Best Match For You</div>

            <?php if (isset($carrier['logo'])): ?>
            <img src="<?= buildUrl('cdn', '/images/carriers/' . $carrier['logo']) ?>"
                 alt="<?= $carrier['name'] ?>"
                 class="carrier-logo">
            <?php endif; ?>

            <div class="carrier-name"><?= $carrier['name'] ?></div>

            <?php if (isset($carrier['rating'])): ?>
            <div class="carrier-rating"><?= $carrier['rating'] ?> Rating</div>
            <?php endif; ?>

            <?php if (isset($carrier['highlights']) && !empty($carrier['highlights'])): ?>
            <ul class="carrier-highlights">
                <?php foreach ($carrier['highlights'] as $highlight): ?>
                <li><?= $highlight ?></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>

            <?php
            $carrierUrl = \App\Models\Vertical::getCarrierUrl($v['id'], $carrier['url_key'], [
                'transaction_id' => $_GET['transaction_id'] ?? '',
                'aff_id' => $_GET['aff_id'] ?? ''
            ]);
            ?>
            <a href="<?= $carrierUrl ?>"
               class="cta-button"
               onclick="trackCarrierClick('<?= $carrier['id'] ?>')">
                Get My Quote from <?= $carrier['name'] ?> →
            </a>
        </div>

        <div class="secondary-link">
            <a href="/owl">Want to see more options? View all matches →</a>
        </div>
    </div>

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
                    carrier_id: carrierId,
                    offer_type: 'single'
                });
            }
        }
    </script>
</body>
</html>
