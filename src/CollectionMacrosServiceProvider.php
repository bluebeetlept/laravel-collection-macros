<?php

namespace Werxe\Laravel\CollectionMacros;

use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class CollectionMacrosServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $macros = glob(__DIR__.'/Macros/*.php');

        foreach ($macros as $macroPath) {
            $macro = Str::camel(pathinfo($macroPath, PATHINFO_FILENAME));

            if (! Collection::hasMacro($macro)) {
                $class = "Werxe\\Laravel\\CollectionMacros\\Macros\\{$macro}";

                Collection::macro($macro, app($class)());
            }
        }
    }
}
