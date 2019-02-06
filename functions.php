<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar(false);


/**
 * Disable the emoji's
 */
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
    add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param array $plugins
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
    if ( 'dns-prefetch' == $relation_type ) {
        /** This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

        $urls = array_diff( $urls, array( $emoji_svg_url ) );
    }

    return $urls;
}

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);

// Remove unnecessary feeds and manifests

add_action( 'after_theme_support', 'remove_feed' );

function remove_feed() {
    remove_theme_support( 'automatic-feed-links' );


}



// Use what works best for your website
add_action('init', 'my_head_cleanup');

function my_head_cleanup() {
    // Category Feeds
    remove_action( 'wp_head', 'feed_links_extra', 3 );

    // Post and Comment Feeds
    remove_action( 'wp_head', 'feed_links', 2 );

    // EditURI link
    remove_action( 'wp_head','rsd_link' );

    // Windows Live Writer
    remove_action( 'wp_head','wlwmanifest_link' );

    // index link
    remove_action( 'wp_head','index_rel_link' );

    // previous link
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );

    // start link
    remove_action( 'wp_head', 'start_post_rel_link', 10,0 );

    // Links for Adjacent Posts
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

    // WP version
    remove_action( 'wp_head', 'wp_generator' );
}


if( ! function_exists( 'fix_no_editor_on_posts_page' ) ) {

    function fix_no_editor_on_posts_page( $post_type, $post ) {
        if( isset( $post ) && $post->ID != get_option('page_for_posts') ) {
            return;
        }

        remove_action( 'edit_form_after_title', '_wp_posts_page_notice' );
        add_post_type_support( 'page', 'editor' );
    }

    add_action( 'add_meta_boxes', 'fix_no_editor_on_posts_page', 0, 2 );

}




function my_deregister_scripts() {
    wp_dequeue_script( 'wp-embed' );
}

add_action( 'wp_footer', 'my_deregister_scripts' );


remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );



//CSS register

function ssp_register_stylesheets() {
    wp_register_style( 'responsive-nav-css', get_stylesheet_directory_uri() . '/libs/responsive-nav/responsive-nav.css' );
    wp_register_style( 'font-awesome-all', get_stylesheet_directory_uri() . '/libs/components-font-awesome/css/fontawesome-all.min.css' );
    wp_register_style( 'style-owl-carousel', get_stylesheet_directory_uri() . '/libs/owl.carousel/dist/assets/owl.carousel.min.css' );


    wp_register_style( 'style-home-page', get_stylesheet_directory_uri() . '/css/home.min.css' );
    wp_register_style( 'about-us-page', get_stylesheet_directory_uri() . '/css/about-us.min.css' );
    wp_register_style( 'product-page', get_stylesheet_directory_uri() . '/css/product.min.css' );
//    wp_register_style( 'calculator', get_stylesheet_directory_uri() . '/css/style-calculator.min.css' );
//    wp_register_style( 'blog', get_stylesheet_directory_uri() . '/css/style-blog.min.css' );



}

add_action( 'init', 'ssp_register_stylesheets' );


function ssp_enqueue_stylesheet() {

        wp_enqueue_style( 'responsive-nav-css' );
        wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery.min.js', 0 , 0 , true);
        wp_enqueue_script('responsive-nav-js', get_template_directory_uri() . '/libs/responsive-nav/responsive-nav.min.js', 0 , 0 , true);

        wp_enqueue_style( 'font-awesome-all' );



    // only enqueue on front-page
    if ( is_front_page()  ) {
        wp_enqueue_style( 'style-home-page' );
        wp_enqueue_style( 'style-owl-carousel' );
        wp_enqueue_script('js-owl-carousel', get_template_directory_uri() . '/libs/owl.carousel/dist/owl.carousel.min.js', 0 , 0 , true);
//
//        wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.min.js', 0 , 0 , true);
        wp_enqueue_script('commont', get_template_directory_uri() . '/js/scripts.min.js', 0 , 0 , true);
        wp_enqueue_script('calculator-home', get_template_directory_uri() . '/js/calculator-home.js', 0 , 0 , true);


    }


    if(is_page('about-us')){
        wp_enqueue_style( 'about-us-page' );
        wp_enqueue_script('commont', get_template_directory_uri() . '/js/scripts.min.js', 0 , 0 , true);


//        wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.min.js', 0 , 0 , true);


    }

    if(is_page('product')){
        wp_enqueue_style( 'product-page' );
        wp_enqueue_script('commont', get_template_directory_uri() . '/js/scripts.min.js', 0 , 0 , true);


//        wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.min.js', 0 , 0 , true);


    }


    // only enqueue on vps page
    if ( is_404() ) {
//        wp_enqueue_style( 'style-404' );


    }










}


add_action( 'wp_enqueue_scripts', 'ssp_enqueue_stylesheet' );


