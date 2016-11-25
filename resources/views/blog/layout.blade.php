<html>
<head>
	<title>@yield('title')</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
	<nav class="navbar navbar-default navbar-static">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Blog</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#">View</a></li>
				<li> <a href="#">Create</a></li>
			</ul>
		</div>
	</nav>
	@yield('content')

</body>
</html>