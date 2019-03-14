<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller {

	public function home(Request $request) {
		return view('layouts.home');
	}
}
