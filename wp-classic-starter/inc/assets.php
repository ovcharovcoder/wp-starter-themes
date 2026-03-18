<?php
/**
 * Підключення стилів та скриптів теми
 *
 * @package WP_Classic_Theme
 */

function wp_classic_assets() {
    // Підключення скидання стилів
    wp_enqueue_style(
        'optimize-style',
        get_template_directory_uri() . '/assets/css/optimize.css',
        [],
        null
    );

    // Підключення основних стилів
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        ['optimize-style'], // залежність від скидання стилів
        filemtime(get_template_directory() . '/assets/css/main.css') // автоматичне оновлення при зміні файлу
    );

    // Підключення JS
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        ['jquery'], // залежність від jQuery, якщо потрібна
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true // завантаження в футері
    );
}

add_action('wp_enqueue_scripts', 'wp_classic_assets');