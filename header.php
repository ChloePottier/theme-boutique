<?php
/**
 * The header for our theme.
 * @package akaleyaboutique
 */
?>
<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
    <?php //get_template_part('google.php');?>
    <?php wp_head(); ?>
</head>
<body id='top' <?php body_class(); ?>>
    <?php wp_body_open();
    if(is_front_page()): ?>
        <header  id='masthead' class='position-relative vh-100 overflow-hidden'>
    <?php else : ?>
        <header  id='masthead' class='position-relative vh-30 overflow-hidden'>
    <?php endif; ?>
    
    <div class='container-fluid position-fixed zindex-3  text-shadow' id='navbar'>
        <div class='container'>
        <div class='row row-nav'>
            <div class='col-4 col-md-3 col-lg-2'>
                <?php if (function_exists('the_custom_logo')){
                        the_custom_logo();
                }?>
            </div>
            <div class='col-lg-8 d-none d-lg-flex fw-bold pt-4 fs-5' id='menu-top-md'itemscope itemtype='https://schema.org/BreadcrumbList'>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </div>
            <div class='col-6 col-md-5 col-lg-2 fs-3 d-flex flex-row justify-content-end' >
                <?php wp_nav_menu( array( 'theme_location' => 'shop-menu', 'menu_class' => 'pt-4 menu') ); ?>
            </div>
            <div class='col d-flex d-lg-none justify-content-end'>
                <?php get_template_part('template-parts/navigation/navigation','burger') ?>;
            </div>
        </div>
        </div>
    </div>
   <div class="custom-header z-index1">
        <div class="custom-header-media">
			<?php the_custom_header_markup(); ?>
		</div>  
   </div>
</header>




