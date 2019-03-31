<?php

namespace Werxe\Laravel\CollectionMacros\Tests;

use ReflectionClass;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Werxe\Laravel\CollectionMacros\CollectionMacrosServiceProvider;

abstract class TestCase extends BaseTestCase
{
    /**
     * This method is called before each test.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $provider = new ReflectionClass(CollectionMacrosServiceProvider::class);

        $provider->newInstanceWithoutConstructor()->register();
    }
}
