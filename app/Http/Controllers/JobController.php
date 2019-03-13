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

	public function store(Request $request) {

		$validatedData = $request->validate([
			'firstName' => 'required|max:100',
			'lastName' => 'required|max:100',
			'dateOfBirth' => 'required|max:25',
			'nationality' => 'required|max:50',
			'email' => 'required|email',
			'telephone' => 'required|max:25',
			'message' => 'required|max:200',
			'checkbox' => 'required'
	]);
	dd($validatedData->all());
	}
}
