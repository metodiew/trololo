<?php

class Trololo {

	/**
	 * I Have No Idea What I'm Doing
	 *
	 * @since I started this project...
	 */
	protected $plugin_name;
	protected $version;

	public function __construct() {
		$this->plugin_name = 'trololo';
		$this->version = '1.0.0';

		$this->load_dependencies();
	}

	private function load_dependencies() {

		// Troll the users
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-trololo-public.php';

		// Troll the admins
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-trololo-admin.php';
	}

	public function run() {
		$public = new Trololo_Public( $this->get_plugin_name(), $this->get_version() );
		$admin = new Trololo_Admin( $this->get_plugin_name(), $this->get_version() );

		$public->run();
		$admin->run();
	}

	private function get_plugin_name() {
		return $this->plugin_name;
	}

	private function get_version() {
		return $this->version;
	}
}