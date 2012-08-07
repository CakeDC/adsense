# Adsense Plugin for CakePHP #

The Adsense plugins provides simple integration with Google Adsense for your application through a view helper.

### Installation ##

* Git clone the plugin into into the App/Plugin directory
* Create App/config/adsense.php or configure the helper to load another file:

	$helpers = array(
		'Adsense' => array(
			'config' => 'yourConfigFileName'));


Your config should look like:

	$config = array(
		'Adsense' => array(
			'client' => 'your-adsense-id',
			'units' => array(
				'text' => array(
					'banner' => array(
						'client' => 'your-adsense-id',
						'slot' => '6180864025',
						'width' => '468',
						'height' => '60'),
				// ...
				'image' => array(
					'banner' => array(
						'client' => 'your-adsense-id',
						'slot' => '0445928413',
						'width' => '468',
						'height' => '60'),
				// ...
				'mixed' => array(
					'banner' => array(
						'client' => 'your-adsense-id',
						'slot' => '8584646624',
						'width' => '468',
						'height' => '60'),
				// ...
				'video' => array(
					'large rectangle' => array(
						'client' => 'your-adsense-id',
						'slot' => '8272079470',
						'width' => '336',
						'height' => '280'),
				// ...
				'links' => array(
					'120x90' => array(
						'client' => 'your-adsense-id',
						'slot' => '1600909151',
						'width' => '120',
						'height' => '90'),
				// ...
				'flash ads' => array())));

## Usage ##

Add the Adsense helper to a specific controller, or to your AppController class.

Adding to your AppController will ensure that the adsense helper is available to all you views. This is the recommended method to use.

	class AppController extends Controller {

		public $helpers = array(
			'Adsense.Adsense');
	}

Once that is done, you can call the adsense helper from any of your views, elements or layouts to display the adsense code.

	$this->Adsense->display('image', 'banner');

In the case you want to inject ads in between your records in a foreach loop you can use

	echo $this->Adsense->inject($iterator, array(
		4 => $this->Adsense->display('text', 'banner'),
		8 => $this->Adsense->display('links', '468x15'),
		12 => $this->Adsense->display('text', 'banner')));

And it will add an add when the iterator hits the number.

## Requirements ##

* PHP version: PHP 5.2+
* CakePHP version: Cakephp 2.x

## Support ##

For support and feature request, please visit the [Adsense Plugin Support Site](https://github.com/CakeDC/adsense/issues).

For more information about our Professional CakePHP Services please visit the [Cake Development Corporation website](http://cakedc.com).

## License ##

Copyright 2012, [Cake Development Corporation](http://cakedc.com)

Licensed under [The MIT License](http://www.opensource.org/licenses/mit-license.php)<br/>
Redistributions of files must retain the above copyright notice.

## Copyright ###

Copyright 2012<br/>
[Cake Development Corporation](http://cakedc.com)<br/>
1785 E. Sahara Avenue, Suite 490-423<br/>
Las Vegas, Nevada 89104<br/>
http://cakedc.com<br/>
