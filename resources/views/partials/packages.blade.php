{{-- Price cards for one service. Expects $service. --}}
<div class="plans">
  @foreach ($service['packages'] as $plan)
    <article class="plan @if ($plan['popular']) plan-pop @endif">
      @if ($plan['popular'])<span class="plan-badge">Most popular</span>@endif
      <h3>{{ $plan['name'] }}</h3>
      <p class="plan-for">{{ $plan['best_for'] }}</p>
      <p class="plan-price"><small>Starting from</small><b>${{ number_format($plan['price']) }}</b><span>{{ $plan['billing'] === 'per month' ? '/ month' : 'one-time' }}</span></p>
      <ul class="plan-list">
        @foreach ($plan['features'] as $feature)
          <li><span class="tick"><svg class="ico"><use href="#i-check"/></svg></span>{{ $feature }}</li>
        @endforeach
      </ul>
      <a class="btn {{ $plan['popular'] ? 'btn-w' : 'btn-p' }}" href="{{ route('pricing', ['service' => $service['name']]) }}#contact">Choose {{ $plan['name'] }} <svg class="ico"><use href="#i-arrow"/></svg></a>
    </article>
  @endforeach
</div>
