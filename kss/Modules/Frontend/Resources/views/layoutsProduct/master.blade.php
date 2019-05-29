<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('index/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('index/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('index/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('index/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('index/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('index/css/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('index/css/responsive.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


	<!-- Document Title
	============================================= -->
	<title>UCD Product</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		@include('frontend::layoutsProduct.header')
		

		@yield('content')

		<!-- Footer
		============================================= -->
		@include('frontend::layouts.footer')



	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('index/js/jquery.js') }}"></script>
	<script src="{{ asset('index/js/plugins.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('index/js/functions.js') }}"></script>

</body>
</html>