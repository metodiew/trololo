<?php

/**
 * I don't know if you checked the class-trololo-admin.php
 * but its the same here, just for the users. Now i don't
 * know why would you want to troll them, but its your site :)
 *
 * Anyways, we are happy that Matt Mullenweg checked this plugin,
 * so please take a look !
 *
 * @link       https://www.youtube.com/watch?v=dQw4w9WgXcQ
 * @since      1.0.0
 *
 * @package    Trololo
 * @subpackage Trololo/admin
 */

class Trololo_Public {

	private $plugin_name;
	private $version;

	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	// Pretty much most of the fun is here.
	public function enqueue_styles() { }

	// And here :)
	public function enqueue_scripts() { }

	// Boring plugin stuff from now on:
	public function run() {
		// add_action( 'admin_init', array($this, 'enqueue_scripts') );
		// add_action( 'admin_init', array($this, 'enqueue_styles') );
	}

	private function get_plugin_name() {
		return $this->plugin_name;
	}

	private function get_version() {
		return $this->version;
	}
}