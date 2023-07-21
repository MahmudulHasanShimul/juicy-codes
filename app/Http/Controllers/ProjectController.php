<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function createProject(){
        return view('backend.projects.add');
    }

    public function storeProject(Request $request){
        Project::store($request);
        return back()->with('msg','Project is Submitted Successfully');
    }

    public function manageProject(){
        $project = Project::all();
        return view('backend.projects.manage',['projects'=>$project]);
    }

    public function deleteProject($id){
        Project::deleteProject($id);
        return back()->with('msg','Project is Deleted');
    }

    public function editProject($id){
        $project = Project::find($id);
        return view('backend.projects.edit',['project'=>$project]);
    }

    public function updateProject(Request $request){
        Project::updateProject($request);
        return redirect(route('project.manage'))->with('noti','Project is Updated');

    }
}
