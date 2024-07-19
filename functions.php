
<?php require 'hooks.php';
require 'inc/akaleyaboutique-functions.php';
require 'inc/akaleyaboutique-hooks.php';
require 'inc/akaleyaboutique-appearance.php';
function wp_styles_scripts()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.js', array('jquery', 'popper'), 1, true);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css');
    wp_enqueue_style('print', get_template_directory_uri() . '/assets/css/print.css', array(), '1.0', 'print');
    wp_enqueue_style('woocommerce', get_template_directory_uri() . '/assets/css/wc-style.css');
    wp_enqueue_script('burger', get_template_directory_uri() . '/assets/js/burger-animate.js', '', '', true);
    // wp_enqueue_script('sub-menu', get_template_directory_uri() . '/assets/js/sub-menu.js', '', '', true);


    wp_enqueue_style('style', get_stylesheet_uri());
}
function akaleyashop_setup()
{
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-width'  => false,
        'flex-height'  => false,
    ));
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support(
        'custom-header',
        apply_filters(
            'akaleyashop_custom_header_args',
            array(
                'default-image'    => get_parent_theme_file_uri('/images/gabarit-image-header.jpg'),
                'default-text-color' => '000',
                'width'            => 2000,
                'height'           => 912,
                'flex-height'      => true,
            )
        )
    );
    register_default_headers(
        array(
            'default-image' => array(
                'url'           => '%s/images/gabarit-image-header.jpg',
                'thumbnail_url' => '%s/images/gabarit-image-header.jpg',
                'description'   => __('Default Header Image', 'akaleyashop'),
            ),
        )
    );
    add_theme_support('woocommerce'); // usage basic. Possibilité d'améliorer
}
function akaleyashop_remove_styles_scripts()
{
    wp_dequeue_style('global-styles-inline-css');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('wp-emoji-styles-inline-css');
    wp_dequeue_script('wp-emoji-releases');
}
function wpm_myme_types($mime_types)
{
    $mime_types['svg'] = 'image/svg+xml';
    $mime_types['webp'] = 'image/webp';
    return $mime_types;
}
function register_nav()
{
    register_nav_menus(
        array(
            'header-menu' => __('Menu principal'),
            'footer-2-menu' => __('Menu pied de page, colonne 2'),
            'footer-3-menu' => __('Menu pied de page, colonne 3'),
            'social-link-menu' => __('Social Link Menu'),
        )
    );
}
//callback menu : fallback_cb in wp_nav_menu()
function akaleyaboutique_no_menu()
{
    echo '';
}
// Widgets

function footer_widgets_init(){
    register_sidebar(array(

        'name' => 'Widget Footer 1',
        'id' => 'widget-footer-1',
        'description'   => __( 'Widget pour la première colonne du pied de page', 'textdomain' ),
        'before_widget' => '<div class="widget-footer-1">',
        'after_widget' => '</div>',
    ));
    register_sidebar(array(
        'name' => 'Widget Footer 4',
        'id' => 'widget-footer-4',
        'description'   => __( 'Widget pour la quatrième colonne du pied de page', 'textdomain' ),
        'before_widget' => '<div class="widget-footer-4">',
        'after_widget' => '</div>',
    ));
}


//CPT
function cpt_faq_init()
{
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
        'rewrite'            => array('slug' => 'faq'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-editor-help',
        'supports'           => array('title', 'editor', 'category'),
    );
    register_post_type('faq', $args);
    register_taxonomy_for_object_type('category', 'faq');
}
