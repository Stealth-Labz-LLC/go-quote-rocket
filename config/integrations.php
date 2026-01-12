<?php
/**
 * Third-Party Integrations Configuration
 *
 * Configure API endpoints for lead buyers
 */

return [
    // StealthLabz Configuration
    'stealthlabz' => [
        'enabled' => true,
        'base_url' => 'https://portal.stealthlabz.com/webhook/quote_rocket/',

        // Single webhook - portal handles routing internally
        'webhook_id' => 'aa919ce5-e028-11f0-a113-861da8dd4c12',

        // Timeout settings
        'timeout' => 30,
        'retry_attempts' => 2
    ],

    // Waypoint Configuration (DISABLED)
    'waypoint' => [
        'enabled' => false,
        'endpoint' => '',
        'timeout' => 30,
        'retry_attempts' => 2
    ],

    // Additional Buyers (example)
    'buyer_3' => [
        'enabled' => false,
        'endpoint' => 'https://api.buyer3.com/leads',
        'api_key' => 'YOUR_API_KEY_HERE',
        'timeout' => 30
    ]
];
