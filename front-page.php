<?php /**
 * The frontpage template file
 * @package akaleyaboutique
 */
get_header(); ?>
<div id='primary' class='content-area container-fluid bg-white position-relative'>
    <main id='main' class='site-main front-page container py-5' role='main'>
        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                    <section class='row'>
                        <main class='col-12'>
                            <h1><?php the_title(); ?></h1>
                            <div class='content'><?php the_content(); ?></div>
                        </main>
                    </section>
    <?php endwhile;
        endif;?>
    </main>
</div>
<?php get_footer();