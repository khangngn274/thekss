@extends('frontend::layoutsUcd.projectucd.master')
@section('content')
			<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Portfolio Filter
					============================================= -->
					<ul class="portfolio-filter clearfix" data-container="#portfolio">

						<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
						<li><a href="#" data-filter="#street-lighting">Street</a></li>
						<li><a href="#" data-filter="#security-lighting">Security</a></li>
						<li><a href="#" data-filter=".pf-media">Flood/Spot</a></li>
						<li><a href="#" data-filter=".pf-graphics">Garden</a></li>
						<li><a href="#" data-filter="#tunnel-lighting">Tunnel/Parking Lot</a></li>
						<li><a href="#" data-filter=".pf-graphics">Industrial/Explosion</a></li>
					</ul><!-- #portfolio-filter end -->

					<div class="portfolio-shuffle" data-container="#portfolio">
						<i class="icon-random"></i>
					</div>

					<div class="clear"></div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio grid-container clearfix">

							
						@foreach ($projectAll as $project)
							{{-- expr --}}
						<article class="portfolio-item pf-streetlighting pf-streetlighting pf-icons" id="{{$project->project_type}}">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img style="width: 100%;height: 200px;" src="{{ url('backend/img/project/'.$project->project_thumbnail) }}" alt="Open Imagination">
								</a>	
								<div class="portfolio-overlay">

									<a class="center-icon" data-toggle="modal" data-target="#{{ $project->project_alias }}"><i class="icon-line-plus"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a data-toggle="modal" data-target="#{{ $project->project_alias }}">{{ $project->project_name_en }}</a></h3>
								<span><a href="#">{{ $project->project_place}}</a></span>
							</div>
						</article>




						
						@endforeach




						
					</div><!-- #portfolio end -->
										<!-- Large modal -->

					@foreach ($projectAll as $project)
						{{-- expr --}}
					<div class="modal fade bs-example-modal-lg" id="{{ $project->project_alias }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-body">
								<div class="modal-content" style="max-height: 950px;">
									
									<div class="modal-header">
										<h2 class="modal-title" id="myModalLabel">{{ $project->project_name_en }}</h2>
									</div>
									<div class="modal-body p-1 no-gutters" style="max-width: 1600px">
										<div class="container">

											<div class="row">
												<div class="col-12 col-sm-12 p-0">
													@php
													echo $project->project_description_en;	

													@endphp
												</div>
												
											</div>
											

										</div>
										
									</div>
									<div class="section center nomargin" style="padding: 30px;">
										<button type="button" class="btn btn-outline-dark" data-dismiss="modal" aria-hidden="true">Close</button>
									
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach





				</div>

			</div>

		</section><!-- #content end -->
@endsection