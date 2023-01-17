<header class="o-header">
  <div class="o-container">
      <div class="c-header">
        <a class="c-header__logo" href="{{ home_url('/') }}">
          @if($siteLogo)
          <img class="c-header__logo-img" src="{{ $siteLogo[0] }}" alt="logo" />
          @else
          {!! $siteName !!}
          @endif
        </a>
        @if (has_nav_menu('primary_navigation'))
          <nav class="c-nav" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'c-nav__list u-flex', 'echo' => false]) !!}
          </nav>
        @endif
      </div>

  </div>

</header>
