<?php
function wpbootstrap_styles_scripts(){
    wp_enqueue_style('bootstrap', ''. get_template_directory_uri() .'/assets/bootstrap/bootstrap.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', ''.get_template_directory_uri() .'/assets/bootstrap/bootstrap.min.js', array('jquery', 'popper'), 1, true);
    wp_enqueue_style('print', get_template_directory_uri() .'/assets/print.css');
    wp_enqueue_style('style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');
//Ajouter le logo
function theme_custom_logo_setup() {
    $defaults = array(
    'height'      => 150,
    'width'       => 150,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' )
    );
        add_theme_support('custom-logo',$defaults);
   }
add_action('after_setup_theme','theme_custom_logo_setup');
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );
//Ajouter image header
add_theme_support( 'custom-header' );
function themename_custom_header_setup() {
    $defaults = array(
        // Default Header Image to display
        'default-image'         => get_template_directory_uri() . '/images/headers/default.jpg',
        // Display the header text along with the image
        'header-text'           => false,
        // Header text color default
        'default-text-color'        => '000',
        // Header image width (in pixels)
        'width'             => 1900,
        // Header image height (in pixels)
        'height'            => 1200,
  
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
       )
     );
   }
   add_action( 'init', 'register_nav_top' );
// ajout format d'image      
if(function_exists('add_theme_support')):
    add_image_size('custom_logo_sm',80,80,true);
    add_image_size('custom_header_sm',576,250,false);    

endif;