@extends('admin::layouts.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" class="current">Update Category</a> </div>
    <h1>Category Management</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Update Category</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/category/updatecategory/'.$categoryDetails->category_id) }}" name="update_category" id="update_category" novalidate="novalidate">
            	@csrf
              <div class="control-group">
                <label class="control-label">Category Name</label>
                <div class="controls">
                  <input type="text" name="category_name" id="category_name" value="{{ $categoryDetails->category_name}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Category Name-English</label>
                <div class="controls">
                  <input type="text" name="category_name_en" id="category_name_en" value="{{ $categoryDetails->category_name_en}}">
                </div>
              </div>


              <div class="control-group">
                <label class="control-label">Category Level</label>
                <div class="controls">
                  <select class="c-select" name="parent_id" id="parent_id" style="width: 220px;">
                    <option selected value="0">Main Category</option>
                      @foreach ($levels as $value)
                        <option value="{{ $value->category_id}}" @if($value->category_id == $categoryDetails->category_parent_id) selected @endif  >{{ $value->category_name}}</option>
                      @endforeach
                  </select>
                </div>
              </div>


              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea name="description" id="description">{{ $categoryDetails->category_description}}</textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description_en</label>
                <div class="controls">
                  <textarea name="description_en" id="description_en">{{$categoryDetails->category_description_en}}</textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">URL</label>
                <div class="controls">
                  <input type="text" name="url" id="url" value="{{ $categoryDetails->category_alias}}">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Update Category" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>


@endsection