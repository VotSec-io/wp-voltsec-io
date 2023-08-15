<?php
/*
Plugin Name: WP Voltsec.io
Plugin URI: https://github.com/VotSec-io/wp-voltsec-io
Description: Enhance the security of your WordPress site with WP Voltsec.io plugin.
Version: 1.0
Author: Prashant Goel
Author URI: https://github.com/VotSec-io
Text Domain: wp-voltsec-io
Domain Path: /languages
*/

// If this file is accessed directly, abort.
if (!defined('ABSPATH')) {
    exit;
}

// Define constants
define('WP_VOLTSEC_IO_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('WP_VOLTSEC_IO_PLUGIN_URL', plugin_dir_url(__FILE__));

// Include necessary files
require_once WP_VOLTSEC_IO_PLUGIN_DIR . 'includes/admin-page.php';
require_once WP_VOLTSEC_IO_PLUGIN_DIR . 'includes/frontend/public-functions.php';

// Register activation and deactivation hooks
register_activation_hook(__FILE__, 'wp_voltsec_io_activate');
register_deactivation_hook(__FILE__, 'wp_voltsec_io_deactivate');

// Initialize the plugin
function wp_voltsec_io_init() {
    load_plugin_textdomain('wp-voltsec-io', false, dirname(plugin_basename(__FILE__)) . '/languages');
}
add_action('plugins_loaded', 'wp_voltsec_io_init');
