<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Solicitud::class, function (Faker $faker) {
    return [
        'valija_id' => $faker->randomNumber(3),
        'lote_id' => $faker->randomNumber(2),
        'delegacion_id' => $faker->randomNumber(2),
        'subdelegacion_id' => $faker->randomNumber(1),
        'user_id' => $faker->randomNumber(2),
        'movimiento_id' => $faker->randomElement(array(1,2,3)),
        'gpo_actual_id' => $faker->randomNumber(3),
        'gpo_nuevo_id' => $faker->randomNumber(3),
        'causa_rechazo_id' => $faker->randomNumber(1),
        'fecha_solicitud' => $faker->date(),
        'nombre' => strtoupper(trim($faker->firstName)),
        'primer_apellido' => strtoupper($faker->lastName),
        'segundo_apellido' => strtoupper($faker->lastName),
        'matricula' => $faker->randomNumber(8),
        'curp' => strtoupper(trim($faker->randomLetter . $faker->randomLetter . $faker->randomLetter . $faker->randomLetter)),
        'usuario' => strtoupper(trim($faker->randomLetter . $faker->randomElement(array('A','E','I','O','U')) . $faker->randomLetter . $faker->randomLetter . $faker->randomNumber(3))),
        'comentario' => $faker->realText(random_int(10, 191)),
        'archivo' => $faker->realText(random_int(10, 14)),
    ];
});
