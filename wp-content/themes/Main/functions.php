<?php

add_action('wp_enqueue_scripts', 'site_scripts');
add_action( 'init', 'register_post_types' );

function register_post_types(){

    //Service
	register_post_type( 'service', [
		'labels' => [
			'name'               => 'Services', // основное название для типа записи
			'singular_name'      => 'Service', // название для одной записи этого типа
			'add_new'            => 'Add service', // для добавления новой записи
			'add_new_item'       => 'Add service', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit service', // для редактирования типа записи
			'new_item'           => 'New service', // текст новой записи
			'view_item'          => 'See service', // для просмотра записи этого типа.
			'search_items'       => 'Search service', // для поиска по этим типам записи
			'not_found'          => 'Not Found', // если в результате поиска ничего не было найдено
			'menu_name'          => 'Services', // название меню
		],
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-screenoptions',
		'supports'            => [ 'title', 'editor','thumbnail','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'has_archive'         => true,
        'rewrite'            => ['slug' => 'services'],
	] );
    register_taxonomy( 'service-categories', 'service', [
		'labels'                => [
			'name'              => 'Service Categories',
			'singular_name'     => 'Service Category',
			'search_items'      => 'Search Category',
			'all_items'         => 'All Categories',
			'view_item '        => 'View Category',
			'edit_item'         => 'Edit Category',
			'update_item'       => 'Update Category',
			'add_new_item'      => 'Add New Category',
			'new_item_name'     => 'New Category Name',
			'menu_name'         => 'Categories',
            'add_or_remove_items' => 'Add or Remove Category',
            'choose_from_most_used' => 'Choose the Most Popular Category',
		],
		'public'                => true,
		'hierarchical'          => true,
	] );

    //Features
    register_post_type( 'feature', [
		'labels' => [
			'name'               => 'Features', // основное название для типа записи
			'singular_name'      => 'Feature', // название для одной записи этого типа
			'add_new'            => 'Add Feature', // для добавления новой записи
			'add_new_item'       => 'Add Feature', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit Feature', // для редактирования типа записи
			'new_item'           => 'New Feature', // текст новой записи
			'view_item'          => 'See Feature', // для просмотра записи этого типа.
			'search_items'       => 'Search Feature', // для поиска по этим типам записи
			'not_found'          => 'Not Found', // если в результате поиска ничего не было найдено
			'menu_name'          => 'Features', // название меню
		],
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-screenoptions',
		'supports'            => [ 'title', 'thumbnail',], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'has_archive'         => true,
        'rewrite'            => ['slug' => 'feature'],
	] );
    register_taxonomy( 'feature-categories', 'feature', [
		'labels'                => [
			'name'              => 'Feature Categories',
			'singular_name'     => 'Feature Category',
			'search_items'      => 'Search Category',
			'all_items'         => 'All Categories',
			'view_item '        => 'View Category',
			'edit_item'         => 'Edit Category',
			'update_item'       => 'Update Category',
			'add_new_item'      => 'Add New Category',
			'new_item_name'     => 'New Category Name',
			'menu_name'         => 'Categories',
            'add_or_remove_items' => 'Add or Remove Category',
            'choose_from_most_used' => 'Choose the Most Popular Category',
		],
		'public'                => true,
		'hierarchical'          => true,
	] );
}

//this func adds scripts
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
    add_theme_support('post-thumbnails');
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
    require_once('carbon-fields-options/post-meta.php');
}