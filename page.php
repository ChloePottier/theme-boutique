<?php
/**
 * The main template file.
 *
 * @package akaleyaboutique
 */

get_header(); ?>

<div id='primary' class='content-area'>
    <main id='main' class='site-main' role='main'>
    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                    <?php endwhile;
                    endif; ?>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>