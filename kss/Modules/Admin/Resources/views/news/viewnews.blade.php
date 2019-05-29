@extends('admin::layouts.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Products</a> </div>
    <h1>Products</h1>


     @if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_error') !!}</strong>
        </div>
    @endif   
    @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_success') !!}</strong>
        </div>
    @endif

  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12"> 
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>List Products</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>News ID</th>
                  <th>News Category</th>
                  <th>News Name</th>
                  <th>News Name-English</th>
                  <th>News Alias</th>
                  <th>News Description</th>
                  <th>News Description_en</th>
                  <th>News Status</th>
                  <th>Create By</th>
                  <th>Update By</th>
                  <th>Thumbnail Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              	@foreach ($news as $new)
					       <tr class="gradeX">
                    <td>{{ $new->news_id }}</td>
                    <td>{{ $new->news_category_name }}</td>
                    <td>{{ $new->news_name }}</td>
                    <td>{{ $new->news_name_en }}</td>
                    <td>{{ $new->news_alias }}</td>
	                  <td>{{ $new->news_description }}</td>
	                  <td>{{ $new->news_description_en }}</td>
                    <td>{{ $new->news_status }}</td>
                    <td>{{ $new->create_by }}</td>
                    <td>{{ $new->update_by }}</td>
                    <td>
                      @if(!empty($new->news_thumbnail))
                      <img style="width: 70px; height: 60px" src="{{ asset('index/images/news/'.$new->news_thumbnail) }}" alt="">
                      @endif
                    </td>
	                  <td class="text-center">
                    
                      <a id="editCat" href="{{ url('/admin/news/updatenews/'.$new->news_id) }}" class="btn btn-primary btn-mini">Edit</a> 
                      <a rel="{{$new->news_id}}" rel1="deletenews" {{-- href="{{ url('/admin/deleteproduct/'.$product->id) }}" --}} href="javascript:" class="btn btn-danger btn-mini deleteNews">Delete</a>
                  </td>
	               </tr>
              	@endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
