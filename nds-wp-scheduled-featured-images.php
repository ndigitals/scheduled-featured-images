<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.ndigitals.com/
 * @since             1.0.0
 * @package           Nds_Wp_Scheduled_Featured_Images
 *
 * @wordpress-plugin
 * Plugin Name:       Scheduled Featured Images
 * Plugin URI:        https://www.ndigitals.com/wordpress/plugins/scheduled-featured-images-plugin/
 * Description:       Scheduled Featured Images allows you to attach multiple images to any post-type and set them to be the featured image based on a schedule.
 * Version:           1.0.0
 * Author:            Tim Nolte
 * Author URI:        https://www.timnolte.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       nds-wp-scheduled-featured-images
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-nds-wp-scheduled-featured-images-activator.php
 */
function activate_nds_wp_scheduled_featured_images() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nds-wp-scheduled-featured-images-activator.php';
	Nds_Wp_Scheduled_Featured_Images_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-nds-wp-scheduled-featured-images-deactivator.php
 */
function deactivate_nds_wp_scheduled_featured_images() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nds-wp-scheduled-featured-images-deactivator.php';
	Nds_Wp_Scheduled_Featured_Images_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_nds_wp_scheduled_featured_images' );
register_deactivation_hook( __FILE__, 'deactivate_nds_wp_scheduled_featured_images' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-nds-wp-scheduled-featured-images.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_nds_wp_scheduled_featured_images() {

	$plugin = new Nds_Wp_Scheduled_Featured_Images();
	$plugin->run();

}
run_nds_wp_scheduled_featured_images();
