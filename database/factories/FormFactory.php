<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Form;
use App\User;
use Faker\Generator as Faker;

$factory->define(Form::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'user_id' => factory(User::class)->create()->id
    ];
});
