<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php 
// ✅ Add a custom class for full-width header on single gallery page
$full_width_header = is_singular('gallery') ? 'full-width-header' : '';
?>

<!-- ✅ Apply conditional class to site-header -->
<header class="site-header <?php echo esc_attr($full_width_header); ?>">
    <div class="header-container">
        <div class="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </div>
        <nav class="main-navigation">
            <?php
            wp_nav_menu([
                'theme_location' => 'main_menu',
                'menu_class'     => 'nav-menu',
                'container'      => false,
                'fallback_cb'    => false,
            ]);
            ?>
        </nav>
    </div>
</header>
