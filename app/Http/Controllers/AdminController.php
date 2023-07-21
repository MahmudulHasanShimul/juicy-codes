<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $client = Client::all();
        return view('backend.dashboard.index',['clients'=>$client]);
    }


}
