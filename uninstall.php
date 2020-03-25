<?php
/**
 * Fired when the plugin is uninstalled.
 * @link              http://nilaypatel.info
 * @since             1.0.0
 * @package           Disable_WP_Plugin_Updates_Advance
 * Text Domain:       disable-wp-plugin-updates-advance
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

delete_option('DWPUA_activated_on');
delete_option('DWPUA_deactivated_on');
