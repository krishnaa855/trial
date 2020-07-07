<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
   function form (Request $request){
        return $request->input();
    }
}

