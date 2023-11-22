<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\wisata;

class AppController extends Controller
{
    //
    public function home(){
        $data = ([
            "name" => "Ahmad",
        ]);
        return view("home",$data);
    }
    
}