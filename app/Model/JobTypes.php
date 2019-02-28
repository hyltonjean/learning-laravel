<?php

namespace App\Model;

use Cubitworx\Laravel\Languages\Model\Language;
use Illuminate\Database\Eloquent\Model as TypeClass;

class JobTypes extends TypeClass {
	public function jobs() {
		return $this->belongsToMany(Job::class, 'job_jobtype', 'jobtype_id', 'job_id');
	}
}
