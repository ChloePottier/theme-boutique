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
    <header class='container-fluid overflow-hidden' style='background:url(<?php header_image(); ?>);'>
        <div class='container'>
            <div class='row'>
                <div class='col-4'>
                    <?php if (function_exists('the_custom_logo')){
                            the_custom_logo();
                            // rendre le logo responsive
                    }?>
                </div>
                <div class='col-4 d-none d-md-flex' itemscope itemtype='https://schema.org/BreadcrumbList'>
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </div>
                <div class='col-4' >
                    <?php wp_nav_menu( array( 'theme_location' => 'shop-menu') ); ?>
                </div>
                <div class='col-4 d-md-none'>
                    <!-- menu burger  -->
                </div>

            </div>
        </div>

    </header>


  

