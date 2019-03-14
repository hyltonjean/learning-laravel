<?php

namespace App\Http\Controllers;

use App\Model\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

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

	public function store(Request $request) {

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
		return view('job.store');
	}

	public function mail(Request $request) {

		$user = Input::get('firstName');
		$key = env('MAIL_TO_ADDRESS');

		$userMail = Mail::to($key);
		$consultantMail = Mail::to(Input::get('email'));
   	return 'Emails are queued';
	}

	public function thanks(Request $request, $url) {

		$job = Job::where('url', $url)->firstOrFail();
		$userMail->queue(new SendMailable($user));
		$consultantMail->queue(new SendMailable($key));
		return view('job.thank-you', ['job' => $job]);
	}
}
