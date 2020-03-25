<?php
/**
 * @link              http://nilaypatel.info
 * @since             1.0.0
 * @package           Disable_WP_Plugin_Updates_Advance
 *
 * @wordpress-plugin
 * Plugin Name:       Disable WP Plugin Updates Advance
 * Plugin URI:        http://nilaypatel.info
 * Description:       This plugin disable your all WordPress plugin updates
 * Version:           1.2
 * Author:            Nilay Patel
 * Author URI:        http://nilaypatel.info
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       disable-wp-plugin-updates-advance
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 */
register_activation_hook( __FILE__, 'activate_disable_wp_plugin_advance' );

function activate_disable_wp_plugin_advance() {
		update_option('DWPUA_activated_on',@date('d-m-Y h:i:s'));
}

/* This code execute once all plugin loaded */
add_action( 'plugins_loaded', 'disable_wp_plugin_update_loaded' );

function disable_wp_plugin_update_loaded() {
	/* Only works for wordpress 3.0+ */
	remove_action('load-update-core.php','wp_update_plugins');
	add_filter('pre_site_transient_update_plugins','__return_null');
}

/**
 * The code that runs during plugin deactivation.
 */
register_deactivation_hook( __FILE__, 'deactivate_disable_wp_plugin_advance' );

function deactivate_disable_wp_plugin_advance() {
	update_option('DWPUA_deactivated_on',@date('d-m-Y h:i:s'));
}


