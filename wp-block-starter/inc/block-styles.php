<?php
function wp_block_starter_register_block_styles() {
    register_block_style(
        'core/button',
        [
            'name'  => 'primary',
            'label' => __('Primary Button', 'wp-block-starter'),
        ]
    );
}
add_action('init', 'wp_block_starter_register_block_styles');