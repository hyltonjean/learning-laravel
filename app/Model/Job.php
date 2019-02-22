<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as BaseClass;

class Job extends BaseClass {

	protected $casts = [
		'id' => 'array',
	];
}

