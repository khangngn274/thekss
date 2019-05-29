<div class="container clearfix">

	<div class="fancy-title title-center title-dotted-border topmargin" id="section-project">
		<h3>Project References</h3>
		</div>
		
		<div id="related-portfolio" class="portfolio-notitle portfolio-nomargin footer-stick">
			<div class="row">
				@foreach ($projectradom as $project)
				{{-- @php
					echo '<pre>';
					print_r($project);die;
				@endphp --}}
					<div class="col-lg-4 col-md-6 col-12 mb-3">
						<div class="oc-item" >
							<div class="iportfolio">
								<div class="portfolio-image">
									<a data-toggle="modal" data-target="#{{ $project->project_alias }}">
										<img style="width: 100%;height: 200px;" src="{{ url('backend/img/project/'.$project->project_thumbnail) }}" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a class="center-icon" data-toggle="modal" data-target="#{{ $project->project_alias }}"><i class="icon-line-plus"></i></a>

									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a  data-target="#{{ $project->project_alias }}">{{$project->project_name_en}}</a></h3>
									<span><a href="#">{{ $project->project_place}}</a></span>
 								</div>
							</div>
						</div>
					</div>				
				@endforeach
				
			</div>
		</div><!-- .portfolio-carousel end -->
	</div>
</div>

<div class="text-center mt-lg-4 mb-lg-4">
	<a href="{{ url('/ucd-project') }}" class="button button-rounded button-reveal button-large button-border tright"><i class="icon-signal"></i><span>See more</span></a>
</div>
<div class="clear"></div>





@foreach ($projectradom as $project)
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

	<br>