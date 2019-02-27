<?php

use App\Model;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(Model\JobTypes::class, 3)->create();
		factory(Model\Job::class, 10)->create();

		$jobtypes = Model\JobTypes::find(1);
		$jobtypes->jobs()->attach([1, 2]);

		$jobtypes = Model\JobTypes::find(2);
		$jobtypes->jobs()->attach(3);
	}
}
