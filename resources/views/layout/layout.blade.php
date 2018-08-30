<!DOCTYPE html>

<head>

	<!-- Basic Page Needs
================================================== -->
	<title>Holiday4Change</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
================================================== -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/colors/main.css" id="colors">
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />


</head>

<body>

  <!-- Wrapper -->
  <div id="wrapper">

@include ('layout.header')


@yield('content')

@include ('layout.footer')

@include ('layout.scripts')


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->

</body>


</html>
