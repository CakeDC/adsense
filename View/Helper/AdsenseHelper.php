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

App::uses('AppHelper', 'View/Helper');

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
	public $units = array();

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
 * @param View
 * @return void
 */
	public function __construct(View $View, $settings = array()) {
		parent::__construct($View, $settings);
		$this->defaults = array(
			'config' => 'adsense',
			'client' => Configure::read('Adsense.client'));

		$this->defaults = Set::merge($this->defaults, $settings);

		$config = $this->defaults['config'];
		if ($config !== false) {
			Configure::load($config);
			$this->units = Configure::read('Adsense.units');
		}
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
