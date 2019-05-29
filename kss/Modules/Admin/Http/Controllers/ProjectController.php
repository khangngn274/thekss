<?php   
namespace Modules\Admin\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Session;
Use Image;
use App\Models\Project;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;




class ProjectController extends Controller
{
    public function addProject(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data= $request->all();
            // echo "<pre>";
            // print_r($data);die;
            $project = new Project;
            // $project->id = $data['project_id'];
            $project->project_name = $data['project_name'];
            $project->project_name_en = $data['project_name_en'];
            $project->project_description = $data['project_description'];
            $project->project_description_en = $data['project_description_en'];
            $project->project_alias = $data['project_alias'];
            $project->project_type = $data['project_type'];
            $project->project_place = $data['project_place'];

            //Upload Image
            $file = Input::file('image');
            if(isset($file))
            {
                $project->project_thumbnail = $file->getClientOriginalName();
                                        
                // Store image name in project table
                $file->move('backend/img/project/', $file->getClientOriginalName());     
            }
           
            $project->save();

            // echo '<pre>';
            // print_r($file);die;

            
            return redirect('admin/project/viewproject')->with('flash_message_success' , 'project Added Successfully');
        }
        
        return view('admin::project.addproject');
    }

    public function viewProject()
    {   
        $project = Project::get();
        $project = json_decode(json_encode($project));
        
        // echo "<pre>";
        // print_r($projectucd);die;
        return view('admin::project.viewproject')->with(compact('project'));    
    }

    public function deleteProjectImage($id = null)
    {
        Project::where(['project_id'=>$id])->update(['project_thumbnail'=>'']);
        return redirect()->back()->with('flash_message_success' , 'Delete Image Successfully');
    }


     public function updateProject(Request $request, $id= null)
    {

        if($request->isMethod('post'))
        {
            $data = $request->all();

            $file = Input::file('image');
            $project = new Project;

            if(isset($file))
            {
                $project->project_thumbnail = $file->getClientOriginalName();
                                        
                // Store image name in project table
                $file->move('backend/img/project/', $file->getClientOriginalName()); 
                Project::where(['project_id'=>$id])->update([ 'project_name'=>$data['project_name'], 'project_name_en'=>$data['project_name_en'], 'project_place'=>$data['project_place'], 'project_alias'=>$data['project_alias'], 'project_description'=>$data['project_description'], 'project_description_en'=>$data['project_description_en'],'project_thumbnail'=>$file->getClientOriginalName()]);
    
            }
            else
            {
                $file = $data['current_image'];
                 Project::where(['project_id'=>$id])->update([ 'project_name'=>$data['project_name'], 'project_name_en'=>$data['project_name_en'], 'project_place'=>$data['project_place'], 'project_type'=>$data['project_type'], 'project_alias'=>$data['project_alias'], 'project_description'=>$data['project_description'], 'project_description_en'=>$data['project_description_en'],'project_thumbnail'=>$file]);
            }


            return redirect()->back()->with('flash_message_success' , 'Update project Successfully');
        }

        $projectDetails = Project::where(['project_id'=>$id])->first();

        // echo '<pre>';
        // print_r($thumbnail);die;
        // echo '</pre>';

        return view('admin::project.updateproject')->with(compact('projectDetails'));
    }



    public function deleteProject($id = null)
    {
        if(!empty($id))
        {
            Project::where(['project_id'=>$id])->delete();
            $projectDetails = Project::where(['project_id'=>$id])->first();
            File::delete('backend/img/project/'.$projectDetails['project_thumbnail']);
            return redirect()->back()->with('flash_message_success' , 'Project Deleted Successfully');
        }
    }


}