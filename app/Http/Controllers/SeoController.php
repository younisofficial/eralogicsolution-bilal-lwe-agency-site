<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SeoController extends Controller
{
    public function sitemap(): Response
    {
        $today = now()->toDateString();
        $urls = [
            ['loc' => url('/'), 'priority' => '1.0'],
            ['loc' => route('services.index'), 'priority' => '0.9'],
            ['loc' => route('pricing'), 'priority' => '0.9'],
        ];

        foreach (config('agency.services') as $service) {
            $urls[] = ['loc' => route('services.show', $service['slug']), 'priority' => '0.8'];
        }

        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n"
            .'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";

        foreach ($urls as $url) {
            $xml .= '  <url><loc>'.e($url['loc']).'</loc><lastmod>'.$today.'</lastmod>'
                .'<changefreq>monthly</changefreq><priority>'.$url['priority'].'</priority></url>'."\n";
        }

        $xml .= '</urlset>'."\n";

        return response($xml, 200, ['Content-Type' => 'application/xml; charset=UTF-8']);
    }

    public function robots(): Response
    {
        $lines = ['User-agent: *', 'Allow: /', '', 'Sitemap: '.url('/sitemap.xml'), ''];

        return response(implode("\n", $lines), 200, ['Content-Type' => 'text/plain; charset=UTF-8']);
    }
}
