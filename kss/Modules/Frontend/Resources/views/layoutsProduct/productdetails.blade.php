@extends('frontend::layoutsProduct.master')
@section('content')

		


		<section id="page-title">

			<div class="container clearfix">
				<h1>{{$product['product_name_en']}}</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">UCD Lighting</a></li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="single-product">

						<div class="product">

							<div class="col_two_fifth">

								<!-- Product Single - Gallery
								============================================= -->
								<div class="product-image">
									<div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
										<div class="flexslider">
											<div class="slider-wrap" data-lightbox="gallery">
												<div class="slide" data-thumb="{{ asset("backend/img/product/".$product["product_image"]) }}"><img style="width: 100%;height:300px;margin: 0 auto;" src="{{ asset("backend/img/product/".$product["product_image"]) }}" alt="STA100 Model"></a></div>
											</div>
										</div>
									</div>
								</div><!-- Product Single - Gallery End -->

							</div>

							<div class="col_two_fifth product-desc">

								<!-- Product Single - Price
								============================================= -->
								<div class="product-price"><ins>Contact</ins></div><!-- Product Single - Price End -->

								<!-- Product Single - Rating
								============================================= -->
							
								<div class="clear"></div>
								<div class="line"></div>

								<!-- Product Single - Quantity & Cart Button
								============================================= -->
								{{-- <form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'>
									<div class="quantity clearfix">
										<input type="button" value="-" class="minus">
										<input type="text" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
										<input type="button" value="+" class="plus">
									</div>
									<button type="submit" class="add-to-cart button nomargin">Add to cart</button>
								</form><!-- Product Single - Quantity & Cart Button End -->
 --}}{{-- 
								<div class="clear"></div>
								<div class="line"></div> --}}

								<!-- Product Single - Short Description
								============================================= -->
								<p>{!!$product['product_description']!!}</p>
								{{-- <ul class="iconlist">
									<li><i class="icon-caret-right"></i> Dynamic Color Options</li>
									<li><i class="icon-caret-right"></i> Lots of Size Options</li>
									<li><i class="icon-caret-right"></i> 30-Day Return Policy</li>
								</ul> --}}<!-- Product Single - Short Description End -->

								<!-- Product Single - Meta
								============================================= -->
								<div class="card product-meta">
									<div class="card-body">
										<span itemprop="productID" class="sku_wrapper">SKU: <span class="sku">{{$product['product_code']}}</span></span>
										<span class="posted_in">Category: <a href="#" rel="tag">{{$product['product_name_en']}}</a>.</span>
										<span class="tagged_as">Tags: <a href="#" rel="tag">{{$product['product_name_en']}}</a>.</span>
									</div>
								</div><!-- Product Single - Meta End -->

								<!-- Product Single - Share
								============================================= -->
								<div class="si-share noborder clearfix">
									<span>Share:</span>
									<div>
										<a href="#" class="social-icon si-borderless si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-pinterest">
											<i class="icon-pinterest"></i>
											<i class="icon-pinterest"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-rss">
											<i class="icon-rss"></i>
											<i class="icon-rss"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-email3">
											<i class="icon-email3"></i>
											<i class="icon-email3"></i>
										</a>
									</div>
								</div><!-- Product Single - Share End -->

							</div>

							<div class="col_one_fifth col_last">

								<div class="divider divider-center"><i class="icon-circle-blank"></i></div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-thumbs-up2"></i>
									</div>
									<h3>100% Original</h3>
									<img style="width: 100px;height: 100px;" src="{{ asset('backend\img\product\QuailityIcon.png') }}" alt="">
								</div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-credit-cards"></i>
									</div>
									<h3>CE Certificate</h3>
									<img style="width: 100px;height: 150px;" src="{{ asset('backend\img\product\CE.png') }}" alt="">
								</div>

							</div>

							<div class="col_full nobottommargin">

								<div class="tabs clearfix nobottommargin" id="tab-1">

									<ul class="tab-nav clearfix">
										<li><a href="#tabs-1"><i class="icon-align-justify2"></i><span class="d-none d-md-inline-block">Description</span></a></li>
										<li><a href="#tabs-2"><i class="icon-info-sign"></i><span class="d-none d-md-inline-block">Applications</span></a></li>
										<li><a href="#tabs-3"><i class="icon-star3"></i><span class="d-none d-md-inline-block">Specification</span></a></li>
										<li><a href="#tabs-4"><i class="icon-star3"></i><span class="d-none d-md-inline-block">Features</span></a></li>
									</ul>

									<div class="tab-container">

										<div class="tab-content clearfix" id="tabs-1">
											
											{!!$product['product_description_en']!!}
										</div>
										<div class="tab-content clearfix" id="tabs-2">
											{!!$product['product_applications_en']!!}

											
										</div>
										<div class="tab-content clearfix" id="tabs-3">
											{!!$product['product_specification_en']!!}

											
										</div>
										<div class="tab-content clearfix" id="tabs-4">

											{!!$product['product_features_en']!!}

										</div>
								
									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="clear"></div><div class="line"></div>

					<div class="col_full nobottommargin">

						<h4>Related Products</h4>

						<div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-md="2" data-items-lg="3" data-items-xl="4">
							@foreach ($productradom as $value)
								<div class="oc-item">
									<div class="product iproduct clearfix">
										<div class="product-image">
											<a href="#"><img src="{{ asset("backend/img/product/".$value->product_image) }}" alt="{{$value->product_name_en}}"></a>
											<a href="#"><img src="{{ asset("backend/img/product/".$value->product_image) }}" alt="{{$value->product_name_en}}"></a>

										</div>
										<div class="product-desc center">
											<div class="product-title"><h3><a href="{{ url('product-detail/'.$value->product_id) }}">{{$value->product_name_en}}</a></h3></div>
										</div>
									</div>
								</div>
							@endforeach

							
						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->

@endsection