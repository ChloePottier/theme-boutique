<?php
/**
 * The shop template file.
 * @package akaleyaboutique
 */
get_header();
    do_action('akaleya_before_main_content');
        woocommerce_content();
    do_action('akaleya_after_main_content');
get_footer(); ?>