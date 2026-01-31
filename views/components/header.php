<?php
/**
 * Header Component - Simple Layout
 *
 * Logo on left, insurance agent contact on right
 */
?>

<header class="site-header">
    <div class="container-fluid">
        <div class="site-header__inner">
            <!-- Logo -->
            <div class="site-header__logo">
                <a href="<?= buildUrl('www', '/') ?>">
                    <img src="<?= $brand['logo']['main'] ?>"
                         alt="<?= $brand['company_name'] ?> Logo"
                         class="logo">
                </a>
            </div>

            <!-- Insurance Agent Contact -->
            <div class="site-header__contact">
                <div class="agent-contact">
                    <p class="agent-contact__label">Questions? Speak with a licensed agent</p>
                    <a href="tel:<?= $brand['phone_tel'] ?>" class="agent-contact__phone">
                        <?= $brand['phone'] ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
