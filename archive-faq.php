<?php
/** The Archive FAQ template file.
 * @package akaleyaboutique */
get_header(); ?>
<div id='archive-faq' class='content-area container-fluid pb-5 bg-white position-relative'>
    <main id='main' class='site-main container position-relative' role='main'>
        <h1 class='py-5'>Foire aux questions</h1>
        <ul class='faq-list'>
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <li class='item-faq py-3'>
                        <?php echo sprintf('<a href="%s" rel="bookmark">', esc_url(get_permalink()));?>
                            <h3><?php the_title();?> <span class='mx-3 fs-5'><i class='fas fa-chevron-right'></i></span></h3>
                        </a>
                    </li>
            <?php endwhile;
            else :
                echo '<p>Désolé, il n\'y a pas d\'article disponible pour le moment. Merci de votre compréhension.</p>
                <div class="fs-4 pt-5"><a href="'. get_home_url().'" class=""><i class="fas fa-arrow-left"></i> Retourner à la boutique</a></div>';
            endif; ?>
        </ul>
    </main>
</div>
<?php get_footer();