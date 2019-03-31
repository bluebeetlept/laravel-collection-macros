<?php

namespace Werxe\Laravel\CollectionMacros\Macros;

use Illuminate\Support\Arr;

class Decrement
{
    public function __invoke()
    {
        return function ($key, $amount) {
            if (Arr::has($this->items, $key)) {
                $amount = Arr::get($this->items, $key) - $amount;
            }

            Arr::set($this->items, $key, $amount);

            return $this;
        };
    }
}
