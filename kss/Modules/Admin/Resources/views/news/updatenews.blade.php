@extends('admin::layouts.admin_design')

@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" class="current">Update News</a> </div>
    <h1>News Management</h1>
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


  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Update News</h5>
          </div>
          <div class="widget-content nopadding">

		  </div>
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/news/updatenews/'.$newsDetails->news_id)}}" name="update_product" id="update_product" novalidate="novalidate">
            	@csrf
             <div class="control-group">


              <label class="control-label">Select Category</label>
              <div class="controls">
                <select name="news_category_id" id="news_category_id" style="width: 220px">
      					@php
      						echo $newscategories_dropdown;
      					@endphp
                </select>
              </div>


             <div class="control-group">
                <label class="control-label">News Tittle</label>
                <div class="controls">
                  <input type="text" name="news_name" id="news_name" value="{{$newsDetails->news_name}}">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">News Tittle-English</label>
                <div class="controls">
                  <input type="text" name="news_name_en" id="news_name_en" value="{{$newsDetails->news_name_en}}">
                </div>
              </div>
    
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea name="news_description" id="news_description" value="">{{$newsDetails->news_description}}</textarea>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Description_en</label>
                <div class="controls">
                  <textarea name="news_description_en"  id="news_description_en" value="">{{$newsDetails->news_description_en}}</textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">News Url</label>
                <div class="controls">
                  <input type="text" name="news_alias" id="news_alias" value="{{$newsDetails->news_alias}}">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Create By</label>
                <div class="controls">
                  <input type="text" name="create_by" id="create_by" value="{{$newsDetails->create_by}}">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Update By</label>
                <div class="controls">
                  <input type="text" name="update_by" id="update_by" value="{{$newsDetails->update_by}}">
                </div>
              </div>

             {{--  <div class="control-group">
                <label class="control-label">Status</label>
                <div class="controls">
                  <input type="text" name="news_status" id="{{$productDetails->price}}">
                </div>
              </div> --}}
              <label class="control-label">Select Status</label>
              <div class="controls">
                <select name="news_status" id="news_status" style="width: 220px">
                    
                    @php
                      
                      if($newsDetails->news_status == "active")
                      {
                        $selected = "selected";
                      }else
                      {
                        $selected = "";

                      }
                      if($newsDetails->news_status == "inactive")
                      {
                        $selected = "selected";
                      }else
                      {
                        $selected = "";

                      }
                    @endphp
                    <option {{$selected}} value="active">active</option>}
                    <option {{$selected}} value="inactive">inactive</option>}
                </select>
              </div>

              

              <div class="control-group">
	              <label class="control-label">Image</label>
	              <div class="controls">
                  <input type="file" name="image" id="image">
                  <input type="hidden" name="current_image" value="{{$newsDetails->news_thumbnail}}">
                  @if(!empty($newsDetails->news_thumbnail))
                  <img style="width: 100px; height: 100px; " src="{{ asset('index/images/news/'.$newsDetails->news_thumbnail) }}" alt=""> | <button type="submit" class="btn-danger"><a href=" {{ url('admin/news/delete-news-image/'.$newsDetails->news_id) }} ">Delete</a></button> 
                  @endif
	              </div>
	            </div>

            
              <div class="form-actions">
                <input type="submit" value="Update News" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>




@endsection