<?php
/**
 * Class CoreTest
 *
 * @package NDS\ScheduledFeaturedImages
 * @subpackage NDS\ScheduledFeaturedImages\Tests
 */

namespace NDS\ScheduledFeaturedImages;

use PHPUnit\Framework\TestCase;
use WP_UnitTestCase;

/**
 * Core test case.
 */
class CoreTest extends WP_UnitTestCase {

	/**
	 * Test Core plugin version method when a global has not been defined.
	 */
	function testCoreDefaultVersion() {
		$plugin = new Core();
		$this->assertNotEmpty( $plugin->get_version(), 'Plugin should have a default version number.' );
		$this->assertSame( '1.0.0', $plugin->get_version() );
	}

	/**
	 * Test Core plugin version method when a global is defined.
	 */
	function testCoreGlobalVersion() {
		define( 'NDS_SFI_VERSION', '1.0.0' );
		$this->assertNotEmpty( NDS_SFI_VERSION, 'Global NDS_SFI_VERSION should not be empty if it is defined.' );
		$plugin = new Core();
		$this->assertSame( NDS_SFI_VERSION, $plugin->get_version() );
	}
}
