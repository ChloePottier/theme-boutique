<?php
/**
 * The Index template file.
 *
 * @package akaleyaboutique
 */

get_header(); ?>

<div id='test' class='content-area'>
    <main id='main' class='site-main ' role='main'>

    <?php 
    get_template_part('template-parts/content/content','home');?>


    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
