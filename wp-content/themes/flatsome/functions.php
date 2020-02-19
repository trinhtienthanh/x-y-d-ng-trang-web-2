<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
//tạo vnđ
	add_filter('woocommerce_currency_synbol', 'change_existing_currency_symbol', 10, 2);
function change_existing_currency_symbol( $currency_symbol, $currency) {
	switch($currency) {
		case 'VND' : $currency_symbol = 'VND'; break;
	}
	return $currency_symbol;
}
//ADD TO CART BUTTON TO PER PRODUCT
    add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 10 );