<?php /**
 * The single faq template file.
 *
 * @package akaleyaboutique
 */?>

<?php get_header(); ?>
<div id='primary' class='content-area container-fluid bg-white position-relative'>
    <main id='main' class='site-main front-page container py-5' role='main'>
        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <section class='row' id=''>
                    <div class='col-12 pb-3'>
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="col-12">
                        <?php the_content(); ?> 
                    </div>
                </section>
                <div id='nav-faq' class='d-flex justify-content-between pt-5'>
                    <div>
                    <?php previous_post_link('%link', '&lsaquo; %title'); ?>
                    </div>
                    <div>
                    <?php next_post_link('%link','%title &rsaquo;'); ?>
                    </div>
                </div>
    <?php endwhile;
        endif; ?>
    </main>
</div>
<?php get_footer(); ?>




