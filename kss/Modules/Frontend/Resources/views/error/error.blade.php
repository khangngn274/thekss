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
	<title>404 - Layout 3 | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">


		<section id="slider" class="slider-element slider-parallax full-screen dark error404-wrap">

			<div class="slider-parallax-inner">

				<div class="container-fluid vertical-middle center clearfix">

					<div class="error404">Coming Soon</div>

					<div class="heading-block nobottomborder">
						<h4>This page is not available now</h4>
						<button class="btn btn-outline-dark" type="button"><a href="{{ url('/') }}">BACK TO HOME</a></button>

					</div>



				

				</div>

				<div class="video-wrap">
					<video poster="{{ asset('index/images/videos/explore.jpg') }}" preload="auto" loop autoplay muted>
						<source src='{{ asset('index/images/videos/explore.mp4') }}' type='video/mp4' />
						<source src='{{ asset('index/images/videos/explore.webm') }}' type='video/webm' />
					</video>
					<div class="video-overlay" style="background-color: rgba(0,0,0,0.3);"></div>
				</div>

			</div>

		</section>

		<!-- Footer
		============================================= -->

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