# Pusherer - Laravel 4 Service Provider

---

Pusherer is a simple Pusher.com service provider for Laravel 4.

---

## Installation

Add Pusherer to your composer.json file:

```
"require": {
	"artdarek/pusherer": "dev-master"
}
```

Now, run a composer update on the command line from the root of your project:

    composer update

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
php artisan config:publish artdarek/pusherer
```

Set your pusher.com credentials in ``app/config/packages/artdarek/pusherer/config.php``
