<?php
/**
 * Plugin Name: Trololo
 * Description: Plugin by DevriX's troll team. This is completely useless extension, but if you want to troll your coworkers or friends, make sure you install it.
 * Version: 1.0.0
 * Author: your mom // @fixme
 * License: GPL2+
 * Text Domain: trololo
 */

// -----------------------------------------------
// WARNING!!!
// Abandon all hope if you enter beyond this point
// You have been warned.
// -----------------------------------------------

// Get the anoying trolls out of here.
if ( ! defined( 'WPINC' ) ) {
	die; // Like the little *@$^!* you are!
}

// @Stanko told me this is how the cool kids do it.
if( ! defined( 'WP_CONTENT_DIR' ) ) {
	define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
}

// The so called "core" of the plugin.
require plugin_dir_path( __FILE__ ) . 'includes/class-trololo.php';

// Begins execution.
function run_trololo() {
	$plugin = new Trololo();
	$plugin->run();
}

// Let the fun begin!
run_trololo();