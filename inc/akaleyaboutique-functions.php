<?php // Woocommerce - décrocher les conteneurs
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
// ajouter les conteneurs du thème
add_action('akaleya_before_main_content', 'akaleya_wrapper_start', 10);
add_action('akaleya_after_main_content', 'akaleya_wrapper_end', 10);
//début du conteneur
function akaleya_wrapper_start() {
    echo "<div id='container' class='content-area container-fluid py-5 bg-white position-relative'>
    <main id='main' class='site-main container position-relative' role='main'>";
}
//fin du conteneur
function akaleya_wrapper_end() {
    echo '</main></div>';
}
// Prise en charge de Woocommerce Basic
function akaleya_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'akaleya_add_woocommerce_support' );
// Prise en charge de Woocommerce avec paramètres
// function mytheme_add_woocommerce_support() {
//   add_theme_support( 'woocommerce', array(
//           'thumbnail_image_width' => 150,
//           'single_image_width'    => 300,

//   'product_grid'          => array(
//       'default_rows'    => 3,
//       'min_rows'        => 2,
//       'max_rows'        => 8,
//       'default_columns' => 4,
//       'min_columns'     => 2,
//       'max_columns'     => 5,
//   ),
//   ) );
// }
// add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
// activer la galerie Woocommerce
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
//afficher titre de la page woocommerce
function show_title_wc_page(){?>
    <div class="col-12"><h1><?php woocommerce_page_title() ?></h1></div>
<?php }
add_action('title_page_shop','show_title_wc_page');
//afficher titre du produit
function show_title_wc_product(){?>
    <div class="col-12">
        <h1><?php the_title(); ?></h1>
    </div>
<?php }
add_action('title_product_shop','show_title_wc_product');

