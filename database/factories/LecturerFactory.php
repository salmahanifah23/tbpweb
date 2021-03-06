<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lecturer;
use Faker\Generator as Faker;

$factory->define(App\Models\Lecturer::class, function (Faker $faker) {

    $user = factory(App\Models\User::class)->create(['type' => \App\Models\User::LECTURER]);
    $user->assignRole(config('central.system_roles')['lecturer']);

    return [
        'id' => $user->id,
        'nip' => $user->username,
        'nik' => $faker->numerify('#############'),
        'name' => $faker->name,
        'nidn' => $faker->numerify('##########'),
        'birthday' => $faker->date(),
        'birthplace' => $faker->city,
        'phone' => $faker->phoneNumber,
    ];
});
