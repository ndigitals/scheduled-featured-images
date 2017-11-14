<?php
/**
 * Class UtilTest
 *
 * @package NDS\ScheduledFeaturedImages
 * @subpackage NDS\ScheduledFeaturedImages\Tests\Common
 */

namespace NDS\ScheduledFeaturedImages\Common;

use PHPUnit\Framework\TestCase;
use WP_UnitTestCase;

/**
 * Util test case.
 */
class UtilTest extends WP_UnitTestCase {

	/**
	 * Test dirname_r() fallback method when using PHP versions prior to 7.x..
	 */
	function testDirnameR() {
		$curr_path = explode( '/', __FILE__ );
		array_pop( $curr_path );
		$parent_dir_path = implode( '/', $curr_path );
		$this->assertSame( Util::dirname_r( __FILE__ ), $parent_dir_path );
	}
}
