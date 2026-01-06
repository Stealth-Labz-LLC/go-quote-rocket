<?php
/**
 * Life Insurance Vertical Configuration
 *
 * Complete definition for the life insurance funnel
 */

return [
    'id' => 'life',
    'name' => 'Life Insurance',
    'subdomain' => 'life',
    'slug' => 'life',
    'enabled' => true,

    // Landing Page Content
    'landing' => [
        'page_title' => 'Life Insurance Quotes - Compare & Save | GoQuoteRocket',
        'meta_description' => 'Compare life insurance quotes from top-rated carriers. Coverage from $10/month. Get your free quote in 60 seconds.',
        'headline' => 'Life Insurance from $10/month',
        'subheadline' => 'Protect your family\'s future with affordable coverage.',
        'cta_text' => 'Get My Free Quotes',
        'cta_secondary' => 'Compare Top Carriers',
        'hero_image' => 'life-hero.jpg',
        'tagline' => 'Coverage starting at just $10/month',

        'benefits' => [
            'Compare quotes from top-rated carriers',
            'Coverage up to $1 million available',
            'Fast approval process',
            'No medical exam options available',
            'Licensed agents ready to help'
        ],

        'testimonial' => [
            'quote' => 'I got $500,000 in coverage for just $25/month. The whole process took less than 10 minutes!',
            'author' => 'Michael T.',
            'location' => 'Dallas, TX',
            'source' => 'Trustpilot',
            'rating' => 5,
            'verified' => true
        ],

        'trust_badges' => [
            'years_in_business' => '10+',
            'customers_served' => '250,000+',
            'coverage_written' => '$5B+',
            'satisfaction_rate' => '4.9/5'
        ]
    ],

    // Funnel Flow Configuration
    'flow' => [
        'title' => 'Life Insurance Quote Calculator',
        'page_title' => 'Get Your Life Insurance Quote | GoQuoteRocket',
        'offer_id' => 58,
        'redirect_type' => 'owl',

        'progress_labels' => ['ZIP', 'Coverage', 'Tobacco', 'Health', 'Contact'],
        'show_progress_percentage' => true,

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
                'id' => 'coverage_amount',
                'type' => 'radio',
                'question' => 'How much coverage do you need?',
                'help_text' => 'Choose the amount that best protects your family',
                'options' => [
                    ['value' => '50000', 'label' => '$50,000', 'icon' => 'shield'],
                    ['value' => '100000', 'label' => '$100,000', 'icon' => 'shield'],
                    ['value' => '250000', 'label' => '$250,000', 'icon' => 'shield'],
                    ['value' => '500000', 'label' => '$500,000+', 'icon' => 'shield-check']
                ],
                'validation' => [
                    'required' => true
                ],
                'auto_advance' => true,
                'delay' => 250
            ],

            [
                'id' => 'tobacco',
                'type' => 'radio',
                'question' => 'Do you use tobacco products?',
                'help_text' => 'This includes cigarettes, cigars, and vaping',
                'options' => [
                    ['value' => 'yes', 'label' => 'Yes'],
                    ['value' => 'no', 'label' => 'No']
                ],
                'validation' => [
                    'required' => true
                ],
                'auto_advance' => true,
                'delay' => 250
            ],

            [
                'id' => 'health_rating',
                'type' => 'radio',
                'question' => 'How would you rate your health?',
                'help_text' => 'Be honest - we\'ll find the best rates for your situation',
                'options' => [
                    ['value' => 'excellent', 'label' => 'Excellent', 'icon' => 'heart'],
                    ['value' => 'good', 'label' => 'Good', 'icon' => 'heart'],
                    ['value' => 'fair', 'label' => 'Fair', 'icon' => 'heart']
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
                'question' => 'Get Your Life Insurance Quotes',
                'subheading' => 'Enter your details to see personalized rates',
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
                    ],
                    [
                        'name' => 'phone',
                        'label' => 'Phone Number',
                        'type' => 'tel',
                        'placeholder' => '(555) 123-4567',
                        'required' => true,
                        'autocomplete' => 'tel',
                        'validation' => [
                            'pattern' => '/^\d{10}$/',
                            'message' => 'Please enter a valid 10-digit phone number'
                        ]
                    ]
                ],
                'newsletter' => [
                    'enabled' => true,
                    'text' => 'Yes, I want to receive helpful life insurance tips from GoQuoteRocket!',
                    'default_checked' => true
                ],
                'trustedform' => true,
                'submit_text' => 'Get My Quotes',
                'submit_icon' => 'arrow-right'
            ]
        ],

        'loading_modal' => [
            'enabled' => true,
            'messages' => [
                'Analyzing your coverage needs...',
                'Comparing quotes from top life insurance carriers...',
                'Finding your best rates...',
                'Complete! Your personalized quotes are ready.'
            ],
            'duration_per_message' => 800
        ]
    ],

    // Offer Wall Configuration
    'carriers' => [
        [
            'id' => 'mutual_of_omaha',
            'name' => 'Mutual of Omaha',
            'logo' => 'mutual-of-omaha-logo.svg',
            'logo_color' => 'mutual-of-omaha-logo-color.svg',
            'rating' => 'A+',
            'rating_source' => 'AM Best',
            'type' => 'carrier',
            'url_key' => 'mutual_life',
            'highlights' => [
                'Over 100 years of experience',
                'No medical exam options',
                'Quick approval process'
            ],
            'enabled' => true,
            'priority' => 1
        ],
        [
            'id' => 'prudential',
            'name' => 'Prudential',
            'logo' => 'prudential-logo.svg',
            'logo_color' => 'prudential-logo-color.svg',
            'rating' => 'A+',
            'rating_source' => 'AM Best',
            'type' => 'carrier',
            'url_key' => 'prudential_life',
            'highlights' => [
                'Trusted since 1875',
                'Flexible coverage options',
                'Living benefits available'
            ],
            'enabled' => true,
            'priority' => 2
        ],
        [
            'id' => 'aig',
            'name' => 'AIG',
            'logo' => 'aig-logo.svg',
            'logo_color' => 'aig-logo-color.svg',
            'rating' => 'A',
            'rating_source' => 'AM Best',
            'type' => 'carrier',
            'url_key' => 'aig_life',
            'highlights' => [
                'Global insurance leader',
                'Competitive premiums',
                'Easy online application'
            ],
            'enabled' => true,
            'priority' => 3
        ]
    ],

    // API Routing Configuration
    'routing' => [
        'stealthlabz' => [
            'enabled' => true,
            'webhook_key' => 'life',
            'field_mapping' => [
                'c1' => ['value' => 'GoQuoteRocket'],
                'c2' => ['field' => 'aff_id'],
                'c4' => ['field' => 'offer_id'],
                'c7' => ['field' => 'zip'],
                'c10' => ['value' => 'life'],
                'first_name' => ['field' => 'given-name'],
                'last_name' => ['field' => 'family-name'],
                'email' => ['field' => 'email'],
                'phone' => ['field' => 'phone'],
                'coverage_amount' => ['field' => 'coverage_amount'],
                'tobacco' => ['field' => 'tobacco'],
                'health' => ['field' => 'health_rating']
            ]
        ],
        'waypoint' => [
            'enabled' => true,
            'field_mapping' => [
                'vertical' => ['value' => 'life'],
                'first_name' => ['field' => 'given-name'],
                'last_name' => ['field' => 'family-name'],
                'email' => ['field' => 'email'],
                'phone' => ['field' => 'phone'],
                'zip' => ['field' => 'zip']
            ]
        ]
    ],

    'carrier_urls' => [
        'mutual_life' => 'https://www.mny0fw3trk.com/?nid=2750&oid=58&carrier=mutual',
        'prudential_life' => 'https://www.mny0fw3trk.com/?nid=2750&oid=58&carrier=prudential',
        'aig_life' => 'https://www.mny0fw3trk.com/?nid=2750&oid=58&carrier=aig'
    ]
];
