<?php

add_action('wp_enqueue_scripts', 'site_scripts');
//this func add scripts
function site_scripts() {
    $admin_bar = false;
    if (!$admin_bar){
        show_admin_bar( false );
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
    $date = strval(Date('c'));
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_deregister_script('wp-embed');

    // STYLES
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/8e72230c14.js', [], $date);
    wp_enqueue_style('main-styles', get_stylesheet_uri(), [], $date);

    // SCRIPTS
    wp_enqueue_script('myjquery', get_template_directory_uri() . '/js/jquery.min.js', [], $date, true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', [], $date, true);

    if (current_user_can( 'update_core' )) {
        return;
    }
    wp_deregister_style('dashicons');

}

//this func add style-sheets
add_action( 'after_setup_theme', 'theme_support' );
function theme_support() {
	register_nav_menu( 'menu_main_header', 'Header Menu' );
}
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


add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( ABSPATH . '/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'reg_cf' );

function reg_cf(){
    require_once('carbon-fields-options/theme-options.php');
}