<?php 
add_action('after_setup_theme','akaleyashop_setup');
add_action('wp_enqueue_scripts', 'wp_styles_scripts');
/* Autoriser l'upload de tous types de format dans les médias */
add_filter('upload_mimes', 'wpm_myme_types', 1, 1);
add_action( 'init', 'register_nav' );
add_action( 'init', 'cpt_faq_init' );
/** Proper ob_end_flush() for all levels
 * This replaces the WordPress `wp_ob_end_flush_all()` function
 * with a replacement that doesn't cause PHP notices. */
// remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
// add_action( 'shutdown', function() {
//    while ( @ob_end_flush() );
// } );
add_action( 'login_enqueue_scripts', 'my_login_logo' );
add_filter( 'login_headerurl', 'my_login_logo_url' );
add_filter( 'login_headertext', 'my_login_logo_url_title' );



