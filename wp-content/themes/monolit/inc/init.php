<?php

/**
 * Load WooCommerce compatibility files.
 */
if ( monolit_is_woocommerce_activated() ) {
	require get_template_directory() . '/inc/woocommerce/hooks.php';
}
