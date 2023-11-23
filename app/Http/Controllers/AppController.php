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

    public function tambah(){
        return view("tambah");
    }
    public function proses_tambah(Request $request){
        $id = $request->id;
        $name = $request->name;
        $location = $request->location;
        $details = $request->details;
        $day_open = $request->day_open;
        $time_open = $request->time_open;
        $price = $request->price;

        Wisata::create([
            "id" => $id,
            "name" => $name,
            "location" => $location,
            "details" => $details,
            "day_open" => $day_open,
            "time_open" => $time_open,
            "price" => $price
        ]);

        session()->flash("pesan","Data berhasil ditamabh");

        return redirect("wisata");
    }
    
    public function edit($id){
        $wisata = Wisata::where("id", $id)->first();

        if(!$wisata){
            abort(404);
        }

        $data = ([
            "wisata" => $wisata
        ]);

        return view("edit",$data);
    }

    public function proses_edit(Request $request){
        $id = $request->id;
        $name = $request->name;
        $location = $request->location;
        $details = $request->details;
        $day_open = $request->day_open;
        $time_open = $request->time_open;
        $price = $request->price;

        Wisata::where("id",$id)->update([
            "id" => $id,
            "name" => $name,
            "location" => $location,
            "details" => $details,
            "day_open" => $day_open,
            "time_open" => $time_open,
            "price" => $price
        ]);

        session()->flash("pesan","Data berhasil diubah");

        return redirect("wisata/".$id."/edit");
    }
}