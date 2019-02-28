<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as TypeClass;

class JobType extends TypeClass {

	public function jobs() {
		$this->belongsToMany(Job::class);
	}
}
