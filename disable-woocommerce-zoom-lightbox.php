<?php
/*
 * Plugin Name: Disable WooCommerce Product Zoom and Lightbox
 * Plugin URI: https://github.com/dchenk/disable-woocommerce-zoom-lightbox
 * Description: Disable the zoom and lightbox features on all product pages.
 * Author: widerwebs
 * Version: 1.0.0
 * License: MIT
 */

function ww_disable_woocomerce_zoom_lightbox() {
	remove_theme_support('wc-product-gallery-zoom');
	remove_theme_support('wc-product-gallery-lightbox');
}

add_action('wp', 'ww_disable_woocomerce_zoom_lightbox');
