<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Field;
use App\Form;
use Faker\Generator as Faker;

$factory->define(Field::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'label' => $faker->word,
        'form_id' => factory(Form::class)->create()->id
    ];
});
