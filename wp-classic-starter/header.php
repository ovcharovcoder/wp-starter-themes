<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="site-branding">
        <?php the_custom_logo(); ?>
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
    </div>
    <nav>
        <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class' => 'primary-menu'
            ]);
        ?>
    </nav>
</header>