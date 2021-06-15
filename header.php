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
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class='container-fluid'>
        <div class="container">
            <div class="row">
                <div class="col-4">
                <?php if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    } ?>
                </div>
                <div class="col-4"></div>
                <div class="col-4"></div>

            </div>
        </div>
        <p >Header</p>

    </header>

