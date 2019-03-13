<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Application</title>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-md-3">
				<div class="card">
					<div class="card-header">
						Apply for this job
					</div>
					<div class="card-body">
						<form action="/job/{url}/apply">
							<div class="form-group">
								<label for="firstName">First Name</label>
								<input type="text" name="firstName" class="form-control">
							</div>
							<div class="form-group">
								<label for="lastName">Last Name</label>
								<input type="text" name="lastName" class="form-control">
							</div>
							<div class="form-group">
								<label for="dateOfBirth">Date of Birth</label>
								<input type="date" name="dateOfBirth" class="form-control">
							</div>
							<div class="form-group">
								<label for="nationality">Nationality</label>
								<input type="text" name="nationality" class="form-control">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label for="telephone">Telephone</label>
								<input type="tel" name="telephone" class="form-control">
							</div>
							<div class="form-group">
								<label for="message">Message</label>
								<textarea name="message" id="message" cols="5" rows="5" class="form-control">I would like to apply to position {{--{{$this->title}}--}} and similar positions</textarea>
							</div>
							<div class="form-group">
								<label for="checkbox">I agree to the data protection and privacy policy and to being contacted about services they provide.</label>
								<input type="checkbox" name="checkbox">
							</div>
							<div class="form-group">
								<div class="text-center">
									<button class="btn btn-success">Apply</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
