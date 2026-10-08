<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
    public function test_services_and_pricing_pages_load(): void
    {
        $this->get('/services')->assertOk();
        $this->get('/pricing')->assertOk()->assertSee('Shopify Development Pricing');
    }

    public function test_every_service_has_its_own_page_with_prices(): void
    {
        foreach (config('agency.services') as $service) {
            $this->get('/services/'.$service['slug'])
                ->assertOk()
                ->assertSee($service['h1'])
                ->assertSee('$'.number_format($service['packages'][0]['price']));
        }
    }

    public function test_unknown_service_is_404(): void
    {
        $this->get('/services/does-not-exist')->assertNotFound();
    }
}
