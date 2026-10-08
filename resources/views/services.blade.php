@extends('layouts.app')

@section('content')
<div class="page-hero">
  <div class="wrap center">
    <nav class="crumbs" aria-label="Breadcrumb" style="justify-content:center"><a href="{{ url('/') }}">Home</a><span>/</span><span>Services</span></nav>
    <span class="eyebrow">Our services</span>
    <h1 style="margin-inline:auto">Web, Software, Design &amp; Marketing Services</h1>
    <p class="lead" style="margin-inline:auto">Everything you need to build, launch and grow online. Open any service to see what is included, our process and prices.</p>
    <div class="cta-row" style="justify-content:center">
      <a class="btn btn-p" href="#contact">Get a Free Quote <svg class="ico"><use href="#i-arrow"/></svg></a>
      <a class="btn btn-o" href="{{ route('pricing') }}">See Pricing</a>
    </div>
  </div>
</div>

<section>
  <div class="wrap">
    <div class="grid g3" style="margin-top:0">
      @foreach ($services as $item)
        <a class="svc" href="{{ route('services.show', $item['slug']) }}">
          <i><svg class="ico"><use href="#{{ $item['icon'] }}"/></svg></i>
          <h2 class="svc-title">{{ $item['name'] }}</h2>
          <p>{{ $item['summary'] }}</p>
          <span class="svc-from">From ${{ number_format(collect($item['packages'])->min('price')) }}</span>
          <span class="go"><svg class="ico"><use href="#i-arrow"/></svg></span>
        </a>
      @endforeach
    </div>
  </div>
</section>

@include('partials.contact')
@endsection
