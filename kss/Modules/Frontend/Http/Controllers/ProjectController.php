<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Models\Project;


class ProjectController extends Controller
{
    public function getucdproject()
    {
    	$projectAll = Project::get();
        return view('frontend::layoutsUcd.projectucd.viewproject')->with(compact('projectAll'));
    }
}
