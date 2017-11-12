<?php
/**
 * Common utility methods.
 *
 * @link       https://www.ndigitals.com/
 * @since      1.0.0
 * @package    NDS\ScheduledFeaturedImages
 * @subpackage NDS\ScheduledFeaturedImages\Common
 * @author     Tim Nolte <tim.nolte@ndigitals.com>
 */

namespace NDS\ScheduledFeaturedImages\Common;

/**
 * This class defines common utility methods.
 *
 * @package    NDS\ScheduledFeaturedImages
 * @subpackage NDS\ScheduledFeaturedImages\Common
 * @author     Tim Nolte <tim.nolte@ndigitals.com>
 */
class Util {

	/**
	 * Returns a parent directory's path.
	 *
	 * Given a string containing the path of a file or directory, this function will return the parent directory's path that is levels up from the current directory.
	 *
	 * @since       1.0.0
	 *
	 * @param       string $path           A path.
	 * @param       int    $levels         The number of parent directories to go up. This must be an integer greater than 0.
	 */
	public static function dirname_r( $path, $levels = 1 ) {
		if ( defined( 'PHP_MAJOR_VERSION' ) && PHP_MAJOR_VERSION >= 7 ) {
			return dirname( $path, $levels );
		} else {
			if ( $levels > 1 ) {
				return dirname( self::dirname_r( $path, --$levels ) );
			} else {
				return dirname( $path );
			}
		}
	}
}
