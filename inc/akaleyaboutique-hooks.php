<?php
/**
 * WooCommerce Template Hooks
 *
 * Action/filter hooks used for WooCommerce functions/templates.
 *
 * @package WooCommerce\Templates
 * @version 2.1.0
 */

defined( 'ABSPATH' ) || exit;
// activer la galerie Woocommerce
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
// Woocommerce - décrocher les conteneurs
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
// ajouter les conteneurs du thème
add_action('akaleya_before_main_content', 'akaleya_wrapper_start', 10);
add_action('akaleya_after_main_content', 'akaleya_wrapper_end', 10);
add_action( 'after_setup_theme', 'akaleya_add_woocommerce_support');
// fil d'arianne
add_filter( 'woocommerce_breadcrumb_defaults', 'akaleya_wc_breadcrumbs' );
add_action( 'akaleya_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
//modifier positionnement du prix
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );//prix
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );//contenu
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 ); //display category name
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10 );
//suppression tri des produits
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
//suppression nombre de résultat
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

