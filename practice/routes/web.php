<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Users;

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

// Route::get('/users/{name}', function ($name) {
//     return view('users',['name'=>$name]);
// });
// Route::POST("users",[UsersController::class,'getdata']);
// Route::view("login","users");


// Route::get('/about', function()
// {
// return view('about');
// });

// Route:: view("about","about");
// Route:: view ("contact","contact");

// Route:: get("users",[Users::class,'index']);

Route::get('/', function () {
    return view('welcome');
});
Route::get("users",[UsersController::class,'viewload']);