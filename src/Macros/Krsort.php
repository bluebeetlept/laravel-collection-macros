<?php

namespace Werxe\Laravel\CollectionMacros\Macros;

use Illuminate\Support\Collection;

class Krsort
{
    public function __invoke()
    {
        return function () {
            krsort($this->items);

            return new Collection($this->items);
        };
    }
}
