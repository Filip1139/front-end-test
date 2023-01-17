<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});


add_filter( "acf/prepare_field/name=components", function ( $field ) {
    $layouts         = $field["layouts"];
    $ordered_layouts = [];

    foreach ( $field["layouts"] as $k => $layout ) {
        $ordered_layouts[ $layout["name"] ] = $layout;
    }
    ksort( $ordered_layouts );
    $field["layouts"] = $ordered_layouts;

    return $field;
}, 10, 3 );
