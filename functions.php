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


function akaleyashop_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'akaleyashop_custom_header_args',
			array(
				'default-image'    => get_parent_theme_file_uri( '/images/cropped-gabarit-image-header.jpg' ),
				'width'            => 2000,
				'height'           => 1200,
				'flex-height'      => true,
				'video'            => true,
			)
		)
	);

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
add_action( 'after_setup_theme', 'akaleyashop_custom_header_setup' );




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
//CPt bouton boutique
//    function cpt_btn_shop_init() {
//     $labels = array(
//         'name'                  => _x( 'Bouton Boutique', 'Post type general name', 'textdomain' ),
//         'singular_name'         => _x( 'Bouton Boutique', 'Post type singular name', 'textdomain' ),
//         'menu_name'             => _x( 'Bouton Boutique', 'Admin Menu text', 'textdomain' ),
//     ); 
//     $args = array(
//         'labels'             => $labels,
//         'public'             => true,
//         'query_var'          => true,
//         'rewrite'            => array( 'slug' => 'btn_shop' ),
//         'capability_type'    => 'post',
//         'has_archive'        => true,
//         'menu_position'      => null,
//         'menu_icon'          => 'dashicons-cart',
//         'supports'           => array( 'title'),
//     ); 
//     register_post_type( 'btn_shop', $args );
//     } 
//     add_action( 'init', 'cpt_btn_shop_init' );
    // Le hook init lance la fonction
// ajout format d'image     	
// function wpdocs_theme_setup() {
//     add_image_size('custom_header_xs',575,481,true); 
//     add_image_size('custom_header_sm',767,575,true); 
//     add_image_size('custom_header_md',991,743,true); 
//     add_image_size('custom_header_lg',1199,899,true); 
//     add_image_size('custom_header_xl',1399,1049,true); 
//     add_image_size('custom_header_xxl',1920,1440,true);  
// }  
// add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
//rendre la taille d'image sélectable depuis le back-office
// add_filter( 'image_size_names_choose', 'my_custom_sizes' );
 
// function my_custom_sizes( $sizes ) {
//     return array_merge( $sizes, array(
//         'custom_header_xs' => __('Custom Header XS'),
//         'custom_header_sm' => __('Custom Header sm'),
//         'custom_header_md' => __('Custom Header md'),
//         'custom_header_lg' => __('Custom Header lg'),
//         'custom_header_xl' => __('Custom Header xl'),
//         'custom_header_xxl' => __('Custom Header xxl'),
//     ) );
// }
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