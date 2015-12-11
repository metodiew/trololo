<?php

/**
 * Why are you even here? Anyways, for more information
 * about the plugin, see the about page below.
 *
 * @link       http://rick.amigocraft.net/
 * @since      1.0.0
 *
 * @package    Trololo
 * @subpackage Trololo/admin
 */

class Trololo_Admin {

	// Dont ask, i have no idea why i put those here...
	private $plugin_name;
	private $version;

	// __lego() {}
	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	// Pretty much most of the fun is here.
	public function enqueue_styles() {
		wp_enqueue_style( 'gypsy-danger', plugins_url( 'css/style.css', __FILE__ ) );
	}

	// And here :)
	public function enqueue_scripts() {
		wp_enqueue_script( 'bambi-bomb', plugins_url( 'js/master.js', __FILE__ ) );
	}

	// Boring plugin stuff from now on:
	// Otherways put - add actions and filters.
	public function run() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_styles' ) );

		// The options page.
		add_action( 'admin_menu', array( $this, 'awesome_options' ) );
	}

	private function get_plugin_name() {
		return $this->plugin_name;
	}

	private function get_version() {
		return $this->version;
	}

	public function awesome_options() {

		// The best options page ever created in the history of WordPress. Totally
		add_menu_page( 'Do not click here', 'Don\'t click here!', 'administrator', 'trololo', 'awesome_options' , plugins_url( 'images/icon_trollface.png', __FILE__ ) );
	}
}