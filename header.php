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
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <?php //get_template_part('google.php');?>
    <?php wp_head(); ?>
</head>
<body id='top' <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header  id='masthead' class='position-relative site-header'>
    <div class='container '>
        <div class='row position-absolute row-nav'>
            <div class='col-4 col-md-3'>
                <?php if (function_exists('the_custom_logo')){
                        the_custom_logo('custom_logo_sm');
                        // rendre le logo responsive
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
                <label class='burger text-center d-flex flex-column d-md-none text-white position-fixed rounded-circle text-shadow' id='burger'>MENU
                    <span class='bg-white isclosed mx-auto' id='burger1'>&nbsp;</span>
                    <span class='bg-white isclosed mx-auto' id='burger2'>&nbsp;</span>
                    <span class='bg-white isclosed mx-auto' id='burger3'>&nbsp;</span>
                </label>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_id' => 'navigation', 'menu_class' => 'display-none' ) ); ?>
            </div>
        </div>
    </div>
    <div class='custom-header'>
    <?php
// Specifying width of 400 (px) and height of 200 (px).
$srcset = wp_get_attachment_image_srcset( get_custom_header()->attachment_id,'custom_logo_sm');
?>
    <?php if ( get_header_image() ) : ?>
        <img src="<?php header_image(); ?>" width='1900' height='1200' srcset="<?php echo esc_attr( $srcset ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        <?php endif; ?>
    </div>   
</header>


