<?php

namespace App\Model;

use Cubitworx\Laravel\Languages\Model\Language;
use Illuminate\Database\Eloquent\Model as BaseClass;

class Job extends BaseClass {

	protected $casts = [
		'languages' => 'array',
		'job_types' => 'array'
	];

	public function getLanguagesCsvAttribute() {
		return Language::whereIn('id', $this->languages)->pluck('name')->implode(', ');
	}

	public function job_types() {
		return $this->belongsToMany(JobTypes::class, 'job_jobtype', 'job_id', 'jobtype_id');
	}

	public function getJobTypesCsvAttribute() {
		return JobTypes::whereIn('id', $this->job_types)->pluck('name')->implode(', ');
	}
}
