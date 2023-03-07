<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://fb.com/edsonsantoro
 * @since             1.0.0
 * @package           Simply_Static_Mod
 *
 * @wordpress-plugin
 * Plugin Name:       Simply Static MOD
 * Plugin URI:        https://santoro.studio
 * Description:       Modifies Simply Static plugin with DRB.MKT custom options
 * Version:           1.0.0
 * Author:            Edson Del Santoro
 * Author URI:        https://fb.com/edsonsantoro
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       simply-static-mod
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
define( 'SIMPLY_STATIC_MOD_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-simply-static-mod-activator.php
 */
function activate_simply_static_mod() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-simply-static-mod-activator.php';
	Simply_Static_Mod_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-simply-static-mod-deactivator.php
 */
function deactivate_simply_static_mod() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-simply-static-mod-deactivator.php';
	Simply_Static_Mod_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_simply_static_mod' );
register_deactivation_hook( __FILE__, 'deactivate_simply_static_mod' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-simply-static-mod.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_simply_static_mod() {

	$plugin = new Simply_Static_Mod();
	$plugin->run();

}
run_simply_static_mod();
