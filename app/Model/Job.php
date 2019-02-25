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
		$LanguageById = Cache::remember('languages-by-id', 5, function () {
			return Language::all()->keyBy('id');
		});

		$value = [];
		if ($this->languages) {
			foreach( $this->languages as $langId ) {
				if( isset( $LanguageById[$langId] ) )
					$value[] = $LanguageById[$langId]->name;
			}
		}

		return implode( ', ', $value );
	}
}
