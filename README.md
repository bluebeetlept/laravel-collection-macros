## Laravel Collection Macros

[![Build Status][icon-travis]][link-travis]
[![Software License][icon-license]][link-license]
[![Latest Version on Packagist][icon-version]][link-packagist]
[![Total Downloads][icon-downloads]][link-packagist]

Custom Laravel Collection Macros for Laravel 5.7.

This package is compliant with the FIG standards [PSR-1][link-psr-1], [PSR-2][link-psr-2] and [PSR-4][link-psr-4] to ensure a high level of interoperability between shared PHP. If you notice any compliance oversights, please send a patch via pull request.

## Version Matrix

Version | Laravel | PHP Version
------- | ------- | ------------
1.x     | 5.7.x   | >= 7.1.3

## Available Macros

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

## Change Log

Please refer to the [Change Log](CHANGELOG.md) for a full history of the project.

## Contributing & Protocols

- [Etiquette](/.github/CONTRIBUTING.md#etiquette)
- [Versioning](/.github/CONTRIBUTING.md#versioning)
- [Coding Standards](/.github/CONTRIBUTING.md#coding-standards)
- [Issues \ Bugs](/.github/CONTRIBUTING.md#issues--bugs)
- [Pull Requests](/.github/CONTRIBUTING.md#pull-requests)
- [Proposals](/.github/CONTRIBUTING.md#proposals)
- [Testing](/.github/CONTRIBUTING.md#running-tests)

## Security

If you discover any security related issues, please email hello@werxe.com instead of using the issue tracker.

## License

`werxe/laravel-collection-macros` is licenced under the MIT License (MIT). Please see the [license file](LICENSE) for more information.

[link-psr-1]:     http://www.php-fig.org/psr/psr-1/
[link-psr-2]:     http://www.php-fig.org/psr/psr-2/
[link-psr-4]:     http://www.php-fig.org/psr/psr-4/
[link-travis]:    https://travis-ci.org/werxe/laravel-collection-macros
[link-license]:   https://opensource.org/licenses/MIT
[link-packagist]: https://packagist.org/packages/werxe/laravel-collection-macros

[icon-travis]:    https://img.shields.io/travis/werxe/laravel-collection-macros.svg?style=flat-square&label=Travis%20CI
[icon-license]:   https://img.shields.io/packagist/l/werxe/laravel-collection-macros.svg?style=flat-square&label=License
[icon-version]:   https://img.shields.io/packagist/v/werxe/laravel-collection-macros.svg?style=flat-square&label=Version
[icon-downloads]: https://img.shields.io/packagist/dt/werxe/laravel-collection-macros.svg?style=flat-square&label=Downloads
