<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobTypes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('job_types', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->string('slug');
			$table->timestamps();
		});

		Schema::create('job_jobtype', function (Blueprint $table) {
			$table->integer('job_id');
			$table->integer('jobtype_id');

			$table->primary(['job_id', 'jobtype_id']);
		});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('job_types');
		Schema::dropIfExists('job_jobtype');
	}
}
