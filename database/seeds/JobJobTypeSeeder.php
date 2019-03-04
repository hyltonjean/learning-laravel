<?php

use App\Model;
use Illuminate\Database\Seeder;

class JobJobTypeSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		$jobIds = DB::table('jobs')->inRandomOrder()->limit(rand(1,3))->get()->pluck('id');
		$typesIds = DB::table('job_types')->inRandomOrder()->limit(rand(1,3))->get()->pluck('id');

		DB::table('job_job_type')->insert(
			[
				'job_id' => $jobIds,
				'Job_type_id' => $typesIds
			]
		);
	}
}
