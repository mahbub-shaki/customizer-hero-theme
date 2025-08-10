<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Set the character encoding for the site -->
    <meta charset="<?php bloginfo('charset'); ?>">
    
    <!-- Viewport settings for responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Site title: site name and page title -->
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
    
    <!-- Load the theme’s default stylesheet -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    
    <!-- WordPress and plugins hook for additional head content -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php 
// Conditional class: if viewing a single 'gallery' post, add 'full-width-header' class
$full_width_header = is_singular('gallery') ? 'full-width-header' : '';
?>

<!-- Header element with conditional class applied -->
<header class="site-header <?php echo esc_attr($full_width_header); ?>">
    <div class="header-container">
        <!-- Site title with link to homepage -->
        <div class="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </div>
        
        <!-- Main navigation menu -->
        <nav class="main-navigation">
            <?php
            wp_nav_menu([
                'theme_location' => 'main_menu', // Loads the menu assigned to 'main_menu' location
                'menu_class'     => 'nav-menu',  // CSS class for the menu
                'container'      => false,       // Do not wrap the menu in a container element
                'fallback_cb'    => false,       // Do not display fallback menu if none is assigned
            ]);
            ?>
        </nav>
    </div>
</header>
