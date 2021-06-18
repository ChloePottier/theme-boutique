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
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no'>
    <?php //get_template_part('google.php');?>
    <?php wp_head(); ?>
</head>
<body id='top' <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header  id='masthead' class='position-relative vh-100 overflow-hidden'>
    <div class='container '>
        <div class='row position-absolute row-nav'>
            <div class='col-4 col-md-3'>
                <?php if (function_exists('the_custom_logo')){
                        the_custom_logo();
                }?>
            </div>
            <div class='col-4 d-none d-md-flex fw-bold pt-4 fs-5 text-shadow' id='menu-top-md'itemscope itemtype='https://schema.org/BreadcrumbList'>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </div>
            <div class='col-6 col-md-5 fs-3 d-flex flex-row justify-content-end text-shadow' >
                <?php wp_nav_menu( array( 'theme_location' => 'shop-menu', 'menu_class' => 'pt-4') ); ?>
            </div>
            <div class='col-2 d-flex justify-content-end d-md-none'>
                <!-- menu burger  -->
                <label class='burger text-center d-flex flex-column d-md-none text-white position-fixed rounded-circle' id='burger'>MENU
                    <span class='bg-white isclosed mx-auto' id='burger1'>&nbsp;</span>
                    <span class='bg-white isclosed mx-auto' id='burger2'>&nbsp;</span>
                    <span class='bg-white isclosed mx-auto' id='burger3'>&nbsp;</span>
                </label>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_id' => 'navigation', 'menu_class' => 'display-none fw-bold fs-3' ) ); ?>
            </div>
        </div>
    </div>
    <div class='custom-header'>
    <?php
// Specifying width of 400 (px) and height of 200 (px).
$srcset = wp_get_attachment_image_srcset( get_custom_header()->attachment_id,'custom_logo_sm');
?>
    <?php if ( get_header_image() ) : ?>
        <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
    <?php endif; ?>
    </div>   
</header>


