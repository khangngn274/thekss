@extends('admin::layouts.admin_design')

@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" class="current">Add New</a> </div>
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
            <h5>Add New</h5>
          </div>
          <div class="widget-content nopadding">
     
		  </div>
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/news/addnews') }}" name="add_product" id="add_product" novalidate="novalidate">
            	@csrf
               {{-- @php
                echo '<pre>';
                print_r($levels);die;
              @endphp --}}
             <div class="control-group">
                <label class="control-label">Select News Category</label>
                <div class="controls">
                  <select name="news_category_id" id="news_category_id" style="width: 220px">
                    <option selected value="0">Please Choose Category</option>
                    @foreach ($levels as $newcategory)
                        
                        <option value="{{$newcategory->news_category_id}}">{{$newcategory->news_category_name_en}}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">News Tittle</label>
                <div class="controls">
                  <input type="text" name="news_name" id="news_name">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">News Tittle-English</label>
                <div class="controls">
                  <input type="text" name="news_name_en" id="news_name_en">
                </div>
              </div>
    
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea name="news_description" id="news_description"></textarea>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Description_en</label>
                <div class="controls">
                  <textarea name="news_description_en" id="news_description_en"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">News Url</label>
                <div class="controls">
                  <input type="text" name="news_alias" id="news_alias">
                </div>
              </div>

              <div class="control-group">
	              <label class="control-label">Create By</label>
	              <div class="controls">
                  <input type="text" name="create_by" id="create_by">
	              </div>
	            </div>

              <div class="control-group">
                <label class="control-label">Update By</label>
                <div class="controls">
                  <input type="text" name="update_by" id="update_by">
                </div>
              </div>


              <div class="control-group">
                <label class="control-label">Image</label>
                <div class="controls">
                  <input type="file" name="image" id="image">
                </div>
              </div>
                
              

                {{-- Start UCD --}}

              <div class="form-actions">
                <input type="submit" value="Add Product" class="btn btn-success">
              </div>


            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>




@endsection