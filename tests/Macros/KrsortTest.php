<?php

declare(strict_types = 1);

namespace Werxe\Laravel\CollectionMacros\Tests\Macros;

use Illuminate\Support\Collection;
use Werxe\Laravel\CollectionMacros\Tests\TestCase;

class KrsortTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_sort_the_collection_in_reverse_order_by_its_keys()
    {
        $original = [
            'd' => 'lemon', 'a' => 'orange', 'b' => 'banana', 'c' => 'apple',
        ];

        $expected = [
            'd' => 'lemon', 'c' => 'apple', 'b' => 'banana',  'a' => 'orange',
        ];

        $data = new Collection($original);

        $this->assertSame($original, $data->toArray());
        $this->assertSame($expected, $data->krsort()->toArray());
    }
}
