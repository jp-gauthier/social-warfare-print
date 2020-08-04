<?php
/**
 * Plugin Name: Social Warfare - Print button
 * Plugin URI:  https://warfareplugins.com/
 * Description: Add a print button to Social Warfare
 * Version:     1.0
 * Author:      JPG Dev
 * Author URI:  https://jpgdev.com
 * Text Domain: social-warfare-print
 * Domain Path: /languages
 */

function social_warfare_print_loaded() {
	if (!defined('SWP_VERSION')) {
		return;
	}

	// Load language file
	load_plugin_textdomain('social-warfare-print', false, 'social-warfare-print/languages');
	
	// Plugin core is loaded
	require_once 'SWP_Print.php';
	
	// Force print option!
	global $swp_user_options;

	if (!isset($swp_user_options['order_of_icons'])) {
		$swp_user_options['order_of_icons'] = array();
	}
	if (!isset($swp_user_options['order_of_icons']['print'])) {
		$swp_user_options['order_of_icons']['print'] = 'print';
	}
}
add_action('plugins_loaded', 'social_warfare_print_loaded', 999);
