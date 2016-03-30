<!DOCTYPE html>
<!--Magister - html5 template by GetTemplate in bootstrap-->
<html lang="en">
<head>
	<!--<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">-->
	
	<title>FoodForHealth - For Calculate calories</title>

<!--	<link rel="shortcut icon" href="assets/images/gt_favicon.png">-->
	
	<!-- Bootstrap itself -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- Custom styles -->
	<link rel="stylesheet" href="css/magister.css">

	<!-- Fonts -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
</head>

<!-- use "theme-invert" class on bright backgrounds, also try "text-shadows" class -->
<body class="theme-invert">

<nav class="mainmenu">
	<div class="container">
		<div class="dropdown">
			<button type="button" class="navbar-toggle" data-toggle="dropdown"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
			<!-- <a data-toggle="dropdown" href="#">Dropdown trigger</a> -->
			<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
				<li><a href="{{ URL::to('home') }}" class="active">Home</a></li>
				<li><a href="{{ URL::to('signin') }}">Sign In</a></li>
				<li><a href="{{ URL::to('showfood') }}">Food Diary</a></li>
				<li><a href="{{ URL::to('info') }}">Info</a></li>
				
			</ul>
		</div>
	</div>
</nav>




@yield('body')
<!-- Load js libs only when the page is loaded. -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="js/modernizr.custom.72241.js"></script>
<!-- Custom template scripts -->
<!--<script src="js/magister.js"></script>-->
</body>
</html>
