<?php

declare(strict_types = 1);

namespace Werxe\Laravel\CollectionMacros\Macros;

use Illuminate\Support\Collection;

class Ksort
{
    public function __invoke()
    {
        return function () {
            ksort($this->items);

            return new Collection($this->items);
        };
    }
}
