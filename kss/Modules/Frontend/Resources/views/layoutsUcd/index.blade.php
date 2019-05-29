@extends('frontend::layoutsUcd.master')
@section('content')

<section id="content" style="overflow: visible;">

	<div class="content-wrap">



		<div class="promo promo-dark promo-full landing-promo header-stick">
			<div class="container clearfix">
				<h3>UCD <i class="icon-circle-arrow-right" style="position:relative;top:2px;"></i></h3>
				<span>Ultra Constant Discharge Lamp</span>
			</div>
		</div>



		@include('frontend::layoutsUcd.ucd')
		
		@include('frontend::layoutsUcd.ballast')

		@include('frontend::layoutsUcd.compare')

		@include('frontend::layoutsUcd.ucdplant')

		@include('frontend::layoutsUcd.project')

		@include('frontend::layoutsUcd.product')

		@include('frontend::layoutsUcd.client')

		<br>
		<br>
		<br>




</section><!-- #content end -->


@endsection