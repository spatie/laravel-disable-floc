
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Automatically disable Google's FLoC in Laravel apps

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/laravel-disable-floc.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-disable-floc)
[![run-tests](https://github.com/spatie/laravel-disable-floc/actions/workflows/run-tests.yml/badge.svg)](https://github.com/spatie/laravel-disable-floc/actions/workflows/run-tests.yml)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/spatie/laravel-disable-floc/Check%20&%20fix%20styling?label=code%20style)](https://github.com/spatie/laravel-disable-floc/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/laravel-disable-floc.svg?style=flat-square)](https://packagist.org/packages/spatie/laravel-disable-floc)

This package will automatically disable [Google's FLoC](https://plausible.io/blog/google-floc).

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-disable-floc.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-disable-floc)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require spatie/laravel-disable-floc
```

## Usage

After you've installed the package via composer, you're done. There's no step two.

This package will automatically register the `DisableFloc` middleware in the web group. The middleware will add a header `Permissions-Policy` that will effectively disable FLoC. This header will be applied to all responses that have no `Permissions-Policy` header. 

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
