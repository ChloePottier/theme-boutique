<?php 
add_action('after_setup_theme','akaleyashop_setup');
add_action('wp_enqueue_scripts', 'wp_styles_scripts');
/* Autoriser l'upload de tous types de format dans les médias */
add_filter('upload_mimes', 'wpm_myme_types', 1, 1);
add_action( 'init', 'register_nav_top' );


