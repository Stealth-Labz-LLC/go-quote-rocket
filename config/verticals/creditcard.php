<?php
/**
 * Credit Card Vertical Configuration
 *
 * Credit card offers (Chime-style banking & card offers)
 */

return [
    'id' => 'creditcard',
    'name' => 'Credit Cards & Banking',
    'subdomain' => 'creditcard',
    'enabled' => true,

    // Landing Page Content
    'landing' => [
        'page_title' => 'Compare Credit Cards & Banking Offers - Find Your Perfect Match',
        'meta_description' => 'Compare credit cards, banking accounts, and financial offers. Find cash back rewards, no annual fees, and sign-up bonuses.',
        'headline' => 'Find the Perfect Credit Card for Your Financial Goals',
        'subheadline' => 'Compare cash back rewards, travel perks, and no-fee options from top financial providers.',
        'tagline' => 'Smart money starts here',
        'cta_text' => 'Compare Card Offers',
        'show_phone' => false,
        'benefits' => [
            'Compare cash back rewards programs',
            'No annual fee options available',
            'Welcome bonuses up to $200+',
            'Build or rebuild your credit',
            'Digital banking with no hidden fees'
        ],
        'testimonial' => [
            'quote' => 'I found a card with 5% cash back on my everyday purchases. The sign-up bonus alone was worth $150!',
            'author' => 'Marcus T.',
            'location' => 'Austin, TX'
        ]
    ],

    // Funnel Flow Configuration
    'flow' => [
        'progress_labels' => [
            'Credit Profile',
            'Financial Information',
            'Contact Details'
        ],
        'loading_messages' => [
            'Finding the best card offers for you...',
            'Comparing cash back rewards programs...',
            'Checking for sign-up bonuses...',
            'Reviewing no annual fee options...',
            'Almost there! Preparing your personalized offers...'
        ],
        'redirect_type' => 'owl', // 'owl' (multiple offers) or 'sow' (single offer)

        // Question Configuration
        'questions' => [
            // Step 1: ZIP Code
            [
                'id' => 'zip_code',
                'type' => 'text',
                'label' => 'What is your ZIP code?',
                'sublabel' => 'We use this to find offers available in your area',
                'placeholder' => 'Enter ZIP code',
                'validation' => [
                    'required' => true,
                    'pattern' => '^\d{5}$',
                    'error_message' => 'Please enter a valid 5-digit ZIP code'
                ],
                'auto_advance' => true,
                'progress_percent' => 14
            ],

            // Step 2: Credit Score Range
            [
                'id' => 'credit_score',
                'type' => 'radio',
                'label' => 'What is your credit score range?',
                'sublabel' => 'This helps us match you with the right offers',
                'options' => [
                    ['value' => 'excellent', 'label' => 'Excellent (720+)', 'icon' => '⭐'],
                    ['value' => 'good', 'label' => 'Good (660-719)', 'icon' => '👍'],
                    ['value' => 'fair', 'label' => 'Fair (600-659)', 'icon' => '📊'],
                    ['value' => 'building', 'label' => 'Building/Rebuilding', 'icon' => '🔨']
                ],
                'auto_advance' => true,
                'progress_percent' => 28
            ],

            // Step 3: Primary Interest
            [
                'id' => 'card_interest',
                'type' => 'radio',
                'label' => 'What interests you most?',
                'sublabel' => 'Select your top priority',
                'options' => [
                    ['value' => 'cash_back', 'label' => 'Cash Back Rewards', 'icon' => '💰'],
                    ['value' => 'travel_rewards', 'label' => 'Travel Rewards', 'icon' => '✈️'],
                    ['value' => 'low_interest', 'label' => 'Low Interest Rate', 'icon' => '📉'],
                    ['value' => 'build_credit', 'label' => 'Build Credit', 'icon' => '📈'],
                    ['value' => 'digital_banking', 'label' => 'Digital Banking', 'icon' => '📱']
                ],
                'auto_advance' => true,
                'progress_percent' => 42
            ],

            // Step 4: Annual Income Range
            [
                'id' => 'income_range',
                'type' => 'radio',
                'label' => 'What is your annual household income?',
                'sublabel' => 'This helps determine your eligibility',
                'options' => [
                    ['value' => 'under_25k', 'label' => 'Under $25,000', 'icon' => '💵'],
                    ['value' => '25k_50k', 'label' => '$25,000 - $50,000', 'icon' => '💵'],
                    ['value' => '50k_75k', 'label' => '$50,000 - $75,000', 'icon' => '💰'],
                    ['value' => '75k_100k', 'label' => '$75,000 - $100,000', 'icon' => '💰'],
                    ['value' => 'over_100k', 'label' => 'Over $100,000', 'icon' => '💎']
                ],
                'auto_advance' => true,
                'progress_percent' => 56
            ],

            // Step 5: Currently Have Card
            [
                'id' => 'have_card',
                'type' => 'radio',
                'label' => 'Do you currently have a credit card?',
                'sublabel' => 'Helps us find the right upgrade or starter card',
                'options' => [
                    ['value' => 'yes_multiple', 'label' => 'Yes, multiple cards', 'icon' => '💳'],
                    ['value' => 'yes_one', 'label' => 'Yes, one card', 'icon' => '💳'],
                    ['value' => 'no', 'label' => 'No credit cards', 'icon' => '✗']
                ],
                'auto_advance' => true,
                'progress_percent' => 70
            ],

            // Step 6: Employment Status
            [
                'id' => 'employment',
                'type' => 'radio',
                'label' => 'What is your employment status?',
                'sublabel' => 'Required for card applications',
                'options' => [
                    ['value' => 'employed', 'label' => 'Employed Full-Time', 'icon' => '💼'],
                    ['value' => 'self_employed', 'label' => 'Self-Employed', 'icon' => '👔'],
                    ['value' => 'retired', 'label' => 'Retired', 'icon' => '🏖️'],
                    ['value' => 'other', 'label' => 'Other', 'icon' => '📋']
                ],
                'auto_advance' => true,
                'progress_percent' => 84
            ],

            // Step 7: Contact Form
            [
                'id' => 'contact_form',
                'type' => 'contact_form',
                'label' => 'Where should we send your personalized offers?',
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
                        'required' => false
                    ]
                ],
                'consent_text' => 'By clicking "View My Offers", I agree to receive promotional emails about credit card and banking offers. You can unsubscribe at any time.',
                'submit_button_text' => 'View My Personalized Offers',
                'progress_percent' => 100
            ]
        ]
    ],

    // Lead Routing Configuration
    'routing' => [
        'stealthlabz' => [
            'enabled' => true,
            'webhook_key' => 'creditcard',
            'field_mapping' => [
                'zip_code' => ['field' => 'zip_code'],
                'credit_score' => ['field' => 'credit_score'],
                'card_interest' => ['field' => 'card_interest'],
                'income_range' => ['field' => 'income_range'],
                'have_card' => ['field' => 'have_card'],
                'employment' => ['field' => 'employment'],
                'first_name' => ['field' => 'first_name'],
                'last_name' => ['field' => 'last_name'],
                'email' => ['field' => 'email'],
                'phone' => ['field' => 'phone'],
                'vertical' => ['value' => 'creditcard']
            ]
        ],
        'waypoint' => [
            'enabled' => false,
            'field_mapping' => []
        ]
    ],

    // "Carrier" Configuration (Financial Offers)
    'carriers' => [
        [
            'id' => 'chime',
            'name' => 'Chime Banking',
            'enabled' => true,
            'priority' => 1,
            'logo' => '/images/carriers/chime.png',
            'rating' => 4.7,
            'highlights' => [
                'No monthly fees or minimum balance',
                'Get paid up to 2 days early',
                '$200 overdraft protection with SpotMe',
                '60,000+ fee-free ATMs nationwide'
            ],
            'url_key' => 'chime',
            'eligibility' => [] // No restrictions
        ],
        [
            'id' => 'cash_app',
            'name' => 'Cash App Card',
            'enabled' => true,
            'priority' => 2,
            'logo' => '/images/carriers/cashapp.png',
            'rating' => 4.5,
            'highlights' => [
                'Free Visa debit card',
                'Instant discounts at select merchants',
                'Direct deposit available',
                'Send and receive money instantly'
            ],
            'url_key' => 'cash_app',
            'eligibility' => []
        ],
        [
            'id' => 'sofi',
            'name' => 'SoFi Money',
            'enabled' => true,
            'priority' => 3,
            'logo' => '/images/carriers/sofi.png',
            'rating' => 4.6,
            'highlights' => [
                'Earn up to 4.60% APY',
                'No account fees',
                'Member benefits and career coaching',
                'FDIC insured up to $2M'
            ],
            'url_key' => 'sofi',
            'eligibility' => []
        ],
        [
            'id' => 'discover',
            'name' => 'Discover it® Cash Back',
            'enabled' => true,
            'priority' => 4,
            'logo' => '/images/carriers/discover.png',
            'rating' => 4.8,
            'highlights' => [
                'Earn 5% cash back in rotating categories',
                'No annual fee',
                'Cashback Match for first year',
                'Free FICO® Credit Score'
            ],
            'url_key' => 'discover',
            'eligibility' => [
                'credit_score' => ['excellent', 'good']
            ]
        ],
        [
            'id' => 'capital_one',
            'name' => 'Capital One Quicksilver',
            'enabled' => true,
            'priority' => 5,
            'logo' => '/images/carriers/capitalone.png',
            'rating' => 4.6,
            'highlights' => [
                'Unlimited 1.5% cash back',
                '$200 sign-up bonus',
                'No annual fee',
                'Easy online management'
            ],
            'url_key' => 'capital_one',
            'eligibility' => [
                'credit_score' => ['excellent', 'good']
            ]
        ],
        [
            'id' => 'credit_karma',
            'name' => 'Credit Karma Money',
            'enabled' => true,
            'priority' => 6,
            'logo' => '/images/carriers/creditkarma.png',
            'rating' => 4.4,
            'highlights' => [
                'No minimum balance required',
                'No monthly fees',
                'Early direct deposit',
                'Free credit monitoring included'
            ],
            'url_key' => 'credit_karma',
            'eligibility' => []
        ]
    ]
];
