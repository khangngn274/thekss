@extends('frontend::layoutsProduct.master')
@section('content')

	<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>UCD Lamp Product</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active"><a href="#">UCD Lighting Product</a></li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					
						<div class="row">
							<div class="col-3">
								<div class="sidebar nobottommargin">
									<div class="sidebar-widgets-wrap">

										<div class="widget widget_links clearfix">

											<h4 style="width: max-content">UCD Categories</h4>
											<ul style="width: max-content">
												<li><a href="{{ url('ucd-product/') }}">All</a></li>

												@foreach ($categories as $category)
													<li><a href="{{ url('ucd-product/'.$category->category_id) }}">{{$category->category_name_en}}</a></li>
												@endforeach
											</ul>

										</div>
					
									</div>
								</div><!-- .sidebar end -->
							</div>

								
							<div class="col-9">
								<div class="row grid-container mb-lg-5" data-layout="masonry" style="overflow: visible">
									@foreach ($products as $product)

										{{-- expr --}}
									<div class="col-lg-4 mb-5">
										<div class="flip-card text-center">
											<div class="flip-card-front" style="background-image: url('{{ asset("backend/img/product/$product->product_image") }}'); height: 200px;">
												<div class="flip-card-inner p-0" id="flip-card-inner">
													<div class="card nobg noborder text-center">
														<div class="card-body p-0">
															<h5 class="card-title text-dark" style="padding-top: 20%; margin-bottom: 0px!important;">{{$product->product_name_en}}</h5>
														</div>
													</div>
												</div>
											</div>
											<div class="flip-card-back bg-dark no-after">
												<div class="flip-card-inner">
													<button type="button" class="btn btn-outline-light mt-2"><a href="{{ url('product-detail/'.$product->product_id) }}">View Details</a></button>
												</div>
											</div>
										</div>
									</div>
									@endforeach

								</div>


								 <div class="text-center" style="padding-left: 40%;">
						                {{ $products->appends(['sort' => 'id'])->links() }}
						         </div>

							</div>

						</div>
					</div>
						
				</div>
				
		</section><!-- #content end -->

@endsection