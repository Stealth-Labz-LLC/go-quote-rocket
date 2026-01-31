# Verticals Guide

This guide explains how verticals work in GoQuoteRocket and provides step-by-step instructions for adding new verticals.

## Table of Contents

- [What is a Vertical?](#what-is-a-vertical)
- [Current Verticals](#current-verticals)
- [Vertical Detection](#vertical-detection)
- [Adding a New Vertical (5-Minute Guide)](#adding-a-new-vertical-5-minute-guide)
- [Vertical Configuration Deep Dive](#vertical-configuration-deep-dive)
- [Question Types Reference](#question-types-reference)
- [Carrier Configuration](#carrier-configuration)
- [Eligibility Rules](#eligibility-rules)
- [Testing Your Vertical](#testing-your-vertical)

---

## What is a Vertical?

A **vertical** is a complete insurance product funnel defined by a single configuration file. Each vertical includes:

- Landing page content (headline, benefits, testimonials)
- Questionnaire flow (7-8 questions)
- Carrier/offer wall configuration
- Lead routing rules
- Tracking settings

**Key Principle**: One config file = one complete vertical. No code changes needed.

---

## Current Verticals

| ID | Name | Questions | Carriers | StealthLabz | Waypoint | Status |
|----|------|-----------|----------|-------------|----------|--------|
| `auto` | Auto Insurance | 7 | 5 | Configured | Configured | **READY** |
| `life` | Life Insurance | 5 | 3 | Placeholder | Configured | Needs Webhook |
| `medicare` | Medicare Plans | 7 | 5 | Placeholder | - | Needs Webhook |
| `creditcard` | Credit Cards | 7 | 6 | Placeholder | - | Needs Webhook |

### Lead Routing Status

| Vertical | Webhook ID | Notes |
|----------|------------|-------|
| Auto | `c10ebcce-f22e-4e48-a633-e7de9529f46c` | Production ready |
| Life | `LIFE-WEBHOOK-ID-HERE` | Replace with real ID |
| Medicare | `MEDICARE-WEBHOOK-ID-HERE` | Replace with real ID |
| Credit Card | - | Uses StealthLabz only |

### Vertical URLs

| Environment | URL Pattern | Example |
|-------------|-------------|---------|
| Local | `{vertical}.goquoterocket.local` | `auto.goquoterocket.local` |
| Staging | `goquoterocket.com/staging/public/?vertical={id}` | `?vertical=auto` |
| Production | `{vertical}.goquoterocket.com` | `auto.goquoterocket.com` |

---

## Vertical Detection

When a request arrives, the system detects the vertical through multiple methods:

### Detection Priority

```
1. Query Parameter: ?vertical=auto
         ↓ (if not found)
2. Subdomain: auto.goquoterocket.com
         ↓ (if not found)
3. Funnel Pattern: auto.funnel.goquoterocket.com
         ↓ (if not found)
4. Return null → Show homepage
```

### Detection Code

```php
// app/Models/Vertical.php
public static function detect(): ?string
{
    // Priority 1: Query parameter
    if (!empty($_GET['vertical'])) {
        $vertical = self::sanitize($_GET['vertical']);
        if (self::exists($vertical)) {
            return $vertical;
        }
    }

    // Priority 2: Subdomain
    $host = $_SERVER['HTTP_HOST'] ?? '';
    $parts = explode('.', $host);

    if (count($parts) >= 2) {
        $subdomain = $parts[0];

        // Skip common non-vertical subdomains
        if (!in_array($subdomain, ['www', 'api', 'cdn', 'staging'])) {
            if (self::exists($subdomain)) {
                return $subdomain;
            }
        }
    }

    return null;
}
```

---

## Adding a New Vertical (5-Minute Guide)

### Step 1: Create Config File

Copy an existing vertical as a template:

```bash
cp config/verticals/auto.php config/verticals/pet.php
```

### Step 2: Update Core Identity

```php
<?php
// config/verticals/pet.php

return [
    'id' => 'pet',
    'name' => 'Pet Insurance',
    'subdomain' => 'pet',
    'enabled' => true,
    // ...
];
```

### Step 3: Customize Landing Page

```php
'landing' => [
    'headline' => 'Pet Insurance Plans Starting at $20/month',
    'subheadline' => 'Protect your furry family member today.',
    'cta_text' => 'Get My Free Quote',

    'benefits' => [
        [
            'icon' => 'paw',
            'title' => 'Comprehensive Coverage',
            'text' => 'Accidents, illnesses, and wellness visits.'
        ],
        [
            'icon' => 'dollar-sign',
            'title' => 'Affordable Plans',
            'text' => 'Plans starting at just $20/month.'
        ],
        [
            'icon' => 'heart',
            'title' => 'Any Vet, Anywhere',
            'text' => 'Visit any licensed vet in the US.'
        ]
    ],

    'testimonial' => [
        'quote' => 'Saved $2,000 on my dog\'s surgery!',
        'author' => 'Mike R.',
        'location' => 'Austin, TX'
    ]
],
```

### Step 4: Define Questions

```php
'flow' => [
    'title' => 'Pet Insurance Quote Calculator',
    'offer_id' => 99,
    'redirect_type' => 'owl',
    'progress_labels' => ['ZIP', 'Pet', 'Age', 'Breed', 'Health', 'Contact'],

    'questions' => [
        // Question 1: ZIP Code
        [
            'id' => 'zip',
            'type' => 'text',
            'question' => 'What is your zip code?',
            'placeholder' => '12345',
            'validation' => [
                'required' => true,
                'pattern' => '/^\d{5}$/'
            ],
            'auto_advance' => true
        ],

        // Question 2: Pet Type
        [
            'id' => 'pet_type',
            'type' => 'radio',
            'question' => 'What type of pet do you have?',
            'options' => [
                ['value' => 'dog', 'label' => 'Dog', 'icon' => 'dog'],
                ['value' => 'cat', 'label' => 'Cat', 'icon' => 'cat'],
                ['value' => 'other', 'label' => 'Other', 'icon' => 'paw']
            ],
            'auto_advance' => true
        ],

        // Question 3: Pet Age
        [
            'id' => 'pet_age',
            'type' => 'radio',
            'question' => 'How old is your pet?',
            'options' => [
                ['value' => 'puppy', 'label' => 'Under 1 year'],
                ['value' => '1-3', 'label' => '1-3 years'],
                ['value' => '4-7', 'label' => '4-7 years'],
                ['value' => '8+', 'label' => '8+ years']
            ],
            'auto_advance' => true
        ],

        // Question 4: Breed Size (conditional display possible)
        [
            'id' => 'breed_size',
            'type' => 'radio',
            'question' => 'What size is your pet?',
            'options' => [
                ['value' => 'small', 'label' => 'Small (under 20 lbs)'],
                ['value' => 'medium', 'label' => 'Medium (20-50 lbs)'],
                ['value' => 'large', 'label' => 'Large (50-100 lbs)'],
                ['value' => 'giant', 'label' => 'Giant (100+ lbs)']
            ],
            'auto_advance' => true
        ],

        // Question 5: Pre-existing conditions
        [
            'id' => 'pre_existing',
            'type' => 'radio',
            'question' => 'Does your pet have any pre-existing conditions?',
            'options' => [
                ['value' => 'no', 'label' => 'No'],
                ['value' => 'yes', 'label' => 'Yes']
            ],
            'auto_advance' => true
        ],

        // Question 6: Contact Form
        [
            'id' => 'contact',
            'type' => 'contact_form',
            'question' => 'Get Your Personalized Pet Insurance Quote!',
            'fields' => [
                ['name' => 'given-name', 'label' => 'First Name', 'type' => 'text', 'required' => true],
                ['name' => 'family-name', 'label' => 'Last Name', 'type' => 'text', 'required' => true],
                ['name' => 'email', 'label' => 'Email', 'type' => 'email', 'required' => true],
                ['name' => 'tel', 'label' => 'Phone', 'type' => 'tel', 'required' => true]
            ],
            'submit_text' => 'See My Quote Options'
        ]
    ],

    'loading_modal' => [
        'messages' => [
            'Finding the best coverage for your pet...',
            'Comparing plans from top providers...',
            'Almost ready...'
        ]
    ]
],
```

### Step 5: Add Carriers

```php
'carriers' => [
    [
        'id' => 'embrace',
        'name' => 'Embrace Pet Insurance',
        'logo' => 'embrace.svg',
        'rating' => 'A+',
        'rating_source' => 'AM Best',
        'highlights' => [
            'Covers exam fees',
            'Diminishing deductible',
            'Wellness rewards'
        ],
        'enabled' => true,
        'priority' => 1
    ],
    [
        'id' => 'trupanion',
        'name' => 'Trupanion',
        'logo' => 'trupanion.svg',
        'rating' => 'A',
        'highlights' => [
            '90% coverage on eligible costs',
            'No payout limits',
            'Direct vet payment'
        ],
        'enabled' => true,
        'priority' => 2
    ],
    [
        'id' => 'healthy_paws',
        'name' => 'Healthy Paws',
        'logo' => 'healthy-paws.svg',
        'rating' => 'A+',
        'highlights' => [
            'Unlimited lifetime benefits',
            'No caps on claims',
            'Fast claims processing'
        ],
        'enabled' => true,
        'priority' => 3
    ]
],
```

### Step 6: Configure Routing

```php
'routing' => [
    'stealthlabz' => [
        'enabled' => true,
        'webhook_key' => 'pet',
        'field_mapping' => [
            'c1' => ['value' => 'GoQuoteRocket'],
            'c4' => ['value' => 99],
            'c7' => ['field' => 'zip'],
            'c10' => ['value' => 'pet'],
            'first_name' => ['field' => 'given-name'],
            'last_name' => ['field' => 'family-name'],
            'email' => ['field' => 'email'],
            'phone' => ['field' => 'tel'],
            'pet_type' => ['field' => 'pet_type'],
            'pet_age' => ['field' => 'pet_age']
        ]
    ],
    'waypoint' => [
        'enabled' => true,
        'field_mapping' => [
            'vertical' => ['value' => 'pet'],
            'first_name' => ['field' => 'given-name'],
            'last_name' => ['field' => 'family-name'],
            'email' => ['field' => 'email'],
            'phone' => ['field' => 'tel'],
            'zip' => ['field' => 'zip']
        ]
    ]
]
```

### Step 7: Add Webhook ID

In `config/integrations.php`:

```php
'stealthlabz' => [
    'webhooks' => [
        'auto' => 'c10ebcce-...',
        'life' => '...',
        'pet' => 'YOUR-PET-WEBHOOK-ID-HERE',  // Add this
    ]
]
```

### Step 8: Add GTM ID (Optional)

In `config/tracking.php`:

```php
'gtm' => [
    'auto' => 'GTM-AUTO123',
    'life' => 'GTM-LIFE456',
    'pet' => 'GTM-PET789',  // Add this
]
```

### Step 9: Test!

Visit: `http://pet.goquoterocket.local`

The vertical will automatically load with your configuration.

---

## Vertical Configuration Deep Dive

### Required Fields

| Field | Type | Description |
|-------|------|-------------|
| `id` | string | Unique identifier (URL slug) |
| `name` | string | Display name |
| `subdomain` | string | Subdomain prefix |
| `enabled` | boolean | Active status |
| `landing` | array | Landing page content |
| `flow` | array | Questionnaire configuration |
| `carriers` | array | Offer wall carriers |
| `routing` | array | Lead routing rules |

### Optional Fields

| Field | Type | Description |
|-------|------|-------------|
| `meta` | array | SEO meta tags |
| `tracking` | array | Per-vertical tracking overrides |
| `features` | array | Feature flags |

---

## Question Types Reference

### Text Input

```php
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
    'delay' => 500
]
```

### Radio Buttons

```php
[
    'id' => 'homeowner',
    'type' => 'radio',
    'question' => 'Are you a homeowner?',
    'subtext' => 'Homeowners may qualify for bundle discounts.',
    'options' => [
        ['value' => 'yes', 'label' => 'Yes', 'icon' => 'home'],
        ['value' => 'no', 'label' => 'No', 'icon' => 'building']
    ],
    'auto_advance' => true,
    'delay' => 250
]
```

### Contact Form

```php
[
    'id' => 'contact',
    'type' => 'contact_form',
    'question' => 'Almost done! Enter your details.',
    'subtext' => 'Your information is secure and never shared.',
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
            'required' => true
        ],
        [
            'name' => 'email',
            'label' => 'Email Address',
            'type' => 'email',
            'autocomplete' => 'email',
            'required' => true,
            'validation' => ['pattern' => '/^[^\s@]+@[^\s@]+\.[^\s@]+$/']
        ],
        [
            'name' => 'tel',
            'label' => 'Phone Number',
            'type' => 'tel',
            'autocomplete' => 'tel',
            'required' => true
        ]
    ],
    'newsletter' => [
        'enabled' => true,
        'field_name' => 'newsletter_optin',
        'default_checked' => true,
        'label' => 'Send me money-saving tips and offers.'
    ],
    'trustedform' => true,
    'submit_text' => 'See My Quotes'
]
```

### Select Dropdown

```php
[
    'id' => 'coverage_amount',
    'type' => 'select',
    'question' => 'How much coverage do you need?',
    'options' => [
        ['value' => '50000', 'label' => '$50,000'],
        ['value' => '100000', 'label' => '$100,000'],
        ['value' => '250000', 'label' => '$250,000'],
        ['value' => '500000', 'label' => '$500,000'],
        ['value' => '1000000', 'label' => '$1,000,000+']
    ],
    'auto_advance' => true
]
```

---

## Carrier Configuration

### Basic Carrier

```php
[
    'id' => 'statefarm',           // Unique ID
    'name' => 'State Farm',        // Display name
    'logo' => 'statefarm.svg',     // Logo filename (in cdn/images/carriers/)
    'rating' => 'A++',             // Rating value
    'rating_source' => 'AM Best',  // Rating source
    'highlights' => [              // 3 bullet points
        'Largest auto insurer in the US',
        'Discounts for safe drivers',
        '24/7 claims support'
    ],
    'cta_text' => 'Get Quote',     // Button text
    'enabled' => true,             // Show/hide
    'priority' => 1                // Display order (1 = first)
]
```

### Carrier with Eligibility

```php
[
    'id' => 'usaa',
    'name' => 'USAA',
    'logo' => 'usaa.svg',
    'rating' => 'A++',
    'highlights' => [
        'Military exclusive benefits',
        'Lowest rates for service members'
    ],
    'enabled' => true,
    'priority' => 3,
    // Only show to military users
    'eligibility' => [
        'military' => 'yes'      // Matches answer to 'military' question
    ]
]
```

---

## Eligibility Rules

Carriers can be conditionally shown based on user answers.

### Single Condition

```php
'eligibility' => [
    'military' => 'yes'    // Show only if military=yes
]
```

### Multiple Conditions (AND)

```php
'eligibility' => [
    'military' => 'yes',
    'age_range' => '25-49'  // Must match BOTH
]
```

### Array of Values (OR)

```php
'eligibility' => [
    'credit_score' => ['excellent', 'good']  // Match ANY of these
]
```

### Filtering Logic

```php
// In Carrier model
public static function filterByEligibility(array $carriers, array $userData): array
{
    return array_filter($carriers, function($carrier) use ($userData) {
        if (empty($carrier['eligibility'])) {
            return true;  // No rules = show to all
        }

        foreach ($carrier['eligibility'] as $field => $required) {
            $userValue = $userData[$field] ?? null;

            if (is_array($required)) {
                if (!in_array($userValue, $required)) {
                    return false;
                }
            } else {
                if ($userValue !== $required) {
                    return false;
                }
            }
        }

        return true;
    });
}
```

---

## Testing Your Vertical

### 1. Basic Load Test

```
Visit: http://{vertical}.goquoterocket.local
Expected: Landing page loads with your content
```

### 2. Flow Test

```
1. Click CTA button
2. Complete all questions
3. Submit form
4. Verify redirect to offer wall
```

### 3. API Test

```bash
curl -X POST http://api.goquoterocket.local/submit.php \
  -d "vertical=pet" \
  -d "given-name=John" \
  -d "family-name=Smith" \
  -d "email=john@example.com" \
  -d "tel=5555551234" \
  -d "zip=12345" \
  -d "pet_type=dog"
```

### 4. Carrier Eligibility Test

```
1. Answer questions with specific values
2. Verify correct carriers appear on offer wall
3. Test with different answers
```

### 5. Browser Console Check

```
1. Open DevTools (F12)
2. Complete flow
3. Check for JavaScript errors
4. Verify tracking events fire
```

### 6. Checklist

- [ ] Landing page headline displays correctly
- [ ] All benefits render
- [ ] Testimonial displays
- [ ] Flow page loads
- [ ] Progress bar works
- [ ] All questions render
- [ ] Validation works (try invalid ZIP)
- [ ] Auto-advance works on radio buttons
- [ ] Contact form validates
- [ ] Form submits successfully
- [ ] Loading modal appears
- [ ] Redirect to offer wall works
- [ ] Correct carriers display
- [ ] Carrier eligibility filtering works
- [ ] No console errors

---

## Common Issues

### Vertical Not Loading

```
Issue: 404 or shows homepage
Fix:
1. Check config file exists: config/verticals/{id}.php
2. Check 'enabled' => true
3. Check subdomain in hosts file (local)
4. Check Apache VirtualHost (local)
```

### Questions Not Rendering

```
Issue: Blank flow page
Fix:
1. Check 'questions' array syntax
2. Validate JSON in browser console
3. Check FunnelEngine.js for errors
```

### API Submission Fails

```
Issue: Form submits but errors
Fix:
1. Check webhook ID in integrations.php
2. Check field_mapping matches form field names
3. Check network tab for response
```

### Carriers Not Showing

```
Issue: Empty offer wall
Fix:
1. Check 'carriers' array
2. Check 'enabled' => true
3. Check eligibility rules match user data
```
