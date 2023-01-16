<div class="c-plan js-plan {{$loop->last ? 'is-active' : '' }}">
  @notempty($item['icon'])
    <figure class="c-plan__media">
        <picture class="c-plan__picture">
          <img class="c-plan__img" src="{{ $item['icon']['url']}}" alt="{{ $item['icon']['alt']}}">
        </picture>
    </figure>
  @endnotempty

  <h5 class="c-plan__title u-text-medium">{!! $item['title'] !!}</h5>

  <ul class="c-plan__features c-list c-list--checkmarks">
    @foreach($item['features_list'] as $feature)
      <li class="c-plan__feature c-list__item">{!! $feature['title'] !!}</li>
    @endforeach
  </ul>

    @if($item['is_free'] or $item['price'] == false)
      <p class="c-plan__price c-plan__price--free u-text-medium">{{ __('Free', 'Recruitment') }}</p>
    @else
      <p class="c-plan__price c-plan__price--paid"><span class="c-plan__value u-text-medium">${!! $item['price'] !!}</span><span class="c-plan__price-suffix"> / mo</span></p>
    @endif

    <div class="c-plan__action">
      <button class="c-btn c-btn--secondary c-btn--rounded-lg js-select-plan">{{ __('Select', 'Recruitment') }}</button>
    </div>
</div>
