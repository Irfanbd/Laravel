<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function getdata(Request $req)
    {
        $req->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        return $req->input();
    }
}
