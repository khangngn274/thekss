<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index($id=null)
    {
        if($id)
        {
            $products = DB::table('tbl_product')->where('product_category_id' , $id)->paginate(9);
            // $products  = Product::where('product_category_id' , $id)->get();
            $categories  = Category::where('category_parent_id' , 1)->get();
            return view('frontend::layoutsProduct.product')->with(compact('products', 'categories'));;
        }
        else
        {   
            $products = DB::table('tbl_product')->where('product_status','active')->paginate(9);

            // $products = Product::all();
            $categories  = Category::where('category_parent_id' , 1)->get();
        }
        return view('frontend::layoutsProduct.product')->with(compact('products', 'categories'));

        
    }


    public function productDetails($id = null)
    {
        $productradom = Product::inRandomOrder()->take(9)->get();
        $product = Product::where(['product_id'=>$id])->get()->first()->toArray();
        return view('frontend::layoutsProduct.productdetails')->with(compact('product','productradom'));
    }

    // public function postIndex($id)
    // {
    //     if($id)
    //     {
    //         $products  = Product::where('product_category_id' , $id)->get();
    //         $categories  = Category::where('category_parent_id' , 1)->get();
    //         return view('frontend::layoutsProduct.product')->with(compact('products', 'categories'));;
    //     }
    // }
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('frontend::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('frontend::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('frontend::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function comingsoon()
    {
        return view('frontend::error.error');

    }

   
}
