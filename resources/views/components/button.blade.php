@if($as == 'button')
<button class="c-btn c-btn--{{ $type }} {{ $class }}">
  <div class="c-btn__labels">
    <span class="c-btn__label">{{ $title }}</span>
    <span class="c-btn__label c-btn__label--hidden">{{ $title }}</span>
  </div>
</button>
@elseif($as == 'link')
<a class="c-btn c-btn--{{ $type }} {{ $class }}" href="{{ $url }}" target="{{ $target}}">
  <div class="c-btn__labels">
    <span class="c-btn__label">{{ $title }}</span>
    <span class="c-btn__label c-btn__label--hidden">{{ $title }}</span>
  </div>
</a>
@endif
