<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\wisata;

class AppController extends Controller
{
    //
    public function home(){
        return view("home");
    }
    
    public function wisata(){
        $wisata = Wisata::get();

        $data = ([
            "wisata" => $wisata,
        ]);

        return view("wisata", $data);
    }
}