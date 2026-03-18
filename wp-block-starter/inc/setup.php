<?php
function wp_block_starter_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor.css');

    // Меню
    register_nav_menus([
        'primary' => __('Primary Menu', 'wp-block-starter'),
    ]);
}
add_action('after_setup_theme', 'wp_block_starter_setup');