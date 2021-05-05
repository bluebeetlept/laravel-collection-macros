<?php

declare(strict_types = 1);

namespace Werxe\Laravel\CollectionMacros\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Werxe\Laravel\CollectionMacros\CollectionMacrosServiceProvider;

abstract class TestCase extends OrchestraTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function getPackageProviders($app)
    {
        return [
            CollectionMacrosServiceProvider::class,
        ];
    }
}
