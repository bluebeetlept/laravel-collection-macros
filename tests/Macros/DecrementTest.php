<?php

namespace Werxe\Laravel\CollectionMacros\Tests\Macros;

use Illuminate\Support\Collection;
use Werxe\Laravel\CollectionMacros\Tests\TestCase;

class DecrementTest extends TestCase
{
    /** @test */
    public function it_can_decrement_numeric_values_inside_collections()
    {
        $data = new Collection([
            'amount' => 10,
        ]);

        $this->assertSame(10, $data->get('amount'));

        $this->assertSame(9, $data->decrement('amount', 1)->get('amount'));
        $this->assertSame(9, $data->get('amount'));

        $this->assertSame(10, $data->decrement('amount', -1)->get('amount'));
        $this->assertSame(10, $data->get('amount'));
    }
}
