@php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
@endphp

<header class="o-header">
  <div class="o-container">
      <div class="c-header">
        <a class="c-header__logo" href="{{ home_url('/') }}">
          @if($image)
          <img class="c-header__logo-img" src="{{ $image[0] }}" alt="logo" />
          @else
          {!! $siteName !!}
          @endif
        </a>
      </div>

  </div>

  @if (has_nav_menu('primary_navigation'))
    <nav class="c-nav" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'c-nav__list', 'echo' => false]) !!}
    </nav>
  @endif
</header>
