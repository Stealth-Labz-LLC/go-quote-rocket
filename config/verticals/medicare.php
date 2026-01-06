<?php
/**
 * Medicare Vertical Configuration
 *
 * Medicare Supplement & Medicare Advantage insurance
 */

return [
    'id' => 'medicare',
    'name' => 'Medicare Insurance',
    'subdomain' => 'medicare',
    'enabled' => true,

    // Landing Page Content
    'landing' => [
        'page_title' => 'Compare Medicare Plans - Get Free Quotes',
        'meta_description' => 'Compare Medicare Supplement and Medicare Advantage plans from top providers. Free quotes in minutes.',
        'headline' => 'Find the Right Medicare Plan for Your Needs',
        'subheadline' => 'Compare Medicare Supplement and Medicare Advantage plans from trusted providers. Free quotes in minutes.',
        'tagline' => 'Medicare made simple',
        'cta_text' => 'Compare Medicare Plans',
        'show_phone' => true,
        'benefits' => [
            'Compare plans from top Medicare providers',
            'Free quotes with no obligation',
            'Licensed Medicare specialists available',
            'Plans starting at $0/month',
            'Prescription drug coverage options'
        ],
        'testimonial' => [
            'quote' => 'I was confused about Medicare options, but they helped me find the perfect plan that covers all my prescriptions.',
            'author' => 'Patricia M.',
            'location' => 'Phoenix, AZ'
        ]
    ],

    // Funnel Flow Configuration
    'flow' => [
        'progress_labels' => [
            'Coverage Information',
            'Personal Details',
            'Contact Information'
        ],
        'loading_messages' => [
            'Finding Medicare plans in your area...',
            'Comparing Medicare Supplement options...',
            'Checking Medicare Advantage availability...',
            'Reviewing prescription drug coverage...',
            'Almost there! Preparing your personalized quotes...'
        ],
        'redirect_type' => 'owl', // 'owl' (multiple offers) or 'sow' (single offer)

        // Question Configuration
        'questions' => [
            // Step 1: ZIP Code
            [
                'id' => 'zip_code',
                'type' => 'text',
                'label' => 'What is your ZIP code?',
                'sublabel' => 'We use this to find plans available in your area',
                'placeholder' => 'Enter ZIP code',
                'validation' => [
                    'required' => true,
                    'pattern' => '^\d{5}$',
                    'error_message' => 'Please enter a valid 5-digit ZIP code'
                ],
                'auto_advance' => true,
                'progress_percent' => 14
            ],

            // Step 2: Age
            [
                'id' => 'age_range',
                'type' => 'radio',
                'label' => 'What is your age?',
                'sublabel' => 'Medicare is typically available at age 65',
                'options' => [
                    ['value' => 'under_65', 'label' => 'Under 65', 'icon' => '👤'],
                    ['value' => '65-74', 'label' => '65-74', 'icon' => '👨'],
                    ['value' => '75+', 'label' => '75 or older', 'icon' => '👴']
                ],
                'auto_advance' => true,
                'progress_percent' => 28
            ],

            // Step 3: Currently Insured
            [
                'id' => 'currently_insured',
                'type' => 'radio',
                'label' => 'Do you currently have Medicare Part A & B?',
                'sublabel' => 'This helps us find the right supplemental coverage',
                'options' => [
                    ['value' => 'yes', 'label' => 'Yes, I have Part A & B', 'icon' => '✓'],
                    ['value' => 'no', 'label' => 'No, not yet', 'icon' => '✗'],
                    ['value' => 'not_sure', 'label' => 'Not sure', 'icon' => '?']
                ],
                'auto_advance' => true,
                'progress_percent' => 42
            ],

            // Step 4: Plan Type Interest
            [
                'id' => 'plan_type',
                'type' => 'radio',
                'label' => 'What type of Medicare plan interests you?',
                'sublabel' => 'Both options provide additional coverage beyond Original Medicare',
                'options' => [
                    ['value' => 'supplement', 'label' => 'Medicare Supplement (Medigap)', 'icon' => '📋'],
                    ['value' => 'advantage', 'label' => 'Medicare Advantage (Part C)', 'icon' => '⭐'],
                    ['value' => 'not_sure', 'label' => 'Not sure / Need help deciding', 'icon' => '🤔']
                ],
                'auto_advance' => true,
                'progress_percent' => 56
            ],

            // Step 5: Prescription Drugs
            [
                'id' => 'prescription_drugs',
                'type' => 'radio',
                'label' => 'Do you take prescription medications?',
                'sublabel' => 'This helps us find plans with prescription drug coverage',
                'options' => [
                    ['value' => 'yes_multiple', 'label' => 'Yes, multiple medications', 'icon' => '💊'],
                    ['value' => 'yes_few', 'label' => 'Yes, a few medications', 'icon' => '💊'],
                    ['value' => 'no', 'label' => 'No prescriptions', 'icon' => '✗']
                ],
                'auto_advance' => true,
                'progress_percent' => 70
            ],

            // Step 6: Gender
            [
                'id' => 'gender',
                'type' => 'radio',
                'label' => 'What is your gender?',
                'sublabel' => 'Required by insurance providers',
                'options' => [
                    ['value' => 'male', 'label' => 'Male', 'icon' => '👨'],
                    ['value' => 'female', 'label' => 'Female', 'icon' => '👩']
                ],
                'auto_advance' => true,
                'progress_percent' => 84
            ],

            // Step 7: Contact Form
            [
                'id' => 'contact_form',
                'type' => 'contact_form',
                'label' => 'Where should we send your Medicare quotes?',
                'sublabel' => 'Your information is secure and will never be sold',
                'fields' => [
                    [
                        'name' => 'first_name',
                        'type' => 'text',
                        'label' => 'First Name',
                        'placeholder' => 'John',
                        'required' => true
                    ],
                    [
                        'name' => 'last_name',
                        'type' => 'text',
                        'label' => 'Last Name',
                        'placeholder' => 'Smith',
                        'required' => true
                    ],
                    [
                        'name' => 'email',
                        'type' => 'email',
                        'label' => 'Email Address',
                        'placeholder' => 'john@example.com',
                        'required' => true
                    ],
                    [
                        'name' => 'phone',
                        'type' => 'tel',
                        'label' => 'Phone Number',
                        'placeholder' => '(555) 555-5555',
                        'required' => true
                    ]
                ],
                'consent_text' => 'By clicking "Get My Quotes", I agree to receive calls and texts about Medicare plans, including via automated technology, at the number provided. Consent is not required to purchase.',
                'submit_button_text' => 'Get My Free Medicare Quotes',
                'progress_percent' => 100
            ]
        ]
    ],

    // Lead Routing Configuration
    'routing' => [
        'stealthlabz' => [
            'enabled' => true,
            'webhook_key' => 'medicare',
            'field_mapping' => [
                'zip_code' => ['field' => 'zip_code'],
                'age_range' => ['field' => 'age_range'],
                'currently_insured' => ['field' => 'currently_insured'],
                'plan_type' => ['field' => 'plan_type'],
                'prescription_drugs' => ['field' => 'prescription_drugs'],
                'gender' => ['field' => 'gender'],
                'first_name' => ['field' => 'first_name'],
                'last_name' => ['field' => 'last_name'],
                'email' => ['field' => 'email'],
                'phone' => ['field' => 'phone'],
                'vertical' => ['value' => 'medicare']
            ]
        ],
        'waypoint' => [
            'enabled' => false,
            'field_mapping' => []
        ]
    ],

    // Carrier/Provider Configuration
    'carriers' => [
        [
            'id' => 'aarp_uhc',
            'name' => 'AARP / UnitedHealthcare',
            'enabled' => true,
            'priority' => 1,
            'logo' => '/images/carriers/aarp-uhc.png',
            'rating' => 4.6,
            'highlights' => [
                'Most popular Medicare Supplement provider',
                'AARP member discounts available',
                'Nationwide coverage',
                'Excellent customer service'
            ],
            'url_key' => 'aarp_uhc',
            'eligibility' => [] // No restrictions
        ],
        [
            'id' => 'humana',
            'name' => 'Humana',
            'enabled' => true,
            'priority' => 2,
            'logo' => '/images/carriers/humana.png',
            'rating' => 4.5,
            'highlights' => [
                'Wide range of Medicare Advantage plans',
                'Strong prescription drug coverage',
                'Dental and vision benefits',
                'Wellness programs included'
            ],
            'url_key' => 'humana',
            'eligibility' => []
        ],
        [
            'id' => 'anthem',
            'name' => 'Anthem Blue Cross',
            'enabled' => true,
            'priority' => 3,
            'logo' => '/images/carriers/anthem.png',
            'rating' => 4.4,
            'highlights' => [
                'Part of Blue Cross Blue Shield network',
                'Comprehensive Medicare Supplement plans',
                'Competitive rates',
                'Trusted national brand'
            ],
            'url_key' => 'anthem',
            'eligibility' => []
        ],
        [
            'id' => 'mutual_omaha',
            'name' => 'Mutual of Omaha',
            'enabled' => true,
            'priority' => 4,
            'logo' => '/images/carriers/mutual-omaha.png',
            'rating' => 4.3,
            'highlights' => [
                'Over 100 years of insurance experience',
                'Flexible Medicare Supplement options',
                'Household discounts available',
                'Easy online enrollment'
            ],
            'url_key' => 'mutual_omaha',
            'eligibility' => []
        ],
        [
            'id' => 'cigna',
            'name' => 'Cigna',
            'enabled' => true,
            'priority' => 5,
            'logo' => '/images/carriers/cigna.png',
            'rating' => 4.2,
            'highlights' => [
                'Global health service company',
                'Medicare Advantage & Supplement plans',
                'Prescription drug coverage',
                'Health coaching available'
            ],
            'url_key' => 'cigna',
            'eligibility' => []
        ]
    ]
];
