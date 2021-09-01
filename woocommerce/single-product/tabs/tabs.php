<?php
/**
 * Single Product tabs
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );
if ( ! empty( $product_tabs ) ) : ?>
	<div class='wrapper-short-description'>
	<?php 	global $post;
	$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );
	if ( ! $short_description ) {
		return;
	} ?>
		<div class="woocommerce-product-details__short-description pb-5">
			<?php echo '<h3>Détails du produit</h3>';
			echo $short_description; ?>
		</div>
	</div>
<?php endif; ?>
