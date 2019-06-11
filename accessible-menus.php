<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://hiredigitally.com
 * @since             1.0.0
 * @package           Accessible_Menus
 *
 * @wordpress-plugin
 * Plugin Name:       Accessible Menus
 * Plugin URI:        https://hiredigitally.com
 * Description:       Creates accessible navigation menus to meet WCAG 2.1 Success Criteria 1.4.13: Content on Hover or Focus
 * Version:           1.0.0
 * Author:            Digitally
 * Author URI:        https://hiredigitally.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       accessible-menus
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
define( 'ACCESSIBLE_MENUS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-accessible-menus-activator.php
 */
function activate_accessible_menus() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-accessible-menus-activator.php';
	Accessible_Menus_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-accessible-menus-deactivator.php
 */
function deactivate_accessible_menus() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-accessible-menus-deactivator.php';
	Accessible_Menus_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_accessible_menus' );
register_deactivation_hook( __FILE__, 'deactivate_accessible_menus' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-accessible-menus.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_accessible_menus() {

	$plugin = new Accessible_Menus();
	$plugin->run();

}
run_accessible_menus();
