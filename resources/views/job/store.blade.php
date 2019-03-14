<?php
use Illuminate\Support\Facades\Input;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Data</title>
</head>
<body>
	<h2>Inputs</h2>
		First Name:	{{ Input::get('firstName') }}
	<br>
		Last Name: {{ Input::get('lastName') }}
	<br>
	 Date of Birth: {{ Input::get('dateOfBirth') }}
	<br>
	 Nationality: {{ Input::get('nationality') }}
	<br>
		Email: {{ Input::get('email') }}
	<br>
	 Telephone: {{ Input::get('telephone') }}
	<br>
	 Message: {{ Input::get('message') }}
	<br>
	 Checkbox: {{ Input::get('checkbox') }}
	<br>
</body>
</html>