<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entry;
use App\Form;
use Faker\Generator as Faker;

$factory->define(Entry::class, function (Faker $faker) {
    return [
        'form_id' => factory(Form::class)->create()->id,
        'values' => [
            'first_name' => 'Aniket',
            'last_name' => 'Magadum'
        ]
    ];
});
