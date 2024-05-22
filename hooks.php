<?php 
add_action('after_setup_theme','akaleyashop_setup');
add_action('wp_enqueue_scripts', 'wp_styles_scripts');
add_filter('upload_mimes', 'wpm_myme_types', 1, 1);
add_action('init', 'register_nav');
add_action('init', 'cpt_faq_init');
remove_action('shutdown', 'wp_ob_end_flush_all', 1);
add_action('shutdown', function() {
   while (@ob_end_flush());
});
// if (!current_user_can( 'manage_options' )) {
   add_filter('show_admin_bar', '__return_false');
   // }
   