<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public static function store($request){
        $client             = new Client();
        $client->name       = $request->name;
        $client->email      = $request->email;
        $client->subject    = $request->subject;
        $client->message    = $request->message;

        $client->save();
    }
}
