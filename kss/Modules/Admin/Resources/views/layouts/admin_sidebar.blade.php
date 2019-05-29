<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href={{ url('/admin/index')}}><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Category</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{ url('/admin/category/viewcategory') }}">List Category</a></li>
        <li><a href="{{ url('/admin/category/addcategory') }}">Add Category</a></li>
      </ul>
    </li>

     <li class="submenu"> <a href="#"><i class="fab fa-product-hunt"></i> <span>Product</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{ url('/admin/product/viewproduct') }}">List Product</a></li>
        <li><a href="{{ url('/admin/product/addproduct') }}">Add Product</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="fab fa-product-hunt"></i> <span>Project</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{ url('/admin/project/viewproject') }}">List Project</a></li>
        <li><a href="{{ url('/admin/project/addproject') }}">Add Project</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>News Category</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{ url('/admin/newscategory/viewnewscategory') }}">List Category</a></li>
        <li><a href="{{ url('/admin/newscategory/addnewscategory') }}">Add Category</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>News</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="{{ url('/admin/news/viewnews') }}">List News</a></li>
        <li><a href="{{ url('/admin/news/addnews') }}">Add News</a></li>
      </ul>
    </li>
   
  </ul>
</div>

