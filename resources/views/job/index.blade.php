<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Laravel</title>
</head>
<body>
	<h1>Welcome to Jobs</h1>
		<ul>
			@foreach ($jobs as $job)
				<a href="{{ $job->url }}"><li>{{ $job->title }}</li></a>
			@endforeach
		</ul>

</body>
</html>
