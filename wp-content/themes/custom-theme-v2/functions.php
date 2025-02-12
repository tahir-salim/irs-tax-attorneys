<?php
function wp_blank_setup() {
	// Support programmable title tag.
	add_theme_support( 'title-tag' );

	// Support custom logo.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) ); 
	load_theme_textdomain( 'wp-blank', get_template_directory() . '/languages' );

	// Register top menu.
	register_nav_menus(
		array(
			'top' => esc_html__( 'Top Menu', 'wp-blank' ),
		)
	);
}
add_action( 'after_setup_theme', 'wp_blank_setup' );

/* %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% Custom Style/Script %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */
function theme_scripts() {

    wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css' );
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'custom-style2', get_template_directory_uri() . '/assets/css/responsive.css' );
    // wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/WooCommerce-Custom.css' );
    wp_enqueue_style( 'theme-style', get_stylesheet_uri());  

    wp_enqueue_script( 'main-lib', get_template_directory_uri() . '/assets/js/jquery.js', array(), '1.0.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
/* %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% Custom Style/Script End %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */

function load_wp_media_upload() {
   wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'load_wp_media_upload' );

function global_options() {
    global $options;
    $options = get_option('cOptn');
}
add_action( 'init', 'global_options' );

require_once ( get_stylesheet_directory() . '/theme-option.php' );

/* Register widget area. */
function wp_blank_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wp-blank' ),
			'id'            => 'sidebar-main',
			'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'wp-blank' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wp_blank_widgets_init' );

/* %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% Custom Post Type Code %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */

/* %% Create Post Type Code %% */

// add_action('init', 'blogs');
// function blogs()
// {
//     $labels = array(
//         'name' => _x('Blogs', 'post type general name'),
//         'singular_name' => _x('Blog', 'post type singular name'),
//         'add_new' => _x('Add New', 'Blog'),
//         'add_new_item' => __('Add New Blog'),
//         'edit_item' => __('Edit Blog'),
//         'new_item' => __('New Blog'),
//         'view_item' => __('View Blog'),
//         'search_items' => __('Search Blog'),
//         'not_found' => __('Nothing found'),
//         'not_found_in_trash' => __('Nothing found in Trash'),
//         'parent_item_colon' => ''
//     );
//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'query_var' => true,
//         'menu_icon' => true,
//         'rewrite' => true,
//         'capability_type' => 'post',
//         'hierarchical' => false,
//         'menu_position' => null,
//         'supports' => array('title','thumbnail','excerpt','editor')
//     );
//     register_post_type('blogs', $args);
// }

/* %% Create Post Type Category %% */

// add_action('init', 'blogs_category', 0);
// function all_menu_category()
// {
//     $labels = array(
//         'name' => _x('Category', 'taxonomy general name'),
//         'singular_name' => _x('Category', 'taxonomy singular name'),
//         'search_items' => __('Search Category'),
//         'all_items' => __('All Category'),
//         'parent_item' => __('Parent Category'),
//         'parent_item_colon' => __('Parent Category:'),
//         'edit_item' => __('Edit Category'),
//         'update_item' => __('Update  Category'),
//         'add_new_item' => __('Add New Category'),
//         'new_item_name' => __('New Category'),
//         'all_menu_name' => __('Category'),
//     );
//     register_taxonomy('all_menu_category', array('blogs'), array(
//         'hierarchical' => true,
//         'labels' => $labels,
//         'show_ui' => true,
//         'query_var' => true,
//         'rewrite' => array('slug' => 'blogs_category'),
//     ));
// }

/* %% Create Post Type Tag %% */

// register_taxonomy( 
// 'blogs-tag', //slug 
// 'blogs', //post-type
// array( 
//     'hierarchical'  => false, 
//     'label'         => __( 'My Custom Tags','taxonomy general name'), 
//     'singular_name' => __( 'Tag', 'taxonomy general name' ), 
//     'rewrite'       => true, 
//     'query_var'     => true 
// ));

/* %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% Custom Post Type Code End %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */

/* %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% Page Default Layout %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */
add_filter('show_admin_bar', '__return_false');	
add_filter( 'use_block_editor_for_post_type', '__return_false' );
/* %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% Page Default Layout End %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */

/* %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% WooCommerce Setting %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */

// function mytheme_add_woocommerce_support() {
//     add_theme_support( 'woocommerce' );
//     add_theme_support( 'woocommerce', array(
//         'thumbnail_image_width' => 260,
//         'subcategory_archive_thumbnail_size' => 200,
//         'single_image_width'    => 461,

//         'product_grid'          => array(
//             'default_rows'    => 3,
//             'min_rows'        => 8,
//             'max_rows'        => 12,
//             'default_columns' => 3,
//             'min_columns'     => 3,
//             'max_columns'     => 3,
//         ),
//     ) );
//     add_theme_support( 'wc-product-gallery-zoom' );
//     add_theme_support( 'wc-product-gallery-lightbox' );
//     add_theme_support( 'wc-product-gallery-slider' );
//     add_theme_support( 'customize-selective-refresh-widgets' );
// }
// add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

// remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',10);
// remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
// remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
// remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );  
// remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
// function remove_loop_button(){
//   remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
// }
// add_action('init','remove_loop_button');

/* %% REMOVE SHOP PAGE IMAGE %% */
// function remove_woocommerce_actions() {
//   remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
// }
// add_action( 'after_setup_theme', 'remove_woocommerce_actions' );

/* %% REMOVE SHOP TITLE RATING %% */
// remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

// add_filter('loop_shop_columns', 'loop_columns');
// if (!function_exists('loop_columns')) {
//   function loop_columns() {
//     return 4; 
//   }
// }

// function skyverge_shop_display_skus() {
//   global $product;
//   $average = $product->get_average_rating(); }
//add_action( 'woocommerce_after_shop_loop_item', 'skyverge_shop_display_skus', 11 );
/* %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% WooCommerce Setting End %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */