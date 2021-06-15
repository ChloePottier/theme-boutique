<?php

function wp_styles_scripts(){

    wp_enqueue_style('style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'wp_styles_scripts');
//Ajouter le logo
function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 150,
    'width'       => 150,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' )
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );
