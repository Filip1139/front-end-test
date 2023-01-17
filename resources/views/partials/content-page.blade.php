@if (have_rows('components'))
    @while (have_rows('components'))
        @php
            the_row();
            $component_name = get_row_layout();
        @endphp

        <x-dynamic-component :component="$component_name" />
    @endwhile
@endif
