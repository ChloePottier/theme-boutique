<?php

/** The header for our theme.
 * @package akaleyaboutique
 */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
    <meta name='theme-color' media='(prefers-color-scheme: light)' content='white'>
    <?php get_template_part('google.php');
    wp_head(); ?>
</head>

<body id='top' <?php body_class(); ?>>
    <?php wp_body_open();
    if (is_front_page()) : ?>
        <header id='masthead' class='position-relative'>
            <div id='logoprint'>
                <?php if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } ?>
            </div>
            <div class='container-fluid position-fixed zindex-3 bg-white' id='navbar'>
                <div class='container'>
                    <?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
                </div>
            </div>
            <section class='custom-header z-index1'>
                <!-- <div class='custom-header-media'> -->
                <?php
                 the_custom_header_markup();
                //  the_header_image_tag();

                
                ?>
<!-- </div> -->
                 <!-- <img src="http://boutique-new.local/wp-content/uploads/2024/07/site-img-test-2000-912.jpg" width="2000" height="912" alt="" 
                srcset="http://boutique-new.local/wp-content/uploads/2024/07/site-img-test-2000-912.jpg 2000w, 
                http://boutique-new.local/wp-content/uploads/2024/07/site-img-test-2000-912-300x722.jpg 300w, 
                                http://boutique-new.local/wp-content/uploads/2024/07/site-img-test-2000-912-576x912.jpg 576w, 

                http://boutique-new.local/wp-content/uploads/2024/07/site-img-test-2000-912-1024x467.jpg 1024w, 
                http://boutique-new.local/wp-content/uploads/2024/07/site-img-test-2000-912-768x350.jpg 768w, 
                http://boutique-new.local/wp-content/uploads/2024/07/site-img-test-2000-912-1536x700.jpg 1536w, 
                http://boutique-new.local/wp-content/uploads/2024/07/site-img-test-2000-912-600x274.jpg 600w" 
                sizes="(max-width: 2000px) 100vw, 2000px" decoding="async" fetchpriority="high"> -->
                <?php
                $header_title = esc_html(get_theme_mod('header_title'));
                $header_text = esc_html(get_theme_mod('header_text'));
                $header_button = esc_html(get_theme_mod('header_button'));
                $header_button_text = esc_html(get_theme_mod('header_button_text'));

                if ($header_title != '' || $header_text != '' || $header_button != '') :
                    echo '<div class="container-text-header zindex-2">';
                    if ($header_title != '') :
                        echo '<h1>' . $header_title . '</h1>';
                    endif;
                    if ($header_text != '') :
                        echo '<p>' . $header_text . '</p>';
                    endif;
                    if ($header_button != '') :
                        echo '<a href="' . $header_button . '" class="header_button_text">';
                        if ($header_button_text != '') :
                            echo $header_button_text;
                        else :
                            echo 'En savoir plus';
                        endif;
                        echo '</a>';
                    endif;
                    echo '</div>';
                endif;
                ?>

                <!-- </div>   -->
            </section>
        </header>
    <?php else : ?>
        <header id='masthead' class='position-relative mb-5'>
            <div class='container-fluid position-fixed zindex-3 bg-white' id='navbar'>
                <div class='container'>
                    <?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
                </div>
            </div>
        </header>
    <?php endif;
