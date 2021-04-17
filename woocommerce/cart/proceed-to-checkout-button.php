<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/proceed-to-checkout-button.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php if ( wp_is_mobile() ): ?>
	<div class="footer-cart footer-shadow container pt-2 pb-2 bg-white fixed-bottom hide-if-focus">
		<div class="row">
			<div class="col-4 p-0">
				<small class="text-gray text-v-s d-block">Total:</small>
				<small class="text-black"><?php wc_cart_totals_order_total_html(); ?></small>
			</div>
			<div class="col p-0">
				<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="checkout-button button alt wc-forward pt-checkout-button">
					<?php esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?>
				</a>
			</div>
		</div>
	</div>
<?php else: ?>
	<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="checkout-button button alt wc-forward hide-if-focus">
		<?php esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?>
	</a>
<?php endif; ?>