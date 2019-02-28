<?php

use App\Model;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Job Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Model\JobTypes::class, function(Faker $faker) {
	$val = $faker->sentence(3);

	return [
		'name' => $val,
		'slug' => str_slug($val)
	];
});
