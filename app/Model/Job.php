<?php

namespace App\Model;
use App\Support\Convert;

use Illuminate\Database\Eloquent\Model as BaseClass;

class Job extends BaseClass {

	protected $casts = [
		'languages' => 'array'
	];

	public function getLanguagesCsvAttribute() {
		return $this->languages . '_csv';
	}
}
