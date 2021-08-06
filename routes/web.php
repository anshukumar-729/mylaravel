<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\modelcontroller;
use App\Http\Controllers\Mylogincontroller;
use App\Http\Controllers\psignupcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('anshu');
// });
Route::get('/', function () {
    return view('index');
});
// Route::get('/user/{name}', function ($name) {
//     return view('users',["me"=>$name]);
// });
//fetching data by class
// Route::get("users",[UserController::class,'index']);

//fetching data by model
// Route::get('users',[modelcontroller::class, 'getData']);

//Session start
// Route::post('user',[Mylogincontroller::class, 'loginform']);
// Route::view('login','login');
// Route::view('profile','profile');

// Route::get('/logout', function () {
//     if(session()->has('name')){
//         session()->pull('name',null);
//     }
//     return redirect('login');
// });
// Route::get('/login', function () {
//     if(session()->has('name')){
//         return view('profile');
//     }
//     return view('login');
// });
//Session end
// Route::view("user","users");
// Route::view("about","about");

// Route::get('user',[modelcontroller::class,'saveData']);
// Route::get('fetching',[modelcontroller::class,'getData']);
// Route::get('delete/{Sno}',[modelcontroller::class,'deleteData']);
// Route::get('delete/{Sno}',[usercontroller::class,'deleteData']);
// Route::get('updating',[usercontroller::class,'updateData']);
// Route::view("users",'table1form');
// Route::view('done','done');
// Route::view('fetch','fetch');
// Route::view('update','update');
// Route::view('falseupdate','falseupdate');


Route::view('index','index');
Route::view('products','products');
Route::view('about us','about us');
Route::view('signin','signin');
Route::view('new','new');
Route::view('login','login');
Route::view('address','address');
Route::view('blogs','blogs');
Route::view('check_out_form','check_out_form');
Route::get('psignup',[psignupcontroller::class,'signup']);
Route::get('psignin',[psignupcontroller::class,'signin']);
Route::view('aftersignin','aftersignin');
Route::get('/userlogout', function () {
        if(session()->has('email')){
            session()->pull('email',null);
        }
        return redirect('signin');
    });
Route::get('signin',[psignupcontroller::class,'checksignin']);
Route::get('addedcart/{name}/{amount}',[psignupcontroller::class,'addedcart']);
Route::get('delete/{name}',[psignupcontroller::class,'deleteuserdata']);
Route::get('beforecheck/{name}/{amount}',[psignupcontroller::class,'beforecheck']);
Route::get('checkoutdetail',[psignupcontroller::class,'checkoutdetail']);
Route::view('checkoutdone','checkoutdone');



 
