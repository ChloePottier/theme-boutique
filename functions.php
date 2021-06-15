<?php

function wp_styles_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap-grid', get_template_directory_uri() .'/assets/bootstrap/bootstrap-grid.min.css');
    wp_enqueue_style('bootstrap-utilities', get_template_directory_uri() .'/assets/bootstrap/bootstrap-utilities.min.css');
    wp_enqueue_style('print', get_template_directory_uri() .'/assets/print.css');
}
add_action('wp_enqueue_scripts', 'wp_styles_scripts');
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
        'width'             => 1000,
        // Header image height (in pixels)
        'height'            => 198,
        'flex-width'         => true,
        'flex-height'        => true,
        // Header image random rotation default
        'random-default'        => false,
        // Enable upload of image file in admin 
        'uploads'       => false,
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
function register_nav_top() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'shop-menu' => __( 'Shop Menu' )
       )
     );
   }
   add_action( 'init', 'register_nav_top' );