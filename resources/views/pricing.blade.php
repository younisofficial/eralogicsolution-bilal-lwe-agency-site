@extends('layouts.app')

@section('content')
<div class="page-hero">
  <div class="wrap center">
    <nav class="crumbs" aria-label="Breadcrumb" style="justify-content:center"><a href="{{ url('/') }}">Home</a><span>/</span><span>Pricing</span></nav>
    <span class="eyebrow">Pricing</span>
    <h1 style="margin-inline:auto">Simple, Transparent Pricing for Every Service</h1>
    <p class="lead" style="margin-inline:auto">Starting prices in US dollars for all our services. Pick a package, or ask for a custom quote — you always get a fixed written price before work starts.</p>
  </div>
</div>

{{-- Quick jump links to each service's prices --}}
<nav class="price-nav" aria-label="Jump to a service">
  <div class="wrap">
    @foreach ($services as $item)
      <a href="#{{ $item['slug'] }}">{{ $item['name'] }}</a>
    @endforeach
  </div>
</nav>

@foreach ($services as $item)
  <section id="{{ $item['slug'] }}" class="price-sec @if ($loop->even) band @endif">
    <div class="wrap">
      <div class="head-row">
        <div>
          <span class="eyebrow">{{ $item['name'] }}</span>
          <h2 class="h2">{{ $item['name'] }} Pricing</h2>
          <p class="sub">{{ $item['summary'] }}</p>
        </div>
        <a class="more" href="{{ route('services.show', $item['slug']) }}">About {{ $item['name'] }} <svg class="ico"><use href="#i-arrow"/></svg></a>
      </div>
      @include('partials.packages', ['service' => $item])
    </div>
  </section>
@endforeach

<section class="band">
  <div class="wrap faq">
    <div>
      <span class="eyebrow">Pricing questions</span>
      <h2 class="h2">Good to Know</h2>
      <p class="sub">How our pricing and payments work.</p>
    </div>
    <div data-vue="FaqAccordion" data-props="{{ json_encode(['items' => $faqs]) }}">
      @foreach ($faqs as $faq)
        <details @if ($loop->first) open @endif><summary>{{ $faq['q'] }}</summary><p>{{ $faq['a'] }}</p></details>
      @endforeach
    </div>
  </div>
</section>

@include('partials.contact', [
    'ctaTitle' => 'Need a custom package?',
    'ctaText' => 'Tell us what you need and we will send a fixed quote within 24 hours.',
    'selectedService' => $selectedService,
])
@endsection
