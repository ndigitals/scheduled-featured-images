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
	 * Commong test group setup method.
	 */
	function setUp() {
		$this->plugin = new Core();
	}

	/**
	 * Test group cleanup method.
	 */
	function tearDown() {
		$this->plugin = null;
	}

	/**
	 * Test Core plugin version method when a global has not been defined.
	 */
	function testCoreDefaultVersion() {
		$this->assertNotEmpty( $this->plugin->get_version(), 'Plugin should have a default version number.' );
		$this->assertSame( '1.0.0', $this->plugin->get_version() );
	}

	/**
	 * Test Core plugin version method when a global is defined.
	 */
	function testCoreGlobalVersion() {
		define( 'NDS_SFI_VERSION', '1.0.0' );
		$this->assertNotEmpty( NDS_SFI_VERSION, 'Global NDS_SFI_VERSION should not be empty if it is defined.' );
		$this->assertSame( NDS_SFI_VERSION, $this->plugin->get_version() );
	}

	/**
	 * Test Core plugin name/slug method when a global has not been defined.
	 */
	function testCoreDefaultSlug() {
		$this->assertNotEmpty( $this->plugin->get_plugin_name(), 'Plugin should have a default name/slug define.' );
		$this->assertSame( 'scheduled-featured-images', $this->plugin->get_plugin_name() );
	}

	/**
	 * Test Core plugin path when a global path has not been defined.
	 */
	function testCoreDefaultPath() {
		$this->assertNotEmpty( $this->plugin->get_plugin_path(), 'Plugin should have a default path.' );
		$this->assertSame( trailingslashit( Common\Util::dirname_r( __FILE__, 2 ) ), $this->plugin->get_plugin_path() );
	}

	/**
	 * Test Core plugin path method when a global is defined.
	 */
	function testCoreGlobalPluginPath() {
		define( 'NDS_SFI_PATH', trailingslashit( Common\Util::dirname_r( __FILE__, 2 ) ) );
		$this->assertNotEmpty( NDS_SFI_PATH, 'Plugin should have a default path.' );
		$this->assertSame( NDS_SFI_PATH, $this->plugin->get_plugin_path() );
	}
}
