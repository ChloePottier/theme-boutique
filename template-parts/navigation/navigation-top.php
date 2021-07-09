<div class='row row-nav'>
    <div class='col-4 col-md-3 col-lg-2'>
        <?php if (function_exists('the_custom_logo')){
                the_custom_logo();
        }?>
    </div>
    <div class='col-lg-8 d-none d-lg-flex fw-bold pt-4 fs-5' id='menu-top-md' itemscope itemtype='https://schema.org/BreadcrumbList'>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </div>
    <div class='col-6 col-md-5 col-lg-2 fs-3 d-flex flex-row justify-content-end' >
        <?php wp_nav_menu( array( 'theme_location' => 'shop-menu', 'menu_class' => 'pt-4 menu') ); ?>
    </div>
    <div class='col d-flex d-lg-none justify-content-end' id='nav-burger'>
        <?php get_template_part('template-parts/navigation/navigation','burger'); ?>
    </div>
</div>