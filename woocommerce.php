<?php
/**
 * The shop template file.
 * @package akaleyaboutique
 */


 get_header();?>
 <div id='post-<?php echo $post->ID; ?>' class='content-area container-fluid py-5 bg-white position-relative'>
                <main id='main' class='site-main container position-relative' role='main'>
                    <?php  woocommerce_content(); ?>            
                </main>
            </div>

<?php get_footer(); ?>
<!-- get_header();
    do_action('akaleya_before_main_content');
        
    do_action('akaleya_after_main_content');
get_footer(); ?> -->