@extends('frontend::layouts.master')

@section('content')
    <section id="content">

        <div class="content-wrap pb-0">


            @include('frontend::layouts.about')


            @include('frontend::layouts.business')


            @include('frontend::layouts.news')

            @include('frontend::layouts.download')


        </div>

    </section><!-- #content end -->
@stop
