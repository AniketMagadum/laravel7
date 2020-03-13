<?php

namespace Tests\Feature;

use App\Form;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FormsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAFormCanBeCreated()
    {
        $form = factory(Form::class)->create();
        $this->assertCount(1, Form::all());
        $this->assertInstanceOf(User::class, $form->user);
    }
}
