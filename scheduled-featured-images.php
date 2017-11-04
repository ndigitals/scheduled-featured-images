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
 * @package           NDS_ScheduledFeaturedImages
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

namespace NDS_ScheduledFeaturedImages;

// Due to namespace usage we require PHP >= 5.3.0
if ( ! function_exists( 'version_compare' ) || version_compare( PHP_VERSION, '5.3.0', '<' ) ) {
	exit;
}

// If this file is called directly, abort.
defined( 'WPINC' ) || die;

/**
 * Define plugin version global.
 */
if ( !defined( 'NDS_SFI_VERSION' ) )
{
	define( 'NDS_SFI_VERSION', '1.0.0' );
}

/**
 * Define a plugin system path global so we don't have to call the function
 */
if ( !defined( 'NDS_SFI_PATH' ) )
{
	define( 'NDS_SFI_PATH', plugin_dir_path( __FILE__ ) );
}

/**
 * Define a plugin directory global so we don't have to call functions
 */
if ( !defined( 'NDS_SFI_DIR' ) )
{
	define( 'NDS_SFI_DIR', basename( NDS_SFI_PATH ) );
}

/**
 * Define a plugin URL global so we don't have to call the function
 *
 * NOTE: Protocol stripped in order to provide an agnostic URL reference
 */
if ( !defined( 'NDS_SFI_URL' ) )
{
	define( 'NDS_SFI_URL', str_replace( array( 'http:', 'https:' ), '', plugin_dir_url( __FILE__ ) ) );
}

require_once 'lib/autoload.php';

use NDS_ScheduledFeaturedImages\Common;

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-scheduled-featured-images-activator.php
 */
function activate_scheduled_featured_images() {
	Common\Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-scheduled-featured-images-deactivator.php
 */
function deactivate_scheduled_featured_images() {
	Common\Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_scheduled_featured_images' );
register_deactivation_hook( __FILE__, 'deactivate_scheduled_featured_images' );

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_scheduled_featured_images() {

	$plugin = new Common\Core();
	$plugin->run();

}
run_scheduled_featured_images();
