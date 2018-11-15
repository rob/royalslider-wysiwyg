<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/rob/royalslider-wysiwyg
 * @since             1.0.0
 * @package           Royalslider_Wysiwyg
 *
 * @wordpress-plugin
 * Plugin Name:       RoyalSlider WYSIWYG Field Add-On
 * Plugin URI:        https://github.com/rob/royalslider-wysiwyg
 * GitHub Plugin URI: https://github.com/rob/royalslider-wysiwyg
 * Description:       Change the "description" field of RoyalSlider slides into a WYSIWYG field.
 * Version:           1.0.0
 * Author:            Rob Gabaree
 * Author URI:        https://github.com/rob/royalslider-wysiwyg
 * License:           GPLv3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       royalslider-wysiwyg
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
define( 'ROYALSLIDER_WYSIWYG_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-royalslider-wysiwyg-activator.php
 */
function activate_royalslider_wysiwyg() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-royalslider-wysiwyg-activator.php';
	Royalslider_Wysiwyg_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-royalslider-wysiwyg-deactivator.php
 */
function deactivate_royalslider_wysiwyg() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-royalslider-wysiwyg-deactivator.php';
	Royalslider_Wysiwyg_Deactivator::deactivate();
}

//register_activation_hook( __FILE__, 'activate_royalslider_wysiwyg' );
//register_deactivation_hook( __FILE__, 'deactivate_royalslider_wysiwyg' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-royalslider-wysiwyg.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_royalslider_wysiwyg() {

	$plugin = new Royalslider_Wysiwyg();
	$plugin->run();

}
run_royalslider_wysiwyg();
