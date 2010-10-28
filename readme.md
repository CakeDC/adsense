# Adsense Plugin for CakePHP #

The Adsense plugins provides simple integration with Google Adsense for your application through a view helper.

### Installation ##

* Place the `adsense` folder into the app/plugins directory
* No.. really. Thats all you have to do!

## Usage ##

Add the Adsense helper to a specific controller, or to your AppController class.

Adding to your AppController will ensure that the adsense helper is available to all you views. This is the recommended method to use.

	class AppController extends Controller {
		public $helpers = array('Adsense.Adsense', 'Html', 'Form');
	}

Once that is done, you can call the adsense helper from any of your views, elements or layouts to display the adsense code.

	TODO: Better Example of usage
	
	$this->Adsense->display('image', 'banner');

## Requirements ##

* PHP version: PHP 5.2+
* CakePHP version: Cakephp 1.3 Stable

## Support ##

TODO: Fix link to go to actual tracker.
For support and feature request, please visit the [Adsense Plugin Support Site](http://cakedc.lighthouse.app).

For more information about our Professional CakePHP Services please visit the [Cake Development Corporation website](http://cakedc.com).

## License ##

Copyright 2010, [Cake Development Corporation](http://cakedc.com)

Licensed under [The MIT License](http://www.opensource.org/licenses/mit-license.php)<br/>
Redistributions of files must retain the above copyright notice.

## Copyright ###

Copyright 2010<br/>
[Cake Development Corporation](http://cakedc.com)<br/>
1785 E. Sahara Avenue, Suite 490-423<br/>
Las Vegas, Nevada 89104<br/>
http://cakedc.com<br/>
