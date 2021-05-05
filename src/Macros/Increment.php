<?php

declare(strict_types = 1);

namespace Werxe\Laravel\CollectionMacros\Macros;

use Illuminate\Support\Arr;

class Increment
{
    public function __invoke()
    {
        return function ($key, $amount) {
            if (Arr::has($this->items, $key)) {
                $amount += Arr::get($this->items, $key);
            }

            Arr::set($this->items, $key, $amount);

            return $this;
        };
    }
}
