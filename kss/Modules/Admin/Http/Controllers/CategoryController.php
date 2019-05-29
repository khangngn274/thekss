<?php   
namespace Modules\Admin\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Hash;

// use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Illuminate\Http\Request;
// use Auth;


class CategoryController extends Controller{

    public function addCategory(Request $request)
    {
        if($request->isMethod('post')) {
            $data=$request->all();
            $categories = new Category;
            $categories->category_name = $data['category_name'];
            $categories->category_name_en = $data['category_name_en'];
            $categories->category_parent_id = $data['parent_id'];
            $categories->category_description = $data['description'];
            $categories->category_description_en = $data['description_en'];
            $categories->category_alias = $data['url'];
            $categories->save();
            return redirect('/admin/category/viewcategory')->with('flash_message_success' , 'Category Added Successfully');
        }

        $levels = Category::select('category_id','category_name','category_parent_id')->get()->toArray();
        return view('admin::categories.addcategory')->with(compact('levels'));
    }

    public function viewCategory(){
        $categories = Category::get();
        return view('admin::categories.viewcategory')->with(compact('categories'));
        
    }

    public function updateCategory(Request $request , $id = null){
        if($request->isMethod('post')) {
            $data=$request->all();
            Category::where(['category_id'=>$id])->update(['category_name'=>$data['category_name'], 'category_name_en'=>$data['category_name_en'], 'category_description'=>$data['description'], 'category_description_en'=>$data['description_en'], 'category_alias'=>$data['url'] ]);
            return redirect('/admin/category/viewcategory')->with('flash_message_success' , 'Category Updated Successfully');
        }

        $levels = Category::where(['category_parent_id' => 0])->get();
        $categoryDetails = Category::where(['category_id'=> $id])->first();
        return view('admin::categories.editcategory')->with(compact('categoryDetails','levels'));
    }

    public function deleteCategory($id = null)
    {
        if(!empty($id))
        {
            Category::where(['category_id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success' , 'Category Deleted Successfully');

        }
    }

}


