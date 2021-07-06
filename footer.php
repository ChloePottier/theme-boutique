    
    <div class='container-fluid bg-white py-4 position-relative' id='subfooter'>
        <div class='container'>
            <div class='row fw-bold fst-italic'>
                <div class='col-12 col-md-6 text-center text-md-start nav-footer' >
                    <h3 class='fw-bold text-uppercase fs-6'>Service client</h3>
                    <?php wp_nav_menu( array( 'theme_location' => 'subfooter-menu','menu_class' => 'menu-subfooter fs-7','container' => 'nav' ) ); ?>
                </div>
                <div class='col-12 col-md-6 text-center text-md-end'></div>
            </div>
        </div>
    </div>
    <footer class='site-footer container-fluid py-3 bg-white position-relative border-top nav-footer' role='contentinfo'>
        <div class='container pt-4'>
            <div class='row'>
                <div class='col-12 col-md-6 text-center text-md-start' id='copyrightinfo' >
                    <p class='mb-0'><a href='<?php echo get_home_url(); ?>'class='fw-bold text-black'><?php bloginfo('name'); ?></a> - Copyright © 2021</p>
                    <p class='akaleya'>Site éco-conçus par <a href='https://akaleya.fr' target='_blank' rel='noreferrer'class='fw-600'>Akaleya</a></p>
                </div>
                <div class='col-12 col-md-6 text-center text-md-end fs-2'>
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu','menu_class' => 'menu-footer','container' => 'nav' ) ); ?>

                </div>
            </div>
        </div>
    </footer>
    <script src='<?php echo get_template_directory_uri(); ?>/assets/js/navigation/burger.js' async defer></script>
    <script src='<?php echo get_template_directory_uri(); ?>/assets/js/navigation/nav-fixed.js' async defer></script>
    <?php wp_footer(); ?>
</body>
</html>