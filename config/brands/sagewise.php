<?php
/**
 * SageWise Brand Configuration
 *
 * White-label brand example using SageWise branding
 * To activate: Change ACTIVE_BRAND to 'sagewise' in config/environment.php
 */

return [
    // Company Information
    'company_name' => 'SageWise',
    'tagline' => 'Smart Insurance Decisions',

    // Contact Information
    'phone' => '1-888-SAGEWISE',
    'phone_tel' => '18887243947',
    'email' => 'help@sagewise.com',

    // Logo & Assets
    'logo' => [
        'main' => buildUrl('cdn', '/images/brand/sagewise-logo.svg'),
        'white' => buildUrl('cdn', '/images/brand/sagewise-logo-white.svg'),
        'favicon' => buildUrl('cdn', '/images/brand/sagewise-favicon.png'),
        'width' => '200px',
    ],

    // Brand Colors - SageWise Purple/Blue Theme
    'colors' => [
        'primary' => '#5B4FB5',        // SageWise Purple
        'secondary' => '#4A90E2',      // SageWise Blue
        'accent' => '#7C69C4',         // Light Purple
        'success' => '#27AE60',        // Green
        'warning' => '#F39C12',        // Orange
        'danger' => '#E74C3C',         // Red
        'text_primary' => '#2C3E50',   // Dark Gray
        'text_secondary' => '#7F8C8D', // Medium Gray
        'bg_light' => '#F8F9FA',       // Light Background
        'bg_dark' => '#5B4FB5',        // Dark Background (uses primary)
    ],

    // Typography
    'fonts' => [
        'primary' => 'Inter',
        'secondary' => 'Roboto',
        'family' => "'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', sans-serif",
        'google_url' => 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap',
    ],

    // Social Media
    'social' => [
        'facebook' => 'https://facebook.com/sagewise',
        'twitter' => 'https://twitter.com/sagewise',
        'linkedin' => 'https://linkedin.com/company/sagewise',
        'instagram' => 'https://instagram.com/sagewise',
    ],

    // Feature Flags
    'features' => [
        'show_testimonials' => true,
        'show_carrier_logos' => true,
        'show_trust_badges' => true,
        'enable_live_chat' => false,
        'enable_newsletter' => true,
    ],

    // Legal
    'legal' => [
        'company_legal_name' => 'SageWise Insurance Services, LLC',
        'address' => '123 Insurance Way, Suite 100',
        'city_state_zip' => 'Los Angeles, CA 90001',
        'privacy_url' => buildUrl('www', '/privacy'),
        'terms_url' => buildUrl('www', '/terms'),
        'ccpa_url' => buildUrl('www', '/ccpa'),
    ],

    // Custom Footer Text
    'footer_disclaimer' => 'SageWise is not an insurance company. We connect consumers with licensed insurance agents and carriers. All insurance products are offered by licensed agents and underwritten by participating insurance companies.',
];
