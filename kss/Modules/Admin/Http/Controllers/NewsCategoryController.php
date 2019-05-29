<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Models\NewsCategory;

class NewsCategoryController extends Controller
{
     public function addNewsCategory(Request $request)
    {
        if($request->isMethod('post')) {
            $data=$request->all();
            $news_categories = new NewsCategory;
            $news_categories->news_category_name = $data['news_category_name'];
            $news_categories->news_category_name_en = $data['news_category_name_en'];
            $news_categories->news_category_alias = $data['url'];
            $news_categories->save();
            return redirect('/admin/newscategory/viewnewscategory')->with('flash_message_success' , 'News Category Added Successfully');
        }

        return view('admin::newscategory.addnewscategory');
    }

    public function viewNewsCategory(){
        $news_categories = NewsCategory::get();
        return view('admin::newscategory.viewnewscategory')->with(compact('news_categories'));
        
    }

    public function updateNewsCategory(Request $request , $id = null){
        if($request->isMethod('post')) {
            $data=$request->all();
            NewsCategory::where(['news_category_id'=>$id])->update(['news_category_name'=>$data['news_category_name'], 'news_category_name_en'=>$data['news_category_name_en'], 'news_category_alias'=>$data['url'] ]);
            return redirect('/admin/newscategory/viewnewscategory')->with('flash_message_success' , 'News Category Updated Successfully');
        }

        $newscategoryDetails = NewsCategory::where(['news_category_id'=> $id])->first();
        return view('admin::newscategory.editnewscategory')->with(compact('newscategoryDetails'));
    }

    public function deleteNewsCategory($id = null)
    {
        if(!empty($id))
        {
            NewsCategory::where(['news_category_id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success' , 'News Category Deleted Successfully');

        }
    }

}
