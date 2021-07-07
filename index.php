<?php
/**
 * The Index template file.
 *
 * @package akaleyaboutique
 */
get_header(); ?>
    <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
            <div id='post-<?php echo $post->ID; ?>' class='content-area container-fluid py-5 bg-white position-relative'>
                <main id='main' class='site-main container position-relative' role='main'>
                    <h1 class='pb-3'><?php the_title(); ?></h1>
                    <?php the_content(); ?>            
                </main>
            </div>
    <?php endwhile;
        endif; ?>
<?php get_footer(); ?>
