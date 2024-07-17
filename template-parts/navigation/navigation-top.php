<div class='row row-nav'>
    <div class='col-7 col-lg-3 col-custom-logo align-items-center d-flex'>
        <?php if (function_exists('the_custom_logo')) {
            the_custom_logo();
        } ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" class='ps-2' id='bloginfo'>
            <?php $site_title = get_bloginfo('name');
            $site_description = get_bloginfo('description');
            if ($site_title !== NULL) :
                echo "<h1 class='h1-blog-info-name mb-0'>" . $site_title . "</h1>";
            endif;
            if ($site_description !== NULL) :
                echo "<h2 class='h2-blog-info-description'>" . $site_description . "</h2>";
            endif; ?>
        </a>
    </div>
    <!-- <div class='col-lg-7 d-flex fw-bold' id='menu-top-md' itemscope itemtype='https://schema.org/BreadcrumbList'> -->
    <div class='col-lg-7 fw-bold' id='main-nav' itemscope itemtype='https://schema.org/BreadcrumbList'>

        <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => 'nav', 'menu_class' => 'menu')); ?>
    </div>
    <div class='col-3 col-lg-2 fs-3 p-0 d-flex justify-content-md-center justify-content-lg-end'>
        <ul id='menu-shop' class='menu p-0 justify-content-end'>
            <li class=' me-2'>
                <a href='<?php get_template_directory_uri(); ?>/mon-compte/' class='p-0'>
                    <?php include(dirname(__FILE__) . '/../../images/mon-compte.php'); ?>
                </a>
            </li>
            <li>
                <a href='<?php get_template_directory_uri(); ?>/panier/' class='d-flex flex-row align-items-end p-0'>
                    <?php include(dirname(__FILE__) . '/../../images/panier.php'); ?>
                    <span class='p-1 count fw-bold fst-italic'><?php echo '(' . WC()->cart->get_cart_contents_count() . ')'; ?></span></a>
            </li>
        </ul>
    </div>
    <div class='col-2 d-flex d-lg-none justify-content-end' id='nav-burger'>
        <label class='burger text-center d-flex d-lg-none flex-column position-fixed rounded-circle' id='burger'><span class='label-menu'>MENU</span>
            <span class='bg-grey-dark isclosed mx-auto' id='burger1'>&nbsp;</span>
            <span class='bg-grey-dark isclosed mx-auto' id='burger2'>&nbsp;</span>
            <span class='bg-grey-dark isclosed mx-auto' id='burger3'>&nbsp;</span>
        </label>
        <?php //get_template_part('template-parts/navigation/navigation', 'burger'); 
        ?>
    </div>
</div>