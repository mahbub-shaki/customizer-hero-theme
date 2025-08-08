<?php
/**
 * Enqueue compiled Tailwind CSS file

 */
function acf_api_theme_enqueue_styles() {
    wp_enqueue_style(
        'tailwind-style', // Handle name for the stylesheet
        get_template_directory_uri() . '/dist/style.css', // Path to compiled Tailwind CSS
        array(), // No dependencies
        filemtime(get_template_directory() . '/dist/style.css') // Version: cache-busting based on last modified time
    );
}
add_action('wp_enqueue_scripts', 'acf_api_theme_enqueue_styles');


/**
 * Register Customizer settings for the Hero Section
 */
function customizer_hero_customize_register($wp_customize) {

    // 1. Create a new section for Hero content
    $wp_customize->add_section('hero_section', array(
        'title'    => __('Hero Section', 'customizer-hero-theme'), // Section title in Customizer
        'priority' => 30, // Display priority in Customizer
    ));

    // 2. Hero Title (Text Field)
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Welcome to Our Website', // Default text
        'sanitize_callback' => 'sanitize_text_field', // Security: sanitize user input
    ));
    $wp_customize->add_control('hero_title_control', array(
        'label'    => __('Hero Title', 'customizer-hero-theme'), // Label in Customizer
        'section'  => 'hero_section',
        'settings' => 'hero_title',
        'type'     => 'text',
    ));

    // 3. Hero Subtitle (Textarea)
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'We provide awesome services.', // Default subtitle
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_subtitle_control', array(
        'label'    => __('Hero Subtitle', 'customizer-hero-theme'),
        'section'  => 'hero_section',
        'settings' => 'hero_subtitle',
        'type'     => 'textarea',
    ));

    // 4. Hero Button Text (Text Field)
    $wp_customize->add_setting('hero_button_text', array(
        'default'           => 'Learn More', // Default button text
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_button_text_control', array(
        'label'    => __('Hero Button Text', 'customizer-hero-theme'),
        'section'  => 'hero_section',
        'settings' => 'hero_button_text',
        'type'     => 'text',
    ));

    // 5. Hero Button URL (URL Field)
    $wp_customize->add_setting('hero_button_url', array(
        'default'           => '#', // Default URL
        'sanitize_callback' => 'esc_url_raw', // Sanitize as URL
    ));
    $wp_customize->add_control('hero_button_url_control', array(
        'label'    => __('Hero Button URL', 'customizer-hero-theme'),
        'section'  => 'hero_section',
        'settings' => 'hero_button_url',
        'type'     => 'url',
    ));
}
add_action('customize_register', 'customizer_hero_customize_register');




