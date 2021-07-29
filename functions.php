<?php require 'hooks.php';
function wp_styles_scripts(){
    wp_enqueue_style('bootstrap', ''. get_template_directory_uri() .'/assets/bootstrap/bootstrap.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', ''.get_template_directory_uri() .'/assets/bootstrap/bootstrap.min.js', array('jquery', 'popper'), 1, true);
    wp_enqueue_style('font-awesome', get_template_directory_uri() .'/assets/font-awesome/css/all.css');
    wp_enqueue_style('print', get_template_directory_uri() .'/assets/print.css', array(), '1.0', 'print');
    wp_enqueue_style('woocommerce', get_template_directory_uri() .'/assets/wc-style.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}
function akaleyashop_setup(){
    add_theme_support('custom-logo', array(
    'height'      => 80,
    'flex-width'  => true,
    ));
    add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}
function akaleyashop_custom_header_setup(){
    add_theme_support(
        'custom-header',
        apply_filters(
            'akaleyashop_custom_header_args',
            array(
                'default-image'    => get_parent_theme_file_uri('/images/cropped-gabarit-image-header.jpg'),
                'width'            => 2000,
                'height'           => 1200,
                'flex-height'      => true,
            )));
    register_default_headers(
        array(
            'default-image' => array(
                'url'           => '%s/images/cropped-gabarit-image-header.jpg',
                'thumbnail_url' => '%s/images/cropped-gabarit-image-header.jpg',
                'description'   => __('Default Header Image', 'akaleyashop'),
            ),
        ));
}
add_action('after_setup_theme', 'akaleyashop_custom_header_setup');
function wpm_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //On autorise les .svg
    $mime_types['webp'] = 'image/webp'; //On autorise les .webp
    return $mime_types;
}
//Menus
function register_nav(){
    register_nav_menus(
        array(
        'header-menu' => __('Header Menu'),
        'shop-menu' => __('Shop Menu'),
        'subfooter-menu' => __('Footer Menu'),
        'footer-menu' => __('Social Link Menu'),
       ));
}
   function cpt_faq_init() {
       $labels = array(
        'name'                  => _x('FAQ', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('FAQ', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('FAQ', 'Admin Menu text', 'textdomain'),
        'add_new'               => __('Ajouter une nouvelle question', 'textdomain'),
        'add_new_item'          => __('Ajouter une nouvelle question', 'textdomain'),
        'new_item'              => __('Nouvelle question', 'textdomain'),
        'edit_item'             => __('Editer la question', 'textdomain'),
        'view_item'             => __('Voir la question', 'textdomain'),
        'all_items'             => __('Toutes les questions', 'textdomain'),
        'search_items'          => __('Rechercher question', 'textdomain'),
        'archives'              => _x('Archives des questions', 'The post type archive label used in nav menus', 'textdomain'),
    );
       $args = array(
        'labels'             => $labels,
        'public'             => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'faq' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-editor-help',
        'supports'           => array( 'title', 'editor','category'),
    );
       register_post_type('faq', $args);
       register_taxonomy_for_object_type('category', 'faq');
   }
   function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/images/logo.jpg);
		background-repeat: no-repeat;
        padding-bottom: 30px;
        }
    </style>
<?php }

function my_login_logo_url() {
    return home_url();
}
function my_login_logo_url_title() {
    return get_bloginfo('description');
}

require 'inc/akaleyaboutique-functions.php';
require 'inc/akaleyaboutique-hooks.php';
