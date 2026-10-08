<?php

namespace App\Http\Controllers;

use App\Support\Schema;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $faqs = config('agency.faqs');

        return view('home', [
            'services' => config('agency.services'),
            'faqs' => $faqs,
            'seo' => [
                'title' => config('site.name').' | Web Development, SEO & App Development Agency',
                'description' => config('site.default_description'),
                'canonical' => url('/'),
            ],
            'schema' => Schema::graph(Schema::business(), Schema::website(), Schema::faq($faqs)),
        ]);
    }
}
