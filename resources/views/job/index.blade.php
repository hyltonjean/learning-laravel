<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Laravel</title>
<style>
	ul{
		padding:0;
		margin:0;
	}

	li{
		color: #333;
		font-size: 20px;
		margin-bottom: 5px;
	}

	a{
		list-style-type:none;
		text-decoration:none;
	}
</style>
</head>
<body>
	<h1>Welcome to Jobs</h1>
		<ul>
			@foreach ($jobs as $job)
			<a href="/jobs/{{ $job->url }}"><li>{{ $job->title }}</li></a>
			<span>{{ $job->created_at->diffForHumans() }}</span>
			@endforeach
		</ul>
</body>
</html>
