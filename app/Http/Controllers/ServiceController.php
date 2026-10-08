<?php

namespace App\Http\Controllers;

use App\Support\Schema;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        $services = config('agency.services');

        return view('services', [
            'services' => $services,
            'seo' => [
                'title' => 'Our Services | Web, App, SEO & Marketing | '.config('site.name'),
                'description' => 'Shopify, WordPress, Laravel, custom websites, SEO, digital marketing, graphic design, UI/UX, software and app development by '.config('site.name').'.',
                'canonical' => route('services.index'),
            ],
            'schema' => Schema::graph(
                Schema::business(),
                Schema::serviceList($services),
                Schema::breadcrumbs([['Services', route('services.index')]]),
            ),
        ]);
    }

    public function show(string $slug): View
    {
        $services = collect(config('agency.services'));
        $service = $services->firstWhere('slug', $slug);

        abort_if($service === null, 404);

        return view('service', [
            'service' => $service,
            'others' => $services->where('slug', '!=', $slug)->values()->all(),
            'seo' => [
                'title' => $service['h1'].' in '.config('site.city').' | '.config('site.name'),
                'description' => $service['description'],
                'canonical' => route('services.show', $slug),
            ],
            'schema' => Schema::graph(
                Schema::service($service),
                Schema::business(),
                Schema::breadcrumbs([
                    ['Services', route('services.index')],
                    [$service['name'], route('services.show', $slug)],
                ]),
                Schema::faq($service['faqs']),
            ),
        ]);
    }
}
