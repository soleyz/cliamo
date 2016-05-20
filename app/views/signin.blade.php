<!-- Fourth (Sign In) section -->
<!DOCTYPE html>
<!--Magister - html5 template by GetTemplate in bootstrap-->
<html lang="en">
<head>
	<!--<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">-->
	
	<title>ClaimMo - Motor Insurance</title>

<!--	<link rel="shortcut icon" href="assets/images/gt_favicon.png">-->
	<link rel="shortcut icon" href="{{url('assets/images/gt_favicon.png')}}">
	
	<!-- Bootstrap itself -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/magister.css">

	<!-- Fonts -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
</head>

<!-- use "theme-invert" class on bright backgrounds, also try "text-shadows" class -->
<body class="theme-invert">

<body>
<!--<a href="{{ URL::to('signup') }}">Signup here</a>-->
<!--<section class="section" >-->
	<form action="{{ URL::to('signin') }}" method="POST">
		<div class="container">

			<h2 class="text-center title">Sign In</h2>

			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 ">
					<!-- <div class="thumbnail"> -->
						<center>
							<img src="images/user.jpg" class="img-responsive img-circle" alt="Responsive image" >
						</center>
						<br>
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="username" id="inputEmail3" placeholder="Username">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
								</div>
						</form>
						<!-- </div> -->
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label><input type="checkbox"> Remember me</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-info" href="food">Sign in</button>
								
								<a href="{{ URL::to('signup') }}" class="btn btn-info" >Sign Up here</a>
							</div>
						</div>
					</form>
				</div>									
			</div>
		</div>
	</div>
</form>


	<!-- <div class="container">

		<h2 class="text-center title">Sign In</h2>

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 ">
				<div class="thumbnail">
						<center>
							<img src="images/user.jpg" class="img-responsive img-circle" alt="Responsive image" >
						</center>
							<th>Now you are logging if you want to log out please </th>
						<a href="{{ URL::to('signout') }}" class="btn btn-info" >Click here</a>
						
				</div>									
			</div>
		</div>
	</div>
</form> -->


</body>
