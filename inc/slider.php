<?php
function custom_menu_slider_shortcode($atts)
{
    // Define shortcode attributes
    $atts = shortcode_atts(
        array(
            'post_id' => '', // Post IDs (comma separated)
            'taxonomy' => 'cuisine', // Taxonomy for filtering
            'terms' => '', // Taxonomy terms for filtering
        ),
        $atts,
        'menu_slider'
    );

    // Prepare the query arguments
    $args = array(
        'post_type' => 'menu_item', // Replace with your post type
        'posts_per_page' => -1,
    );

    // Handle multiple post IDs
    if (!empty($atts['post_id'])) {
        // Split the comma-separated post IDs into an array
        $args['post__in'] = array_map('intval', explode(',', $atts['post_id'])); // Convert IDs to integers
    }

    if (!empty($atts['terms'])) {
        // Add tax query if terms are provided
        $args['tax_query'] = array(
            array(
                'taxonomy' => $atts['taxonomy'], // Taxonomy name
                'field'    => 'id',
                'terms'    => $atts['terms'], // The term ID
            ),
        );
    }

    // The Query
    $query = new WP_Query($args);

    // Check if posts are found
    if ($query->have_posts()) {
        $output = '<div class="swiper-container sef-slider-parent"><div class="swiper-wrapper">';

        while ($query->have_posts()) {
            $query->the_post();

            $post_id = get_the_ID(); // Get the post ID
            $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
            $title = get_the_title();
            $price = get_post_meta(get_the_ID(), '_menu_item_price', true);
            $content = get_the_content();
            $rating = get_post_meta(get_the_ID(), '_menu_item_rating', true);

            $output .= '
                <div class="swiper-slide">
                    <div href="#" class="sef-item-card">
                        <div class="sef-img-wrapper">
                            <img src="' . esc_url($featured_image_url) . '" alt="' . esc_attr($title) . '">
                        </div>
                        <div class="sef-text-wrapper">
                            <h3>' . esc_html($title) . '</h3>
                            <p><span>$</span>' . esc_html($price) . '</p>
                        </div>
                        <div class="sef-content-wrapper">
                            <p>' . esc_html($content) . '</p>
                            <div class="btn-rating-wrapper">
                                <div>
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.64062 13.125L4.65625 8.73438L1.25 5.78125L5.75 5.39062L7.5 1.25L9.25 5.39062L13.75 5.78125L10.3437 8.73438L11.3594 13.125L7.5 10.7969L3.64062 13.125Z" fill="#FFB147" />
                                    </svg>
                                    <span>('. esc_html($rating)  . ' Star)</span>
                                </div>
                                <a href="#" class="primary-btn order-now" 
                                   data-item-id="' . esc_attr($post_id) . '" 
                                   data-item-name="' . esc_attr($title) . '" 
                                   data-item-price="' . esc_attr($price) . '"
                                   data-item-image="' . esc_url($featured_image_url) . '">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>';
        }

        wp_reset_postdata();

        $output .= '</div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>';
    } else {
        $output = '<p>No menu items found.</p>';
    }

    return $output;
}

add_shortcode('menu_slider', 'custom_menu_slider_shortcode');