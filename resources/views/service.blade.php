@extends('layouts.app')

@section('content')
<div class="page-hero">
  <div class="wrap svc-hero">
    <div>
      <nav class="crumbs" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a><span>/</span><a href="{{ route('services.index') }}">Services</a><span>/</span><span>{{ $service['name'] }}</span>
      </nav>
      <span class="eyebrow">{{ $service['name'] }}</span>
      <h1>{{ $service['h1'] }}</h1>
      <p class="lead">{{ $service['lead'] }}</p>
      <ul class="checks">
        @foreach ($service['highlights'] as $point)
          <li><span class="tick"><svg class="ico"><use href="#i-check"/></svg></span>{{ $point }}</li>
        @endforeach
      </ul>
      <div class="cta-row">
        <a class="btn btn-p" href="#contact">Get a Free Quote <svg class="ico"><use href="#i-arrow"/></svg></a>
        <a class="btn btn-o" href="#packages">See {{ $service['name'] }} Prices</a>
      </div>
    </div>
    <div class="svc-art" aria-hidden="true">
      <div class="svc-art-icon"><svg class="ico"><use href="#{{ $service['icon'] }}"/></svg></div>
      <ul class="svc-art-list">
        @foreach (array_slice($service['offerings'], 0, 4) as $item)
          <li><span class="tick"><svg class="ico"><use href="#i-check"/></svg></span>{{ $item }}</li>
        @endforeach
      </ul>
      <div class="float svc-art-float">Starting from<strong>${{ number_format(collect($service['packages'])->min('price')) }}</strong></div>
    </div>
  </div>
</div>

<section>
  <div class="wrap intro">
    <div>
      <span class="eyebrow">Trusted experts</span>
      <h2 class="h2">Start Your {{ $service['name'] }} Project with {{ config('site.name') }}</h2>
    </div>
    <p class="sub">{{ $service['intro'] }} We work with businesses in {{ config('site.city') }}, across {{ config('site.country') }} and worldwide.</p>
  </div>
</section>

<section class="band">
  <div class="wrap">
    <div class="center">
      <span class="eyebrow">What we offer</span>
      <h2 class="h2">Our {{ $service['name'] }} Services</h2>
      <p class="sub">Everything you need, handled by one team.</p>
    </div>
    <ul class="offer-grid">
      @foreach ($service['offerings'] as $item)
        <li><i><svg class="ico"><use href="#{{ $service['icon'] }}"/></svg></i>{{ $item }}</li>
      @endforeach
    </ul>
  </div>
</section>

<section>
  <div class="wrap stats">
    <div>
      <span class="eyebrow">Our track record</span>
      <h2 class="h2">{{ $service['name'] }} of a High Standard</h2>
      <p class="sub">Quality work, clear communication and support after launch.</p>
    </div>
    <div class="nums">
      @foreach (config('site.stats') as $stat)
        <div class="num"><svg class="ico"><use href="#{{ $stat['icon'] }}"/></svg><b>{{ $stat['value'] }}</b><span>{{ $stat['label'] }}</span></div>
      @endforeach
    </div>
  </div>
</section>

<section class="band">
  <div class="wrap">
    <span class="eyebrow">Why choose us</span>
    <h2 class="h2">Why Businesses Choose Our {{ $service['name'] }}</h2>
    <div class="grid g3">
      @foreach ($service['features'] as $feature)
        <div class="feat"><i><svg class="ico"><use href="#{{ $service['icon'] }}"/></svg></i><h3>{{ $feature['title'] }}</h3><p>{{ $feature['text'] }}</p></div>
      @endforeach
    </div>
  </div>
</section>

<section style="padding-bottom:0">
  <div class="wrap">
    <div class="cta">
      <div>
        <small>Let's collaborate</small>
        <h2>Have a {{ $service['name'] }} project in mind?</h2>
        <p>Book a free consultation and get a clear plan, timeline and price.</p>
      </div>
      <div class="cta-row"><a class="btn btn-w" href="#contact">Schedule a Meeting <svg class="ico"><use href="#i-arrow"/></svg></a></div>
    </div>
  </div>
</section>

<section>
  <div class="wrap">
    <span class="eyebrow">Our process</span>
    <h2 class="h2">Our {{ $service['name'] }} Process</h2>
    <p class="sub">A clear, step-by-step process so you always know what happens next.</p>
    <ol class="steps steps-5">
      @foreach ($service['process'] as $step)
        <li class="step"><i><svg class="ico"><use href="#{{ ['i-chat', 'i-map', 'i-frame', 'i-code', 'i-rocket'][$loop->index] ?? 'i-check' }}"/></svg></i><h3>{{ $step['title'] }}</h3><p>{{ $step['text'] }}</p></li>
      @endforeach
    </ol>
  </div>
</section>

<section class="band" id="packages">
  <div class="wrap">
    <div class="center">
      <span class="eyebrow">Pricing</span>
      <h2 class="h2">{{ $service['name'] }} Packages</h2>
      <p class="sub">Starting prices in US dollars. Every project gets a fixed written quote before work starts.</p>
    </div>
    @include('partials.packages', ['service' => $service])
    <p class="center note"><a class="more" href="{{ route('pricing') }}">Compare prices for all services <svg class="ico"><use href="#i-arrow"/></svg></a></p>
  </div>
</section>

<section>
  <div class="wrap faq">
    <div>
      <span class="eyebrow">FAQs</span>
      <h2 class="h2">Still Have Questions About {{ $service['name'] }}?</h2>
      <p class="sub">The questions we hear most often.</p>
    </div>
    <div data-vue="FaqAccordion" data-props="{{ json_encode(['items' => $service['faqs']]) }}">
      @foreach ($service['faqs'] as $faq)
        <details @if ($loop->first) open @endif><summary>{{ $faq['q'] }}</summary><p>{{ $faq['a'] }}</p></details>
      @endforeach
    </div>
  </div>
</section>

<section class="band">
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
