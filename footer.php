    <footer class='site-footer container-fluid border-top py-3 bg-white position-relative' role='contentinfo'>
        <div class='container'>
            <div class='row'>
                <div class='col-12 col-md-6 text-center text-md-start' id='copyrightinfo' >
                    <p><a href='<?php echo get_home_url(); ?>'class='fw-bold text-black'><?php bloginfo('name'); ?></a> - Copyright © 2021</p>
                    <p class='akaleya'>Site éco-conçus par <a href='https://akaleya.fr' target='_blank' rel='noreferrer'class='fw-600'>Akaleya</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src='<?php echo get_template_directory_uri(); ?>/assets/js/navigation/burger.js' async defer></script>
    <script src='<?php echo get_template_directory_uri(); ?>/assets/js/navigation/nav-fixed.js' async defer></script>

    <?php wp_footer(); ?>
</body>
</html>