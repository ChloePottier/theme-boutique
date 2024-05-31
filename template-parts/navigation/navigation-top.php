<div class='row row-nav'>
    <div class='col-4 col-md-3 col-lg-3 col-custom-logo align-items-center d-flex'>
        <?php if (function_exists('the_custom_logo')) {
            the_custom_logo();
        } ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" class='ps-3' id='bloginfo'>
            <?php $site_title = get_bloginfo('name');
            $site_description = get_bloginfo('description');
            if ($site_title !== NULL) : 
                echo "<h1 class='h1-blog-info-name mb-0'>".$site_title."</h1>";
            endif;
            if ($site_description !== NULL) : 
                echo "<h2 class='h2-blog-info-description'>".$site_description."</h2>";
            endif; ?>
        </a>
    </div>
    <div class='col-lg-7 d-none d-lg-flex fw-bold' id='menu-top-md' itemscope itemtype='https://schema.org/BreadcrumbList'>
        <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container' => 'nav', 'menu_class' => 'menu')); ?>
    </div>
    <div class='col-6 col-md-5 col-lg-2 fs-3 d-flex flex-row justify-content-end'>
        <ul id='menu-shop' class='menu'>
            <li>
                <a href='<?php get_template_directory_uri(); ?>/mon-compte/' class='d-flex flex-row align-items-center'><i class='fas fa-user'></i></a>
            </li>
            <li>
                <a href='<?php get_template_directory_uri(); ?>/panier/' class='d-flex flex-row align-items-center'><i class='fas fa-shopping-bag'></i> <span class='ps-1 count fw-bold fst-italic'><?php echo '(' . WC()->cart->get_cart_contents_count() . ')'; ?></span></a>
            </li>
        </ul>
    </div>
    <div class='col d-flex d-lg-none justify-content-end' id='nav-burger'>
    <!-- <div class='col d-flex d-lg-none justify-content-end align-items-center' id='nav-burger'> -->

        <?php get_template_part('template-parts/navigation/navigation', 'burger'); ?>
    </div>
</div>