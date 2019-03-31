<?php

namespace Werxe\Laravel\CollectionMacros\Tests\Macros;

use Illuminate\Support\Collection;
use Werxe\Laravel\CollectionMacros\Tests\TestCase;

class RecursiveTest extends TestCase
{
    /** @test */
    public function it_can_recursively_treat_nested_arrays_as_collections()
    {
        $data = (new Collection([
            'name'   => 'John Doe',
            'emails' => [
                'john@doe.com',
                'john.doe@example.com',
            ],
            'contacts' => [
                [
                    'name'   => 'Richard Tea',
                    'emails' => [
                        'richard.tea@example.com',
                    ],
                ],
                [
                    'name'   => 'Fergus Douchebag', // Ya, this was randomly generated for me :)
                    'emails' => [
                        'fergus@douchebag.com',
                    ],
                ],
            ],
        ]))->recursive();

        $this->assertInstanceOf(Collection::class, $data['emails']);
        $this->assertInstanceOf(Collection::class, $data['contacts']);
        $this->assertInstanceOf(Collection::class, $data['contacts'][0]);
        $this->assertInstanceOf(Collection::class, $data['contacts'][1]);
        $this->assertInstanceOf(Collection::class, $data['contacts']->first());
        $this->assertInstanceOf(Collection::class, $data['contacts']->last());

        $this->assertSame('john@doe.com', $data['emails'][0]);
        $this->assertSame('john@doe.com', $data['emails']->first());
        $this->assertSame('john@doe.com', $data->get('emails')[0]);
        $this->assertSame('john@doe.com', $data->get('emails')->first());

        $this->assertSame('john.doe@example.com', $data['emails'][1]);
        $this->assertSame('john.doe@example.com', $data['emails']->last());
        $this->assertSame('john.doe@example.com', $data->get('emails')[1]);
        $this->assertSame('john.doe@example.com', $data->get('emails')->last());

        $this->assertSame('Richard Tea', $data['contacts'][0]['name']);
        $this->assertSame('Richard Tea', $data['contacts'][0]->get('name'));
        $this->assertSame('Richard Tea', $data['contacts']->first()['name']);
        $this->assertSame('Richard Tea', $data['contacts']->first()->get('name'));
    }
}
