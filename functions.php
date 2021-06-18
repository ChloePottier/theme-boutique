<?php
function wpbootstrap_styles_scripts(){

    wp_enqueue_style('bootstrap', ''. get_template_directory_uri() .'/assets/bootstrap/bootstrap.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', ''.get_template_directory_uri() .'/assets/bootstrap/bootstrap.min.js', array('jquery', 'popper'), 1, true);
    wp_enqueue_style('font-awesome', get_template_directory_uri() .'/assets/font-awesome/css/all.css');
    wp_enqueue_style('print', get_template_directory_uri() .'/assets/print.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');
//Ajouter le logo
function theme_custom_logo_setup() {
    $defaults = array(
    'height'      => 80,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' )
    );
        add_theme_support('custom-logo',$defaults);
   }
add_action('after_setup_theme','theme_custom_logo_setup');
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );
//Ajouter image header
$args = array(
    // 'flex-width'    => true,
    'width'         => 1920,
    // 'flex-height'   => true,
    'height'        => 1440,
    'default-image' => get_template_directory_uri() . '/images/gabarit-image-header.jpg',
);
add_theme_support( 'custom-header', $args );
function themename_custom_header_setup() {
    $defaults = array(
        // Default Header Image to display
        // 'default-image'         => get_template_directory_uri() . '/images/headers/default.jpg',
        // Display the header text along with the image
        'header-text'           => false,
        // Header text color default
        'default-text-color'        => '000',
        // Header image width (in pixels)
        'width'             => 1920,
        // Header image height (in pixels)
        'height'            => 1440,  
        // function to be called in theme head section
        'wp-head-callback'      => 'wphead_cb',
        //  function to be called in preview page head section
        'admin-head-callback'       => 'adminhead_cb',
        // function to produce preview markup in the admin screen
        'admin-preview-callback'    => 'adminpreview_cb',
        );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );
/* Autoriser l'upload de tous types de format dans les médias */
add_filter('upload_mimes', 'wpm_myme_types', 1, 1);
function wpm_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //On autorise les .svg
    $mime_types['webp'] = 'image/webp'; //On autorise les .webp
    return $mime_types;
}
//Menus
function register_nav_top() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'shop-menu' => __( 'Shop Menu' )
       ));
   }
   add_action( 'init', 'register_nav_top' );
// ajout format d'image     	
function wpdocs_theme_setup() {
    add_image_size('custom_header_xs',575,481,true); 
    add_image_size('custom_header_sm',767,575,true); 
    add_image_size('custom_header_md',991,743,true); 
    add_image_size('custom_header_lg',1199,899,true); 
    add_image_size('custom_header_xl',1399,1049,true); 
    add_image_size('custom_header_xxl',1920,1440,true);  
}  
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
//rendre la taille d'image sélectable depuis le back-office
add_filter( 'image_size_names_choose', 'my_custom_sizes' );
 
function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'custom_header_xs' => __('Custom Header XS'),
        'custom_header_sm' => __('Custom Header sm'),
        'custom_header_md' => __('Custom Header md'),
        'custom_header_lg' => __('Custom Header lg'),
        'custom_header_xl' => __('Custom Header xl'),
        'custom_header_xxl' => __('Custom Header xxl'),
    ) );
}
// Woocommerce
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
            'thumbnail_image_width' => 150,
            'single_image_width'    => 300,

    'product_grid'          => array(
        'default_rows'    => 3,
        'min_rows'        => 2,
        'max_rows'        => 8,
        'default_columns' => 4,
        'min_columns'     => 2,
        'max_columns'     => 5,
    ),
    ) );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );