# GooTranslate

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Simple wrapper for Google Translate (REST) API. Includes a Laravel 5 Service Provider and Facade.

## Install

Via Composer

``` bash
$ composer require jcorry/gootranslate
```
Or
    require : {
        "jcorry/gootranslate": "dev-master"
    }
    
Add your Google API key to .env
    
    GOOGLE_API_KEY=YOUR-KEY-VALUE-HERE
    
Add provider to your app/config/app.php providers:
    
    Jcorry\GooTranslate\GooTranslateServiceProvider::class

Optional (recommended)
======================

Add alias to app/config/app.php to use facade

    'GooTranslate' => jcorry\GooTranslate\GooTranslateFacade::class

## Usage

List available languages...

    GooTranslate::languages();
    
Translate

    GooTranslate::translate('

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email jcorry@gmail.com instead of using the issue tracker.

## Credits

- [John Corry][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/jcorry/GooTranslate.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/jcorry/GooTranslate/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/jcorry/GooTranslate.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/jcorry/GooTranslate.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/jcorry/GooTranslate.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/jcorry/GooTranslate
[link-travis]: https://travis-ci.org/jcorry/GooTranslate
[link-scrutinizer]: https://scrutinizer-ci.com/g/jcorry/GooTranslate/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/jcorry/GooTranslate
[link-downloads]: https://packagist.org/packages/jcorry/GooTranslate
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors
