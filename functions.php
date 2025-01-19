<?php
// Theme setup function: Adds theme features and registers menus.
function srs_e_food_theme_setup()
{
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
function enqueue_custom_fonts()
{
    // Enqueue Google Fonts
    wp_enqueue_style(
        'custom-google-fonts', // Handle for the stylesheet
        'https://fonts.googleapis.com/css2?family=Lilita+One&family=Monoton&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap', // URL for the font
        array(), // Dependencies (none in this case)
        null // No versioning, loaded as is
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');

function srs_e_food_enqueue_scripts()
{
    // Enqueue styles.
    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_template_directory() . '/style.css') // Uses file modification time for cache busting.
    );
    // Enqueue styles.
    wp_enqueue_style(
        'original-style', // Handle for the stylesheet.
        get_template_directory_uri() . '/assets/css/style.css', // Path to the CSS file.
        array(), // Dependencies (empty here).
        filemtime(get_template_directory() . '/assets/css/style.css') // Cache busting.
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
if (file_exists(get_template_directory() . '/inc/slider.php')) {
    require_once get_template_directory() . '/inc/slider.php';
}
function enqueue_swiper_assets()
{
    // Enqueue Swiper CSS
    wp_enqueue_style(
        'swiper-css', // Handle name
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', // URL to the stylesheet
        array(), // Dependencies
        null // No version needed as CDN handles updates
    );

    // Enqueue Swiper JS
    wp_enqueue_script(
        'swiper-js', // Handle name
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', // URL to the script
        array(), // Dependencies
        null, // No version needed as CDN handles updates
        true // Load in the footer
    );
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');
