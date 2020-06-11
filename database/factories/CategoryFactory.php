<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        //
        'name' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text(500),
    ];
});
