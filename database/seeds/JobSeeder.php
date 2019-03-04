<?php

use App\Model;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
<<<<<<< HEAD
	public function run() {
		factory(Model\Job::class, 100)->create();
=======
	public function run()
	{
			factory(Model\Job::class, 10)->create();
<<<<<<< HEAD
>>>>>>> parent of 4e6fb25... feat: reviewing Phase 5 of project for completion
=======
>>>>>>> parent of 4e6fb25... feat: reviewing Phase 5 of project for completion
	}
}
