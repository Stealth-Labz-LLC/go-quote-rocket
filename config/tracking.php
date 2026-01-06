<?php
/**
 * Tracking & Analytics Configuration
 *
 * Configure all tracking pixels, analytics, and compliance tools
 */

require_once __DIR__ . '/environment.php';

return [
    // Google Tag Manager (per vertical)
    'gtm' => [
        'global' => 'GTM-XXXXXXX',        // Global GTM for main site
        'auto' => 'GTM-AUTO123',          // Auto vertical GTM
        'life' => 'GTM-LIFE456',          // Life vertical GTM
        'health' => 'GTM-HEALTH789',      // Health vertical GTM
        'medicare' => 'GTM-MEDICARE123',  // Medicare vertical GTM
        'home' => 'GTM-HOME456',          // Home vertical GTM
    ],

    // TrustedForm (Lead Compliance)
    'trustedform' => [
        'enabled' => true,
        'script_url' => 'https://api.trustedform.com/trustedform.js',
        'field_name' => 'xxTrustedFormCertUrl',
        'sandbox' => ENVIRONMENT === 'local' // Use sandbox in local env
    ],

    // Facebook Pixel
    'facebook_pixel' => [
        'enabled' => true,
        'pixel_id' => 'XXXXXXXXXXXXXXXXX'
    ],

    // Google Analytics 4
    'ga4' => [
        'enabled' => true,
        'measurement_id' => 'G-XXXXXXXXXX'
    ]
];
