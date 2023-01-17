<footer class="o-footer u-bg-light-grey-3">
  <div class="o-container">
      <div class="c-footer">
        <div class="c-footer__col c-footer__col--details">
          <div class="c-footer__logo">
              @hasoption('logo')
                <img class="c-footer__logo-img" src="@option('logo', 'url')" alt="Site logo" />
                @else
                  @if($siteLogo)
                    <img class="c-footer__logo-img" src="{{ $siteLogo[0] }}" alt="Site logo" />
                  @else
                    <span class="c-footer__logo-text">{!! $siteName !!}</span>
                  @endif
              @endoption
          </div>

          @hasoption('footer_text')
            <p class="c-footer__info-text u-text-medium">
              @option('footer_text')
            </p>
          @endoption

          @hasoption('socials')
            <div class="c-footer__socials">
              <ul class="c-socials">
                @options('socials')
                  <li class="c-socials__item">
                    <a class="c-social-icon" href="@sub('link')" target="_blank" rel="nofollow">
                      @hassub('icon')
                        <img src="@sub('icon', 'url')" class="c-social-icon__icon" />
                      @endsub
                    </a>
                  </li>
                @endoptions
              </ul>
            </div>
          @endoption

          <p class="c-footer__copyrights">
            &copy; {{ date('Y') }} {{ get_bloginfo('name', 'display') }}
          </p>
        </div>

        @if (has_nav_menu('footer_navigation_1'))
          <div class="c-footer__col c-footer__col--nav">
            <h6 class="c-footer__col-title u-text-medium">{{ wp_get_nav_menu_name('footer_navigation_1') }}</h6>
            <nav class="c-footer-nav" aria-label="{{ wp_get_nav_menu_name('footer_navigation_1') }}">
              {!! wp_nav_menu(['theme_location' => 'footer_navigation_1', 'menu_class' => 'c-footer-nav__list', 'echo' => false]) !!}
            </nav>
          </div>
        @endif

        @if (has_nav_menu('footer_navigation_2'))
        <div class="c-footer__col c-footer__col--nav">
            <h6 class="c-footer__col-title">{{ wp_get_nav_menu_name('footer_navigation_2') }}</h6>
            <nav class="c-footer-nav" aria-label="{{ wp_get_nav_menu_name('footer_navigation_2') }}">
              {!! wp_nav_menu(['theme_location' => 'footer_navigation_2', 'menu_class' => 'c-footer-nav__list', 'echo' => false]) !!}
            </nav>
          </div>
        @endif

        @if (has_nav_menu('footer_navigation_3'))
        <div class="c-footer__col c-footer__col--nav">
          <h6 class="c-footer__col-title">{{ wp_get_nav_menu_name('footer_navigation_3') }}</h6>
            <nav class="c-footer-nav" aria-label="{{ wp_get_nav_menu_name('footer_navigation_3') }}">
              {!! wp_nav_menu(['theme_location' => 'footer_navigation_3', 'menu_class' => 'c-footer-nav__list', 'echo' => false]) !!}
            </nav>
          </div>
        @endif
      </div>
  </div>
</footer>
