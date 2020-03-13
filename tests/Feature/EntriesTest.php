<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Entry;
use App\Form;

class EntriesTest extends TestCase
{
    use RefreshDatabase;

    public function testAEntryCanBeCreated()
    {
        $entry = factory(Entry::class)->create();
        $this->assertCount(1, Entry::all());
        $this->assertInstanceOf(Form::class, $entry->form);
        $this->assertCount(1, Form::first()->entries);
    }
}
