<?php

// Register Custom Post Type for Menu Items
function register_menu_item_cpt() {
    $labels = array(
        'name'               => 'Menu Items',
        'singular_name'      => 'Menu Item',
        'menu_name'          => 'Menu Items',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Menu Item',
        'edit_item'          => 'Edit Menu Item',
        'new_item'           => 'New Menu Item',
        'view_item'          => 'View Menu Item',
        'all_items'          => 'All Menu Items',
        'search_items'       => 'Search Menu Items',
        'not_found'          => 'No menu items found.',
        'not_found_in_trash' => 'No menu items found in Trash.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'menu-items'),
        'supports'           => array('title', 'editor', 'thumbnail'),
        'menu_icon'          => 'dashicons-carrot', // Icon for the admin menu
    );

    register_post_type('menu_item', $args);
}
add_action('init', 'register_menu_item_cpt');

// Register Cuisine Taxonomy
function register_cuisine_taxonomy() {
    $labels = array(
        'name'              => 'Cuisines',
        'singular_name'     => 'Cuisine',
        'search_items'      => 'Search Cuisines',
        'all_items'         => 'All Cuisines',
        'edit_item'         => 'Edit Cuisine',
        'update_item'       => 'Update Cuisine',
        'add_new_item'      => 'Add New Cuisine',
        'new_item_name'     => 'New Cuisine Name',
        'menu_name'         => 'Cuisines',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'cuisine'),
    );

    register_taxonomy('cuisine', array('menu_item'), $args);
}
add_action('init', 'register_cuisine_taxonomy');

// Add Meta Box for Menu Item Details
function menu_item_details_meta_box() {
    add_meta_box(
        'menu_item_details',           // Meta box ID
        'Menu Item Details',           // Title
        'menu_item_details_callback',  // Callback function
        'menu_item',                   // Custom post type
        'normal',                      // Position
        'high'                         // Priority
    );
}
add_action('add_meta_boxes', 'menu_item_details_meta_box');

// Meta Box Callback
function menu_item_details_callback($post) {
    wp_nonce_field('menu_item_details', 'menu_item_details_nonce');

    // Get existing values
    $price = get_post_meta($post->ID, '_menu_item_price', true);
    $rating = get_post_meta($post->ID, '_menu_item_rating', true);
    $rating_count = get_post_meta($post->ID, '_menu_item_rating_count', true);

    // Display the fields
?>
    <p>
        <label for="menu_item_price">Price</label>
        <input type="text" name="menu_item_price" id="menu_item_price" value="<?php echo esc_attr($price); ?>" class="widefat" />
    </p>
    <p>
        <label for="menu_item_rating">Rating</label>
        <input type="number" step="0.1" min="0" max="5" name="menu_item_rating" id="menu_item_rating" value="<?php echo esc_attr($rating); ?>" class="widefat" />
    </p>
    <p>
        <label for="menu_item_rating_count">Rating Count</label>
        <input type="number" min="0" name="menu_item_rating_count" id="menu_item_rating_count" value="<?php echo esc_attr($rating_count); ?>" class="widefat" />
    </p>
<?php
}

// Save Meta Box Data
function save_menu_item_details($post_id) {
    if (!isset($_POST['menu_item_details_nonce']) || !wp_verify_nonce($_POST['menu_item_details_nonce'], 'menu_item_details')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Save price
    if (isset($_POST['menu_item_price'])) {
        update_post_meta($post_id, '_menu_item_price', sanitize_text_field($_POST['menu_item_price']));
    }

    // Save rating
    if (isset($_POST['menu_item_rating'])) {
        update_post_meta($post_id, '_menu_item_rating', floatval($_POST['menu_item_rating']));
    }

    // Save rating count
    if (isset($_POST['menu_item_rating_count'])) {
        update_post_meta($post_id, '_menu_item_rating_count', intval($_POST['menu_item_rating_count']));
    }
}
add_action('save_post', 'save_menu_item_details');
