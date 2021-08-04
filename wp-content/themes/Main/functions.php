<?php
add_action('wp_enqueue_scripts', 'site_scripts');
//this func add scripts
function site_scripts() {
    $date = strval(Date('c'));
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_deregister_script('wp-embed');

    // STYLES
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/8e72230c14.js', [], $date);
    wp_enqueue_style('main-styles', get_stylesheet_uri(), [], $date);

    // SCRIPTS
    wp_enqueue_script('jquery', get_template_directory_uri() . 'js/jquery.min.js', [], $date, true);

    if (current_user_can( 'update_core' )) {
        return;
    }
    wp_deregister_style('dashicons');

}

//this func add style-sheets

//Remove WP unecessary plugins
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action('wp_head', 'rest_output_link_wp_head', 10); // Rest Api(Json posts)
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links');