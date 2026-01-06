<?php
/**
 * Central Carriers Database
 *
 * Single source of truth for all insurance carriers across verticals
 * Each vertical references carriers from this master list
 */

return [
    // AUTO INSURANCE CARRIERS - Color logos first
    'statefarm' => [
        'name' => 'State Farm',
        'logo' => 'state-farm.svg',
        'logo_white' => 'StateFarm_white.svg',
        'verticals' => ['auto', 'home', 'life'],
        'rating' => 'A++',
        'rating_source' => 'AM Best'
    ],
    'usaa' => [
        'name' => 'USAA',
        'logo' => 'usaa.svg',
        'verticals' => ['auto', 'home', 'life'],
        'rating' => 'A++',
        'rating_source' => 'AM Best'
    ],
    'libertymutual' => [
        'name' => 'Liberty Mutual',
        'logo' => 'libertymutual-logo.svg',
        'verticals' => ['auto', 'home'],
        'rating' => 'A',
        'rating_source' => 'AM Best'
    ],
    'farmers' => [
        'name' => 'Farmers',
        'logo' => 'farmers-logo.svg',
        'verticals' => ['auto', 'home'],
        'rating' => 'A',
        'rating_source' => 'AM Best'
    ],
    'aaa' => [
        'name' => 'AAA',
        'logo' => 'aaa.svg',
        'verticals' => ['auto', 'life', 'home'],
        'rating' => 'A',
        'rating_source' => 'AM Best'
    ],
    'progressive' => [
        'name' => 'Progressive',
        'logo' => 'progressive-logo.svg',
        'verticals' => ['auto', 'home'],
        'rating' => 'A+',
        'rating_source' => 'AM Best'
    ],
    'geico' => [
        'name' => 'GEICO',
        'logo' => 'geico-logo.svg',
        'verticals' => ['auto'],
        'rating' => 'A++',
        'rating_source' => 'AM Best'
    ],
    'allstate' => [
        'name' => 'Allstate',
        'logo' => 'allstate-logo.svg',
        'verticals' => ['auto', 'home'],
        'rating' => 'A+',
        'rating_source' => 'AM Best'
    ],

    // LIFE INSURANCE CARRIERS
    'aetna' => [
        'name' => 'Aetna',
        'logo' => 'aetna.svg',
        'logo_white' => 'Aetna_white.svg',
        'verticals' => ['life', 'health', 'medicare'],
        'rating' => 'A',
        'rating_source' => 'AM Best'
    ],
    'aflac' => [
        'name' => 'Aflac',
        'logo' => 'aflac.svg',
        'logo_white' => 'Aflac_white.svg',
        'verticals' => ['life'],
        'rating' => 'A+',
        'rating_source' => 'AM Best'
    ],
    'aarp' => [
        'name' => 'AARP',
        'logo' => 'aarp.svg',
        'verticals' => ['life', 'medicare'],
        'rating' => 'A+',
        'rating_source' => 'AM Best'
    ],
    'americanhomelife' => [
        'name' => 'American Home Life',
        'logo' => 'american-home-life.svg',
        'verticals' => ['life'],
        'rating' => 'A-',
        'rating_source' => 'AM Best'
    ],
    'cica' => [
        'name' => 'CICA',
        'logo' => 'cica.svg',
        'verticals' => ['life'],
        'rating' => 'A',
        'rating_source' => 'AM Best'
    ],
    'colonialpenn' => [
        'name' => 'Colonial Penn',
        'logo' => 'colonial-penn.svg',
        'logo_white' => 'ColonialPenn_white.svg',
        'verticals' => ['life'],
        'rating' => 'A-',
        'rating_source' => 'AM Best'
    ],
    'fidelitylife' => [
        'name' => 'Fidelity Life',
        'logo' => 'fidelty-life.svg',
        'verticals' => ['life'],
        'rating' => 'A',
        'rating_source' => 'AM Best'
    ],
    'forestersfinancial' => [
        'name' => 'Foresters Financial',
        'logo' => 'foresters-financial.svg',
        'verticals' => ['life'],
        'rating' => 'A',
        'rating_source' => 'AM Best'
    ],
    'gerberlife' => [
        'name' => 'Gerber Life',
        'logo' => 'gerber-life.svg',
        'verticals' => ['life'],
        'rating' => 'A',
        'rating_source' => 'AM Best'
    ],
    'globelife' => [
        'name' => 'Globe Life',
        'logo' => 'globe-life.svg',
        'logo_white' => 'GlobeLife_white.svg',
        'verticals' => ['life'],
        'rating' => 'A-',
        'rating_source' => 'AM Best'
    ],
    'guaranteetrustlife' => [
        'name' => 'Guarantee Trust Life',
        'logo' => 'guarantee-trust-life.svg',
        'verticals' => ['life'],
        'rating' => 'A-',
        'rating_source' => 'AM Best'
    ],
    'libertybankers' => [
        'name' => 'Liberty Bankers',
        'logo' => 'liberty-bankers.svg',
        'verticals' => ['life'],
        'rating' => 'B++',
        'rating_source' => 'AM Best'
    ],
    'lincolnheritage' => [
        'name' => 'Lincoln Heritage',
        'logo' => 'lincoln-heritage.svg',
        'verticals' => ['life'],
        'rating' => 'A-',
        'rating_source' => 'AM Best'
    ],
    'mutualofomaha' => [
        'name' => 'Mutual of Omaha',
        'logo' => 'mutual-of-omaha.svg',
        'logo_white' => 'MutualofOmaha_white.svg',
        'verticals' => ['life', 'medicare'],
        'rating' => 'A+',
        'rating_source' => 'AM Best'
    ],
    'royalneighbors' => [
        'name' => 'Royal Neighbors of America',
        'logo' => 'royal-neighbors-of-america.svg',
        'verticals' => ['life'],
        'rating' => 'A+',
        'rating_source' => 'AM Best'
    ],
    'transamerica' => [
        'name' => 'Transamerica',
        'logo' => 'transamerica.svg',
        'verticals' => ['life', 'retirement'],
        'rating' => 'A',
        'rating_source' => 'AM Best'
    ],
    'trustage' => [
        'name' => 'TruStage',
        'logo' => 'truestage.svg',
        'verticals' => ['life', 'auto'],
        'rating' => 'A',
        'rating_source' => 'AM Best'
    ]
];
