<?php
function wp_classic_excerpt($length = 20) {
    $excerpt = explode(' ', get_the_excerpt(), $length);
    if(count($excerpt) >= $length) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    return $excerpt;
}