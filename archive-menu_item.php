<?php
get_header();
?>
<style>
    .sef-hero-menu {
        background: #f9fafc;
        padding: 80px 0;
    }

    .sef-hero-menu .sef-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        text-align: center;
    }

    .sef-hero-menu .sef-container .menu {
        margin-bottom: 30px;
        display: inline-block;
        padding: 2px 5px;
        background: #f2f3f5;
        font-size: 12px;
        color: #231341;
    }

    .sef-hero-menu .sef-container .heading {
        font-size: 72px;
        letter-spacing: -3px;
        line-height: 100%;
        margin-bottom: 30px;
        color: #231341;
    }

    .sef-hero-menu .sef-container .description {
        font-size: 15px;
        line-height: 100%;
        margin-bottom: 30px;
        color: #6f6f87;
    }

    .sef-hero-menu .sef-container .menu-box {
        max-width: 164px;
        margin: 0 auto;
        padding: 0 20px;
        height: 55px;
        background: #f5c332;
        color: #231341;
        display: flex;
        align-items: center;
    }

    .sef-hero-menu .sef-container .menu-box span {
        padding: 0 10px;
        color: #231341;
    }
</style>
<section class="sef-hero-menu">
    <div class="sef-container">
        <span class="menu">Menu</span>
        <h2 class="heading">Only appetite
            Can be lacking in cooking</h2>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A iusto dignissimos</p>
        <div class="menu-box">
            <span>Home</span>/<span>Menu</span>
        </div>
    </div>
</section>

<style>
    .tab-section {
        padding: 80px 0;
    }

    .sef-tab-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .tab-section .sef-tab-container .menu-items-pr {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 30px;
    }

    /* General Tab Styles */
    .tabs-container {
        position: relative;
    }

    .tabs {
        display: flex;
        justify-content: flex-start;
    }

    .tab-button {
        background-color: #f1f1f1;
        padding: 10px 20px;
        border: 1px solid #ddd;
        cursor: pointer;
        margin-right: 5px;
        font-size: 16px;
        transition: background-color 0.3s ease;
        color: #231341;
    }

    .tab-button:hover {
        background-color: #ddd;
    }

    .tab-button.active {
        background-color: #f5c332;
        color: #231341;
    }

    .tab-content {
        width: 100%;
        position: absolute;
        top: 50px;
        left: 0;
        opacity: 0;
        /* Initially hidden */
        visibility: hidden;
        /* Hide content initially */
        padding: 20px;
        transform: translateY(40px);
        /* Start slightly off-screen */
        transition: opacity 0.5s ease, transform 0.5s ease, visibility 0s 0.5s;
        /* Smooth opacity and sliding transition */
    }

    /* Active Tab Content */
    .tab-content.active {
        opacity: 1;
        /* Makes content visible */
        visibility: visible;
        /* Ensures visibility when active */
        transform: translateY(0);
        /* Slides the content up to its original position */
        transition: opacity 0.5s ease, transform 0.5s ease;
        /* Transition for the active state */
    }
