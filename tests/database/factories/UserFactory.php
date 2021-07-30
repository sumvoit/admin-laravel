<?php

$factory->define(\Sumvo\LaravelAdmin\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'    => $faker->name,
        'email'   => $faker->unique()->safeEmail,
        'role_id' => function () {
            return factory(\Sumvo\LaravelAdmin\Models\Role::class)->create()->id;
        },
        'password'       => $password ?: $password = bcrypt('secret'),
        'remember_token' => Illuminate\Support\Str::random(10),
    ];
});
