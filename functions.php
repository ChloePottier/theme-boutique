<?php require 'hooks.php';
function akaleyashop_setup(){
  add_theme_support('custom-logo', array(
    'height'      => 80,
    'flex-width'  => true,
    )  ); // ajouter le logo
  add_theme_support( 'post-thumbnails' );// Ajouter la prise en charge des images mises en avant
  add_theme_support( 'title-tag' ); // ajouter <title> à la place de wp_title() dans le header  
  //custom header
  add_theme_support(
		'custom-header',
		apply_filters(
			'akaleyashop_custom_header_args',
			array(
				'default-image'    => get_parent_theme_file_uri( '/images/cropped-gabarit-image-header.jpg' ),
				'width'            => 2000,
				'height'           => 1200,
				'flex-height'      => true,
			)
		)
	);
  //image header par defaut
	register_default_headers(
		array(
			'default-image' => array(
				'url'           => '%s/images/cropped-gabarit-image-header.jpg',
				'thumbnail_url' => '%s/images/cropped-gabarit-image-header.jpg',
				'description'   => __( 'Default Header Image', 'akaleyashop' ),
			),
		)
	);

}
function wp_styles_scripts(){
    wp_enqueue_style('bootstrap', ''. get_template_directory_uri() .'/assets/bootstrap/bootstrap.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', ''.get_template_directory_uri() .'/assets/bootstrap/bootstrap.min.js', array('jquery', 'popper'), 1, true);
    wp_enqueue_style('font-awesome', get_template_directory_uri() .'/assets/font-awesome/css/all.css');
    wp_enqueue_style('print', get_template_directory_uri() .'/assets/print.css');
    wp_enqueue_style('woocommerce', get_template_directory_uri() .'/assets/wc-style.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}
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

require 'inc/akaleyaboutique-functions.php';
require 'inc/akaleyaboutique-hooks.php';

