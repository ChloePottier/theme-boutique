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
    <header class='container-fluid overflow-hidden'>
        <div class='container position-absolute'>
            <div class='row'>
                <div class='col-4'>
                    <?php if (function_exists('the_custom_logo')){
                            the_custom_logo();
                    }?>
        
                </div>
                <div class='col-4'>
                    <!-- smartphone  -->
                </div>
                <div class='col-4'>
                    <?php wp_nav_menu( array( 'theme_location' => 'shop-menu', 'container_class' => 'my_extra_menu_class' ) ); ?>
                </div>

            </div>
        </div>
        <!-- header image a selectionner dans back-office -->
    <?php if ( get_header_image() ) : ?>
        <!-- <div id='site-header'> -->
                <img src="<?php header_image(); ?>" width='1900' height='1200' alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        <!-- </div> -->
<?php endif; ?>
    </header>

