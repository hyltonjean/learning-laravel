<?php

namespace App\Http\Controllers;

use App\Model\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\SendMailable;
use App\Mail\SendInfoMail;

class JobController extends Controller {

	public function list(Request $request) {
		$jobs = Job::where('status', 'Published')->get();
		return view('job.index', ['jobs' => $jobs]);
	}

	public function show(Request $request, $url) {
		$job = Job::where('url', $url)->firstOrFail();
		return view('job.details', ['job' => $job]);
	}

	public function create(Request $request, $url) {
		$job = Job::where('url', $url)->firstOrFail();
		return view('job.apply', ['job' => $job]);
	}

	public function store(Request $request, $url) {
		$job = Job::where('url', $url)->firstOrFail();
		$this->validate($request, [
			'firstName' => 'required|max:100',
			'lastName' => 'required|max:100',
			'dateOfBirth' => 'required|max:25',
			'nationality' => 'required|max:50',
			'email' => 'required|email',
			'telephone' => 'required|max:25',
			'message' => 'required|max:200',
			'checkbox' => 'required'
	]);
		$validatedData = Input::all();
		Log::info('Start');
		Mail::queue(new SendMailable());
		Mail::queue(new SendInfoMail());
		Log::info('End');
		return redirect()->route('job.thanks', ['job' => $job]);
	}

	public function thanks(Request $request) {
		return view('job.thank-you');
	}
}
