<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->sentence(2,false),
        'code'=>$faker->randomNumber(4,false),
        'enum'=>$faker->randomDigit
    ];
});
