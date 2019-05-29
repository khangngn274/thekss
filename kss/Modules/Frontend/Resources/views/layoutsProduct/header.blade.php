	<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="/" class="standard-logo" data-dark-logo="{{ asset('index/images/logo-dark.png') }}"><img src="{{ asset('index/images/logo.png') }}" alt="Canvas Logo"></a>
						<a href="/" class="retina-logo" data-dark-logo="{{ asset('index/images/logo-dark2x.png') }}"><img src="{{ asset('index/images/logo2x.png') }}" alt="Canvas Logo"></a>
					</div><!-- #logo end -->
					<nav id="primary-menu" class="dark float-left">
                
		                <ul  style="border-right: none;" >
		                    <li ><a href="">KS High-Tech Solutions Company Limited</a></li>
		                </ul>
		            </nav>

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul class="one-page-menu">
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
		                        <ul>
		                            <li><a href="#"><div>Street Lighting</div></a></li>
		                            <li><a href="#"><div>Flood Lighting</div></a></li>
		                            <li><a href="#"><div>Spot Lighting</div></a></li>
		                            <li><a href="#"><div>Secutiry Lighting</div></a></li>   
		                            <li><a href="#"><div>Industrial Lighting</div></a></li>
		                            <li><a href="#"><div>Search Lighting</div></a></li>          
		                            <li><a href="#"><div>Garden Lighting</div></a></li>
		                            <li><a href="#"><div>Tunel Lighting</div></a></li>
		                        </ul>
		                    </li>
		                    <li><a href="{{ url('ucd-project') }}"><div>Reference</div></a></li>
		                    <li><a href="{{ url('blog') }}"><div>News</div></a></li>
		                    <li><a data-href="#section-footer" href="#"><div>Contact</div></a></li>
							
						</ul>

						

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->