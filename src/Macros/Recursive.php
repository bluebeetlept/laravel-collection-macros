<?php

namespace Werxe\Laravel\CollectionMacros\Macros;

use Illuminate\Support\Collection;

class Recursive
{
    public function __invoke()
    {
        return function () {
            return $this->map(function ($value) {
                if (is_array($value) || is_object($value)) {
                    return (new Collection($value))->recursive();
                }

                return $value;
            });
        };
    }
}
