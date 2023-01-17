<section class="o-section">
  <div class="o-container">
    <div class="c-hero u-relative">

      <div class="c-hero__text-content">
        @notempty($title)
          <h1 class="c-hero__heading o-h1" data-aos="fade-up-short" data-aos-delay="50">
            {!! $title !!}
          </h1>
        @endnotempty

        @notempty($description)
          <p class="c-hero__desc" data-aos="fade-up-short" data-aos-delay="100">
            {!! $description !!}
          </p>
        @endnotempty

        @notempty($link)
        <div class="c-hero__action" data-aos="fade-up-short" data-aos-delay="150">
          <x-button :url="$link['url']" :target="$link['target']" :title="$link['title']" />
        </div>
        @endnotempty
      </div>

      @notempty($image)
        <figure class="c-hero__media u-relative" data-aos="fade-up-short" data-aos-delay="200">
            <picture class="c-hero__picture">
              <img class="c-hero__img" src="{{ $image['sizes']['large'] }}" alt="{{ $image['alt']}}">
            </picture>
        </figure>
      @endnotempty
    </div>
  </div>
</section>
