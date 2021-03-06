<?php

/*
 * Plugin Name: Addon Widgets Elementor
 * Plugin URI: https://wpdevhq.com/plugins/addon-widgets-for-elementor
 * Description: A helper plugin for users of Elementor Pagebuilder.
 * Version: 1.0.4
 * Author: WPDevHQ
 * Author URI: https://wpdevhq.com/
 * Requires at least:   4.4
 * Tested up to:        4.7.2
 */

/* Do not access this file directly */
if ( ! defined( 'WPINC' ) ) { die; }

/* Constants
------------------------------------------ */

/* Set plugin version constant. */
define( 'EA_VERSION', '1.0.4' );

/* Set constant path to the plugin directory. */
define( 'EA_PATH', trailingslashit( plugin_dir_path(__FILE__) ) );

/* Set the constant path to the plugin directory URI. */
define( 'EA_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );

/* ElemenTemplater Class */
require_once( EA_PATH . 'eaw-class.php' );

/**
 * Query WooCommerce activation
 */
if ( ! function_exists( 'eaw_is_woocommerce_active' ) ) {

    function eaw_is_woocommerce_active() {
	    return class_exists( 'woocommerce' ) ? true : false;
    }

}

/**
 * Call a shortcode function by tag name.
 *
 * @since  1.0.0
 *
 * @param string $tag     The shortcode whose function to call.
 * @param array  $atts    The attributes to pass to the shortcode function. Optional.
 * @param array  $content The shortcode's content. Default is null (none).
 *
 * @return string|bool False on failure, the result of the shortcode on success.
 */
function eaw_do_shortcode( $tag, array $atts = array(), $content = null ) {

	global $shortcode_tags;

	if ( ! isset( $shortcode_tags[ $tag ] ) ) {
		return false;
	}

	return call_user_func( $shortcode_tags[ $tag ], $atts, $content, $tag );
}