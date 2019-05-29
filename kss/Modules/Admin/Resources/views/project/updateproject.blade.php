@extends('admin::layouts.admin_design')
  
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" class="current">Update Product</a> </div>
    <h1>Prodcut Management</h1>
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
            <h5>Update Project</h5>
          </div>
          <div class="widget-content nopadding">

		  </div>
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/project/updateproject/'.$projectDetails->project_id) }}" name="update_product" id="update_product" novalidate="novalidate">
            	@csrf
            
              <div class="control-group">
                <label class="control-label">Project Name</label>
                <div class="controls">
                  <input type="text" name="project_name" id="project_name" value="{{$projectDetails->project_name}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Project Name-English</label>
                <div class="controls">
                  <input type="text" name="project_name_en" id="project_name_en" value="{{$projectDetails->project_name_en}}">
                </div>
              </div>
        
              <div class="control-group">
                <label class="control-label">Project Description</label>
                <div class="controls">
                  <textarea name="project_description" id="project_description">{{$projectDetails->project_description}}</textarea>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Project Description_en</label>
                <div class="controls">
                  <textarea name="project_description_en" id="project_description_en">{{$projectDetails->project_description_en}}</textarea>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Project Type</label>
                <div class="controls">
                  <input type="text" name="project_type" id="project_type" value="{{$projectDetails->project_type}}">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Project Place</label>
                <div class="controls">
                  <input type="text" name="project_place" id="project_place" value="{{$projectDetails->project_place}}">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Project Alias</label>
                <div class="controls">
                  <input type="text" name="project_alias" id="project_alias" value="{{$projectDetails->project_alias}}">
                </div>
              </div>


              <div class="control-group">
	              <label class="control-label">Project Image</label>
	              <div class="controls">
                  <input type="file" name="image" id="image">
                  <input type="hidden" name="current_image" value="{{$projectDetails->project_thumbnail}}">
                  @if(!empty($projectDetails->project_thumbnail))
                  <img style="width: 100px; height: 100px; " src="{{ asset('backend/img/project/'.$projectDetails->project_thumbnail) }}" alt=""> | <button type="submit" class="btn-danger"><a href=" {{ url('admin/project/delete-project-image/'.$projectDetails->project_id) }} ">Delete</a></button> 
                  @endif
	              </div>
	            </div>


            
              <div class="form-actions">
                <input type="submit" value="Update Product" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>




@endsection