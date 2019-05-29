<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Session;
Use Image;


class NewsController extends Controller
{
    public function addNews(Request $request)
    {
    	if($request->isMethod('post'))
    	{
    		$data= $request->all();
    		
    		if(empty($data['news_category_id']))
    		{
    			return redirect()->back()->with('flash_message_error','Missing News Category');
    		}
    		$news = new News;
            // $product->id = $data['product_id'];
    		$news->news_category_id = $data['news_category_id'];
    		$news->news_name = $data['news_name'];
            $news->news_name_en = $data['news_name_en'];
            $news->news_description = $data['news_description'];
            $news->news_description_en = $data['news_description_en'];
            $news->news_alias = $data['news_alias'];
            $news->create_by = $data['create_by'];
            $news->update_by = $data['update_by'];
            

            //Upload Image
            if(Input::hasFile('image'))
            {
                $file = Input::file('image');

                if(isset($file))
                {
                    $news->news_thumbnail = $file->getClientOriginalName();
                                            
                    // Store image name in project table
                    $file->move('index/images/news/', $file->getClientOriginalName());     
                }
                $news->save();
            }


    		return redirect('admin/news/viewnews')->with('flash_message_success' , 'New Added Successfully');
    	}
    	
        $levels = NewsCategory::get();
        $levels = json_decode(json_encode($levels));


    	return view('admin::news.addnews')->with(compact('levels'));
    }

    public function viewnews()
    {   
        $news = News::get();
        $news = json_decode(json_encode($news));
        foreach ($news as $key => $value) {
            $newscategory = NewsCategory::where(['news_category_id'=>$value->news_category_id])->first();
            $news[$key]->news_category_name = $newscategory['news_category_name_en'];
            // echo "<pre>";
            // print_r($newscategory);die;
        }

        
        // echo "<pre>";
        // print_r($productucd);die;
        return view('admin::news.viewnews')->with(compact('news'));
    }

    public function updateNews(Request $request, $id= null)
    {

        if($request->isMethod('post'))
        {
            $data = $request->all();

            $news = new News;


            if(empty($data['news_category_id']))
            {
                return redirect()->back()->with('flash_message_error','Missing News Category');
            }


            if(Input::hasFile('image'))
            {
                $file = Input::file('image');

                if(isset($file))
                {
                    $news->news_thumbnail = $file->getClientOriginalName();
                                            
                    // Store image name in project table
                    $file->move('index/images/news/', $file->getClientOriginalName());  
                     News::where(['news_id'=>$id])->update(['news_category_id'=>$data['news_category_id'], 'news_name'=>$data['news_name'], 'news_name_en'=>$data['news_name_en'], 'news_description'=>$data['news_description'], 'news_description_en'=>$data['news_description_en'], 'news_alias'=>$data['news_alias'], 'news_status'=>$data['news_status'] ,'create_by'=>$data['create_by'], 'update_by'=>$data['update_by'],'news_thumbnail'=>$file->getClientOriginalName()]);   
                }
            }
            else
            {
                $filename = $data['current_image'];
                  News::where(['news_id'=>$id])->update(['news_category_id'=>$data['news_category_id'], 'news_name'=>$data['news_name'], 'news_name_en'=>$data['news_name_en'], 'news_description'=>$data['news_description'], 'news_description_en'=>$data['news_description_en'], 'news_alias'=>$data['news_alias'], 'news_status'=>$data['news_status'] ,'create_by'=>$data['create_by'], 'update_by'=>$data['update_by'],'news_thumbnail'=>$filename]);   
            }

           
            return redirect()->back()->with('flash_message_success' , 'Update Product Successfully');
        }

        $newsDetails = News::where(['news_id'=>$id])->first();
        // echo '<pre>';
        // print_r($newsDetails);die;

        $newscategories = NewsCategory::get();
        $newscategories_dropdown = "<option selected disabled>Select</option>";
        foreach ($newscategories as $newscat) {
            if($newscat->news_category_id==$newsDetails->news_category_id){
                $selected = "selected";
            }else
            {
                $selected = "";
            }
            $newscategories_dropdown .= "<option value='".$newscat->news_category_id."' ".$selected.">".$newscat->news_category_name."</option>";   
        }
        return view('admin::news.updatenews')->with(compact('newsDetails','newscategories_dropdown'));
    }




    

    public function deleteNewsImage($id = null)
    {
        News::where(['news_id'=>$id])->update(['news_thumbnail'=>'']);
        return redirect()->back()->with('flash_message_success' , 'Delete Image Successfully');
    }


    public function deleteNews($id = null)
    {
       
        $newdetail = News::where(['news_id'=>$id])->first()->toArray();

        // echo '<pre>';
        // print_r($newdetail);die;
       
        File::delete('index/images/news/'.$newdetail['news_thumbnail']);
         

        News::where(['news_id'=>$id])->delete();

        return redirect()->back()->with('flash_message_success' , 'Delete Project Successfully');
    }

}
