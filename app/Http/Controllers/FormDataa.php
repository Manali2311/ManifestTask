<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileModel;

class FormDataa extends Controller
{
    function Add(Request $req){
        $filenamewithex = $req->file("file")->getClientOriginalName();
        $path = $req->file('file')->storeAs('public\images',$filenamewithex);
       
$profile = new ProfileModel;
$profile->Name = $req->name;
$profile->Address = $req->address;
$profile->Phoneno = $req->phoneno;
$profile->Photo = $filenamewithex;

$profile->save();

return redirect('/ShowAll');

    }

    function ShowAll(){
        $data=ProfileModel::all();
        return view("/Show",["data"=>$data]);
    }
}