</style>
<style>
    .sef-item-card {
        max-width: 270px;
        margin: 0 auto;
        display: block;
        text-decoration: none;
        width: 100%;
    }

    .sef-item-card .sef-img-wrapper {
        width: 100%;
        height: 240px;
    }

    .sef-item-card .sef-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .sef-item-card .sef-text-wrapper {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 15px;
        padding-left: 15px;
        background-color: #f2f3f5;
    }

    .sef-item-card .sef-text-wrapper h3 {
        width: calc(100% - 90px);
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        font-family: "Rubik", sans-serif;
        font-size: 16px;
        letter-spacing: 0;
        line-height: 120%;
        color: #231e41;
    }

    .sef-item-card .sef-text-wrapper p {
        width: 60px;
        height: 60px;
        font-weight: 500;
        background-color: #f5c332;
        color: #231e41;
        font-size: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: "Rubik", sans-serif;
    }

    .sef-item-card .sef-text-wrapper p span {
        font-size: 12px;
        font-weight: 400;
    }

    .sef-item-card .sef-content-wrapper {}

    .sef-item-card .sef-content-wrapper p {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        font-family: "Rubik", sans-serif;
        font-size: 15px;
        letter-spacing: 0;
        line-height: 120%;
        color: #6f6f87;
        margin-bottom: 15px;
    }

    .sef-item-card .sef-content-wrapper .btn-rating-wrapper {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sef-item-card .sef-content-wrapper .btn-rating-wrapper div {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sef-item-card .sef-content-wrapper .btn-rating-wrapper div svg {}

    .sef-item-card .sef-content-wrapper .btn-rating-wrapper div span {
        font-family: "Rubik", sans-serif;
        font-size: 12px;
        color: #6f6f87;
    }

    .sef-item-card .sef-content-wrapper .btn-rating-wrapper .primary-btn {
        height: 35px;
    }
</style>
<section class="tab-section">
    <div class="sef-tab-container">
        <div class="tabs-container">
            <div class="tabs">
                <?php
                // Get all terms from the 'cuisine' taxonomy
                $terms = get_terms(array(
                    'taxonomy' => 'cuisine',  // Replace 'cuisine' with your actual taxonomy name
                    'orderby' => 'name',
                    'order'   => 'ASC',
                    'hide_empty' => false,  // Set to true to exclude empty terms
                ));

                if ($terms && !is_wp_error($terms)) {
                    $first = true; // Variable to track first tab
                    foreach ($terms as $term) {
                        // Add the 'active' class to the first tab
                        $active_class = $first ? 'active' : '';
                ?>
                        <button class="tab-button <?php echo $active_class; ?>" onclick="openTab(event, 'tab-<?php echo $term->term_id; ?>')">
                            <?php echo $term->name; ?>
                        </button>
                <?php
                        $first = false;
                    }
                }
                ?>
            </div>

            <div class="tab-contents">
                <?php
                // Initialize the $first variable to true before starting the loop
                $first = true;

                // Loop through each term and display the related posts
                if ($terms && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                        // Add the active class to the first tab's content
                        $active_class = ($first) ? 'active' : '';
                        $first = false; // After the first tab, set $first to false
                ?>
                        <div id="tab-<?php echo $term->term_id; ?>" class="tab-content <?php echo $active_class; ?>">
                            <div class="menu-items-pr">
                                <?php
                                // Query posts related to this term
                                $args = array(
                                    'post_type' => 'menu_item', // Replace with your post type
                                    'posts_per_page' => -1,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'cuisine',  // Replace with your actual taxonomy
                                            'field'    => 'id',
                                            'terms'    => $term->term_id,
                                        ),
                                    ),
                                );
                                $query = new WP_Query($args);
                                if ($query->have_posts()) :
                                    while ($query->have_posts()) : $query->the_post();
                                ?>
                                        <div class="sef-item-card">
                                            <div class="sef-img-wrapper">
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // Get the full-size featured image URL
                                                ?>
                                                    <img src="<?php echo $featured_image_url; ?>" alt="<?php the_title(); ?>" />
                                                <?php
                                                } else {
                                                ?>
                                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/home/food-img.jpg'; ?>" alt="item">
                                                <?php
                                                }
                                                ?>
                                            </div>
                                            <div class="sef-text-wrapper">
                                                <h3><?php the_title(); ?></h3>
                                                <p><span>$</span><?php echo get_post_meta(get_the_ID(), '_menu_item_price', true); ?></p>
                                            </div>
                                            <div class="sef-content-wrapper">
                                                <p><?php echo get_the_content(); ?></p>
                                                <div class="btn-rating-wrapper">
                                                    <div>
                                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3.64062 13.125L4.65625 8.73438L1.25 5.78125L5.75 5.39062L7.5 1.25L9.25 5.39062L13.75 5.78125L10.3437 8.73438L11.3594 13.125L7.5 10.7969L3.64062 13.125Z" fill="#FFB147" />
                                                        </svg>
                                                        <span>(<?php echo get_post_meta(get_the_ID(), '_menu_item_rating', true); ?> Star)</span>
                                                    </div>
                                                    <a href="#" class="primary-btn order-now">order now</a>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    endwhile;
                                endif;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>

        </div>
    </div>
</section>
<style>
    @media (max-width: 1024px) {
        .tab-section .sef-tab-container .menu-items-pr {
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 15px;
        }
    }

    @media (max-width:767px) {
        .sef-hero-menu {
            padding: 30px 0;
        }

        .sef-hero-menu .sef-container .menu {
            font-size: 10px;
            margin-bottom: 10px;
        }

        .sef-hero-menu .sef-container .heading {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .sef-hero-menu .sef-container .description {
            font-size: 12px;
            margin-bottom: 10px;
        }

        .sef-hero-menu .sef-container .menu-box {
            height: 35px;
        }

        .sef-hero-menu .sef-container .menu-box span {
            font-size: 12px;
        }

        .tab-section {
            padding: 30px 10px;
        }

        .tab-button {
            font-size: 12px;
            padding: 5px 10px;
        }

        .tab-content {
            top: 15px;
            padding: 20px 0;
        }

        .tab-section .sef-tab-container .menu-items-pr {
            grid-template-columns: repeat(1, minmax(0, 1fr));
        }
    }
</style>

<script>
    function openTab(evt, tabId) {
        // Hide all tab content
        var i, tabContents, tabButtons;
        tabContents = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabContents.length; i++) {
            tabContents[i].classList.remove("active");
        }

        // Remove the 'active' class from all buttons
        tabButtons = document.getElementsByClassName("tab-button");
        for (i = 0; i < tabButtons.length; i++) {
            tabButtons[i].classList.remove("active");
        }

        // Show the current tab's content and add 'active' class to the clicked tab
        document.getElementById(tabId).classList.add("active");
        evt.currentTarget.classList.add("active");
    }
</script>

<?php
get_footer();
?>