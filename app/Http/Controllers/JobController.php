<?php

namespace App\Http\Controllers;

use App\Model\Job;
use Cubitworx\Laravel\Cms\Core\Support\Page;
use Illuminate\Http\Request;

class JobController extends Controller {

	public function list(Request $request) {
		$jobs = Job::where('status', 'Published')->get();
		return view('job.index', ['jobs' => $jobs]);
	}

	public function show(Request $request, $url) {
		$job = Job::where('url', $url)->firstOrFail();
		return view('job.details', ['job' => $job]);
	}
}
