<div class="container clearfix" id="section-product">
	<div class="fancy-title title-center title-dotted-border topmargin-sm">
		<h3>Product Details</h3>
	</div>

	<div class=" flip-card-wrapper clearfix">
		
			<div class="row mb-lg-4">
				@foreach ($productradom as $product)

				<div class="col-lg-4 mb-4">
					<div class="flip-card text-center">
						<div class="flip-card-front" style="background-image: url('backend/img/product/{{$product->product_image}}')">
							<div class="flip-card-inner" id="flip-card-inner">
								<div class="card nobg noborder text-center">
									<div class="card-body">
										<h4 class="card-title text-dark">{{$product->product_name_en}}</h4>
									</div>
								</div>
							</div>
						</div>
						<div class="flip-card-back bg-inverse no-after">
							<div class="flip-card-inner">
								<button type="button" class="btn btn-outline-light mt-2"><a style="color:black" href="{{ url('product-detail/'.$product->product_id) }}">View Details</a></button>
							</div>
						</div>
					</div>
				</div>
				@endforeach

			</div>
		
	<div class="center nomargin" style="padding: 30px;">
		<a href="{{ url('/ucd-product') }}" class="button button-rounded button-reveal button-large button-border tright"><i class="icon-signal"></i><span>See more</span></a>
	</div>
		
</div>