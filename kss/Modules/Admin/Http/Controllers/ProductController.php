<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Session;
Use Image;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
    	if($request->isMethod('post'))
    	{
    		$data= $request->all();
    		// echo "<pre>";
    		// print_r($data);die;
    		if(empty($data['product_category_id']))
    		{
    			return redirect()->back()->with('flash_message_error','Missing Category');
    		}
    		$product = new Product;
            // $product->id = $data['product_id'];
            $product->product_category_id = $data['product_category_id'];
            $product->product_alias = $data['product_alias'];
    		$product->product_name = $data['product_name'];
    		$product->product_name_en = $data['product_name_en'];
    		$product->product_code = $data['product_code'];
    		$product->product_description = $data['product_description'];
            $product->product_description_en = $data['product_description_en'];
            $product->product_applications = $data['product_applications'];
            $product->product_applications_en = $data['product_applications_en'];
            $product->product_specification = $data['product_specification'];
            $product->product_specification_en = $data['product_specification_en'];
            $product->product_features = $data['product_features'];
            $product->product_features_en = $data['product_features_en'];
    		$product->product_price = $data['product_price'];

            //Upload Image
            $file = Input::file('image');
            if(isset($file))
            {
                $product->product_image = $file->getClientOriginalName();
                                        
                // Store image name in project table
                $file->move('backend/img/product/', $file->getClientOriginalName());     
            }
            $product->save();

    		return redirect('admin/product/viewproduct')->with('flash_message_success' , 'Product Added Successfully');
    	}
        $levels = Category::select('category_id','category_name','category_parent_id')->get()->toArray();

    	return view('admin::product.addproduct')->with(compact('levels'));
    }

    public function viewProduct()
    {   
        $products = Product::get();
        $products = json_decode(json_encode($products));
        foreach ($products as $key => $value) {
            $category = Category::where(['category_id'=>$value->product_category_id])->first();
            $products[$key]->product_category_name = $category['category_name_en'];
        }

        
        // echo "<pre>";
        // print_r($productucd);die;
        return view('admin::product.viewproduct')->with(compact('products'));
    }

    public function updateProduct(Request $request, $id= null)
    {

        if($request->isMethod('post'))
        {
            $data = $request->all();

            $file = Input::file('image');
            $product = new Product;

            if(isset($file))
            {
                $product->product_image = $file->getClientOriginalName();
                                        
                // Store image name in project table
                $file->move('backend/img/product/', $file->getClientOriginalName()); 
                Product::where(['product_id'=>$id])->update(['product_category_id'=>$data['product_category_id'],'product_alias'=>$data['product_alias'], 'product_name'=>$data['product_name'], 'product_name_en'=>$data['product_name_en'], 'product_code'=>$data['product_code'], 'product_description'=>$data['product_description'], 'product_description_en'=>$data['product_description_en'], 'product_applications'=>$data['product_applications'], 'product_applications_en'=>$data['product_applications_en'],'product_specification'=>$data['product_specification'], 'product_specification_en'=>$data['product_specification_en'],'product_features'=>$data['product_features'], 'product_features_en'=>$data['product_features_en'], 'product_price'=>$data['product_price'],'product_image'=>$file->getClientOriginalName()]);
    
            }
            else
            {
                $file = $data['current_image'];
                Product::where(['product_id'=>$id])->update(['product_category_id'=>$data['product_category_id'],'product_alias'=>$data['product_alias'], 'product_name'=>$data['product_name'], 'product_name_en'=>$data['product_name_en'], 'product_code'=>$data['product_code'], 'product_description'=>$data['product_description'], 'product_description_en'=>$data['product_description_en'], 'product_applications'=>$data['product_applications'], 'product_applications_en'=>$data['product_applications_en'],'product_specification'=>$data['product_specification'], 'product_specification_en'=>$data['product_specification_en'],'product_features'=>$data['product_features'], 'product_features_en'=>$data['product_features_en'], 'product_price'=>$data['product_price'],'product_image'=>$file ]);
            }

            

          
            return redirect()->back()->with('flash_message_success' , 'Update Product Successfully');
        }

        $productDetails = Product::where(['product_id'=>$id])->first();



        $categories = Category::where(['category_parent_id'=>0])->get();
        $currrentCategory = Category::where(['category_id'=>$productDetails->product_category_id])->first();

        //  echo '<pre>';
        // print_r($categories);die;
        $categories_dropdown = "<option selected disabled>Select</option>";
        foreach ($categories as $cat) {
            if($cat->category_id==$productDetails->product_category_id){
                $selected = "selected";
            }else
            {
                $selected = "";
            }
            $categories_dropdown .= "<option value='".$cat->category_id."' ".$selected.">".$cat->category_name."</option>";
            $sub_categories = Category::where(['category_parent_id'=> $cat->category_id])->get();
            foreach ($sub_categories as $sub_cat) {
                 if($sub_cat->category_id==$productDetails->product_category_id){
                    $selected = "selected";
                }else
                {
                    $selected = "";
                }
                $categories_dropdown .= "<option value='".$sub_cat->category_id."' ".$selected."   >&nbsp;-&nbsp;".$sub_cat->category_name."</option>";
            }
        }




        return view('admin::product.updateproduct')->with(compact('productDetails','categories_dropdown'));
    }

    public function deleteProductImage($id = null)
    {
        Product::where(['product_id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_success' , 'Delete Image Successfully');
    }


    public function deleteProduct($id = null)
    {

        Product::where(['product_id'=>$id])->delete();
        $productDetails = Product::where(['product_id'=>$id])->first();
        File::delete('backend/img/project/'.$productDetails['product_image']);
        return redirect()->back()->with('flash_message_success' , 'Product Deleted Successfully');
    }

    public function updateStatus($id = null)
    {
        $product =Product::where(['product_id'=>$id])->first();
        if($product['product_status'] == 'inactive')
        {
            Product::where(['product_id'=>$id])->update(['product_status'=>'active']);
        }else
        {
            Product::where(['product_id'=>$id])->update(['product_status'=>'inactive']);
        }
        return redirect()->back()->with('flash_message_success' , 'Status Update Successfully');

    }
}
