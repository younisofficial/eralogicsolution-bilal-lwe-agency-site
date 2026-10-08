<?php

// Business details used across the site (header, footer, SEO tags and schema).
// Set the values in your .env file.

return [

    'name' => env('SITE_NAME', 'Eralogicsolution'),
    'tagline' => env('SITE_TAGLINE', 'Web & Software Agency'),

    'email' => env('SITE_EMAIL', 'your-email@eralogicsolution.com'),
    'phone' => env('SITE_PHONE', '+92 000 0000000'),

    'street' => env('SITE_STREET', 'Your Street Address'),
    'city' => env('SITE_CITY', 'Your City'),
    'region' => env('SITE_REGION', 'Your Province'),
    'postcode' => env('SITE_POSTCODE', '00000'),
    'country' => env('SITE_COUNTRY', 'Pakistan'),
    'country_code' => env('SITE_COUNTRY_CODE', 'PK'),
    'latitude' => env('SITE_LATITUDE'),
    'longitude' => env('SITE_LONGITUDE'),

    'opens' => env('SITE_OPENS', '09:00'),
    'closes' => env('SITE_CLOSES', '18:00'),

    // Leave empty in .env to hide a profile from the schema.
    'social' => array_values(array_filter([
        env('SITE_FACEBOOK'),
        env('SITE_INSTAGRAM'),
        env('SITE_LINKEDIN'),
    ])),

    // Home page numbers. Replace with your real figures.
    'stats' => [
        ['icon' => 'i-folder', 'value' => env('SITE_STAT_PROJECTS', '250+'), 'label' => 'Projects Delivered'],
        ['icon' => 'i-cal', 'value' => env('SITE_STAT_YEARS', '4+'), 'label' => 'Years Experience'],
        ['icon' => 'i-bolt', 'value' => '99%', 'label' => 'Performance Focused'],
        ['icon' => 'i-head', 'value' => '24/7', 'label' => 'Support & Maintenance'],
    ],

    'default_description' => 'Eralogicsolution is a web and software agency offering Shopify, WordPress, Laravel, custom website development, SEO, graphic design, UI/UX, software and app development.',

];
