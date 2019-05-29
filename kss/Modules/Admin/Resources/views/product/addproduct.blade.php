@extends('admin::layouts.admin_design')

@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" class="current">Add Product</a> </div>
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
            <h5>Add Product</h5>
          </div>
          <div class="widget-content nopadding">

		  </div>
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/product/addproduct') }}" name="add_product" id="add_product" novalidate="novalidate">
            	@csrf
             <div class="control-group">
                <label class="control-label">Select Category</label>
                <div class="controls">
                  <select onchange="genderChanged(this)" name="product_category_id" id="product_category_id" style="width: 220px">
                    <option selected value="0">Please Choose Category</option>

          				{{-- 	@php
          						echo $categories_dropdown;
          					@endphp --}}

                    @php
                        cate_parent($levels, 0, "", old('product_category_id'));
                    @endphp
                  </select>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Product Alias</label>
                <div class="controls">
                  <input type="text" name="product_alias" id="product_alias">
                </div>
              </div>


              <div class="control-group">
                <label class="control-label">Product Name</label>
                <div class="controls">
                  <input type="text" name="product_name" id="product_name">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Product Name-English</label>
                <div class="controls">
                  <input type="text" name="product_name_en" id="product_name_en">
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Product Code</label>
                <div class="controls">
                  <input type="text" name="product_code" id="product_code">
                </div>
              </div>
    
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea name="product_description" id="product_description">
                    
                  </textarea>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Description_en</label>
                <div class="controls">
                  <textarea name="product_description_en" id="product_description_en">
                    
                  </textarea>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Applications</label>
                <div class="controls">
                  <textarea name="product_applications" id="product_applications">
                    <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td style="width: 200px"></td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>

                  </textarea>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Applications_en</label>
                <div class="controls">
                  <textarea name="product_applications_en" id="product_applications_en">
                     <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td style="width: 200px"></td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                  </textarea>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Specification</label>
                <div class="controls">
                  <textarea name="product_specification" id="product_specification">
                    <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td style="width: 200px"></td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                  </textarea>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Specification_en</label>
                <div class="controls">
                  <textarea name="product_specification_en" id="product_specification_en">
                    <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td style="width: 200px"></td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                          <tr>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                  </textarea>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Features</label>
                <div class="controls">
                  <textarea name="product_features" id="product_features">
                    <table class="table table-striped table-bordered">
                        <tbody>
                          <tr>
                            <td>AC Input</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Output/ Inout Efficiency</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Lamp Power</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Working Temperature</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>ø64</td>
                            <td></td>
                          </tr>
                          <tr>
                          <tr>
                            <td>Lumen</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Watt'</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Sodium</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>M/H</td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                  </textarea>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Features_en</label>
                <div class="controls">
                  <textarea name="product_features_en" id="product_features_en">
                     <table class="table table-striped table-bordered">
                        <tbody>
                          <tr>
                            <td>AC Input</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Output/ Inout Efficiency</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Lamp Power</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Working Temperature</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>ø64</td>
                            <td></td>
                          </tr>
                          <tr>
                          <tr>
                            <td>Lumen</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Watt'</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Sodium</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>M/H</td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                  </textarea>
                </div>
              </div>

              <div class="control-group">
                <label class="control-label">Price</label>
                <div class="controls">
                  <input type="text" name="product_price" id="product_price">
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