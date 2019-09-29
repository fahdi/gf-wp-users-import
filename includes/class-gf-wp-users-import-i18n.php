<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://fahdmurtaza.com
 * @since      1.0.0
 *
 * @package    Gf_Wp_Users_Import
 * @subpackage Gf_Wp_Users_Import/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Gf_Wp_Users_Import
 * @subpackage Gf_Wp_Users_Import/includes
 * @author     Fahad Murtaza <info@fahdmurtaza.com>
 */
class Gf_Wp_Users_Import_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'gf-wp-users-import',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
