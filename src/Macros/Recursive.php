<?php

declare(strict_types = 1);

namespace Werxe\Laravel\CollectionMacros\Macros;

use Illuminate\Support\Collection;

class Recursive
{
    public function __invoke()
    {
        return function () {
            return $this->map(static function ($value) {
                if (is_array($value) || is_object($value)) {
                    return (new Collection($value))->recursive();
                }

                return $value;
            });
        };
    }
}
