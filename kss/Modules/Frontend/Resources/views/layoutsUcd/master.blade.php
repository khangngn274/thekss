<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="index/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="index/style.css" type="text/css" />
	<link rel="stylesheet" href="index/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="index/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="index/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="index/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="index/css/responsive.css" type="text/css" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->


	<!-- Document Title
	============================================= -->
	<title>UCD Lamp</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		@include('frontend::layoutsUcd.header')
		<!-- Content
		============================================= -->
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
	<script src="index/js/jquery.js"></script>
	<script src="index/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="index/js/functions.js"></script>

	<script>
		$(function() {
			$( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
		});
	</script>



</body>
</html>