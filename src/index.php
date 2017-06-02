<?php

require __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create();

echo $faker->name;

// class Util {
//     static function hello() {
//         return 'Hello, world';
//     }
// }

// echo Util::hello();