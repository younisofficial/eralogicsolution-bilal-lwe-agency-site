@php
    $home = url('/');
    // The contact section exists on the home and service pages only.
    $contact = request()->routeIs('home', 'services.show') ? '#contact' : $home.'#contact';
    $navLinks = [
        ['label' => 'Services', 'href' => $home.'#services'],
        ['label' => 'Work', 'href' => $home.'#work'],
        ['label' => 'Technologies', 'href' => $home.'#tech'],
        ['label' => 'Process', 'href' => $home.'#process'],
        ['label' => 'FAQ', 'href' => $home.'#faq'],
        ['label' => 'Contact', 'href' => $contact],
    ];
@endphp
<header>
  <div class="wrap nav">
    <a class="logo" href="{{ $home }}">
      <span class="logo-mark"><svg class="ico"><use href="#i-logo"/></svg></span>
      <span>{{ config('site.name') }}<small>{{ config('site.tagline') }}</small></span>
    </a>
    {{-- Vue takes over this block (mobile menu). The HTML inside is the server-rendered version for search engines. --}}
    <div data-vue="SiteNav" data-props="{{ json_encode(['links' => $navLinks, 'cta' => $contact]) }}" style="display:contents">
      <nav class="links">
        @foreach ($navLinks as $link)
          <a href="{{ $link['href'] }}">{{ $link['label'] }}</a>
        @endforeach
      </nav>
      <a class="btn btn-p" href="{{ $contact }}">Get Started <svg class="ico"><use href="#i-arrow"/></svg></a>
    </div>
  </div>
</header>
