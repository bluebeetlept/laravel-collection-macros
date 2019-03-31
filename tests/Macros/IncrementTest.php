<?php

namespace Werxe\Laravel\CollectionMacros\Tests\Macros;

use Illuminate\Support\Collection;
use Werxe\Laravel\CollectionMacros\Tests\TestCase;

class IncrementTest extends TestCase
{
    /** @test */
    public function it_can_increment_numeric_values_inside_collections()
    {
        $data = new Collection([
            'amount' => 0,
        ]);

        $this->assertSame(0, $data->get('amount'));

        $this->assertSame(1, $data->increment('amount', 1)->get('amount'));
        $this->assertSame(1, $data->get('amount'));

        $this->assertSame(0, $data->increment('amount', -1)->get('amount'));
        $this->assertSame(0, $data->get('amount'));
    }
}
