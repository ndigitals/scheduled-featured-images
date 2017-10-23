<?php
/**
 * Define the internationalization functionality.
 *
 * @link       https://www.ndigitals.com/
 * @since      1.0.0
 * @package    NDS_WP_ScheduledFeaturedImages
 * @subpackage NDS_WP_ScheduledFeaturedImages\Includes
 * @author     Tim Nolte <tim.nolte@ndigitals.com>
 */

namespace NDS_WP_ScheduledFeaturedImages\Includes;

/**
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @package    NDS_WP_ScheduledFeaturedImages
 * @subpackage NDS_WP_ScheduledFeaturedImages\Includes
 * @author     Tim Nolte <tim.nolte@ndigitals.com>
 */
class I18n {

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'scheduled-featured-images',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}

}
