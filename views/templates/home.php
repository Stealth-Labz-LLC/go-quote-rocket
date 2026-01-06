<?php
/**
 * Homepage Template - Vertical Selector
 *
 * Shows all available verticals for user to choose
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $brand['company_name'] ?> - Compare Insurance Quotes & More</title>
    <link rel="stylesheet" href="<?= buildUrl('cdn', '/css/global.css') ?>">
    <style>
        .vertical-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 2rem;
        }
        .vertical-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            color: inherit;
            transition: transform 0.2s;
        }
        .vertical-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
        }
        .hero {
            background: var(--primary);
            color: white;
            padding: 4rem 2rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="hero">
        <h1><?= $brand['company_name'] ?></h1>
        <p>Compare quotes and find the best rates in minutes</p>
    </div>

    <div class="vertical-grid">
        <?php foreach ($verticals as $id => $vertical): ?>
            <a href="<?= buildUrl($vertical['subdomain']) ?>" class="vertical-card">
                <h2><?= $vertical['name'] ?></h2>
                <p><?= $vertical['landing']['tagline'] ?? '' ?></p>
                <button style="margin-top: 1rem; padding: 0.75rem 1.5rem; background: var(--primary); color: white; border: none; border-radius: 6px; cursor: pointer;">
                    Get Quotes →
                </button>
            </a>
        <?php endforeach; ?>
    </div>

    <footer style="text-align: center; padding: 2rem; color: #666;">
        <p>&copy; <?= date('Y') ?> <?= $brand['company_name'] ?>. All rights reserved.</p>
    </footer>
</body>
</html>
