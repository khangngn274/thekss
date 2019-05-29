




<div id='section-news' class="promo parallax promo-full" style="background-color:#333" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
	<div class="container clearfix text-center">
		<h3 class="heading-block title-center page-section text-white">NEWS</h3>

		<div id="oc-images2" class="owl-carousel image-carousel carousel-widget" data-margin="20" data-pagi="false" data-rewind="true" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="3" data-items-xl="3">

			@for ($i = 0; $i < 8 ; $i++)
				
				<div class="oc-item">
					<div class="ipost clearfix">
						<div class="entry-image">
							<a class="text-white" href="{{ url('single-blog') }}"><img class="image_fade" src="index/images/magazine/thumb/1.jpg" alt="Image"></a>
						</div>
						<div class="entry-title">
							<h4><a class="text-white" href="{{ url('single-blog') }}">A Baseball Team Blew Up A Bunch Of Justin Bieber And Miley Cyrus Merch</a></h4>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3 text-white"></i> 17th Feb 2014</li>
							<li><a class="text-white" href="{{ url('single-blog') }}"><i class="icon-comments"></i> 32</a></li>
						</ul>
					</div>
				</div>
			@endfor

		</div>
	</div>
</div>





