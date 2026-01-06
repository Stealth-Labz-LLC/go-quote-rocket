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
        'base_url' => 'https://portal.stealthlabz.com/webhook/unify/',

        // Webhook IDs per vertical
        'webhooks' => [
            'auto' => 'c10ebcce-f22e-4e48-a633-e7de9529f46c',
            'life' => 'LIFE-WEBHOOK-ID-HERE',
            'health' => 'HEALTH-WEBHOOK-ID-HERE',
            'medicare' => 'MEDICARE-WEBHOOK-ID-HERE',
            'home' => 'HOME-WEBHOOK-ID-HERE'
        ],

        // Timeout settings
        'timeout' => 30,
        'retry_attempts' => 2
    ],

    // Waypoint Configuration
    'waypoint' => [
        'enabled' => true,
        'endpoint' => 'https://mass1ve.waypointsoftware.io/capture.php',
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
