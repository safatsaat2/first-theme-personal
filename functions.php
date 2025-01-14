<?php
// Theme setup function: Adds theme features and registers menus.
function srs_e_food_theme_setup() {
    add_theme_support('title-tag'); // Enables dynamic title tags.
    add_theme_support('post-thumbnails'); // Enables featured images.
    add_theme_support('custom-logo'); // Enables custom logo support.

    // Registers navigation menus.
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'srs-e-food'),
    ));
}
add_action('after_setup_theme', 'srs_e_food_theme_setup');

// Enqueue styles and scripts.
function srs_e_food_enqueue_scripts() {
    // Enqueue styles.
    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_template_directory() . '/style.css') // Uses file modification time for cache busting.
    );

    // Enqueue JavaScript.
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery'),
        filemtime(get_template_directory() . '/assets/js/main.js'), // Uses file modification time for cache busting.
        true // Loads the script in the footer.
    );
}
add_action('wp_enqueue_scripts', 'srs_e_food_enqueue_scripts');

// Include custom post types file if it exists.
if (file_exists(get_template_directory() . '/inc/custom-post-types.php')) {
    require_once get_template_directory() . '/inc/custom-post-types.php';
}
