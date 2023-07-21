<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function storeMessage(Request $request){
        $request->validate([
            'name' => 'required | max:255',
            'email' => 'required',
            'message' => 'required'
        ],[
            'name.max' => 'You Can not use more than 255 characters'
        ]);
        Client::store($request);
        return back()->with('msg','Message sent');
    }

    public function deleteMessage($id){
        $client = Client::find($id);
        $client->delete();
        return back()->with('msg','Message is Deleted');
    }
}
