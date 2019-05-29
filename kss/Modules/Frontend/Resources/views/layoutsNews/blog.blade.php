@extends('frontend::layoutsNews.master')
@section('content')
	{{-- expr --}}
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Posts
			============================================= -->
			<div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">

				@for ($i = 0; $i < 8 ; $i++)
					<div class="entry clearfix">
						<div class="entry-image">
							<a href="index/images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="index/images/blog/grid/17.jpg" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-title">
							<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
						</div>
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> 10th Feb 2014</li>							
						</ul>
						<div class="entry-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
							<a href="blog-single.html"class="more-link">Read More</a>
						</div>
					</div>						
				@endfor
				



			</div><!-- #posts end -->

			<!-- Pagination
			============================================= -->
			<ul class="pagination nobottommargin m-auto">
				<li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>
				<li class="page-item active"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item"><a class="page-link" href="#">4</a></li>
				<li class="page-item"><a class="page-link" href="#">5</a></li>
				<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
			</ul>

		</div>

	</div>

</section><!-- #content end -->


@endsection
