@extends('admin::layouts.admin_design')

@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" class="current">Add Project</a> </div>
    <h1>Project Management</h1>
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
            <h5>Add Project</h5>
          </div>
          <div class="widget-content nopadding">

		  </div>
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/project/addproject') }}" name="add_project" id="add_project" novalidate="novalidate">
            	@csrf

              
              {{-- End UCD --}}
             {{--  <div class="control-group">
                <label class="control-label">project ID</label>
                <div class="controls">
                  <input type="text" name="project_id" id="project_id">
                </div>
              </div> --}}


              <div class="control-group">
                <label class="control-label">Project Name</label>
                <div class="controls">
                  <input type="text" name="project_name" id="project_name">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Project Name-English</label>
                <div class="controls">
                  <input type="text" name="project_name_en" id="project_name_en">
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Project Description</label>
                <div class="controls">
                  <textarea name="project_description" id="project_description"></textarea>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Project Description_en</label>
                <div class="controls">
                  <textarea name="project_description_en" id="project_description_en">
                  </textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Project Alias</label>
                <div class="controls">
                  <input type="text" name="project_alias" id="project_alias">
                </div>
              </div>

              <div class="control-group">
	              <label class="control-label">Project Thumbnail</label>
	              <div class="controls">
                  <input type="file" name="image" id="image">
	              </div>
	            </div>

              <div class="control-group">
                <label class="control-label">Project Type</label>
                <div class="controls">
                  <input type="text" name="project_type" id="project_type">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Project Place</label>
                <div class="controls">
                  <input type="text" name="project_place" id="project_place">
                </div>
              </div>
                
                {{-- Start UCD --}}
              
              <div class="form-actions">
                <input type="submit" value="Add project" class="btn btn-success">
              </div>


            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>




@endsection