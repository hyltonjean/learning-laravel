<?php

use App\Model;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$jobs = factory(Model\Job::class, 100)->create();
		factory(Model\JobType::class, 30)->create();

		Model\Job::each(function ($job) {
			$jobs = Model\Job::find($job);
			$jobtypes = Model\JobType::inRandomOrder()->limit(rand(1,3))->get();
				$job->job_type()->attach($jobtypes);
		});
	}
}
