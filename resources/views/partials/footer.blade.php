<footer class="foot" id="footer">
  <div class="wrap">
    <div class="foot-grid">
      <div>
        <a class="logo" href="{{ url('/') }}"><span class="logo-mark"><svg class="ico"><use href="#i-logo"/></svg></span><span>{{ config('site.name') }}<small>{{ config('site.tagline') }}</small></span></a>
        <p class="blurb">Websites, online stores, software and apps, designed and built to grow your business.</p>
      </div>
      <div>
        <h4>Our Services</h4>
        <ul>
          @foreach (config('agency.services') as $item)
            <li><a href="{{ route('services.show', $item['slug']) }}">{{ $item['name'] }}</a></li>
          @endforeach
        </ul>
      </div>
      <div>
        <h4>Company</h4>
        <ul><li><a href="{{ url('/') }}">Home</a></li><li><a href="{{ route('services.index') }}">All Services</a></li><li><a href="{{ route('pricing') }}">Pricing</a></li><li><a href="{{ url('/') }}#work">Our Work</a></li><li><a href="{{ url('/') }}#tech">Technologies</a></li><li><a href="{{ url('/') }}#process">Process</a></li><li><a href="{{ url('/') }}#faq">FAQ</a></li></ul>
      </div>
      <div>
        <h4>Get In Touch</h4>
        <ul class="contact">
          <li><svg class="ico"><use href="#i-mail"/></svg>{{ config('site.email') }}</li>
          <li><svg class="ico"><use href="#i-call"/></svg>{{ config('site.phone') }}</li>
          <li><svg class="ico"><use href="#i-pin"/></svg>{{ config('site.street') }}, {{ config('site.city') }}, {{ config('site.country') }}</li>
        </ul>
      </div>
    </div>
    <div class="foot-end"><span>© {{ date('Y') }} {{ config('site.name') }}. All rights reserved.</span><span>Build Better. Together.</span></div>
  </div>
</footer>
