@php
    $title = $seo['title'] ?? config('site.name');
    $description = $seo['description'] ?? config('site.default_description');
    $canonical = $seo['canonical'] ?? url()->current();
    $robots = $seo['robots'] ?? 'index, follow, max-image-preview:large';
    $ogImage = asset('assets/og-image.png');
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="robots" content="{{ $robots }}">
<link rel="canonical" href="{{ $canonical }}">
<meta name="author" content="{{ config('site.name') }}">
<meta name="theme-color" content="#5b4be6">
<meta name="geo.region" content="{{ config('site.country_code') }}">
<meta name="geo.placename" content="{{ config('site.city') }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="{{ config('site.name') }}">
<meta property="og:locale" content="en_US">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:image" content="{{ $ogImage }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $ogImage }}">
<link rel="icon" href="{{ asset('assets/favicon.svg') }}" type="image/svg+xml">
<link rel="manifest" href="{{ asset('site.webmanifest') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&family=DM+Sans:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap">
@vite(['resources/css/app.css', 'resources/js/app.js'])
@isset($schema)
<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) !!}</script>
@endisset
</head>
<body>
<a class="skip" href="#top">Skip to content</a>
@include('partials.sprite')
@include('partials.header')

<main id="top">
@yield('content')
</main>

@include('partials.footer')
</body>
</html>
