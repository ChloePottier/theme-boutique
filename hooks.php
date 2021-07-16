<?php 
add_action('after_setup_theme','akaleyashop_setup');
// add_action( 'after_setup_theme', 'akaleyashop_custom_header_setup' );
add_action('wp_enqueue_scripts', 'wp_styles_scripts');
/* Autoriser l'upload de tous types de format dans les médias */
add_filter('upload_mimes', 'wpm_myme_types', 1, 1);
add_action( 'init', 'register_nav' );
add_action( 'init', 'cpt_faq_init' );// Le hook init lance la fonction
/** Proper ob_end_flush() for all levels
 * This replaces the WordPress `wp_ob_end_flush_all()` function
 * with a replacement that doesn't cause PHP notices. */
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );


