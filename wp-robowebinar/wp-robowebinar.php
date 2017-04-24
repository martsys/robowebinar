<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://martsys.com/wp-robowebinar
 * @since             1.0.0
 * @package           Wp_Robowebinar
 *
 * @wordpress-plugin
 * Plugin Name:       WP RoboWebinar
 * Plugin URI:        http://martsys.com/wp-robowebinar
 * Description:       Auomated Webinar System for Wordpress
 * Version:           1.0.0
 * Author:            Artie Akgunduz
 * Author URI:        http://github.com/martsys
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-robowebinar
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-robowebinar-activator.php
 */
function activate_Wp_Robowebinar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-robowebinar-activator.php';
	Wp_Robowebinar_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-robowebinar-deactivator.php
 */
function deactivate_Wp_Robowebinar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-robowebinar-deactivator.php';
	Wp_Robowebinar_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_Wp_Robowebinar' );
register_deactivation_hook( __FILE__, 'deactivate_Wp_Robowebinar' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-robowebinar.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_Wp_Robowebinar() {

	$plugin = new Wp_Robowebinar();
	$plugin->run();

}
run_Wp_Robowebinar();
