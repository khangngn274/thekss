@extends('admin::layouts.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Category</a> </div>
    <h1>Category</h1>


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
            <h5>List Category</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>News Category ID</th>
                  <th>News Category Name</th>
                  <th>News Category Name_en</th>
                  <th>URL</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              	@foreach ($news_categories as $news_category)
					         <tr class="gradeX">
	                  <td>{{ $news_category->news_category_id }}</td>
	                  <td>{{ $news_category->news_category_name }}</td>
                    <td>{{ $news_category->news_category_name_en }}</td>
	                  <td>{{ $news_category->news_category_alias }}</td>
	                  <td class="text-center"><a id="editCat" href="{{ url('/admin/newscategory/updatenewscategory/'.$news_category->news_category_id) }}" class="btn btn-primary btn-mini">Edit</a> 
                      <a rel="{{$news_category->news_category_id}}" rel1="deletenewscategory"  href="javascript:" class="btn btn-danger btn-mini deleteNewsCategory">Delete</a>
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
