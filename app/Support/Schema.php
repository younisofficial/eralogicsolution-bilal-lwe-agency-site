<?php

namespace App\Support;

/**
 * Builds the JSON-LD structured data (schema.org) for each page.
 */
class Schema
{
    public static function graph(array ...$nodes): array
    {
        return ['@context' => 'https://schema.org', '@graph' => array_values($nodes)];
    }

    public static function business(): array
    {
        $site = config('site');
        $home = url('/');

        $node = [
            '@type' => 'ProfessionalService',
            '@id' => $home.'#business',
            'name' => $site['name'],
            'url' => $home,
            'logo' => asset('assets/favicon.svg'),
            'image' => asset('assets/og-image.png'),
            'description' => $site['default_description'],
            'telephone' => $site['phone'],
            'email' => $site['email'],
            'priceRange' => '$$',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => $site['street'],
                'addressLocality' => $site['city'],
                'addressRegion' => $site['region'],
                'postalCode' => $site['postcode'],
                'addressCountry' => $site['country_code'],
            ],
            'areaServed' => [
                ['@type' => 'City', 'name' => $site['city']],
                ['@type' => 'Country', 'name' => $site['country']],
                'Worldwide',
            ],
            'openingHoursSpecification' => [[
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                'opens' => $site['opens'],
                'closes' => $site['closes'],
            ]],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Services',
                'itemListElement' => array_map(fn (array $service) => [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => $service['name'],
                        'url' => route('services.show', $service['slug']),
                    ],
                ], config('agency.services')),
            ],
        ];

        if ($site['latitude'] && $site['longitude']) {
            $node['geo'] = ['@type' => 'GeoCoordinates', 'latitude' => $site['latitude'], 'longitude' => $site['longitude']];
        }

        if ($site['social']) {
            $node['sameAs'] = $site['social'];
        }

        return $node;
    }

    public static function website(): array
    {
        return [
            '@type' => 'WebSite',
            '@id' => url('/').'#website',
            'url' => url('/'),
            'name' => config('site.name'),
            'publisher' => ['@id' => url('/').'#business'],
            'inLanguage' => 'en',
        ];
    }

    public static function faq(array $faqs): array
    {
        return [
            '@type' => 'FAQPage',
            'mainEntity' => array_map(fn (array $faq) => [
                '@type' => 'Question',
                'name' => $faq['q'],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['a']],
            ], $faqs),
        ];
    }

    public static function service(array $service): array
    {
        $url = route('services.show', $service['slug']);

        return [
            '@type' => 'Service',
            '@id' => $url.'#service',
            'name' => $service['name'],
            'serviceType' => $service['name'],
            'description' => $service['description'],
            'url' => $url,
            'provider' => ['@id' => url('/').'#business'],
            'areaServed' => [
                ['@type' => 'City', 'name' => config('site.city')],
                ['@type' => 'Country', 'name' => config('site.country')],
            ],
        ];
    }

    public static function breadcrumbs(array $service): array
    {
        return [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => url('/').'#services'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => $service['name'], 'item' => route('services.show', $service['slug'])],
            ],
        ];
    }
}
