<section class="o-section">
  <div class="o-container">
    <div class="c-stats" data-aos="fade-up">
      @notempty($stats_list)
      <ul class="c-stats__list">

        @foreach($stats_list as $item)
          <li class="c-stats__list-item">
            <div class="c-media-text">
              <figure class="c-media-text__media">
                  <picture class="c-media-text__picture">
                    <img class="c-media-text__img" src="{{ $item['icon']['url']}}" alt="{{ $item['icon']['alt']}}">
                  </picture>
              </figure>
              <div class="c-media-text__content">
                <p class="c-media-text__heading u-text-bold">{!! $item['title'] !!}</p>
                <p class="c-media-text__desc">{!! $item['description'] !!}</p>
              </div>
            </div>
          </li>
        @endforeach
      </ul>
      @endnotempty

    </div>

  </div>

</section>
