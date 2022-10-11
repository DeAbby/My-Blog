<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $data= user::latest()->first();
        log::debug("YOUTTAG",[$data]);
        return view('login'); // next:- page name created with next.blade.php 
    }
}
