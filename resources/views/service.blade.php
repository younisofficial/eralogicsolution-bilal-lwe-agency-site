@extends('layouts.app')

@section('content')
<div class="page-hero">
  <div class="wrap">
    <nav class="crumbs" aria-label="Breadcrumb">
      <a href="{{ url('/') }}">Home</a><span>/</span><a href="{{ url('/') }}#services">Services</a><span>/</span><span>{{ $service['name'] }}</span>
    </nav>
    <span class="eyebrow">Our services</span>
    <h1>{{ $service['h1'] }}</h1>
    <p class="lead">{{ $service['lead'] }}</p>
    <div class="cta-row">
      <a class="btn btn-p" href="#contact">Get a Free Quote <svg class="ico"><use href="#i-arrow"/></svg></a>
      <a class="btn btn-o" href="{{ url('/') }}#work">View Our Work</a>
    </div>
    <p class="area">{{ $service['name'] }} for businesses in {{ config('site.city') }}, across {{ config('site.country') }} and worldwide.</p>
  </div>
</div>

<section>
  <div class="wrap">
    <span class="eyebrow">What's included</span>
    <h2 class="h2">Our {{ $service['name'] }} Services</h2>
    <div class="grid g3">
      @foreach ($service['features'] as $feature)
        <div class="feat"><h3>{{ $feature['title'] }}</h3><p>{{ $feature['text'] }}</p></div>
      @endforeach
    </div>
  </div>
</section>

<section class="band">
  <div class="wrap about">
    <div>
      <span class="eyebrow">Why {{ config('site.name') }}</span>
      <h2 class="h2">A Reliable Partner for {{ $service['name'] }}</h2>
      <p class="sub">You work directly with the people building your project, with clear timelines and regular updates.</p>
      <ul class="checks">
        @foreach (['Clean & maintainable work', 'Transparent pricing and timelines', 'On-time delivery', 'Support after launch'] as $point)
          <li><span class="tick"><svg class="ico"><use href="#i-check"/></svg></span>{{ $point }}</li>
        @endforeach
      </ul>
    </div>
    <div>
      <h2 class="h2" style="font-size:24px">{{ $service['name'] }} FAQs</h2>
      <div data-vue="FaqAccordion" data-props="{{ json_encode(['items' => $service['faqs']]) }}">
        @foreach ($service['faqs'] as $faq)
          <details @if ($loop->first) open @endif><summary>{{ $faq['q'] }}</summary><p>{{ $faq['a'] }}</p></details>
        @endforeach
      </div>
    </div>
  </div>
</section>

<section>
  <div class="wrap">
    <span class="eyebrow">Explore more</span>
    <h2 class="h2">Other Services</h2>
    <div class="others">
      @foreach ($others as $item)
        <a href="{{ route('services.show', $item['slug']) }}">{{ $item['name'] }}</a>
      @endforeach
    </div>
  </div>
</section>

@include('partials.contact', [
    'ctaTitle' => 'Need '.$service['name'].'?',
    'ctaText' => 'Tell us about your project and get a free quote.',
    'selectedService' => $service['name'],
])
@endsection
