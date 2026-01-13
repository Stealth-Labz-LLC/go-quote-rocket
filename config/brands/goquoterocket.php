<?php
/**
 * GoQuoteRocket Brand Configuration
 *
 * SINGLE SOURCE OF TRUTH for GoQuoteRocket branding
 * To activate: Set ACTIVE_BRAND to 'goquoterocket' in config/environment.php
 */

// Environment.php is loaded in public/index.php, so constants are already available

return [
    'company_name' => 'GoQuoteRocket',
    'domain' => BASE_DOMAIN,

    // Contact Information
    'phone' => '1-800-555-1234',
    'phone_tel' => '18005551234',
    'email' => 'support@goquoterocket.com',

    // Logo & Assets
    'logo' => [
        'main' => buildUrl('cdn', '/images/brand/logo.svg'),
        'white' => buildUrl('cdn', '/images/brand/quoterocket-logo.svg'),
        'favicon' => buildUrl('cdn', '/images/brand/favicon.png'),
        'width' => '253px',
        'height' => 'auto'
    ],

    // Brand Colors (quote-rocket-us design system)
    'colors' => [
        'primary' => '#002e6a',           // Dark Navy Blue
        'secondary' => '#FF6100',         // Orange
        'accent' => '#0091ff',            // Bright Blue
        'success' => '#07c176',           // Teal
        'error' => '#DC2626',             // Error Red
        'warning' => '#ffc107',           // Amber
        'text_primary' => '#000',         // Black
        'text_secondary' => '#515151',    // Gray
        'text_light' => '#a8b0c1',        // Light Gray
        'bg_light' => '#f6fbff',          // Light Blue
        'bg_dark' => '#002e6a',           // Navy
        'border' => '#e4e4e4',            // Light Gray
    ],

    // Typography (quote-rocket-us design system)
    'fonts' => [
        'primary' => 'DM Sans',
        'secondary' => 'Manrope',
        'family' => "'DM Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif",
        'google_url' => 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@100..1000&family=Manrope:wght@200..800&display=swap',
        'base_size' => '16px',
        'line_height' => '1.6'
    ],

    // Social Media
    'social' => [
        'facebook' => 'https://facebook.com/goquoterocket',
        'twitter' => 'https://twitter.com/goquoterocket',
        'linkedin' => 'https://linkedin.com/company/goquoterocket',
        'instagram' => 'https://instagram.com/goquoterocket'
    ],

    // Review Platforms
    'reviews' => [
        'trustpilot' => [
            'rating' => 4.8,
            'count' => 1500,
            'url' => 'https://www.trustpilot.com/review/goquoterocket.com'
        ],
        'bbb' => [
            'rating' => 'A+',
            'accredited' => true,
            'url' => 'https://www.bbb.org/us/goquoterocket'
        ],
        'google' => [
            'rating' => 4.9,
            'count' => 200,
            'url' => 'https://g.page/goquoterocket/review'
        ]
    ],

    // Legal
    'legal' => [
        'company_legal_name' => 'GoQuoteRocket LLC',
        'address' => "123 Insurance Way, Suite 100\nNew York, NY 10001",
        'phone_hours' => 'Monday - Friday: 9:00 AM - 6:00 PM EST',
        'year_founded' => 2024,

        // Terms of Service
        'terms' => [
            'effective_date' => 'January 1, 2025',
            // Add brand-specific sections if needed
            'additional_sections' => []
        ],

        // Privacy Policy
        'privacy' => [
            'effective_date' => 'January 1, 2025',
            'additional_sections' => []
        ],

        // About Page
        'about' => [
            'intro' => 'GoQuoteRocket is a leading online insurance comparison platform dedicated to helping consumers find the best insurance coverage at competitive rates. We work with top-rated insurance providers across the United States to bring you comprehensive quotes and options tailored to your needs.',
            'mission' => 'Our mission is to simplify the insurance shopping experience by providing transparent, easy-to-understand comparisons of insurance products. We believe everyone deserves access to quality insurance coverage without the hassle of contacting multiple providers individually.',
            'additional_sections' => []
        ]
    ],

    // Newsletter
    'newsletter' => [
        'enabled' => true,
        'default_checked' => true,
        'text' => 'Yes, I want to receive helpful tips and exclusive offers from GoQuoteRocket!'
    ]
];
