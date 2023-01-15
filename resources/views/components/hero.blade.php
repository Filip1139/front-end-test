<section class="o-section">
  <div class="o-container">
    <div class="c-hero u-relative">

      <div class="c-hero__text-content">
        @notempty($title)
          <h1 class="c-hero__heading o-h1">
            {!! $title !!}
          </h1>
        @endnotempty

        @notempty($description)
          <p class="c-hero__desc">
            {!! $description !!}
          </p>
        @endnotempty

        @notempty($link)
        <div class="c-hero__action">
          <a class="c-btn c-btn--primary" href="{{ $link['url']}}" target="{{ $link['target'] }}">{{ $link['title']}}</a>
        </div>
        @endnotempty
      </div>

      @notempty($image)
        <figure class="c-hero__media u-relative">
            <picture class="c-hero__picture">
              <img class="c-hero__img" src="{{ $image['sizes']['large'] }}" alt="{{ $image['alt']}}">
            </picture>
        </figure>
      @endnotempty
    </div>
  </div>
</section>
