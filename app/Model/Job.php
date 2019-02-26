<?php

namespace App\Model;

use Illuminate\Support\Facades\Cache;
use Cubitworx\Laravel\Languages\Model\Language;
use Illuminate\Database\Eloquent\Model as BaseClass;

class Job extends BaseClass {

	protected $casts = [
		'languages' => 'array'
	];

	public function getLanguagesCsvAttribute() {
		$value = Language::all();
		return $value->whereIn('id', $this->languages)->pluck('name')->implode(', ');
	}
}
