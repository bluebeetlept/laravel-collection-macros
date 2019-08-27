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
            $macroClass = pathinfo($macroPath, PATHINFO_FILENAME);

            $macroName = Str::camel($macroClass);

            if (! Collection::hasMacro($macroName)) {
                $class = "Werxe\\Laravel\\CollectionMacros\\Macros\\{$macroClass}";

                Collection::macro($macroName, app($class)());
            }
        }
    }
}
