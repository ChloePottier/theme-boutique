<?php
/**
 * The main template file.
 *
 * @package akaleyaboutique
 */

get_header(); ?>

<div id='primary' class='content-area'>
    <main id='main' class='site-main' role='main'>

    <?php 
    get_template_part('template-parts/content/content','home');?>


    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
