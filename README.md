# This is my package my-first-filamentphp-package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/baleethai/my-first-filamentphp-package.svg?style=flat-square)](https://packagist.org/packages/baleethai/my-first-filamentphp-package)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/baleethai/my-first-filamentphp-package/run-tests?label=tests)](https://github.com/baleethai/my-first-filamentphp-package/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/baleethai/my-first-filamentphp-package/Check%20&%20fix%20styling?label=code%20style)](https://github.com/baleethai/my-first-filamentphp-package/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/baleethai/my-first-filamentphp-package.svg?style=flat-square)](https://packagist.org/packages/baleethai/my-first-filamentphp-package)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require baleethai/my-first-filamentphp-package
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="my-first-filamentphp-package-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="my-first-filamentphp-package-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="my-first-filamentphp-package-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$my-first-filamentphp-package = new Baleethai\MyFirstFilamentphpPackage();
echo $my-first-filamentphp-package->echoPhrase('Hello, Baleethai!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Thinnakorn Pattha](https://github.com/baleethai)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
