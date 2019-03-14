<?php
	use Illuminate\Support\Facades\Input;
?>

@component('mail::message')
<p>Hi {{ Input::get('firstName') }}</p>
<p>Thanks for applying!</p>
@endcomponent
