<section style="padding-bottom:0">
  <div class="wrap">
    <div class="cta">
      <div>
        <small>Let's build together</small>
        <h2>{{ $ctaTitle ?? 'Ready to Build Something Exceptional?' }}</h2>
        <p>{{ $ctaText ?? 'Get a custom website, store or app that helps your business grow.' }}</p>
      </div>
      <div class="cta-row">
        <a class="btn btn-w" href="#contact">Start a Project <svg class="ico"><use href="#i-arrow"/></svg></a>
      </div>
    </div>
  </div>
</section>

<section id="contact">
  <div class="wrap contact-grid">
    <div>
      <span class="eyebrow">Contact us</span>
      <h2 class="h2">Tell Us About Your Project</h2>
      <p class="sub">Send your requirements and we'll reply with a free quote and timeline.</p>
      <ul class="contact-list">
        <li><i><svg class="ico"><use href="#i-mail"/></svg></i>{{ config('site.email') }}</li>
        <li><i><svg class="ico"><use href="#i-call"/></svg></i>{{ config('site.phone') }}</li>
        <li><i><svg class="ico"><use href="#i-pin"/></svg></i>{{ config('site.city') }}, {{ config('site.country') }}</li>
      </ul>
    </div>

    @php
        $serviceNames = array_column(config('agency.services'), 'name');
        $formProps = ['action' => route('contact.store'), 'services' => $serviceNames, 'selected' => $selectedService ?? ''];
    @endphp
    {{-- Vue renders the interactive form here. The plain form inside still works when JavaScript is off. --}}
    <div data-vue="ContactForm" data-props="{{ json_encode($formProps) }}">
      <form class="form" method="POST" action="{{ route('contact.store') }}#contact">
        @csrf
        @if (session('status'))
          <p class="form-msg ok">{{ session('status') }}</p>
        @endif
        @if ($errors->any())
          <p class="form-msg fail">{{ $errors->first() }}</p>
        @endif
        <div class="field"><label for="f-name">Your name</label><input id="f-name" name="name" value="{{ old('name') }}" required maxlength="100" autocomplete="name"></div>
        <div class="field"><label for="f-email">Email</label><input id="f-email" name="email" type="email" value="{{ old('email') }}" required maxlength="150" autocomplete="email"></div>
        <div class="field"><label for="f-phone">Phone (optional)</label><input id="f-phone" name="phone" value="{{ old('phone') }}" maxlength="30" autocomplete="tel"></div>
        <div class="field"><label for="f-service">Service</label>
          <select id="f-service" name="service">
            <option value="">Select a service</option>
            @foreach ($serviceNames as $name)
              <option value="{{ $name }}" @selected(old('service', $selectedService ?? '') === $name)>{{ $name }}</option>
            @endforeach
          </select>
        </div>
        <div class="field full"><label for="f-message">Project details</label><textarea id="f-message" name="message" required maxlength="3000">{{ old('message') }}</textarea></div>
        <div class="hp" aria-hidden="true"><label for="f-website">Website</label><input id="f-website" name="website" tabindex="-1" autocomplete="off"></div>
        <div class="field full"><button class="btn btn-p" type="submit">Send Message <svg class="ico"><use href="#i-arrow"/></svg></button></div>
      </form>
    </div>
  </div>
</section>
