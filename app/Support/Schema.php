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
            'offers' => [
                '@type' => 'AggregateOffer',
                'priceCurrency' => 'USD',
                'lowPrice' => collect($service['packages'])->min('price'),
                'highPrice' => collect($service['packages'])->max('price'),
                'offerCount' => count($service['packages']),
            ],
            'areaServed' => [
                ['@type' => 'City', 'name' => config('site.city')],
                ['@type' => 'Country', 'name' => config('site.country')],
            ],
        ];
    }

    /** @param  array<int, array{0: string, 1: string}>  $trail  [name, url] pairs after "Home" */
    public static function breadcrumbs(array $trail): array
    {
        $items = [['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')]];

        foreach ($trail as $i => [$name, $url]) {
            $items[] = ['@type' => 'ListItem', 'position' => $i + 2, 'name' => $name, 'item' => $url];
        }

        return ['@type' => 'BreadcrumbList', 'itemListElement' => $items];
    }

    public static function serviceList(array $services): array
    {
        return [
            '@type' => 'ItemList',
            'name' => 'Services',
            'itemListElement' => array_map(fn (array $service, int $i) => [
                '@type' => 'ListItem',
                'position' => $i + 1,
                'name' => $service['name'],
                'url' => route('services.show', $service['slug']),
            ], $services, array_keys($services)),
        ];
    }

    /** Every package as an Offer with a price, for the pricing page. */
    public static function pricing(array $services): array
    {
        $offers = [];

        foreach ($services as $service) {
            foreach ($service['packages'] as $plan) {
                $offers[] = [
                    '@type' => 'Offer',
                    'name' => $service['name'].' — '.$plan['name'],
                    'description' => $plan['best_for'],
                    'priceCurrency' => 'USD',
                    'price' => $plan['price'],
                    'priceSpecification' => [
                        '@type' => 'UnitPriceSpecification',
                        'price' => $plan['price'],
                        'priceCurrency' => 'USD',
                        'unitText' => $plan['billing'] === 'per month' ? 'MONTH' : 'ONE-TIME',
                    ],
                    'itemOffered' => ['@type' => 'Service', 'name' => $service['name'], 'url' => route('services.show', $service['slug'])],
                    'seller' => ['@id' => url('/').'#business'],
                ];
            }
        }

        return ['@type' => 'OfferCatalog', 'name' => 'Service packages', 'url' => route('pricing'), 'itemListElement' => $offers];
    }
}
