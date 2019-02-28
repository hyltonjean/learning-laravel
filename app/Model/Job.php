<?php

namespace App\Model;

use Cubitworx\Laravel\Languages\Model\Language;
use Illuminate\Database\Eloquent\Model as BaseClass;

class Job extends BaseClass {

	protected $casts = [
		'languages' => 'array'
	];

	public function job_types() {
		return $this->belongsToMany(JobTypes::class);
	}

	public function getLanguagesCsvAttribute() {
		return Language::whereIn('id', $this->languages)->pluck('name')->implode(', ');
	}
}
