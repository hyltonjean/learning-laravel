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

		$jobIds = Model\Job::find('id');
		$typesIds = Model\JobType::inRandomOrder()->limit(rand(1,3))->pluck('id');
dd($typesIds);
	foreach($jobIds as $jobId) {
	$jobId->job_types()->attach($typesIds);
}
		DB::table('job_job_type')->insert(
			[
				'job_id' => $jobIds,
				'Job_type_id' => $typesIds
			]
		);
	}
}
