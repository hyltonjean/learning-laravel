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

	public function job_type() {
		return $this->belongsToMany(JobType::class);
	}

	public function getJobTypeCsvAttribute() {
		// return JobType::whereIn('id', $this->id)->pluck('name')->implode(', ');
	}
}
