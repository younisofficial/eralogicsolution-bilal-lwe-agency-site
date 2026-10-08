<?php

namespace App\Http\Controllers;

use App\Support\Schema;
use Illuminate\View\View;

class ServiceController extends Controller
{
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
                Schema::breadcrumbs($service),
                Schema::faq($service['faqs']),
            ),
        ]);
    }
}
