<?php
/**
 * AdsenseHelperTest file
 *
 * Long description for file
 *
 * PHP 5
 *
 * CakePHP(tm) Tests <https://trac.cakephp.org/wiki/Developement/TestSuite>
 * Copyright 2006-2009, Cake Software Foundation, Inc.
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2006-2009, Cake Software Foundation, Inc.
 * @link          https://trac.cakephp.org/wiki/Developement/TestSuite CakePHP(tm) Tests
 * @package       cake
 * @subpackage    cake.tests.cases.libs.view.helpers
 * @since         CakePHP(tm) v 1.2.0.4206
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */

App::uses('AdsenseHelper', 'Adsense.View/Helper');
App::uses('Controller', 'Controller');
App::uses('View', 'View');

/**
 * TheHtmlTestController class
 *
 * @package       cake
 * @subpackage    cake.tests.cases.libs.view.helpers
 */
class AdsenseTestController extends Controller {

/**
 * name property
 *
 * @var string
 * @access public
 */
	public $name = 'Adsense';

/**
 * uses property
 *
 * @var mixed null
 * @access public
 */
	public $uses = null;
}

/**
 * AdsenseHelperTest class
 *
 * @package       cake
 * @subpackage    cake.tests.cases.libs.view.helpers
 */
class AdsenseHelperTest extends CakeTestCase {

/**
 * adsense property
 *
 * @var object
 * @access public
 */
	public $Adsense = null;

/**
 * setUp method
 *
 * @access public
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$controller = new Controller;
		$View = new View($controller);
		$this->Adsense = new AdsenseHelper($View);
		$this->Adsense->units = array(
			'text' => array(
				'banner' => array(
					'client' => 'pub-2042773218904579',
					'slot' => '6180864025',
					'width' => '468',
					'height' => '60'),
				'button' => array(
					'client' => 'pub-2042773218904579',
					'slot' => '1647704099',
					'width' => '125',
					'height' => '125')),
			'image' => array(
				'banner' => array(
					'client' => 'pub-2042773218904579',
					'slot' => '0445928413',
					'width' => '468',
					'height' => '60')),
			'links' => array(
				'120x90' => array(
					'client' => 'pub-2042773218904579',
					'slot' => '1600909151',
					'width' => '120',
					'height' => '90'),
				'120x90_4' => array(
					'client' => 'pub-2042773218904579',
					'slot' => '8185610946',
					'width' => '120',
					'height' => '90')));
	}

/**
 * endTest method
 *
 * @access public
 * @return void
 */
	public function tearDown() {
		parent::tearDown();
		unset($this->Adsense);
	}

/**
 * testDisplay method
 *
 * @access public
 * @return void
 */
	public function testDisplay() {
		$result = $this->Adsense->display('text', 'banner');
		$this->assertTrue(is_string($result));
		$this->assertEqual(preg_match('/\<script type=\"text\/javascript\"\>/', $result), 1);
	}

/**
 * testInject method
 *
 * @access public
 * @return void
 */
	public function testInject() {
		$result = array();
		for ($i = 1; $i <= 10; $i++) {
			$result[$i] = $this->Adsense->inject($i, $ads = array(
				3 => $this->Adsense->display('text', 'banner'),
				6 => $this->Adsense->display('text', 'button'),
				9 => $this->Adsense->display('image', 'banner')), array(), true);
		}

		$this->assertTrue(!empty($result[3]));
		$this->assertTrue(!empty($result[6]));
		$this->assertTrue(!empty($result[9]));
	}
}
?>