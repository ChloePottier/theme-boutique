<?php /**
 * WooCommerce Template Hooks
 * @package WooCommerce\Templates
 * @version 2.1.0
 */
defined( 'ABSPATH' ) || exit;
// Pas de zoom dans ce thème
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
// décrocher les conteneurs, ajouter new
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('akaleya_before_main_content', 'akaleya_wrapper_start', 10);
add_action('akaleya_after_main_content', 'akaleya_wrapper_end', 10);
add_action( 'after_setup_theme', 'akaleya_add_woocommerce_support');
// fil d'arianne
add_filter( 'woocommerce_breadcrumb_defaults', 'akaleya_wc_breadcrumbs' );
add_action( 'akaleya_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
//modifier positionnement du prix
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
//Pour thème client suppr la ligne ci dessous, woocommerce_template_single_meta
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 ); //display category name, tag , UGS
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );
//suppr tri des produits, nb résultat
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
// Détails produits
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
add_action( 'woocommerce_after_single_product_summary', 'akaleya_short_description_tab',5);
add_action( 'woocommerce_after_single_product_summary', 'akaleya_clear', 6);

