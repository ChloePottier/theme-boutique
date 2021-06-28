<?php
/**
 * The shop template file.
 * @package akaleyaboutique
 */

get_header();?>

<?php 
while (have_posts()) : the_post();
        do_action('akaleya_before_main_content');
            // woocommerce_content();
            do_action('title_page_shop');
            
            // Liste les produits, affiche leur titre
            // do_action('title_product_shop');

        do_action('akaleya_after_main_content');
endwhile;
    ?>

<?php get_footer(); ?>