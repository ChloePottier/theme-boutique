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
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="white">
    <?php get_template_part('google.php');?>
    <?php wp_head(); ?>
</head>
<body id='top' <?php body_class(); ?>>
    <?php wp_body_open();
    if(is_front_page()): ?>
        <header  id='masthead' class='position-relative'>
        <div id='logoprint'>
        <?php if (function_exists('the_custom_logo')){
                the_custom_logo();
        }?>
        </div>
            <div class='container-fluid position-fixed zindex-3 bg-white' id='navbar'>
                <div class='container'>
                <?php get_template_part('template-parts/navigation/navigation','top'); ?>
                </div>
            </div>
            <div class='custom-header z-index1'>
                    <div class='custom-header-media'>
                            <?php the_custom_header_markup(); ?>
                    </div>  
            </div>
        </header>
    <?php else : ?>
        <header  id='masthead' class='position-relative vh-30 overflow-hidden'>
            <div class='custom-header-small z-index1'>
                    <div class='custom-header-media vh-30'>
                        <?php the_custom_header_markup(); ?>
                    </div>  
            </div>
        </header>
        <div class='container-fluid position-fixed zindex-3 bg-white' id='navbar'>
                <div class='container'>
                    <?php get_template_part('template-parts/navigation/navigation','top'); ?>
                </div>
            </div>
    <?php endif; ?>
    
    




