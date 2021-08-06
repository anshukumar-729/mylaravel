<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mylogincontroller extends Controller
{
    //
    function loginform(Request $req){
        $data= $req->input('name');
        $req -> session() ->put('name',$data);
        return redirect('profile');
    }
}
