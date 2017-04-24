<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://martsys.com/wp-robowebinar
 * @since      1.0.0
 *
 * @package    Wp_Robowebinar
 * @subpackage Wp_Robowebinar/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Robowebinar
 * @subpackage Wp_Robowebinar/includes
 * @author     Artie Akgunduz http://github.com/martsys
 */
class Wp_Robowebinar_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-robowebinar',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
