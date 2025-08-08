 * The Header for the theme.
 *
 * This template displays all of the <head> section
 * and the opening of the <body> tag until <main>.
 *
 * @package Customizer_Hero_Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Set the character encoding for the website -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    
    <!-- Ensure proper rendering and touch zooming on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- WordPress hook: Adds styles, scripts, and metadata from themes/plugins -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
// WordPress hook: Executes actions immediately after the opening <body> tag
wp_body_open();
?>