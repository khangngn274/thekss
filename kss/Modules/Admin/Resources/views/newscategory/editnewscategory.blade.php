@extends('admin::layouts.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" class="current">Update Category</a> </div>
    <h1>News Category Management</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Update Category</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/newscategory/updatenewscategory/'.$newscategoryDetails->news_category_id) }}" name="update_category" id="update_category" novalidate="novalidate">
            	@csrf
              <div class="control-group">
                <label class="control-label">Category Name</label>
                <div class="controls">
                  <input type="text" name="news_category_name" id="news_category_name" value="{{ $newscategoryDetails->news_category_name}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Category Name-English</label>
                <div class="controls">
                  <input type="text" name="news_category_name_en" id="news_category_name_en" value="{{ $newscategoryDetails->news_category_name_en}}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">URL</label>
                <div class="controls">
                  <input type="text" name="url" id="url" value="{{ $newscategoryDetails->news_category_alias}}">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Update News Category" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>


@endsection