<?php

namespace App\Http\Controllers;

use Cubitworx\Laravel\Cms\Core\Support\Page;
use Illuminate\Http\Request;

class JobController extends Controller {

	public function list(Request $request) {
		$jobs = [
			['title' => 'Title One'],
			['title' => 'Title Two']
		];

		foreach ($jobs as &$job)
			$job['url'] = '/jobs/' . str_slug($job['title']);

		return view('job.index', ['jobs' => $jobs]);
	}

}

/*
// PHP
$job->key; // object
$job['key']; // array (string as key)

$title = 'key';
$job[$title]; // array (variable as key)

$nestedArray = [
	'level-1-1' => [
		'level-2-1' => 1,
		'level-2-2' => 2,
		'level-2-3' => 3,
	],
	'level-1-2' => [
		'level-2-4' => 4,
		'level-2-5' => 5,
		'level-2-6' => 6,
	],
	'level-1-3' => [
		'level-2-7' => 7,
		'level-2-8' => 8,
		'level-2-9' => 9,
	],
];

$nestedArray['level-1-1']['level-2-1'] = 1;
$nestedArray['level-1-3']['level-2-8'] = 8;
*/
