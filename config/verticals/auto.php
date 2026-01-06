<?php
/**
 * Auto Insurance Vertical Configuration
 *
 * Complete definition for the auto insurance funnel
 */

return [
    'id' => 'auto',
    'name' => 'Auto Insurance',
    'subdomain' => 'auto',
    'slug' => 'auto',
    'enabled' => true,

    // Landing Page Content
    'landing' => [
        'page_title' => 'Auto Insurance Quotes - Compare & Save | GoQuoteRocket',
        'meta_description' => 'Compare auto insurance quotes from top carriers and save up to $800/year. Get your free quote in 60 seconds.',
        'headline' => 'Auto Insurance Rates from $29/month',
        'subheadline' => 'Compare rates in 1 minute and save today.',
        'cta_text' => 'Get My Free Quotes',
        'cta_secondary' => 'Compare 20+ Carriers',
        'hero_image' => 'auto-hero.jpg',
        'tagline' => 'Save up to $800 per year on auto insurance',

        // Benefits list with icons
        'benefits' => [
            [
                'icon' => 'search',
                'text' => 'Compare quotes from 20+ carriers'
            ],
            [
                'icon' => 'piggy-bank',
                'text' => 'Save up to $800 per year'
            ],
            [
                'icon' => 'zap',
                'text' => 'Get quotes in 60 seconds'
            ],
            [
                'icon' => 'shield-check',
                'text' => 'No hidden fees, completely free'
            ]
        ],

        // Testimonial
        'testimonial' => [
            'quote' => 'GoQuoteRocket helped me save $800 a year on my auto insurance! The process was so easy and fast.',
            'author' => 'Sarah M.',
            'location' => 'Phoenix, AZ',
            'source' => 'Trustpilot',
            'rating' => 5,
            'verified' => true
        ],

        // Trust badges
        'trust_badges' => [
            'years_in_business' => '10+',
            'customers_served' => '500,000+',
            'average_savings' => '$800',
            'satisfaction_rate' => '4.8/5'
        ]
    ],

    // Funnel Flow Configuration
    'flow' => [
        'title' => 'Auto Insurance Quote Calculator',
        'page_title' => 'Get Your Auto Insurance Quote | GoQuoteRocket',
        'offer_id' => 47,
        'redirect_type' => 'owl', // 'owl' = multiple offers, 'sow' = single offer

        // Progress bar configuration
        'progress_labels' => ['ZIP', 'Home', 'Insured', 'Vehicles', 'Age', 'Military', 'Contact'],
        'show_progress_percentage' => true,

        // Questions configuration
        'questions' => [
            [
                'id' => 'zip',
                'type' => 'text',
                'question' => 'What is your zip code?',
                'placeholder' => '12345',
                'help_text' => 'We use this to find carriers in your area',
                'validation' => [
                    'required' => true,
                    'pattern' => '/^\d{5}$/',
                    'message' => 'Please enter a valid 5-digit ZIP code'
                ],
                'auto_advance' => true,
                'delay' => 500
            ],

            [
                'id' => 'homeowner',
                'type' => 'radio',
                'question' => 'Are you a Homeowner?',
                'help_text' => 'Homeowners often qualify for additional discounts',
                'options' => [
                    ['value' => 'yes', 'label' => 'Yes', 'icon' => 'home'],
                    ['value' => 'no', 'label' => 'No', 'icon' => 'building']
                ],
                'validation' => [
                    'required' => true
                ],
                'auto_advance' => true,
                'delay' => 250
            ],

            [
                'id' => 'currently_insured',
                'type' => 'radio',
                'question' => 'Are you currently Insured?',
                'help_text' => 'Currently insured drivers may qualify for better rates',
                'options' => [
                    ['value' => 'yes', 'label' => 'Yes', 'icon' => 'shield-check'],
                    ['value' => 'no', 'label' => 'No', 'icon' => 'shield-x']
                ],
                'validation' => [
                    'required' => true
                ],
                'auto_advance' => true,
                'delay' => 250
            ],

            [
                'id' => 'multiple_vehicles',
                'type' => 'radio',
                'question' => 'Multiple vehicles to insure?',
                'help_text' => 'Insuring multiple vehicles can save you money',
                'options' => [
                    ['value' => 'yes', 'label' => 'Yes', 'icon' => 'cars'],
                    ['value' => 'no', 'label' => 'No', 'icon' => 'car']
                ],
                'validation' => [
                    'required' => true
                ],
                'auto_advance' => true,
                'delay' => 250
            ],

            [
                'id' => 'age_range',
                'type' => 'radio',
                'question' => 'What is your Age?',
                'help_text' => 'Your age helps us find the best rates for you',
                'options' => [
                    ['value' => '18-24', 'label' => '18-24'],
                    ['value' => '25-49', 'label' => '25-49'],
                    ['value' => '50-64', 'label' => '50-64'],
                    ['value' => '65+', 'label' => '65+']
                ],
                'validation' => [
                    'required' => true
                ],
                'auto_advance' => true,
                'delay' => 250
            ],

            [
                'id' => 'military_status',
                'type' => 'radio',
                'question' => 'Have you served in the Military?',
                'help_text' => 'Veterans and active military may qualify for exclusive discounts',
                'options' => [
                    ['value' => 'yes', 'label' => 'Yes', 'icon' => 'flag'],
                    ['value' => 'no', 'label' => 'No', 'icon' => 'minus']
                ],
                'validation' => [
                    'required' => true
                ],
                'auto_advance' => true,
                'delay' => 250
            ],

            [
                'id' => 'contact',
                'type' => 'contact_form',
                'question' => 'You\'re Pre-Qualified For Major Discounts!',
                'subheading' => 'Enter your details to see your personalized quotes',
                'fields' => [
                    [
                        'name' => 'given-name',
                        'label' => 'First Name',
                        'type' => 'text',
                        'placeholder' => 'John',
                        'required' => true,
                        'autocomplete' => 'given-name'
                    ],
                    [
                        'name' => 'family-name',
                        'label' => 'Last Name',
                        'type' => 'text',
                        'placeholder' => 'Smith',
                        'required' => true,
                        'autocomplete' => 'family-name'
                    ],
                    [
                        'name' => 'email',
                        'label' => 'Email Address',
                        'type' => 'email',
                        'placeholder' => 'john.smith@example.com',
                        'required' => true,
                        'autocomplete' => 'email',
                        'validation' => [
                            'pattern' => '/^[^\s@]+@[^\s@]+\.[^\s@]+$/',
                            'message' => 'Please enter a valid email address'
                        ]
                    ]
                ],
                'newsletter' => [
                    'enabled' => true,
                    'text' => 'Yes, I want to receive helpful insurance tips and exclusive offers from GoQuoteRocket!',
                    'default_checked' => true
                ],
                'trustedform' => true,
                'submit_text' => 'See My Instant Quotes',
                'submit_icon' => 'arrow-right'
            ]
        ],

        // Loading modal configuration
        'loading_modal' => [
            'enabled' => true,
            'messages' => [
                'Analyzing your profile...',
                'Comparing quotes from top carriers in your area...',
                'Finding your best auto insurance rates...',
                'Complete! Your personalized matches are ready.'
            ],
            'duration_per_message' => 800
        ]
    ],

    // Offer Wall Configuration
    'carriers' => [
        [
            'id' => 'statefarm',
            'name' => 'State Farm',
            'logo' => 'statefarm-logo.svg',
            'logo_color' => 'statefarm-logo-color.svg',
            'rating' => 'A++',
            'rating_source' => 'AM Best',
            'type' => 'carrier',
            'url_key' => 'statefarm_auto',
            'highlights' => [
                'Largest auto insurer in the US',
                'Local agent support',
                'Multiple discount options'
            ],
            'enabled' => true,
            'priority' => 1
        ],
        [
            'id' => 'progressive',
            'name' => 'Progressive',
            'logo' => 'progressive-logo.svg',
            'logo_color' => 'progressive-logo-color.svg',
            'rating' => 'A+',
            'rating_source' => 'AM Best',
            'type' => 'carrier',
            'url_key' => 'progressive_auto',
            'highlights' => [
                'Name Your Price® tool',
                'Snapshot® discount program',
                'Easy online management'
            ],
            'enabled' => true,
            'priority' => 2
        ],
        [
            'id' => 'usaa',
            'name' => 'USAA',
            'logo' => 'usaa-logo.svg',
            'logo_color' => 'usaa-logo-color.svg',
            'rating' => 'A++',
            'rating_source' => 'AM Best',
            'type' => 'carrier',
            'url_key' => 'usaa_auto',
            'highlights' => [
                'Exclusive military discounts',
                'Top-rated customer service',
                'Competitive rates for veterans'
            ],
            'enabled' => true,
            'priority' => 3,
            'eligibility' => ['military' => 'yes'] // Show only to military
        ],
        [
            'id' => 'geico',
            'name' => 'GEICO',
            'logo' => 'geico-logo.svg',
            'logo_color' => 'geico-logo-color.svg',
            'rating' => 'A++',
            'rating_source' => 'AM Best',
            'type' => 'carrier',
            'url_key' => 'geico_auto',
            'highlights' => [
                '15 minutes could save 15%',
                'Mobile app convenience',
                'Emergency roadside assistance'
            ],
            'enabled' => true,
            'priority' => 4
        ],
        [
            'id' => 'allstate',
            'name' => 'Allstate',
            'logo' => 'allstate-logo.svg',
            'logo_color' => 'allstate-logo-color.svg',
            'rating' => 'A+',
            'rating_source' => 'AM Best',
            'type' => 'carrier',
            'url_key' => 'allstate_auto',
            'highlights' => [
                'Drivewise® rewards program',
                'Accident forgiveness available',
                'New car replacement coverage'
            ],
            'enabled' => true,
            'priority' => 5
        ]
    ],

    // API Routing Configuration
    'routing' => [
        'stealthlabz' => [
            'enabled' => true,
            'webhook_key' => 'auto', // Maps to integrations.php webhooks array
            'field_mapping' => [
                'c1' => ['value' => 'GoQuoteRocket'],
                'c2' => ['field' => 'aff_id'],
                'c3' => ['field' => 'aff_sub2'],
                'c4' => ['field' => 'offer_id'],
                'c7' => ['field' => 'zip'],
                'c10' => ['value' => 'auto'],
                'first_name' => ['field' => 'given-name'],
                'last_name' => ['field' => 'family-name'],
                'email' => ['field' => 'email'],
                'homeowner' => ['field' => 'homeowner'],
                'currently_insured' => ['field' => 'currently_insured'],
                'age_range' => ['field' => 'age_range'],
                'military' => ['field' => 'military_status']
            ]
        ],
        'waypoint' => [
            'enabled' => true,
            'field_mapping' => [
                'vertical' => ['value' => 'auto'],
                'first_name' => ['field' => 'given-name'],
                'last_name' => ['field' => 'family-name'],
                'email' => ['field' => 'email'],
                'zip' => ['field' => 'zip']
            ]
        ]
    ]
];
