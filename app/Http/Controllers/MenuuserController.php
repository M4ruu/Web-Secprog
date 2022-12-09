<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuuserController extends Controller
{
    //checkifuserlogin
    function index()
    {
        if (auth()->user()) {
            return view('menuuser');
        }
        else {
            return redirect('/login');
        }
    }
}
