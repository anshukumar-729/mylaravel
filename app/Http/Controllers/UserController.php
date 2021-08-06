<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // function getData(Request $req){
        
    //     return $req->input();
    // }
    function deleteData($Sno){
        
         DB::select("DELETE FROM `table1` WHERE `table1`.`Sno` = $Sno ");
         return redirect('fetching');
    }
    function updateData(Request $req){
         
        $sno=$req->sno;
        $name=$req->name;
        $marks=$req->marks;
        $sub=$req->sub;
        if($sno && $name && $marks && $sub){
        $temp=DB::select("SELECT * FROM `table1` WHERE (`table1`.`Sno` = $sno)");
        if($temp){
        DB::select("UPDATE `table1` SET `Name` ='$name', `marks` = '$marks', `sub` = '$sub' WHERE `table1`.`Sno` = '$sno'; ");
        return redirect('fetching');
        }
        else{
            return redirect('falseupdate');
        }
     }
     else{
          return redirect('update');
     }
        
   }
   
}
