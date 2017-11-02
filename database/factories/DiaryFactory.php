<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Diary::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class)->create()->id,
        'diaries_paragraph' => $faker->paragraph(),
        'created_date' => $faker->date,
    ];
});
