<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model1;

class modelcontroller extends Controller
{
    //
    // function getData()
    // {
    // return model1::all();
        
    // }
    function saveData(Request $req)
    {
        $model1= new model1;
        if($req->name){
        $model1->Name=$req->name;
        }
        else{
            $model1->Name="None";
        }
        if($req->sub){
        $model1->sub=$req->sub;
        }
        else{
            $model1->sub="None";
        }
        if($req->marks){
        $model1->marks=$req->marks;
        }
        else{
            $model1->marks="00";
        }
        $model1->save();
        return redirect('done');
        
    }
    function getData(){
        // $data=model1::paginate(10);
        $data=model1::all();
        return view('fetch', ['members'=>$data]);
    }
    function deleteData($Sno){
       $data=model1::find('Sno');
       $data->delete();
       return redirect('fetching');
    }
}
