<?php
/**
 * ================================
 * 📸 Register Custom Post Type: Gallery
 * ================================
 * This CPT is used to create gallery items with custom fields via ACF.
 */
function register_gallery_cpt() {
    $labels = array(
        'name'               => 'Gallery',
        'singular_name'      => 'Gallery Item',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Gallery Item',
        'edit_item'          => 'Edit Gallery Item',
        'new_item'           => 'New Gallery Item',
        'view_item'          => 'View Gallery Item',
        'search_items'       => 'Search Gallery',
        'not_found'          => 'No gallery items found',
        'not_found_in_trash' => 'No gallery items found in Trash',
        'all_items'          => 'All Gallery Items',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'gallery'),
        'supports'           => array('title'), // Image, caption, alt-text will be handled via ACF fields.
        'menu_icon'          => 'dashicons-format-gallery', // WordPress Dashicon for visual display in admin.
        'show_in_rest'       => true, // Enables Gutenberg support and REST API access.
    );

    register_post_type('gallery', $args);
}
add_action('init', 'register_gallery_cpt');



/**
 * ========================
 * 🍽️ Register Main Navigation Menu
 * ========================
 * This registers a single menu location called "Main Menu"
 * which you can assign in Appearance > Menus.
 */
function mahbubskill_register_menu() {
    register_nav_menu('main_menu', __('Main Menu', 'mahbubskill'));
}
add_action('after_setup_theme', 'mahbubskill_register_menu');

