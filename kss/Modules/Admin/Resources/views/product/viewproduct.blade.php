@extends('admin::layouts.admin_design')

@section('css')
  <style type="text/css" media="screen">
    .status-active-color{
      color: green;
      font-size: 20px;
    }
    .status-inactive-color{
      color: red;
            font-size: 20px;

    }
  </style>
@endsection

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
                  <th>Product ID</th>
                  <th>Category</th>
                  <th>Product Name</th>
                  <th>Product Name-English</th>
                  <th>Product Code</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              	@foreach ($products as $product)
					       <tr class="gradeX">
                    <td>{{ $product->product_id }}</td>
	                  <td>{{ $product->product_category_name }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_name_en }}</td>
                    <td>{{ $product->product_code }}</td>
                    <td>{{ $product->product_price }}</td>
                    <td>
                      @if(!empty($product->product_image))
                      <img style="width: 70px; height: 60px" src="{{ asset('backend/img/product/'.$product->product_image) }}" alt="">
                      @endif
                    </td>
                    <td>
                      @if ($product->product_status == 'active') 
                          <center><i title="đã kích hoạt" class="fas fa-check status-active-color"></i></center>
                      @else
                          <center><i title="chưa kích hoạt" class="fas fa-times status-inactive-color"></i></center>
                      @endif 
                    </td>


	                  <td class="text-center">
                      <center>
                        @if ($product->product_status == 'active') 
                          <a  style="font-size: 20px;" 
                              data-toggle="m-tooltip"
                              data-placement="top"
                              data-original-title="{{ trans('Hủy kích hoạt') }}" 
                              href="javascript:;"
                              class="activeProduct" 
                              product-id="{{$product->product_id}}">
                              <i style="width:10px;" class="fas fa-unlock"></i>
                          </a>
                      @else
                          <a  style="font-size: 20px;"
                              data-toggle="m-tooltip"
                              data-placement="top"
                              data-original-title="{{ trans('Kích hoạt tài khoản') }}" 
                              href="javascript:;"
                              class="activeProduct" 
                              product-id="{{$product->product_id}}">
                              <i style="width:10px;" class="fas fa-lock"></i>
                          </a>
                      @endif


                     <a style="margin-left: 20px;margin-right: 15px;font-size: 20px;" id="editCat" href="{{ url('/admin/product/updateproduct/'.$product->product_id) }}" ><i class="fas fa-edit"></i></a> 
                      <a rel="{{$product->product_id}}" rel1="deleteproduct" {{-- href="{{ url('/admin/deleteproduct/'.$product->id) }}" --}} href="javascript:" class="deleteProduct"><i class="fas fa-trash-alt" style="font-size: 20px;"></i></a>
                      </center>
                      
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


@section('script')
  <script>

      $(".activeProduct").on("click", function(){
          var $this = $(this);
          var i = $this.find("i").eq(0);
          var tr = $this.closest("tr");
         
          // UNACTIVE
          if( i.hasClass("fas fa-unlock") )
          {
              $.ajax({
                  url: "/admin/product/update-product-status/"+$this.attr("product-id"),
                  context: document.body,
                  method: "GET"
              }).done(function(rs) {
                  Swal.fire(
                    'Your product is NOT ACTIVE now',
                  )
              });

              i.removeClass("fas fa-unlock");
              i.addClass("fas fa-lock");
              var active = tr.find(".status-active-color").eq(0);
              active.removeClass("fas fa-check status-active-color");
              active.addClass("fas fa-times status-inactive-color");
          }
          // ACTIVE
          else
          {
              $.ajax({
                  url: "/admin/product/update-product-status/"+$this.attr("product-id"),
                  context: document.body,
                  method: "GET"
              }).done(function(rs) {
                  Swal.fire(
                    'Your product is ACTIVE now',
                  )
              });

              i.removeClass("fas fa-lock");
              i.addClass("fas fa-unlock");
              var active = tr.find(".status-inactive-color").eq(0);
              active.removeClass("fas fa-times status-inactive-color");
              active.addClass("fas fa-check status-active-color");
          }
      });
  </script>
@endsection