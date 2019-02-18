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
        factory(Model\Jobs::class, 10)->create();
    }
}
