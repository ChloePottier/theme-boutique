<?php 
//début du conteneur
function akaleya_wrapper_start() {
    echo "<div id='container' class='content-shop container-fluid bg-white position-relative'>
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
/** Modifer les paramètres du fil d'arianne */
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

