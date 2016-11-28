<html>
<head>
	<title>@yield('title')</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css')}}">
</head>
<body>
	<nav class="navbar navbar-default navbar-static">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{ route('view')}}">Blog</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="{{ route('view')}}">View</a></li>
				<li> <a href="{{ route('blog')}}">Create</a></li>
			</ul>
		</div>
	</nav>
	@yield('content')
	<div class="bottom">
	<footer class="footer cssfooter">
		<div class="row">
			<div class="col-lg-8">
			<div class="col-sm-4">
				<h6>Simple bolg by: </h6>
				<h3>Bijay Gurung</h3>


			</div>
			<div class="col-sm-4">
				<h3>Follow me</h3>
				<ul class="unstyled">
					<li><a href="https://www.facebook.com/bijaygr">Facebook</a></li>
					<li><a href="https://www.instagram.com/bjay_grg/?hl=en">Instagram</a></li>	
			</div>
			<div class="col-sm-4">
				<h3>Contact No:</h3>
				<a href="#">+977 9819188019</a>
			</div>
			</div>

		</div>



	</footer>
	</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>