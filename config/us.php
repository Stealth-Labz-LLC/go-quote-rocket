<?php

return [

    /*
    |--------------------------------------------------------------------------
    | US States
    |--------------------------------------------------------------------------
    */
    'states' => [
        'AL' => 'Alabama',
        'AK' => 'Alaska',
        'AZ' => 'Arizona',
        'AR' => 'Arkansas',
        'CA' => 'California',
        'CO' => 'Colorado',
        'CT' => 'Connecticut',
        'DE' => 'Delaware',
        'FL' => 'Florida',
        'GA' => 'Georgia',
        'HI' => 'Hawaii',
        'ID' => 'Idaho',
        'IL' => 'Illinois',
        'IN' => 'Indiana',
        'IA' => 'Iowa',
        'KS' => 'Kansas',
        'KY' => 'Kentucky',
        'LA' => 'Louisiana',
        'ME' => 'Maine',
        'MD' => 'Maryland',
        'MA' => 'Massachusetts',
        'MI' => 'Michigan',
        'MN' => 'Minnesota',
        'MS' => 'Mississippi',
        'MO' => 'Missouri',
        'MT' => 'Montana',
        'NE' => 'Nebraska',
        'NV' => 'Nevada',
        'NH' => 'New Hampshire',
        'NJ' => 'New Jersey',
        'NM' => 'New Mexico',
        'NY' => 'New York',
        'NC' => 'North Carolina',
        'ND' => 'North Dakota',
        'OH' => 'Ohio',
        'OK' => 'Oklahoma',
        'OR' => 'Oregon',
        'PA' => 'Pennsylvania',
        'RI' => 'Rhode Island',
        'SC' => 'South Carolina',
        'SD' => 'South Dakota',
        'TN' => 'Tennessee',
        'TX' => 'Texas',
        'UT' => 'Utah',
        'VT' => 'Vermont',
        'VA' => 'Virginia',
        'WA' => 'Washington',
        'WV' => 'West Virginia',
        'WI' => 'Wisconsin',
        'WY' => 'Wyoming',
        'DC' => 'District of Columbia',
    ],

    /*
    |--------------------------------------------------------------------------
    | Income Brackets (US)
    |--------------------------------------------------------------------------
    */
    'income_brackets' => [
        '$0 - $25,000' => '$0 - $25,000',
        '$25,000 - $50,000' => '$25,000 - $50,000',
        '$50,000 - $75,000' => '$50,000 - $75,000',
        '$75,000 - $100,000' => '$75,000 - $100,000',
        '$100,000+' => '$100,000+',
    ],

    /*
    |--------------------------------------------------------------------------
    | Age Ranges
    |--------------------------------------------------------------------------
    */
    'age_ranges' => [
        '18-24' => '18-24',
        '25-34' => '25-34',
        '35-44' => '35-44',
        '45-54' => '45-54',
        '55-64' => '55-64',
        '65+' => '65+',
    ],

    /*
    |--------------------------------------------------------------------------
    | Vehicle Makes (Popular in US)
    |--------------------------------------------------------------------------
    */
    'vehicle_makes' => [
        'Acura' => 'Acura',
        'Audi' => 'Audi',
        'BMW' => 'BMW',
        'Buick' => 'Buick',
        'Cadillac' => 'Cadillac',
        'Chevrolet' => 'Chevrolet',
        'Chrysler' => 'Chrysler',
        'Dodge' => 'Dodge',
        'Ford' => 'Ford',
        'GMC' => 'GMC',
        'Honda' => 'Honda',
        'Hyundai' => 'Hyundai',
        'Infiniti' => 'Infiniti',
        'Jeep' => 'Jeep',
        'Kia' => 'Kia',
        'Lexus' => 'Lexus',
        'Lincoln' => 'Lincoln',
        'Mazda' => 'Mazda',
        'Mercedes-Benz' => 'Mercedes-Benz',
        'Nissan' => 'Nissan',
        'Ram' => 'Ram',
        'Subaru' => 'Subaru',
        'Tesla' => 'Tesla',
        'Toyota' => 'Toyota',
        'Volkswagen' => 'Volkswagen',
        'Volvo' => 'Volvo',
        'Other' => 'Other',
    ],

    /*
    |--------------------------------------------------------------------------
    | Vehicle Years
    |--------------------------------------------------------------------------
    */
    'vehicle_years' => array_combine(
        range(date('Y') + 1, date('Y') - 25),
        range(date('Y') + 1, date('Y') - 25)
    ),

];
