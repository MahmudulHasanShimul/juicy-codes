<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $project = Project::all()->take(2);
        return view('frontend.home.index',['projects'=>$project]);
    }
}
