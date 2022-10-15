<?php
/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://trololo.fun
 * @since      1.0.0
 *
 * @package    Trololo
 * @subpackage Trololo/includes/classes
 * @author     TBD
 */
namespace Lol;

class I18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'trololo',
			false,
			LOL_DIR . '/languages/'
		);

	}
}
