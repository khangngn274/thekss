<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="{{ url('/') }}" class="standard-logo" data-dark-logo="{{ asset('index/images/logo-dark.png') }}"><img src="{{ asset('index/images/logo.png') }}" alt="Canvas Logo"></a>
                <a href="{{ url('/') }}" class="retina-logo" data-dark-logo="{{ asset('index/images/logo-dark2x.png') }}"><img src="{{ asset('index/images/logo2x.png') }}" alt="Canvas Logo"></a>

            </div><!-- #logo end -->

            <nav id="primary-menu" class="dark float-left primary-menu">
                
                <ul  style="border-right: none;" >
                    <li ><a href="">KS High-Tech Solutions Company Limited</a></li>
                </ul>
            </nav>
        
            <!-- Primary Navigation
            ============================================= -->

            <nav id="primary-menu" class="dark">
                <ul class="one-page-menu">
                    <li class="current"><a href="#" data-href="#header"><div>Home</div></a>

                    </li>
                    <li><a href="#"><div>About Us</div></a>
                        <ul>
                            <li><a data-href="#section-about" href="#"><div>About Kss</div></a>
                            </li>
                            <li><a data-href="#section-ucd" href="#"><div>What is UCD ?</div></a>
                            </li>
                            
                        </ul>
                    </li>
                    <li><a href="{{ url('/ucd-tech') }}"><div>Technology</div></a>
{{--                         <ul>
                            <li><a href="#"><div>UCD Lamp</div></a></li>
                            <li><a href="#"><div>UCD Ballast</div></a></li>                          
                        </ul> --}}
                    </li>
                    <li><a href="{{ url('ucd-product') }}"><div>Product</div></a>
                        <ul>
                            @foreach ($category as $value)
                                <li><a href="{{ url('ucd-product/'.$value->cateogry_id) }}"><div>{{$value->category_name_en}}</div></a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ url('ucd-project') }}"><div>Reference</div></a></li>
{{--                     <li><a href="{{ url('blog') }}"><div>News</div></a></li>
 --}}                    <li><a data-href="#section-footer" href="#"><div>Contact</div></a></li>
                </ul>

                <!-- Top Search
                ============================================= -->
               {{--  <div id="top-search">
                    <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                    <form action="search.html" method="get">
                        <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                    </form>
                </div> --}}<!-- #top-search end -->

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header>