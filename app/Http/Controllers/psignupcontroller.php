<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\signupmodel;
use Illuminate\Support\Facades\DB;


class psignupcontroller extends Controller
{
    
    //
    function signup(Request $req){
        // return redirect('products');
        
        $data=DB::select("SELECT * FROM `psignup` WHERE (`psignup`.`email` = '$req->email')");
        if($data){
            
            return redirect('signin');
        }
        else {
            $model= new signupmodel;
        
        $model->name=$req->name;
        $model->email=$req->email;
        $model->password=$req->password;
        $model->cpassword=$req->cpassword;
        $model->number=$req->number;
       
        $model->save();
        DB::select("CREATE TABLE `anshu`.`$req->email` ( `carts` VARCHAR(20) NOT NULL , `amount` INT(10) NOT NULL , `ordered` VARCHAR(20) NOT NULL , `id` INT NOT NULL AUTO_INCREMENT,`name` VARCHAR(30) NOT NULL,`email` VARCHAR(50) NOT NULL,`address` VARCHAR(100) NOT NULL,`city` VARCHAR(30) NOT NULL,`state` VARCHAR(40) NOT NULL,`pin` BIGINT(6) NOT NULL,`cardname` VARCHAR(30) NOT NULL,`cardnumber` VARCHAR(19) NOT NULL,`expmonth` VARCHAR(20) NOT NULL, `expyear` INT(10) NOT NULL,`cvv` INT(3) NOT NULL,`sameadr` VARCHAR(10) NOT NULL, PRIMARY KEY (`id`) ) ENGINE = InnoDB");
        return redirect('index');

        }
        
    }
    function signin(Request $req){
        // return redirect('products');
        $email=$req->email;
        $password=$req->password;
        $data=DB::select("SELECT * FROM `psignup` WHERE (`psignup`.`email` = '$email' and `psignup`.`password` = '$password')");
        
        if($data){
            $email= $req->input('email');
        
        $userdata=DB::select("SELECT * FROM `$email`") ;
        $req -> session() ->put('email',$email);
        // $email ->session()->put('carts', );
        // $email ->session()->put('amount', );

        return view('aftersignin',['members'=>$userdata]);
        
        }
        else {
            return back();

        }
    }
    function getuserdata(){
        // $data=model1::paginate(10);
        $data=usermodel::all();
        return view('fetch', ['members'=>$data]);
    }
    function checksignin() {
        if(session()->has('email')){
            $email=session('email');
            $userdata=DB::select("SELECT * FROM `$email`") ;
            return view('aftersignin',['members'=>$userdata]);
        }
        return view('signin');
    }
    function addedcart($name,$amount){
        if(session()->has('email')){
            $email=session('email');
            DB::select("INSERT INTO `$email` (`carts`, `amount`, `ordered`, `id`, `name`, `email`, `address`, `city`, `state`, `pin`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`, `sameadr`) VALUES ('$name', '$amount', 'carted', NULL, 'none', 'none', 'none', 'none', 'none', '00', 'none', 'none', 'none', '00', '00', '00');") ;
            return back();
        }
        return view('signin');
    }
    function checkoutdetail(Request $req){
        $email=session('email');

        DB::select("INSERT INTO `$email` (`carts`, `amount`, `ordered`, `id`, `name`, `email`, `address`, `city`, `state`, `pin`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`, `sameadr`) VALUES ('$req->carts', '$req->amount', 'ordered', NULL, '$req->name', '$req->email', '$req->address', '$req->city',  '$req->state', '$req->pin', '$req->cardname','$req->cardnumber','$req->expmonth', '$req->expyear', '$req->cvv', '$req->sameadr');") ;
        $name=$req->name;
        $amount=$req->amount;
        return view('checkoutdone', compact('name','amount'));
    }
    function deleteuserdata($name){
        $email=session('email');
        DB::select("DELETE FROM `$email` WHERE `$email`.`carts` = '$name';");
        return back();
   }
   function beforecheck($name,$amount){
    // echo $name;
    // echo $amount;
    if(session()->has('email')){
    return view('check_out_form', compact('name','amount'));
    }
    else{
        return redirect('signin');
    }
}
}

