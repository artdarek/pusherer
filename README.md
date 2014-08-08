# Pusherer - Laravel 4 Service Provider

Pusherer is a simple Pusher.com service provider for Laravel 4. 
[Pusher](http://pusher.com/) ([Documentation](http://pusher.com/docs)) is a simple hosted API 
for adding realtime bi-directional functionality via WebSockets to web and mobile apps, or 
any other Internet connected device.

---

- [Installation](#installation)
- [Registering the Package](#registering-the-package)
- [Configuration](#Configuration)
- [Usage](#usage)

## Installation

Add Pusherer to your composer.json file:

```
"require": {
	"artdarek/pusherer": "1.0.*"
}
```

Use [composer](http://getcomposer.org) to install this package.

```
$ composer update
```

### Registering the Package

Add the Pusherer Service Provider to your config in ``app/config/app.php``:

```php
'providers' => array(
	'Artdarek\Pusherer\PushererServiceProvider'
),
```

### Configuration

Run on the command line from the root of your project:

```
$ php artisan config:publish artdarek/pusherer
```

Set your pusher.com credentials in ``app/config/packages/artdarek/pusherer/config.php``

```php
return array( 

	/**
	 * App id
	 */
	'app_id' => '', 

	/**
	 * App key
	 */
	'key' => '',

	/**
	 * App Secret
	 */
	'secret' => ''	

);
```

If you have not a Pusher account, just [sign up](https://app.pusherapp.com/accounts/sign_up) to get 
your API key, App Id and Secret.


### Usage

```php
/**
 * Add notification
 *
 * @return Void
 */
public function index() {

	// Send notification to Pusher
	$message = "This is just an example message!";
	Pusherer::trigger('my-channel', 'my-event', array( 'message' => $message ));
	
}
```
