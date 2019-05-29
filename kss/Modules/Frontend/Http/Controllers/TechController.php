<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Models\Product;
use App\Models\Project;
class TechController extends Controller
{
    public function index()
    {
    	$productradom = Product::inRandomOrder()->take(6)->get();
    	$projectradom = Project::inRandomOrder()->take(6)->get();

        return view('frontend::layoutsUcd.index')->with(compact('productradom' , 'projectradom'));
    }
}
