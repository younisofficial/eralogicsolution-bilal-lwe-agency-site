@php
    $seo = ['title' => 'Page Not Found | '.config('site.name'), 'robots' => 'noindex, follow'];
@endphp
@extends('layouts.app')

@section('content')
<div class="page-hero">
  <div class="wrap center">
    <span class="eyebrow">Error 404</span>
    <h1 style="margin-inline:auto">Page Not Found</h1>
    <p class="lead" style="margin-inline:auto">The page you are looking for has moved or does not exist.</p>
    <div class="cta-row" style="justify-content:center">
      <a class="btn btn-p" href="{{ url('/') }}">Back to Home</a>
      <a class="btn btn-o" href="{{ url('/') }}#services">Our Services</a>
    </div>
  </div>
</div>
@endsection
