<?php
/**
 * Single Product Meta
 */
if (! defined('ABSPATH')) {
    exit;
}
global $product; ?>
<div class='product_meta variations'>
	<?php do_action('woocommerce_product_meta_start');
	if (wc_product_sku_enabled() && ($product->get_sku() || $product->is_type('variable'))) : ?>
	<span class='sku_wrapper fw-bold'><?php esc_html_e('Référence :', 'woocommerce'); ?>
		<span class='sku fw-normal'><?php echo ($sku = $product->get_sku()) ? $sku : esc_html__('Veuillez sélectionner une option', 'woocommerce'); ?></span></span>
	<?php endif;
	do_action('woocommerce_product_meta_end'); ?>
</div>