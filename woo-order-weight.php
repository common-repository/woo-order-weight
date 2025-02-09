<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://wun.se
 * @since             0.1.0
 * @package           Woo_Order_Weight
 *
 * @wordpress-plugin
 * Plugin Name:       Order Weight for WooCommerce
 * Plugin URI:        https://wordpress.org/plugins/woo-order-weight/
 * Description:       This plugin makes it easy to manage and track the weight of your orders in WooCommerce. It calculates and saves the weight of each order automatically and displays it in the WordPress admin interface.
 * Version:           1.2.3
 * Author:            Andreas Karman
 * Author URI:        http://andreaskarman.se
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woo-order-weight
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'before_woocommerce_init', function() {
	if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
		\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, false );
	}
} );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woocommerce-order-weight-activator.php
 */
function activate_woo_order_weight() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woo-order-weight-activator.php';
	Woo_Order_Weight_Activator::woocommerce_check();
	Woo_Order_Weight_Activator::meta_cleanup();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woocommerce-order-weight-deactivator.php
 */
function deactivate_woo_order_weight() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woo-order-weight-deactivator.php';
	Woo_Order_Weight_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_woo_order_weight' );
register_deactivation_hook( __FILE__, 'deactivate_woo_order_weight' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woo-order-weight.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.1.0
 */
function run_woo_order_weight() {

	$plugin = new Woo_Order_Weight();
	$plugin->run();

}
run_woo_order_weight();

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	require plugin_dir_path( __FILE__ ) . 'admin/class-woo-order-weight-wp-cli.php';
}
