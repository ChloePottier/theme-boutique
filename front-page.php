<?php/**
 * The frontpage template file.
 *
 * @package akaleyaboutique
 */?>

<?php get_header(); ?>

<div id='primary' class='content-area container-fluid'>
    <main id='main' class='site-main front-page container' role='main'>

    <?php get_template_part('template-parts/content/content','home');?>


    </main>
</div>
<?php get_footer(); ?>