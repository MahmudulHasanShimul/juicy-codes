<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public static function store($request){
        if($request->image){
            $image = $request->image;
            $imageName = 'project-image'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/project-image'),$imageName);
            $storeImage = 'project-image/'.$imageName;
        }

        $project = new Project();
        $project->title         = $request->title;
        $project->project_url   = $request->project_url;
        $project->git_hub       = $request->git_hub;
        $project->description   = $request->description;
        $project->image         = $storeImage;

        $project->save();
    }


    public static function deleteProject($id){
        $project = Project::find($id);
        if(file_exists($project->image)){
            unlink($project->image);
        }
        $project->delete();
    }


    public static function updateProject($request){
        $project = Project::find($request->id);
        if($request->image){
            if(file_exists( $project->image)){
                unlink( $project->image);
            }

            $image = $request->image;
            $imageName = 'project-image'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/project-image'),$imageName);
            $updateImage = 'project-image/'.$imageName;
            $project->image = $updateImage;
        }

        $project->title         = $request->title;
        $project->project_url   = $request->project_url;
        $project->git_hub       = $request->git_hub;
        $project->description   = $request->description;

        $project->save();
    }
}
