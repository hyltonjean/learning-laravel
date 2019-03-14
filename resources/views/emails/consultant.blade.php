<?php
	use Illuminate\Support\Facades\Input;
?>

@component('mail::message')
		<h2>The client's information is as follows:</h2>
		First Name:	{{ Input::get('firstName') }}

		Last Name: {{ Input::get('lastName') }}

		Date of Birth: {{ Input::get('dateOfBirth') }}

	 	Nationality: {{ Input::get('nationality') }}

		Email: {{ Input::get('email') }}

	 	Telephone: {{ Input::get('telephone') }}

	 	Message: {{ Input::get('message') }}

	 	Checkbox: {{ Input::get('checkbox') }}
@endcomponent
