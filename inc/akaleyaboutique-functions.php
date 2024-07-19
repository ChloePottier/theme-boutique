<?php //conteneur
function akaleya_wrapper_start() {
    echo "<div id='container' class='content-shop container-fluid bg-white position-relative mb-5'>
    <main id='main' class='site-main container position-relative' role='main'>";
}
function akaleya_wrapper_end() {
    echo '</main></div>';
}
// Prise en charge de Woocommerce
function akaleya_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
/*Modifer paramètres fil d'arianne */
function akaleya_wc_breadcrumbs() {
    return array(
            'delimiter'   => ' / ',
            'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">',
            'wrap_after'  => '</nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}

// repositionner détail produit
// function akaleya_short_description_tab() {
//     wc_get_template( 'single-product/tabs/tabs.php' );
// }
// if ( ! function_exists( 'akaleya_clear' ) ) {
// 	function akaleya_clear() {
// 		wc_get_template( 'single-product/clear.php' );
// 	}
// }