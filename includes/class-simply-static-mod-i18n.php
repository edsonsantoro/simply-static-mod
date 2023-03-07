<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://fb.com/edsonsantoro
 * @since      1.0.0
 *
 * @package    Simply_Static_Mod
 * @subpackage Simply_Static_Mod/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Simply_Static_Mod
 * @subpackage Simply_Static_Mod/includes
 * @author     Edson Del Santoro <edsonsantoro@gmail.com>
 */
class Simply_Static_Mod_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'simply-static-mod',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
