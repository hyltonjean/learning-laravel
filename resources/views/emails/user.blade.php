<?php
	use Illuminate\Support\Facades\Input;
	use Illuminate\Support\Facades\Mail;
	use App\Mail\SendMailable;
?>

@component('mail::message')
<p>Hi {{ Input::get('firstName') }}</p>
<p>Thanks for applying!</p>
@endcomponent
