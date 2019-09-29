<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://fahdmurtaza.com
 * @since             1.0.0
 * @package           Gf_Wp_Users_Import
 *
 * @wordpress-plugin
 * Plugin Name:       Gravity Form to WP Users Import
 * Plugin URI:        http://fahdmurtaza.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Fahad Murtaza
 * Author URI:        http://fahdmurtaza.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gf-wp-users-import
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'GF_WP_USERS_IMPORT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-gf-wp-users-import-activator.php
 */
function activate_gf_wp_users_import() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gf-wp-users-import-activator.php';
	Gf_Wp_Users_Import_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-gf-wp-users-import-deactivator.php
 */
function deactivate_gf_wp_users_import() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gf-wp-users-import-deactivator.php';
	Gf_Wp_Users_Import_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gf_wp_users_import' );
register_deactivation_hook( __FILE__, 'deactivate_gf_wp_users_import' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gf-wp-users-import.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_gf_wp_users_import() {

	$plugin = new Gf_Wp_Users_Import();
	$plugin->run();

}
run_gf_wp_users_import();
