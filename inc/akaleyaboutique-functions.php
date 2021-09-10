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
    <div id='contentSizeGuide' class='mt-3 content-size-guide display-none row pt-2 pb-3 box-shadow'>
        <h2 class='col-12 col-sm-10 fw-bold text-uppercase order-2 order-sm-1'><?php echo  get_post_field('post_title', 316);?> </h2>
        <div id='closeGuide' class='col-12 col-sm-2 text-end order-1 order-sm-2 py-3 py-sm-0'>
            <div class='d-flex flex-column align-items-center'>
            <label class='fs-7'>FERMER</label>
            <svg version='1.0' id='Calque_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                width='40px' height='40px' viewBox='0 0 40 40' enable-background='new 0 0 40 40' xml:space='preserve'>
            <polygon display='none' fill='#FF0000' points='37.5,4.687 35.313,2.5 20,17.813 4.687,2.5 2.5,4.687 17.813,20 2.5,35.313 
                4.687,37.5 20,22.188 35.313,37.5 37.5,35.313 22.188,20 '/>
            <polygon points='38.031,5.504 34.496,1.969 20,16.465 5.504,1.969 1.969,5.504 16.465,20 1.969,34.496 5.504,38.031 20,23.535 
                34.496,38.031 38.031,34.496 23.535,20 '/>
            </svg>
            </div>
        </div>            
        <div class='col-12 order-3'>
            <?php // echo get_post_field('post_content', 316);
            the_field('guide_content');
            ?>
        </div>
    </div>
<?php }
//fonction repositionne détail du produit
function akaleya_short_description_tab() {
    wc_get_template( 'single-product/tabs/tabs.php' );
}
if ( ! function_exists( 'akaleya_clear' ) ) {
    // ajouter div class="clear"
	function akaleya_clear() {
		wc_get_template( 'single-product/clear.php' );
	}
}