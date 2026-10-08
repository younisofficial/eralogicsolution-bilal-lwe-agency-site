@extends('layouts.app')

@section('content')
<div class="hero">
  <div class="wrap hero-grid">
    <div>
      <span class="eyebrow">Full-service digital agency</span>
      <h1>We Build Digital Experiences That <em>Grow Your Business</em></h1>
      <p class="lead">From Shopify stores and WordPress sites to custom software and mobile apps, we design, build and rank digital products that are fast, scalable and made to convert.</p>
      <div class="cta-row">
        <a class="btn btn-p" href="#contact">Start a Project <svg class="ico"><use href="#i-arrow"/></svg></a>
        <a class="btn btn-o" href="#work"><svg class="ico"><use href="#i-play"/></svg> View Our Work</a>
      </div>
      <div class="perks">
        <div class="perk"><i><svg class="ico"><use href="#i-bolt"/></svg></i><div><b>Fast Performance</b><span>Optimized for speed</span></div></div>
        <div class="perk"><i><svg class="ico"><use href="#i-layers"/></svg></i><div><b>Scalable Solutions</b><span>Built for long-term growth</span></div></div>
        <div class="perk"><i><svg class="ico"><use href="#i-target"/></svg></i><div><b>Conversion Focused</b><span>Designs that sell</span></div></div>
      </div>
    </div>

    <div class="stage" aria-hidden="true">
      <div class="laptop">
        <div class="screen">
          <div class="dots"><span></span><span></span><span></span></div>
          <h4>Smart Logic for Modern Brands</h4>
          <p>Websites, stores and apps engineered to perform.</p>
          <b>Get started</b>
        </div>
      </div>
      <div class="base"></div>
      <div class="float f1"><div class="ring">98</div><div>Performance Score<strong style="font-size:15px;color:var(--mint)">A+ Desktop</strong></div></div>
      <div class="float f2">SEO Score<strong>92 <span class="up" style="font-size:11px">Great</span></strong>
        <svg class="spark" viewBox="0 0 96 30"><path d="M2 26 L18 22 L32 24 L48 15 L62 17 L78 8 L94 4" fill="none" stroke="#5b4be6" stroke-width="2" stroke-linecap="round"/></svg></div>
      <div class="float f3">Conversion Rate<strong>4.8% <span class="up" style="font-size:11px">▲ +2.3%</span></strong>
        <svg class="spark" viewBox="0 0 96 30"><path d="M2 27 L16 24 L30 25 L44 18 L58 20 L72 11 L94 3" fill="none" stroke="#5b4be6" stroke-width="2" stroke-linecap="round"/></svg></div>
      <div class="float f4">
        <span><svg class="ico"><use href="#i-bag"/></svg></span><span><svg class="ico"><use href="#i-blog"/></svg></span><span><svg class="ico"><use href="#i-server"/></svg></span><span><svg class="ico"><use href="#i-phone"/></svg></span>
      </div>
    </div>
  </div>
</div>

<div class="strip">
  <div class="wrap">
    <p>Platforms and tools we build with</p>
    <ul>
      @foreach (['Shopify' => 'i-bag', 'WordPress' => 'i-blog', 'Laravel' => 'i-server', 'React' => 'i-code', 'Flutter' => 'i-phone', 'Figma' => 'i-frame'] as $platform => $icon)
        <li><i><svg class="ico"><use href="#{{ $icon }}"/></svg></i>{{ $platform }}</li>
      @endforeach
    </ul>
  </div>
</div>

<section>
  <div class="wrap about">
    <div>
      <span class="eyebrow">Building for the web</span>
      <h2 class="h2">We Build Fast, Scalable &amp; Conversion-Focused Websites</h2>
      <p class="sub">Our developers and designers create modern web solutions that help you stand out, perform better and reach your business goals.</p>
      <ul class="checks">
        <li><span class="tick"><svg class="ico"><use href="#i-check"/></svg></span>Clean &amp; maintainable code</li>
        <li><span class="tick"><svg class="ico"><use href="#i-check"/></svg></span>Pixel-perfect design</li>
        <li><span class="tick"><svg class="ico"><use href="#i-check"/></svg></span>On-time delivery</li>
        <li><span class="tick"><svg class="ico"><use href="#i-check"/></svg></span>Ongoing support &amp; maintenance</li>
      </ul>
      <p class="area">Based in {{ config('site.city') }}, {{ config('site.country') }}. Serving clients locally and worldwide.</p>
    </div>
    <div class="about-art" aria-hidden="true">
      <div class="flow">
        <div><i><svg class="ico"><use href="#i-chat"/></svg></i>Your Idea</div>
        <div><i><svg class="ico"><use href="#i-code"/></svg></i>Our Code</div>
        <div><i><svg class="ico"><use href="#i-rocket"/></svg></i>Real Results</div>
      </div>
    </div>
  </div>
