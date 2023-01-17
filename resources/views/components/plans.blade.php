<section class="o-section">
  <div class="o-container">
    <div class="c-plans">
        <header class="c-plans__header u-text-center">
            <h2 class="c-plans__heading o-h2"  data-aos="fade-up-short" data-aos-delay="50">{!! $title !!}</h2>
            <p class="c-plans__desc"  data-aos="fade-up-short" data-aos-delay="100">{!! $description !!}</p>
        </header>

        @notempty($plans_list)
          <ul class="c-plans__list">
              @foreach($plans_list as $item)
                <li class="c-plans__list-item" data-aos="fade-up-short" data-aos-delay="{{ $loop->iteration * 50}}">
                    @include('partials.plan')
                </li>
              @endforeach
          </ul>
        @endnotempty
    </div>
  </div>
</section>
