<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://cidedot.com
 * @since      1.0.0
 *
 * @package    Wp_Form_Framework
 * @subpackage Wp_Form_Framework/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Form_Framework
 * @subpackage Wp_Form_Framework/includes
 * @author     Janne Seppänen <j.v.seppanen@gmail.com>
 */
class Wp_Form_Framework_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-form-framework',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
