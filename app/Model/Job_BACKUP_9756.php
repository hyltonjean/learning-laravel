<?php

namespace App\Model;

use Cubitworx\Laravel\Languages\Model\Language;
use Illuminate\Database\Eloquent\Model as BaseClass;

class Job extends BaseClass {

	protected $casts = [
		'languages' => 'array'
	];

	public function getLanguagesCsvAttribute() {
		return Language::whereIn('id', $this->languages)->pluck('name')->implode(', ');
	}
<<<<<<< HEAD

	public function job_types() {
		return $this->belongsToMany('Model\JobType', 'job_job_type', 'job_id', 'job_type_id');
	}

	//  public function getJobTypesCsvAttribute() {

	//  }
=======
>>>>>>> parent of 4e6fb25... feat: reviewing Phase 5 of project for completion
}
