<?php

use App\Model;
use Illuminate\Database\Seeder;

class JobTypesSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(Model\JobType::class, 3)->create();
	}
}
