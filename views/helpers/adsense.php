<?php
/**
 * Copyright 2010, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Adsense Helper
 *
 * @package adsense
 * @subpackage adsense.views.helpers
 */
class AdsenseHelper extends AppHelper {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Html', 'Session');

/**
 * Templates
 *
 * @var array
 */
	public $units = array(
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
				'height' => '125'),
			'half banner' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '3899770940',
				'width' => '234',
				'height' => '60'),
			'large rectangle' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '5536566492',
				'width' => '336',
				'height' => '280'),
			'leaderboard' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '9277502179',
				'width' => '728',
				'height' => '90'),
			'medium rectangle' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '8996967405',
				'width' => '300',
				'height' => '250'),
			'skyscraper' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '1302388139',
				'width' => '120',
				'height' => '600'),
			'small rectangle' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '2562952617',
				'width' => '180',
				'height' => '150'),
			'small square' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '2470769972',
				'width' => '200',
				'height' => '200'),
			'square' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '5093221128',
				'width' => '250',
				'height' => '250'),
			'vertical banner' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '7910521635',
				'width' => '120',
				'height' => '240'),
			'wide skyscraper' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '1062717767',
				'width' => '160',
				'height' => '600')),
		'image' => array(
			'banner' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '0445928413',
				'width' => '468',
				'height' => '60'),
			'large rectangle' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '5836820566',
				'width' => '336',
				'height' => '280'),
			'leaderboard' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '9710423473',
				'width' => '728',
				'height' => '90'),
			'medium rectangle' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '1873192173',
				'width' => '300',
				'height' => '250'),
			'skyscraper' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '4948411454',
				'width' => '120',
				'height' => '600'),
			'small square' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '7110941874',
				'width' => '200',
				'height' => '200'),
			'square' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '6076296052',
				'width' => '250',
				'height' => '250'),
			'wide skyscraper' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '5878141646',
				'width' => '160',
				'height' => '600')),
		'mixed' => array(
			'banner' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '8584646624',
				'width' => '468',
				'height' => '60'),
			'large rectangle' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '2884743756',
				'width' => '336',
				'height' => '280'),
			'leaderboard' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '2938926380',
				'width' => '728',
				'height' => '90'),
			'medium rectangle' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '1642766773',
				'width' => '300',
				'height' => '250'),
			'skyscraper' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '9130165050',
				'width' => '120',
				'height' => '600'),
			'small square' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '1141609114',
				'width' => '200',
				'height' => '200'),
			'square' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '2908900819',
				'width' => '250',
				'height' => '250'),
			'wide skyscraper' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '3976591618',
				'width' => '160',
				'height' => '600')),
		'video' => array(
			'large rectangle' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '8272079470',
				'width' => '336',
				'height' => '280'),
			'leaderboard' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '2879763780',
				'width' => '728',
				'height' => '90'),
			'medium rectangle' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '2318098298',
				'width' => '300',
				'height' => '250'),
			'skyscraper' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '7985763516',
				'width' => '120',
				'height' => '600'),
			'small square' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '1081314842',
				'width' => '200',
				'height' => '200'),
			'square' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '4267297026',
				'width' => '250',
				'height' => '250'),
			'wide skyscraper' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '4364398151',
				'width' => '160',
				'height' => '600')),
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
				'height' => '90'),
			'160x90' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '4134552310',
				'width' => '160',
				'height' => '90'),
			'160x90_4' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '2198146641',
				'width' => '160',
				'height' => '190'),
			'180x90' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '8756698363',
				'width' => '180',
				'height' => '90'),
			'180x90_4' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '0567240511',
				'width' => '180',
				'height' => '90'),
			'200x90' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '4486476034',
				'width' => '200',
				'height' => '90'),
			'200x90_4' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '6077193230',
				'width' => '200',
				'height' => '90'),
			'468x15' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '1672292331',
				'width' => '468',
				'height' => '15'),
			'468x15_4' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '8052362057',
				'width' => '468',
				'height' => '15'),
			'728x15' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '7922071401',
				'width' => '728',
				'height' => '15'),
			'728x15_4' => array(
				'client' => 'pub-2042773218904579',
				'slot' => '2456882059',
				'width' => '728',
				'height' => '15')),
			'flash ads' => array());

/**
 * Maps more common and short names to the google adsense js variables
 *
 * @var array
 */
	public $optionMap = array(
		'client' => 'google_ad_client',
		'slot' => 'google_ad_slot',
		'width' => 'google_ad_width',
		'height' => 'google_ad_height');

/**
 * Constructor
 *
 * @return void
 */
	public function __construct() {
		parent::__construct();
		$this->defaults = array(
			'client' => Configure::read('Adsense.client'));
	}

/**
 * Displays a google adsense block
 *
 * @return string
 */
	public function display($options = null, $template = null, $showLoggedIn = true) {
		if ($showLoggedIn == false && $this->Session->check('Auth.User')) {
			return null;
		}

		if (is_string($options )) {
			$options = $this->units[$options][$template];
		} else {
			$options = array_merge($this->defaults, $options);
		}

		$string = '<script type="text/javascript"><!--' . "\n";
		$string .= $this->__processOptions($options);
		$string .= "\n" . '//--></script>' . "\n";
		$string .= '<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>';

		return $string;
	}

/**
 * Injects ads in for-each loops between the data
 *
 * The idea is to have something like find later with different rules for 
 * injection, like random, every 3rd for example...
 *
 * @param integer Iterator counter
 * @param array Ads configured in Adhelper::units
 * @param array Options
 * @param array boolean Display ads to logged in users, default true
 * @return string
 */
	public function inject($i, $ads = array(), $options = array(), $showLoggedIn = true) {
		if ($showLoggedIn == false && $this->Session->check('Auth.User')) {
			return;
		}

		if (!empty($ads[$i])) {
			return '<div class="adsense">' . $ads[$i] . '</div>';
		}
	}

/**
 * Parses certain fields into google adsense js vars, see the option map
 *
 * @param array Options
 * @return string
 */
	private function __processOptions($options) {
		$jsOptions = '';
		foreach ($options as $key => $value) {
			if (array_key_exists($key, $this->optionMap)) {
				$jsOptions .= $this->optionMap[$key] . ' = "' . $value . '";' . "\n";
			}
		}
		return $jsOptions;
	}
}