</section>

<section class="band" id="services">
  <div class="wrap">
    <div class="center">
      <span class="eyebrow">Our services</span>
      <h2 class="h2">Comprehensive Development Services</h2>
      <p class="sub">Everything you need to build, launch and grow your online presence.</p>
    </div>
    <div class="grid g3">
      @foreach ($services as $item)
        <a class="svc" href="{{ route('services.show', $item['slug']) }}">
          <i><svg class="ico"><use href="#{{ $item['icon'] }}"/></svg></i>
          <h3>{{ $item['name'] === 'SEO' ? 'SEO Services' : $item['name'] }}</h3>
          <p>{{ $item['summary'] }}</p>
          <span class="go"><svg class="ico"><use href="#i-arrow"/></svg></span>
        </a>
      @endforeach
    </div>
  </div>
</section>

<section id="work">
  <div class="wrap">
    <div class="head-row">
      <div>
        <span class="eyebrow">Featured work</span>
        <h2 class="h2">Our Latest Projects</h2>
        <p class="sub">A look at the kind of work we deliver.</p>
      </div>
      <a class="more" href="#contact">Discuss your project <svg class="ico"><use href="#i-arrow"/></svg></a>
    </div>
    <div class="grid g4">
      <article class="proj"><div class="thumb t1"><div><span></span><span></span><span></span><span></span></div></div><div class="proj-b"><h3>Online Fashion Store</h3><p>Ecommerce · Shopify</p></div></article>
      <article class="proj"><div class="thumb t2"><div><span></span><span></span><span></span><span></span></div></div><div class="proj-b"><h3>SaaS Dashboard</h3><p>Web App · Laravel</p></div></article>
      <article class="proj"><div class="thumb t3"><div><span></span><span></span><span></span><span></span></div></div><div class="proj-b"><h3>Business Website</h3><p>Corporate · WordPress</p></div></article>
      <article class="proj"><div class="thumb t4"><div><span></span><span></span><span></span><span></span></div></div><div class="proj-b"><h3>Mobile App Design</h3><p>UI/UX · Figma</p></div></article>
    </div>
    <p class="note">Sample project cards. Replace them with your real projects and screenshots.</p>
  </div>
</section>

<section class="band" id="tech">
  <div class="wrap">
    <span class="eyebrow">Development expertise</span>
    <h2 class="h2">Technologies We Work With</h2>
    <p class="sub">Modern tools and technologies for high-performing, future-ready solutions.</p>
    <ul class="tech">
      <li><i>Sh</i>Shopify</li><li><i>Wp</i>WordPress</li><li><i>Lv</i>Laravel</li><li><i>Re</i>React</li><li><i>JS</i>JavaScript</li><li><i>&lt;/&gt;</i>HTML &amp; CSS</li><li><i>Fl</i>Flutter</li><li><i>Fg</i>Figma</li><li><i>SEO</i>SEO Tools</li>
    </ul>
  </div>
</section>

<section>
  <div class="wrap stats">
    <div>
      <span class="eyebrow">Why choose us</span>
      <h2 class="h2">Results That Matter</h2>
      <p class="sub">We're not just developers. We're your long-term technology partner, focused on your success.</p>
    </div>
    <div class="nums">
      @foreach (config('site.stats') as $stat)
        <div class="num"><svg class="ico"><use href="#{{ $stat['icon'] }}"/></svg><b>{{ $stat['value'] }}</b><span>{{ $stat['label'] }}</span></div>
      @endforeach
    </div>
  </div>
</section>

