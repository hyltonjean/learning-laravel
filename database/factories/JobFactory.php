<?php

use App\Model\Job;
use Faker\Generator as Faker;
use Cubitworx\Laravel\Languages\Model;
use Illuminate\Support\Facades\DB;

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

$factory->define(Job::class, function(Faker $faker) {
	$title = $faker->sentence(10);
	$status = $faker->randomElement(['Published', 'Unpublished']);
	$languages = DB::table('languages')->select('id')->find(1);

	return [
		'title' => $title,
		'url' => str_slug($title),
		'status' => $status,
		'languages' => $languages
	];
});
