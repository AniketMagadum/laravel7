<?php

namespace Tests\Feature;

use App\Field;
use App\Form;
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

    public function testFieldsCanBeAssociatedToForms()
    {
        $field = factory(Field::class)->create();
        $form = factory(Form::class)->create();
        $form->fields()->save($field);
        $this->assertCount(1, $form->fields);
    }
}