<section class="band" id="process">
  <div class="wrap">
    <span class="eyebrow">Our process</span>
    <h2 class="h2">Simple &amp; Transparent Process</h2>
    <p class="sub">From idea to launch, we follow a clear and collaborative process.</p>
    <div class="steps">
      <div class="step"><i><svg class="ico"><use href="#i-chat"/></svg></i><h3>Discover</h3><p>Understand your goals and requirements</p></div>
      <div class="step"><i><svg class="ico"><use href="#i-map"/></svg></i><h3>Plan</h3><p>Define strategy, scope and timeline</p></div>
      <div class="step"><i><svg class="ico"><use href="#i-frame"/></svg></i><h3>Design</h3><p>Create wireframes and visual designs</p></div>
      <div class="step"><i><svg class="ico"><use href="#i-code"/></svg></i><h3>Develop</h3><p>Build with clean code and best practices</p></div>
      <div class="step"><i><svg class="ico"><use href="#i-bug"/></svg></i><h3>Test</h3><p>Ensure quality, security and performance</p></div>
      <div class="step"><i><svg class="ico"><use href="#i-rocket"/></svg></i><h3>Launch &amp; Grow</h3><p>Go live and keep improving together</p></div>
    </div>
  </div>
</section>

<section>
  <div class="wrap seo">
    <div class="dash" aria-hidden="true">
      <div class="float">Organic Traffic<strong class="up">+186%</strong>
        <svg class="spark" viewBox="0 0 96 30"><path d="M2 27 L16 23 L30 24 L44 16 L58 18 L72 9 L94 3" fill="none" stroke="#18b98a" stroke-width="2" stroke-linecap="round"/></svg></div>
      <div class="float">Conversions<strong>4.8%</strong><span class="up">▲ 2.3%</span></div>
      <div class="float wide"><div>Page Speed<strong>98/100</strong><span class="up">Excellent</span></div><div class="ring">98</div></div>
    </div>
    <div>
      <span class="eyebrow">SEO &amp; performance</span>
      <h2 class="h2">Better Visibility. Higher Conversions.</h2>
      <p class="sub">We build SEO-friendly, high-performance websites that rank higher, load faster and turn visitors into customers.</p>
      <ul class="checks">
        <li><span class="tick"><svg class="ico"><use href="#i-check"/></svg></span>Technical SEO &amp; site optimization</li>
        <li><span class="tick"><svg class="ico"><use href="#i-check"/></svg></span>Core Web Vitals &amp; speed enhancement</li>
        <li><span class="tick"><svg class="ico"><use href="#i-check"/></svg></span>Conversion rate optimization (CRO)</li>
        <li><span class="tick"><svg class="ico"><use href="#i-check"/></svg></span>Ongoing monitoring &amp; improvements</li>
      </ul>
      <div class="cta-row"><a class="btn btn-p" href="#contact">Get a Free SEO Audit <svg class="ico"><use href="#i-arrow"/></svg></a></div>
    </div>
  </div>
</section>

<section class="band">
  <div class="wrap">
    <span class="eyebrow">Client testimonials</span>
    <h2 class="h2">What Our Clients Say</h2>
    <p class="sub">Real feedback from the businesses we work with.</p>
    @php $reviews = config('agency.reviews'); @endphp
    {{-- Vue carousel (slides automatically). The cards inside are the server-rendered version for search engines. --}}
    <div class="rev-mount" data-vue="ReviewCarousel" data-props="{{ json_encode(['reviews' => $reviews]) }}">
      <div class="grid g3">
        @foreach ($reviews as $review)
          <article class="rev">
            <p>"{{ $review['text'] }}"</p>
            <footer>
              <div class="who"><i><svg class="ico"><use href="#i-user"/></svg></i><div><b>{{ $review['name'] }}</b><span>{{ $review['role'] }}</span></div></div>
              <span class="stars">{{ str_repeat('★', $review['rating']) }}</span>
            </footer>
          </article>
        @endforeach
      </div>
    </div>
  </div>
</section>

<section id="faq">
  <div class="wrap faq">
    <div>
      <span class="eyebrow">Frequently asked questions</span>
      <h2 class="h2">Got Questions? We've Got Answers.</h2>
      <p class="sub">Quick answers to common questions about our services and process.</p>
    </div>
    {{-- Vue accordion. The <details> list inside is the server-rendered version for search engines. --}}
    <div data-vue="FaqAccordion" data-props="{{ json_encode(['items' => $faqs]) }}">
      @foreach ($faqs as $faq)
        <details @if ($loop->first) open @endif><summary>{{ $faq['q'] }}</summary><p>{{ $faq['a'] }}</p></details>
      @endforeach
    </div>
  </div>
</section>

@include('partials.contact')
@endsection
