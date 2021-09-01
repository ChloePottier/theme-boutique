<?php
/**
 * Description tab
 
 */

defined( 'ABSPATH' ) || exit;

global $post;

$heading = apply_filters( 'woocommerce_product_description_heading', __( 'Description', 'woocommerce' ) );
if ( $heading ) : ?>
	<h2><?php echo esc_html( $heading ); ?></h2>
<?php endif;
the_content(); ?>
