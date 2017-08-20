<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Oladejo Ezekiel">
	
	<title>@yield('title')</title>

	<link rel="shortcut icon" href="{{ URL::to('images/gt_favicon.png') }}">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::to('css/font-awesome.min.css') }}">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="{{ URL::to('css/bootstrap-theme.css') }}" media="screen" >

	<link rel="stylesheet" href="{{ URL::to('css/main.css') }}">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="{{ URL::to('js/html5shiv.js') }}"></script>
	<script src="{{ URL::to('js/respond.min.js') }}"></script>
	<![endif]-->

	<script src="{{ URL::to('js/jquery.min.js') }}"></script>
	<script src="{{ URL::to('js/jQuery.headroom.min.js') }}"></script>
	<script src="{{ URL::to('js/template.js') }}"></script>
</head>
<body>