<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
   function viewLoad()
   {
       return view('users',['user'=>'Annanto']);
   }
}
