<?php

namespace Werxe\Laravel\CollectionMacros\Tests\Macros;

use Illuminate\Support\Collection;
use Werxe\Laravel\CollectionMacros\Tests\TestCase;

class KsortTest extends TestCase
{
    /** @test */
    public function it_can_sort_the_collection_by_its_keys()
    {
        $original = [
            'd' => 'lemon', 'a' => 'orange', 'b' => 'banana', 'c' => 'apple',
        ];

        $expected = [
            'a' => 'orange', 'b' => 'banana', 'c' => 'apple', 'd' => 'lemon',
        ];

        $data = new Collection($original);

        $this->assertSame($original, $data->toArray());
        $this->assertSame($expected, $data->ksort()->toArray());
    }
}
