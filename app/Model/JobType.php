<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as TypeClass;

class JobType extends TypeClass {

	public function jobs() {
		return $this->belongsToMany('Model\Job', 'job_job_type', 'job_type_id', 'job_id');
	}
}
