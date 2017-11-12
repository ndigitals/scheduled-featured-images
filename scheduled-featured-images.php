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
 * @package           NDS\ScheduledFeaturedImages
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
 * Text Domain:       scheduled-featured-images
 * Domain Path:       /languages
 */

namespace NDS\ScheduledFeaturedImages;

// Due to namespace usage and composer package requirements we require PHP >= 5.5.0.
if ( ! function_exists( 'version_compare' ) || version_compare( PHP_VERSION, '5.5.0', '<' ) ) {
	exit;
}

// If this file is called directly, abort.
defined( 'WPINC' ) || die;

/**
 * Check for and load the PSR-4 autoloader, built by Composer.
 */
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once( __DIR__ . '/vendor/autoload.php' );
}

use NDS\ScheduledFeaturedImages\Common;

register_activation_hook( __FILE__, array( __NAMESPACE__ . 'Common\Activator', 'activate' ) );
register_deactivation_hook( __FILE__, array( __NAMESPACE__ . 'Common\Deactivator', 'deactivate' ) );

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */

$plugin = new Core();
$plugin->run();
