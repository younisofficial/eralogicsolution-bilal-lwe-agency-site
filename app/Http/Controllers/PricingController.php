<?php

namespace App\Http\Controllers;

use App\Support\Schema;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PricingController extends Controller
{
    public function __invoke(Request $request): View
    {
        $services = config('agency.services');
        $faqs = config('agency.pricing_faqs');

        // "Choose plan" buttons link here with ?service=Name so the form is pre-filled.
        $selected = collect($services)->pluck('name')->contains($request->query('service'))
            ? $request->query('service')
            : '';

        return view('pricing', [
            'services' => $services,
            'faqs' => $faqs,
            'selectedService' => $selected,
            'seo' => [
                'title' => 'Pricing | Website, App, SEO & Marketing Packages | '.config('site.name'),
                'description' => 'Transparent starting prices in US dollars for Shopify, WordPress, Laravel, custom websites, SEO, marketing, design, software and app development.',
                'canonical' => route('pricing'),
            ],
            'schema' => Schema::graph(
                Schema::business(),
                Schema::pricing($services),
                Schema::breadcrumbs([['Pricing', route('pricing')]]),
                Schema::faq($faqs),
            ),
        ]);
    }
}
