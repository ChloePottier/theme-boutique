<?php 
add_action('after_setup_theme','akaleyashop_setup');
add_action('wp_enqueue_scripts', 'wp_styles_scripts');
add_action( 'wp_enqueue_scripts', 'akaleyashop_remove_styles_scripts' );
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
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
   add_image_size( 'header_xs',400,300, 'right','top');
   add_image_size( 'header_sm',576,912, 'right','top'   );

   add_filter( 'get_header_image_tag_attributes', 'remove_dimensions_from_header_image', 10, 2 );

   function remove_dimensions_from_header_image( $attr, $header ) {
       unset( $attr['width'], $attr['height'] );
       return $attr;
   }