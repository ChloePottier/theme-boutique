<?php
/**
 * The Index template file.
 *
 * @package akaleyaboutique
 */
get_header(); ?>
<div id='post-<?php echo $post->ID; ?>' class='content-area container-fluid pb-5 bg-white position-relative'>
   <main id='main' class='site-main container position-relative' role='main'>
       <h1 class='py-5'>Foire aux questions</h1>
    <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div class='border-bottom py-3'>
                    <?php echo sprintf('<a href="%s" rel="bookmark">', esc_url(get_permalink())); ?>
                        <h3><?php the_title(); ?> <span class='mx-3 fs-5'><i class='fas fa-chevron-right'></i></span></h3>
                    </a>
                </div>
    <?php endwhile;
        endif; ?>
            
</div>
</div>
    </main>
</div>
<?php get_footer(); ?>