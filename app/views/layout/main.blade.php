<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<!-- Use the .htaccess and remove these lines to avoid edge case issues -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Center Management System</title>
	<meta name="description" content="">
	<meta name="author" content="Parimala AppLabs">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	{{ HTML::style('css/bootstrap.min.css'); }}
	{{ HTML::style('css/style.css'); }}

	{{ HTML::script('app/js/libs/modernizr-2.0.6.js'); }}
	{{ HTML::script('app/js/libs/jquery-1.7.1.min.js'); }}
	{{ HTML::script('app/js/libs/jquery-ui-1.10.3.min.js'); }}
	{{ HTML::script('app/js/libs/bootstrap.min.js'); }}


</head>
<body>

		@include('layout.navigation')
		@yield('content')

</body>
</html>
