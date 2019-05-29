	<header id="header" class="full-header">

	<div id="header-wrap">

		<div class="container clearfix">

			<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

			<!-- Logo
			============================================= -->
			<div id="logo">
				<a href="{{ url('/') }}" class="standard-logo" data-dark-logo="index/images/logo-dark.png"><img src="index/images/logo.png" alt="Kss Logo"></a>
				<a href="{{ url('/') }}" class="retina-logo" data-dark-logo="index/images/logo-dark2x.png"><img src="index/images/logo2x.png" alt="Kss Logo"></a>
			</div><!-- #logo end -->

			<!-- Primary Navigation
			============================================= -->
			<nav id="primary-menu">

				<ul>
					<li><a href="{{ url('/') }}"><div>Home</div></a>					
					</li>
					<li><a href="{{ url('/ucd-tech') }}"><div>Technology</div></a>
                        <ul>
                            <li><a href="#"><div>UCD Lamp</div></a></li>
                            <li><a href="#"><div>UCD Ballast</div></a></li>
                            <li><a href="#"><div></div></a></li>
                            <li><a href="#"><div></div></a></li>                            
                        </ul>
                    </li>
                    <li><a href="{{ url('ucd-product') }}"><div>Product</div></a>
                        @php
                    		use App\Models\Category;
							$categories  = Category::where('category_parent_id' , 1)->get();

                    	@endphp
                    	<ul>
						@foreach ($categories as $category)
							<li><a href="{{ url('ucd-product/'.$category->category_id) }}">{{$category->category_name_en}}</a></li>
						@endforeach                    	
						</ul>
                        
                    </li>
                    <li><a href="{{ url('ucd-project') }}"><div>Reference</div></a></li>
		            <li><a data-href="#section-footer" href="#"><div>Contact</div></a></li>
				</ul>

				<!-- Top Cart
				============================================= -->

				<!-- Top Search
				============================================= -->
			{{-- 	<div id="top-search">
					<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
					<form action="search.html" method="get">
						<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
					</form>
				</div><!-- #top-search end --> --}}

			</nav><!-- #primary-menu end -->

		</div>

	</div>

</header><!-- #header end -->