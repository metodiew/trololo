<?php
/**
 * The plugin bootstrap file.
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://trololo.fun
 * @since             1.0.0
 * @package           Trololo
 *
 * @wordpress-plugin
 * Plugin Name:       Trololo
 * Plugin URI:        https://trololo.fun
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Trololo team
 * Author URI:        https://trololo.fun
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin version. Start at version 1.0.0
 * For the versioning of the plugin is used SemVer - https://semver.org
 * Rename this for every new plugin and update it as you release new versions.
 */
define( 'LOL_VERSION', '1.0.0' );


//! Rename the define
if ( ! defined( 'LOL_DIR' ) ) {
	define( 'LOL_DIR', plugin_dir_path( __FILE__ ) );
}

//! Rename the define
if ( ! defined( 'LOL_URL' ) ) {
	define( 'LOL_URL', plugin_dir_url( __FILE__ ) );
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/classes/class-trololo-activator.php
 */
function dx_activate_trololo() {
	require_once LOL_DIR . 'includes/classes/class-activator.php';
	Lol\Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/classes/class-trololo-deactivator.php
 */
function dx_deactivate_trololo() {
	require_once LOL_DIR . 'includes/classes/class-deactivator.php';
	Lol\Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'dx_activate_trololo' );
register_deactivation_hook( __FILE__, 'dx_deactivate_trololo' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require_once LOL_DIR . 'includes/classes/class-trololo.php';

/**
 * The plugin functions file that is used to define general functions, shortcodes etc.
 */
require_once LOL_DIR . 'includes/functions.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function dx_run_trololo() {
	$plugin = new Lol\Trololo();
	$plugin->run();
}

dx_run_trololo();
