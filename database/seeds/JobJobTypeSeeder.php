<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class JobJobTypeSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(Faker $faker) {
		foreach(range(1, 3) as $index) {
			DB::table('job_job_type')->insert([
				'job_id' => rand(1,10),
				'job_type_id' => $faker->numberBetween(1,3)
			]);
		}
	}
}
