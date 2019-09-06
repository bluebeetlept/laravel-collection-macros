<?php

namespace Werxe\Laravel\CollectionMacros;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class CollectionMacrosServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // Publish config
            $this->publishes([
                realpath(__DIR__.'/../config/collection-macros.php') => config_path('werxe/collection-macros/config.php'),
            ], 'werxe:collection-macros.config');
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            realpath(__DIR__.'/../config/collection-macros.php'), 'werxe.collection-macros.config'
        );

        $macros = $this->app['config']->get('werxe.collection-macros.config');

        foreach ($macros as $macro => $class) {
            if (! Collection::hasMacro($macro)) {
                Collection::macro($macro, app($class)());
            }
        }
    }
}
