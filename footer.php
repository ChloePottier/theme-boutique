<?php

/** The footer for our theme.
 * @package akaleyaboutique
 */ ?>
<div class='container-fluid bg-white py-4 position-relative border-top' id='subfooter'>
    <div class='container'>
        <div class='row'>
            <div class='col-12 col-md-3 text-center text-md-start nav-footer'>
                <!-- Logo -->
                 <!-- Widget -->
                 <?php if ( is_active_sidebar( 'widget-footer-1' ) ) {
                            dynamic_sidebar('widget-footer-1');
                            }?>

            </div>
            <div class='col-12 col-md-3 text-center text-md-start'>
                <h2 class='fw-bold text-uppercase fs-5'><?php echo wp_get_nav_menu_name('footer-2-menu'); ?></h2>
                <?php wp_nav_menu(array('theme_location' => 'footer-2-menu', 'menu_class' => 'menu-subfooter p-0 fs-6', 'container' => 'nav', 'fallback_cb' => 'akaleyaboutique_no_menu')); ?>

            </div>
            <div class='col-12 col-md-3 text-center text-md-start'>
                <h2 class='fw-bold text-uppercase fs-5'><?php echo wp_get_nav_menu_name('footer-3-menu'); ?></h2>
                <?php wp_nav_menu(array('theme_location' => 'footer-3-menu', 'menu_class' => 'menu-subfooter p-0 fs-6', 'container' => 'nav', 'fallback_cb' => 'akaleyaboutique_no_menu')); ?>
            </div>
            <div class='col-12 col-md-3 fs-2 nav-footer text-center text-md-start'>
                <!-- widget pour contact ? -->
                <?php if ( is_active_sidebar( 'widget-footer-4' ) ) {
                            dynamic_sidebar('widget-footer-4');
                            }?>
                <h2 class='fw-bold text-uppercase fs-5 pt-3'>Suivez-nous sur :</h2>
                <?php wp_nav_menu(array('menu'  => 'Réseaux sociaux', 'theme_location' => 'footer-menu', 'menu_class' => 'menu-footer p-0 d-flex flex-row justify-content-center', 'container' => 'nav')); ?>
            </div>
        </div>
    </div>
</div>
<footer class='site-footer container-fluid py-4 bg-white position-relative border-top' role='contentinfo'>
    <div class='container'>
        <div class='row flex-md-row-reverse'>
            <div class='col-12 text-center' id='copyrightinfo'>
                <p class='mb-0'><a href='<?php echo get_home_url(); ?>' class='fw-bold text-black'><?php bloginfo('name'); ?></a> - Copyright © 2021</p>
                <p class='akaleya'>Site éco-conçus par <a href='https://akaleya.fr' target='_blank' rel='noreferrer' class='fw-600'>Akaleya</a></p>
            </div>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>