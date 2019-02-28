<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		$seeders = array('JobSeeder', 'JobTypesSeeder', 'JobJobTypeSeeder');
		foreach($seeders as $seeder) {
			$this->call($seeder);
		}
	}
}
