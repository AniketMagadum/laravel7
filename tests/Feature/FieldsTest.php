<?php

namespace Tests\Feature;

use App\Field;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FieldsTest extends TestCase
{
    use RefreshDatabase;

    public function testAFieldCanBeCreated()
    {
        $field = factory(Field::class)->create();
        $this->assertCount(1, Field::all());
    }
}
