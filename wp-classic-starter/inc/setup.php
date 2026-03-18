<?php
function wp_classic_pro_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', ['search-form', 'comment-form', 'gallery', 'caption']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'wp-classic-pro'),
    ]);

    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'wp_classic_pro_setup');