<?php
/**
 * FAQ Accordion Component
 *
 * Displays frequently asked questions in collapsible accordion format
 * Ported from quote-rocket-us with brand customization
 */
?>

<div class="faq-container">
    <div class="up-slide-dwn">
        <div class="faq-innr">
            <div class="accordion acdn-heading accordion-open" id="hd-one">What is <?= $brand['company_name'] ?>?</div>
            <div class="acdn-content">
                <p class="acdn-para"><?= $brand['company_name'] ?> is a free service that helps Americans compare insurance quotes, financial products, and more. We work with top providers to bring you the best rates available. Our goal is to save you time and money by making it easy to compare your options in one place.</p>
            </div>
        </div>
    </div>

    <div class="up-slide-dwn">
        <div class="faq-innr">
            <div class="accordion acdn-heading accordion-close">How does <?= $brand['company_name'] ?> work?</div>
            <div class="acdn-content" style="display: none;">
                <p class="acdn-para">Choose the type of insurance or financial product you're looking for, answer a few simple questions, and we'll match you with top providers. Compare your quotes, pick the best one for your needs, and get started. It's that simple!</p>
            </div>
        </div>
    </div>

    <div class="up-slide-dwn">
        <div class="faq-innr">
            <div class="accordion acdn-heading accordion-close">Is my personal information protected and secure with <?= $brand['company_name'] ?>?</div>
            <div class="acdn-content" style="display: none;">
                <p class="acdn-para">Absolutely. We take your privacy seriously and use industry-standard encryption to protect your information. We never sell your data to third parties, and we only share your information with the providers you choose to connect with. For more details, please read our Privacy Policy.</p>
            </div>
        </div>
    </div>

    <div class="up-slide-dwn">
        <div class="faq-innr">
            <div class="accordion acdn-heading accordion-close">How does <?= $brand['company_name'] ?> make money if it's free for customers?</div>
            <div class="acdn-content" style="display: none;">
                <p class="acdn-para">We earn a small commission from our partner providers when you choose to work with them. This means you can use our service completely free, while we help connect you with the best options available. Our recommendations are always based on what's best for you, not what earns us the most commission.</p>
            </div>
        </div>
    </div>

    <div class="up-slide-dwn">
        <div class="faq-innr">
            <div class="accordion acdn-heading accordion-close">What types of insurance can I find with <?= $brand['company_name'] ?>?</div>
            <div class="acdn-content" style="display: none;">
                <p class="acdn-para">We offer comparisons for a wide range of insurance products including:</p>
                <ul class="acdn_list">
                    <li>Auto Insurance</li>
                    <li>Home Insurance</li>
                    <li>Life Insurance</li>
                    <li>Health Insurance</li>
                    <li>Medicare</li>
                    <li>Renters Insurance</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="up-slide-dwn">
        <div class="faq-innr">
            <div class="accordion acdn-heading accordion-close">Why should I trust <?= $brand['company_name'] ?>?</div>
            <div class="acdn-content" style="display: none;">
                <p class="acdn-para">We've helped thousands of Americans find better rates and save money on insurance and financial products. We work only with reputable, licensed providers, and our service is completely free to use. Don't just take our word for it—read our customer reviews and see what others have to say about their experience with <?= $brand['company_name'] ?>.</p>
            </div>
        </div>
    </div>
</div>
