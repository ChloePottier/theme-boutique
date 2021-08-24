<?php 
//début du conteneur
function akaleya_wrapper_start() {
    echo "<div id='container' class='content-shop container-fluid bg-white position-relative mb-5'>
    <main id='main' class='site-main container position-relative' role='main'>";
}
//fin du conteneur
function akaleya_wrapper_end() {
    echo '</main></div>';
}
// Prise en charge de Woocommerce Basic
function akaleya_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
/** Modifer les paramètres du fil d'arianne */
function akaleya_wc_breadcrumbs() {
    return array(
            'delimiter'   => ' / ',
            'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">',
            'wrap_after'  => '</nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}

// Guide des tailles
function akaleya_size_guide(){?>
    <div  class='size-guide button-size-guide' id='sizeguide'>Guide des tailles</div> 
   
<?php }
function size_guide_content(){?>
    <div id='contentSizeGuide' class='content-size-guide display-none container'>
        <div class='row'>
            <div id='closeGuide'>FERMER</div>
            <h2 class='col-12'><?php echo  get_post_field('post_title', 297);?> </h2>
            <div class='col-12'>
                <?php echo get_post_field('post_content', 297);?>
            </div>
        </div>
</div>
<?php }
