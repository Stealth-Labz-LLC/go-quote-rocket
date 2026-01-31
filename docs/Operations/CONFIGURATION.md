# Configuration System

GoQuoteRocket uses a **three-level configuration hierarchy** that controls all behavior without code changes.

## Table of Contents

- [Configuration Hierarchy](#configuration-hierarchy)
- [Environment Configuration](#environment-configuration)
- [Brand Configuration](#brand-configuration)
- [Vertical Configuration](#vertical-configuration)
- [Tracking Configuration](#tracking-configuration)
- [Integrations Configuration](#integrations-configuration)
- [Carriers Configuration](#carriers-configuration)
- [Configuration Best Practices](#configuration-best-practices)

---

## Configuration Hierarchy

```
┌─────────────────────────────────────────────────────────────┐
│                    LEVEL 1: ENVIRONMENT                      │
│                    config/environment.php                    │
│         (Detects local/staging/production, sets URLs)        │
└─────────────────────────────────────────────────────────────┘
                              │
                              ▼
┌─────────────────────────────────────────────────────────────┐
│                      LEVEL 2: BRAND                          │
│                 config/brands/{brand}.php                    │
│          (Colors, fonts, company info, legal text)           │
└─────────────────────────────────────────────────────────────┘
                              │
                              ▼
┌─────────────────────────────────────────────────────────────┐
│                     LEVEL 3: VERTICAL                        │
│               config/verticals/{vertical}.php                │
│       (Questions, carriers, landing copy, routing)           │
└─────────────────────────────────────────────────────────────┘
```

**Loading Order**:
1. `environment.php` loaded first (sets constants)
2. Brand config loaded via `ACTIVE_BRAND` constant
3. Vertical config loaded based on detected subdomain

---

## Environment Configuration

**File**: `config/environment.php`

**Purpose**: Detect environment and set URL-related constants.

### Auto-Detection Logic

```php
// Detect from hostname and request URI
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';

// Local environment (.local domain or localhost)
$isLocal = strpos($host, '.local') !== false
        || strpos($host, 'localhost') !== false
        || strpos($host, '127.0.0.1') !== false;

// Staging environment (/staging/ in path)
$isStaging = strpos($requestUri, '/staging/') === 0
          || strpos($host, 'staging.') === 0;

// Set environment constant
if ($isLocal) {
    define('ENVIRONMENT', 'local');
} elseif ($isStaging) {
    define('ENVIRONMENT', 'staging');
} else {
    define('ENVIRONMENT', 'production');
}
```

### Constants Set

| Constant | Local | Staging | Production |
|----------|-------|---------|------------|
| `ENVIRONMENT` | `'local'` | `'staging'` | `'production'` |
| `BASE_DOMAIN` | `'quoterocket.local'` | `'goquoterocket.com'` | `'goquoterocket.com'` |
| `USE_HTTPS` | `false` | `true` | `true` |
| `DEBUG_MODE` | `true` | `true` | `false` |
| `BASE_PATH` | `'/goquoterocket/public'` | `''` | `''` |
| `ACTIVE_BRAND` | `'goquoterocket'` | `'goquoterocket'` | `'goquoterocket'` |

### URL Building Helper

```php
/**
 * Build environment-aware URLs
 *
 * @param string $subdomain  Target subdomain (www, cdn, api, etc.)
 * @param string $path       Path after subdomain
 * @return string            Complete URL
 */
function buildUrl($subdomain, $path = '') {
    switch (ENVIRONMENT) {
        case 'local':
            // Use relative paths for local development
            // /goquoterocket/public/cdn/css/style.css
            if ($subdomain === 'cdn') {
                return BASE_PATH . '/cdn' . $path;
            } elseif ($subdomain === 'api') {
                return '/goquoterocket/api' . $path;
            }
            return BASE_PATH . $path;

        case 'staging':
            // Direct paths for staging
            if ($subdomain === 'cdn') {
                return '/cdn' . $path;
            }
            return $path;

        case 'production':
        default:
            // Full subdomain URLs for production
            $protocol = USE_HTTPS ? 'https' : 'http';
            return "{$protocol}://{$subdomain}." . BASE_DOMAIN . $path;
    }
}
```

### Usage Examples

```php
// In templates:
<link href="<?= buildUrl('cdn', '/css/global.css') ?>">
// Local:      /goquoterocket/public/cdn/css/global.css
// Staging:    /cdn/css/global.css
// Production: https://cdn.goquoterocket.com/css/global.css

<form action="<?= buildUrl('api', '/submit.php') ?>">
// Local:      /goquoterocket/api/submit.php
// Staging:    /api/submit.php
// Production: https://api.goquoterocket.com/submit.php
```

---

## Brand Configuration

**File**: `config/brands/goquoterocket.php`

**Purpose**: Single source of truth for all branding.

### Complete Schema

```php
<?php
return [
    // ============================================================
    // COMPANY IDENTITY
    // ============================================================
    'company_name' => 'GoQuoteRocket',
    'tagline' => 'Compare. Save. Protect.',
    'phone' => '(904) 942-5529',
    'phone_display' => '(904) 942-5529',
    'email' => 'support@goquoterocket.com',

    // ============================================================
    // LOGOS
    // ============================================================
    'logo' => [
        'main' => buildUrl('cdn', '/images/brand/logo.svg'),
        'main_white' => buildUrl('cdn', '/images/brand/logo-white.svg'),
        'favicon' => buildUrl('cdn', '/images/brand/favicon.png'),
        'og_image' => buildUrl('cdn', '/images/brand/og-image.jpg'),
        'width' => '253px',
        'height' => 'auto'
    ],

    // ============================================================
    // COLOR PALETTE
    // ============================================================
    'colors' => [
        // Primary colors
        'primary' => '#002e6a',        // Navy blue
        'secondary' => '#FF6100',      // Orange
        'accent' => '#0091ff',         // Bright blue

        // State colors
        'success' => '#07c176',        // Green
        'warning' => '#f59e0b',        // Amber
        'error' => '#ef4444',          // Red
        'info' => '#3b82f6',           // Blue

        // Neutral colors
        'text' => '#1f2937',           // Dark gray
        'text_light' => '#6b7280',     // Medium gray
        'background' => '#ffffff',     // White
        'background_alt' => '#f9fafb', // Light gray
        'border' => '#e5e7eb',         // Border gray

        // Gradient
        'gradient_start' => '#002e6a',
        'gradient_end' => '#0091ff'
    ],

    // ============================================================
    // TYPOGRAPHY
    // ============================================================
    'fonts' => [
        'primary' => 'DM Sans',        // Headings
        'secondary' => 'Manrope',      // Body text
        'google_url' => 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700&display=swap'
    ],

    // ============================================================
    // SOCIAL LINKS
    // ============================================================
    'social' => [
        'facebook' => 'https://facebook.com/goquoterocket',
        'twitter' => 'https://twitter.com/goquoterocket',
        'instagram' => 'https://instagram.com/goquoterocket',
        'linkedin' => 'https://linkedin.com/company/goquoterocket'
    ],

    // ============================================================
    // REVIEWS & TRUST BADGES
    // ============================================================
    'reviews' => [
        'trustpilot' => [
            'enabled' => true,
            'rating' => '4.8',
            'reviews_count' => '2,847',
            'url' => 'https://www.trustpilot.com/review/goquoterocket.com'
        ],
        'bbb' => [
            'enabled' => true,
            'rating' => 'A+',
            'url' => 'https://www.bbb.org/...'
        ],
        'google' => [
            'enabled' => true,
            'rating' => '4.7',
            'reviews_count' => '1,234'
        ]
    ],

    // ============================================================
    // LEGAL INFORMATION
    // ============================================================
    'legal' => [
        'company_legal_name' => 'GoQuoteRocket LLC',
        'parent_company' => 'Stealth Labz LLC',
        'address' => [
            'street' => '123 Main Street',
            'suite' => 'Suite 100',
            'city' => 'Anytown',
            'state' => 'TX',
            'zip' => '75001',
            'country' => 'USA'
        ],
        'year_founded' => 2024,

        // Terms of Service
        'terms' => [
            'title' => 'Terms of Service',
            'last_updated' => '2024-01-01',
            'content' => 'Full terms of service text...'
        ],

        // Privacy Policy
        'privacy' => [
            'title' => 'Privacy Policy',
            'last_updated' => '2024-01-01',
            'content' => 'Full privacy policy text...'
        ],

        // About page content
        'about' => [
            'title' => 'About GoQuoteRocket',
            'mission' => 'Our mission is to help Americans...',
            'content' => 'Full about page content...'
        ]
    ],

    // ============================================================
    // NEWSLETTER
    // ============================================================
    'newsletter' => [
        'enabled' => true,
        'default_checked' => true,
        'text' => 'I agree to receive offers and updates via email and phone.'
    ]
];
```

### CSS Variable Injection

Brand colors are injected as CSS custom properties in templates:

```php
<!-- In template head -->
<style>
:root {
    --injected-primary: <?= $brand['colors']['primary'] ?>;
    --injected-secondary: <?= $brand['colors']['secondary'] ?>;
    --injected-accent: <?= $brand['colors']['accent'] ?>;
    --injected-success: <?= $brand['colors']['success'] ?>;
    --injected-text: <?= $brand['colors']['text'] ?>;
    --injected-background: <?= $brand['colors']['background'] ?>;
    --injected-font-primary: '<?= $brand['fonts']['primary'] ?>';
    --injected-font-secondary: '<?= $brand['fonts']['secondary'] ?>';
}
</style>
```

### Switching Brands

To switch brands, change one constant in `environment.php`:

```php
// Default brand
define('ACTIVE_BRAND', 'goquoterocket');

// Alternative brand
define('ACTIVE_BRAND', 'sagewise');
```

---

## Vertical Configuration

**Files**: `config/verticals/{vertical}.php`

**Purpose**: Complete vertical definition including questions, carriers, landing content, and routing.

### Complete Schema

```php
<?php
return [
    // ============================================================
    // IDENTITY
    // ============================================================
    'id' => 'auto',                    // URL slug (subdomain)
    'name' => 'Auto Insurance',        // Display name
    'subdomain' => 'auto',             // Subdomain prefix
    'enabled' => true,                 // Active/inactive

    // ============================================================
    // LANDING PAGE
    // ============================================================
    'landing' => [
        // Hero section
        'headline' => 'Auto Insurance Rates from $29/month',
        'subheadline' => 'Compare rates in 1 minute and save today.',
        'cta_text' => 'Get My Free Quotes',

        // Benefits (typically 3)
        'benefits' => [
            [
                'icon' => 'search',       // Icon name (FontAwesome or custom)
                'title' => 'Compare 20+ Carriers',
                'text' => 'See quotes from top-rated insurance companies.'
            ],
            [
                'icon' => 'piggy-bank',
                'title' => 'Save Up To $800',
                'text' => 'Average annual savings for switchers.'
            ],
            [
                'icon' => 'clock',
                'title' => '60 Second Quotes',
                'text' => 'Get instant quotes without long forms.'
            ]
        ],

        // Testimonial
        'testimonial' => [
            'quote' => 'I saved $437 on my auto insurance in just 5 minutes!',
            'author' => 'Sarah M.',
            'location' => 'Dallas, TX',
            'image' => buildUrl('cdn', '/images/testimonials/sarah.jpg'),
            'rating' => 5
        ],

        // Trust badges
        'trust_badges' => [
            'years_in_business' => '10+',
            'customers_served' => '500,000+',
            'average_savings' => '$587'
        ],

        // How it works steps
        'how_it_works' => [
            ['step' => 1, 'title' => 'Answer Questions', 'text' => 'Tell us about your coverage needs.'],
            ['step' => 2, 'title' => 'Compare Quotes', 'text' => 'See personalized rates instantly.'],
            ['step' => 3, 'title' => 'Save Money', 'text' => 'Choose the best rate and start saving.']
        ]
    ],

    // ============================================================
    // FUNNEL FLOW
    // ============================================================
    'flow' => [
        'title' => 'Auto Insurance Quote Calculator',
        'offer_id' => 47,                    // Tracking offer ID
        'redirect_type' => 'owl',            // 'owl' (multiple) or 'sow' (single)

        // Progress bar labels
        'progress_labels' => ['ZIP', 'Home', 'Insured', 'Vehicles', 'Age', 'Military', 'Contact'],
        'show_progress_percentage' => true,

        // ============================================================
        // QUESTIONS ARRAY
        // ============================================================
        'questions' => [
            // QUESTION 1: Text input
            [
                'id' => 'zip',
                'type' => 'text',
                'question' => 'What is your zip code?',
                'placeholder' => '12345',
                'validation' => [
                    'required' => true,
                    'pattern' => '/^\d{5}$/',
                    'min_length' => 5,
                    'max_length' => 5,
                    'error_message' => 'Please enter a valid 5-digit ZIP code.'
                ],
                'auto_advance' => true,
                'delay' => 500              // ms after valid input
            ],

            // QUESTION 2: Radio buttons
            [
                'id' => 'homeowner',
                'type' => 'radio',
                'question' => 'Are you a Homeowner?',
                'options' => [
                    ['value' => 'yes', 'label' => 'Yes', 'icon' => 'home'],
                    ['value' => 'no', 'label' => 'No', 'icon' => 'building']
                ],
                'auto_advance' => true,
                'delay' => 250
            ],

            // QUESTION 3: Radio with more options
            [
                'id' => 'currently_insured',
                'type' => 'radio',
                'question' => 'Are you currently insured?',
                'options' => [
                    ['value' => 'yes', 'label' => 'Yes'],
                    ['value' => 'no', 'label' => 'No']
                ],
                'auto_advance' => true
            ],

            // QUESTION 4: Multiple vehicles
            [
                'id' => 'multiple_vehicles',
                'type' => 'radio',
                'question' => 'Do you have multiple vehicles?',
                'options' => [
                    ['value' => 'yes', 'label' => 'Yes'],
                    ['value' => 'no', 'label' => 'No']
                ],
                'auto_advance' => true
            ],

            // QUESTION 5: Age range
            [
                'id' => 'age_range',
                'type' => 'radio',
                'question' => 'What is your age range?',
                'options' => [
                    ['value' => '18-24', 'label' => '18-24'],
                    ['value' => '25-49', 'label' => '25-49'],
                    ['value' => '50-64', 'label' => '50-64'],
                    ['value' => '65+', 'label' => '65+']
                ],
                'auto_advance' => true
            ],

            // QUESTION 6: Military status
            [
                'id' => 'military',
                'type' => 'radio',
                'question' => 'Are you military or a veteran?',
                'subtext' => 'Military members may qualify for special discounts.',
                'options' => [
                    ['value' => 'yes', 'label' => 'Yes'],
                    ['value' => 'no', 'label' => 'No']
                ],
                'auto_advance' => true
            ],

            // QUESTION 7: Contact form (final step)
            [
                'id' => 'contact',
                'type' => 'contact_form',
                'question' => 'You\'re Pre-Qualified For Major Discounts!',
                'subtext' => 'Enter your info to see your personalized quotes.',
                'fields' => [
                    [
                        'name' => 'given-name',
                        'label' => 'First Name',
                        'type' => 'text',
                        'autocomplete' => 'given-name',
                        'required' => true,
                        'placeholder' => 'John'
                    ],
                    [
                        'name' => 'family-name',
                        'label' => 'Last Name',
                        'type' => 'text',
                        'autocomplete' => 'family-name',
                        'required' => true,
                        'placeholder' => 'Smith'
                    ],
                    [
                        'name' => 'email',
                        'label' => 'Email Address',
                        'type' => 'email',
                        'autocomplete' => 'email',
                        'required' => true,
                        'placeholder' => 'john@example.com'
                    ],
                    [
                        'name' => 'tel',
                        'label' => 'Phone Number',
                        'type' => 'tel',
                        'autocomplete' => 'tel',
                        'required' => true,
                        'placeholder' => '(555) 123-4567'
                    ]
                ],
                'newsletter' => [
                    'enabled' => true,
                    'field_name' => 'newsletter_optin',
                    'default_checked' => true
                ],
                'trustedform' => true,
                'submit_text' => 'See My Instant Quotes'
            ]
        ],

        // Loading modal after submission
        'loading_modal' => [
            'messages' => [
                'Analyzing your profile...',
                'Comparing quotes from top carriers...',
                'Finding the best rates for you...',
                'Almost there...'
            ],
            'duration_per_message' => 800
        ]
    ],

    // ============================================================
    // CARRIERS (OFFER WALL)
    // ============================================================
    'carriers' => [
        [
            'id' => 'statefarm',
            'name' => 'State Farm',
            'logo' => 'statefarm-logo.svg',
            'rating' => 'A++',
            'rating_source' => 'AM Best',
            'highlights' => [
                'Largest auto insurer in the US',
                'Discounts for safe drivers',
                '24/7 claims support'
            ],
            'cta_text' => 'Get State Farm Quote',
            'url_key' => 'statefarm',       // For affiliate URL
            'enabled' => true,
            'priority' => 1,                 // Display order
            'eligibility' => []              // Empty = show to all
        ],
        [
            'id' => 'progressive',
            'name' => 'Progressive',
            'logo' => 'progressive-logo.svg',
            'rating' => 'A+',
            'rating_source' => 'AM Best',
            'highlights' => [
                'Name Your Price tool',
                'Snapshot safe driving discount',
                'Bundle and save'
            ],
            'enabled' => true,
            'priority' => 2
        ],
        [
            'id' => 'usaa',
            'name' => 'USAA',
            'logo' => 'usaa-logo.svg',
            'rating' => 'A++',
            'highlights' => [
                'Military exclusive benefits',
                'Lowest rates for service members',
                'Top-rated claims service'
            ],
            'enabled' => true,
            'priority' => 3,
            // Only show to military users
            'eligibility' => [
                'military' => 'yes'
            ]
        ]
        // ... more carriers
    ],

    // ============================================================
    // LEAD ROUTING
    // ============================================================
    'routing' => [
        'stealthlabz' => [
            'enabled' => true,
            'webhook_key' => 'auto',        // Key in integrations.php
            'field_mapping' => [
                // Static values
                'c1' => ['value' => 'GoQuoteRocket'],
                'c4' => ['value' => 47],     // Offer ID

                // Form field mappings
                'c7' => ['field' => 'zip'],
                'c10' => ['field' => 'vertical'],
                'first_name' => ['field' => 'given-name'],
                'last_name' => ['field' => 'family-name'],
                'email' => ['field' => 'email'],
                'phone' => ['field' => 'tel'],
                'homeowner' => ['field' => 'homeowner'],
                'currently_insured' => ['field' => 'currently_insured'],

                // Tracking parameters
                'c2' => ['field' => 'aff_id'],
                'transaction_id' => ['field' => 'transaction_id'],
                'xxTrustedFormCertUrl' => ['field' => 'xxTrustedFormCertUrl']
            ]
        ],
        'waypoint' => [
            'enabled' => true,
            'field_mapping' => [
                'vertical' => ['field' => 'vertical'],
                'first_name' => ['field' => 'given-name'],
                'last_name' => ['field' => 'family-name'],
                'email' => ['field' => 'email'],
                'phone' => ['field' => 'tel'],
                'zip' => ['field' => 'zip']
            ]
        ]
    ]
];
```

### Question Types

| Type | Description | Auto-Advance |
|------|-------------|--------------|
| `text` | Single text input | On valid input |
| `radio` | Radio button options | On selection |
| `contact_form` | Multi-field form | Manual submit |
| `select` | Dropdown select | On selection |
| `checkbox` | Multiple selection | Manual continue |

---

## Tracking Configuration

**File**: `config/tracking.php`

```php
<?php
return [
    // ============================================================
    // GOOGLE TAG MANAGER
    // ============================================================
    'gtm' => [
        // Global container (all pages)
        'global' => 'GTM-XXXXXXX',

        // Per-vertical containers (optional overrides)
        'auto' => 'GTM-AUTO123',
        'life' => 'GTM-LIFE456',
        'health' => 'GTM-HEALTH789',
        'medicare' => 'GTM-MEDICARE123',
        'creditcard' => 'GTM-CREDIT123'
    ],

    // ============================================================
    // TRUSTEDFORM
    // ============================================================
    'trustedform' => [
        'enabled' => true,
        'script_url' => 'https://api.trustedform.com/trustedform.js',
        'field_name' => 'xxTrustedFormCertUrl',
        // Use sandbox mode for local development
        'sandbox' => ENVIRONMENT === 'local'
    ],

    // ============================================================
    // FACEBOOK PIXEL
    // ============================================================
    'facebook_pixel' => [
        'enabled' => true,
        'pixel_id' => 'XXXXXXXXXXXXXXXXX'
    ],

    // ============================================================
    // GOOGLE ANALYTICS 4
    // ============================================================
    'ga4' => [
        'enabled' => true,
        'measurement_id' => 'G-XXXXXXXXXX'
    ],

    // ============================================================
    // EVERFLOW (AFFILIATE NETWORK)
    // ============================================================
    'everflow' => [
        'enabled' => false,
        'network_id' => 'XXXXX',
        'sdk_url' => 'https://www.everflow.io/scripts/sdk/everflow.js'
    ]
];
```

---

## Integrations Configuration

**File**: `config/integrations.php`

```php
<?php
return [
    // ============================================================
    // STEALTHLABZ
    // ============================================================
    'stealthlabz' => [
        'enabled' => true,
        'base_url' => 'https://portal.stealthlabz.com/webhook/unify/',

        // Webhook IDs per vertical
        'webhooks' => [
            'auto' => 'c10ebcce-f22e-4e48-a633-e7de9529f46c',
            'life' => 'LIFE-WEBHOOK-ID-HERE',
            'health' => 'HEALTH-WEBHOOK-ID-HERE',
            'medicare' => 'MEDICARE-WEBHOOK-ID-HERE',
            'creditcard' => 'CREDITCARD-WEBHOOK-ID-HERE'
        ],

        'timeout' => 30,           // seconds
        'retry_attempts' => 2,
        'retry_delay' => 1000      // ms between retries
    ],

    // ============================================================
    // WAYPOINT
    // ============================================================
    'waypoint' => [
        'enabled' => true,
        'endpoint' => 'https://mass1ve.waypointsoftware.io/capture.php',
        'timeout' => 30,
        'content_type' => 'application/x-www-form-urlencoded'
    ],

    // ============================================================
    // EMAIL (FUTURE)
    // ============================================================
    'email' => [
        'enabled' => false,
        'provider' => 'sendgrid',
        'api_key' => 'SG.XXXXX',
        'from_email' => 'noreply@goquoterocket.com',
        'from_name' => 'GoQuoteRocket'
    ]
];
```

---

## Carriers Configuration

**File**: `config/carriers.php`

Master carrier database used across all verticals.

```php
<?php
return [
    // ============================================================
    // AUTO INSURANCE CARRIERS
    // ============================================================
    'statefarm' => [
        'name' => 'State Farm',
        'logo' => 'state-farm.svg',
        'logo_white' => 'StateFarm_white.svg',
        'verticals' => ['auto', 'home', 'life'],
        'rating' => 'A++',
        'rating_source' => 'AM Best',
        'affiliate_base_url' => 'https://example.com/statefarm'
    ],

    'progressive' => [
        'name' => 'Progressive',
        'logo' => 'progressive.svg',
        'logo_white' => 'progressive_white.svg',
        'verticals' => ['auto', 'home'],
        'rating' => 'A+',
        'rating_source' => 'AM Best'
    ],

    'geico' => [
        'name' => 'GEICO',
        'logo' => 'geico.svg',
        'verticals' => ['auto'],
        'rating' => 'A++',
        'rating_source' => 'AM Best'
    ],

    'usaa' => [
        'name' => 'USAA',
        'logo' => 'usaa.svg',
        'verticals' => ['auto', 'home', 'life'],
        'rating' => 'A++',
        'eligibility' => ['military']        // Requires military status
    ],

    // ============================================================
    // LIFE INSURANCE CARRIERS
    // ============================================================
    'mutual_of_omaha' => [
        'name' => 'Mutual of Omaha',
        'logo' => 'mutual-of-omaha.svg',
        'verticals' => ['life', 'medicare'],
        'rating' => 'A+',
        'rating_source' => 'AM Best'
    ],

    'prudential' => [
        'name' => 'Prudential',
        'logo' => 'prudential.svg',
        'verticals' => ['life'],
        'rating' => 'A+',
        'rating_source' => 'AM Best'
    ],

    // ============================================================
    // FINANCIAL PRODUCTS
    // ============================================================
    'chime' => [
        'name' => 'Chime',
        'logo' => 'chime.svg',
        'verticals' => ['creditcard', 'banking'],
        'type' => 'digital_bank'
    ],

    'cashapp' => [
        'name' => 'Cash App',
        'logo' => 'cashapp.svg',
        'verticals' => ['creditcard', 'banking'],
        'type' => 'digital_bank'
    ]

    // ... ~100 total carriers
];
```

---

## Configuration Best Practices

### 1. Never Hardcode Values

```php
// BAD
<h1>Compare Auto Insurance Quotes</h1>

// GOOD
<h1><?= $v['landing']['headline'] ?></h1>
```

### 2. Use Environment-Aware URLs

```php
// BAD
<link href="https://cdn.goquoterocket.com/css/style.css">

// GOOD
<link href="<?= buildUrl('cdn', '/css/style.css') ?>">
```

### 3. Keep Configs DRY

```php
// BAD: Duplicate carrier in each vertical
// config/verticals/auto.php
'carriers' => [['id' => 'statefarm', 'name' => 'State Farm', ...]]

// config/verticals/home.php
'carriers' => [['id' => 'statefarm', 'name' => 'State Farm', ...]]

// GOOD: Reference master carrier database
// config/carriers.php has master data
// config/verticals/auto.php references by ID
'carriers' => ['statefarm', 'progressive', 'geico']
```

### 4. Use Comments for Sections

```php
// ============================================================
// FUNNEL FLOW CONFIGURATION
// ============================================================
'flow' => [
    // Title shown at top of questionnaire
    'title' => 'Auto Insurance Quote Calculator',
    // ...
]
```

### 5. Validate Config at Load Time

```php
class Vertical
{
    public static function load(string $id): ?array
    {
        $config = require ".../{$id}.php";

        // Validate required fields
        $required = ['id', 'name', 'enabled', 'landing', 'flow', 'carriers'];
        foreach ($required as $field) {
            if (!isset($config[$field])) {
                throw new Exception("Vertical config missing required field: {$field}");
            }
        }

        return $config;
    }
}
```

### 6. Version Control Configs

Configs are code - track changes in Git:

```
git log --oneline config/verticals/auto.php

a1b2c3d Update auto headline for Q4 campaign
d4e5f6g Add USAA military eligibility
g7h8i9j Initial auto vertical config
```
