# Laravel Hetzner Dns

[![Latest Version on Packagist](https://img.shields.io/packagist/v/samuelnitsche/laravel-hetzner-dns.svg?style=flat-square)](https://packagist.org/packages/samuelnitsche/laravel-hetzner-dns)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/samuelnitsche/laravel-hetzner-dns/run-tests?label=tests)](https://github.com/samuelnitsche/laravel-hetzner-dns/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/samuelnitsche/laravel-hetzner-dns.svg?style=flat-square)](https://packagist.org/packages/samuelnitsche/laravel-hetzner-dns)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require samuelnitsche/laravel-hetzner-dns
```

You can publish and run the migrations with:

You can publish the config file with:
```bash
php artisan vendor:publish --provider="SamuelNitsche\LaravelHetznerDns\LaravelHetznerDnsServiceProvider" --tag="config"
```

## Usage

``` php
$client = new Client();

$client->getAllRecords();
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email mail@samynitsche.de instead of using the issue tracker.

## Credits

- [Samuel Nitsche](https://github.com/samuelnitsche)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
