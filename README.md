## Laravel Collection Macros

[![Build Status][icon-travis]][link-travis]
[![Software License][icon-license]][link-license]
[![Latest Version on Packagist][icon-version]][link-packagist]
[![Total Downloads][icon-downloads]][link-packagist]

Custom Laravel Collection Macros for Laravel 7+.

This package is compliant with the FIG standards [PSR-1][link-psr-1], [PSR-2][link-psr-2] and [PSR-4][link-psr-4] to ensure a high level of interoperability between shared PHP. If you notice any compliance oversights, please send a patch via pull request.

## Version Matrix

Version | Laravel | PHP Version
------- | ------- | ------------
4.x     | 7.x     | >= 7.2.5
3.x     | 6.x     | >= 7.2
2.x     | 5.8.x   | >= 7.1.3
1.x     | 5.7.x   | >= 7.1.3

## Getting Started

Install the package via [Composer](https://getcomposer.org/) by running:

```
composer require werxe/laravel-collection-macros
```

By default all macros are enabled and the macro name is the lower cased version of the macro class.

If you want to customize which macros are enabled or just rename the macro name, you can do so by publishing the configuration file, by running:

```
php artisan vendor:publish --tag="werxe:collection-macros.config"
```

The configuration file is now published at `config/werxe/collection-macros/config.php`.

## Documentation

### Available Macros

- [`increment`](#increment)
- [`decrement`](#decrement)
- [`ksort`](#ksort)
- [`krsort`](#krsort)
- [`recursive`](#recursive)

### `increment`

Increment a value that's inside a Collection

```php
$collection = collect([
    'total' => 1,
]);

$collection->increment('total', 2); // 3
```

### `decrement`

Decrement a value that's inside a Collection

```php
$collection = collect([
    'total' => 3,
]);

$collection->decrement('total', 2); // 1
```

### `ksort`

Sorts the Collection by its keys.

```php
$collection = collect(['d' => 'lemon', 'a' => 'orange', 'b' => 'banana', 'c' => 'apple']);

$collection->ksort(); // ['a' => 'orange', 'b' => 'banana', 'c' => 'apple', 'd' => 'lemon']
```

### `krsort`

Sorts the Collection by its keys in the reverse order

```php
$collection = collect(['d' => 'lemon', 'a' => 'orange', 'b' => 'banana', 'c' => 'apple']);

$collection->krsort(); // ['d' => 'lemon', 'c' => 'apple', 'b' => 'banana', 'a' => 'orange']
```

### `recursive`

Recursively convert nested arrays into Laravel Collections.

```php
$collection = collect([
    'name' => 'John Doe',
    'emails' => [
        'john@doe.com',
        'john.doe@example.com',
    ],
    'contacts' => [
        [
            'name' => 'Richard Tea',
            'emails' => [
                'richard.tea@example.com',
            ],
        ],
    ],
]);

// Convert the nested arrays into Collections
$convertedCollection = $collection->recursive();

// Get the contacts as a Collection
$contacts = $convertedCollection->get('contacts');
```

## Contributing

Thank you for your interest in Laravel Collection Macros. Here are some of the many ways to contribute.

- Check out our [contributing guide](/.github/CONTRIBUTING.md)
- Look at our [code of conduct](/.github/CODE_OF_CONDUCT.md)

## Security

If you discover any security related issues, please email security@werxe.com instead of using the issue tracker.

## License

Laravel Collection Macros is licenced under the MIT License (MIT). Please see the [license file](LICENSE) for more information.

[link-psr-1]:     http://www.php-fig.org/psr/psr-1/
[link-psr-2]:     http://www.php-fig.org/psr/psr-2/
[link-psr-4]:     http://www.php-fig.org/psr/psr-4/
[link-travis]:    https://travis-ci.org/werxe/laravel-collection-macros
[link-license]:   https://opensource.org/licenses/MIT
[link-packagist]: https://packagist.org/packages/werxe/laravel-collection-macros

[icon-travis]:    https://travis-ci.org/werxe/laravel-collection-macros.svg?branch=4.x
[icon-license]:   https://poser.pugx.org/werxe/laravel-collection-macros/license
[icon-version]:   https://poser.pugx.org/werxe/laravel-collection-macros/version
[icon-downloads]: https://poser.pugx.org/werxe/laravel-collection-macros/downloads
