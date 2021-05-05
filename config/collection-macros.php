<?php

declare(strict_types = 1);

use Werxe\Laravel\CollectionMacros\Macros\Decrement;
use Werxe\Laravel\CollectionMacros\Macros\Increment;
use Werxe\Laravel\CollectionMacros\Macros\Krsort;
use Werxe\Laravel\CollectionMacros\Macros\Ksort;
use Werxe\Laravel\CollectionMacros\Macros\Recursive;

return [
    'increment' => Increment::class,
    'decrement' => Decrement::class,
    'krsort'    => Krsort::class,
    'ksort'     => Ksort::class,
    'recursive' => Recursive::class,
];
