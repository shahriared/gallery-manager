

# Zoho all in one for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/shahriared/zoho-v3.svg?style=flat-square)](https://packagist.org/packages/shahriared/zoho-v3)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/shahriared/zoho-v3/run-tests?label=tests)](https://github.com/shahriared/zoho-v3/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/shahriared/zoho-v3/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/shahriared/zoho-v3/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/shahriared/zoho-v3.svg?style=flat-square)](https://packagist.org/packages/shahriared/zoho-v3)

Laravel Package for integration ZOHO version 3 API.

## Installation

You can install the package via composer:

```bash
composer require shahriared/zoho-v3
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="zoho-v3-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="zoho-v3-config"
```

This is the contents of the published config file:

```php
return [
];
```

<!-- ## Usage

```php
$GalleryManager = new Shahriared\GalleryManager();
echo $GalleryManager->echoPhrase('Hello, Shahriared!');
``` -->

<!-- ## Testing

```bash
composer test
``` -->

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mohammad Sadegh Maleki](https://github.com/shahriared)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
