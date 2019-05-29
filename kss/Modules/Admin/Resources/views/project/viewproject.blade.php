@extends('admin::layouts.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">projects</a> </div>
    <h1>projects</h1>


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
            <h5>List projects</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>project ID</th>
                  <th>Project Type</th>
                  <th>Project Name</th>
                  <th>Project Name-English</th>
                  {{-- <th>Project Description</th>
                  <th>Project Description_en</th> --}}
                  <th>Project Alias</th>
                  <th>Project Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              	@foreach ($project as $project)
					<tr class="gradeX">
                    <td>{{ $project->project_id }}</td>
	                  <td>{{ $project->project_type }}</td>
                    <td>{{ $project->project_name }}</td>
                    <td>{{ $project->project_name_en }}</td>
{{-- 	                  <td>{{ $project->project_description }}</td>
	                  <td>{{ $project->project_description_en }}</td> --}}
                    <td>{{ $project->project_alias }}</td>
                    <td>
                      @if(!empty($project->project_thumbnail))
                      <img style="width: 70px; height: 60px" src="{{ asset('backend/img/project/'.$project->project_thumbnail) }}" alt="">
                      @endif
                    </td>
	                  <td class="text-center">

                     <a id="editCat" href="{{ url('/admin/project/updateproject/'.$project->project_id) }}" class="btn btn-primary btn-mini">Edit</a> 
                    <a rel="{{$project->project_id}}" rel1="deleteproject" {{-- href="{{ url('/admin/deleteproject/'.$project->id) }}" --}} href="javascript:" class="btn btn-danger btn-mini deleteProject">Delete</a>
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
