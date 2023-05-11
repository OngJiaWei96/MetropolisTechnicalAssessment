<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;


class Visitors extends Controller
{
    //
    function save(Request $req)
    {
        // print_r($req->input());
        $user= new User;
        $user->name= $req->name;
        $user->contactnumber= $req->contactnumber;
        $user->purpose= $req->purpose;
        $user->save();
        
    }
}
