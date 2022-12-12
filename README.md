# Laravel Analytics

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lancodev/laravel-analytics.svg?style=flat-square)](https://packagist.org/packages/lancodev/laravel-analytics)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lancodev/laravel-analytics/run-tests?label=tests)](https://github.com/lancodev/laravel-analytics/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lancodev/laravel-analytics/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/lancodev/laravel-analytics/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lancodev/laravel-analytics.svg?style=flat-square)](https://packagist.org/packages/lancodev/laravel-analytics)

This package provides a simple way to capture site analytics within your existing Laravel application.

## Installation

You can install the package via composer:

```bash
composer require lancodev/laravel-analytics
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-analytics-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-analytics-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-analytics-views"
```

## Usage

```php
$laravelAnalytics = new Lancodev\LaravelAnalytics();
echo $laravelAnalytics->echoPhrase('Hello, Lancodev!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Kyle Anderson](https://github.com/lancodev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
