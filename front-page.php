<?php/**
 * The frontpage template file.
 *
 * @package akaleyaboutique
 */?>

<?php get_header(); ?>
<div id='primary' class='content-area container-fluid bg-white position-relative'>
    <main id='main' class='site-main front-page container py-5' role='main'>
        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                    <section class='row' id='contact'>
                        <div class='col-12'>
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <div class="col-12">
                            <?php the_content(); ?> 
                        </div>
                    </section>
    <?php endwhile;
        endif; ?>    </main>
</div>
<?php get_footer(); ?>