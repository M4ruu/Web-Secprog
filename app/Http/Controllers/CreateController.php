<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    //checkifuserlogin
    function index()
    {
        if (auth()->user()) {
            return view('create');
        }
        else {
            return redirect('/login');
        }
    }

    //validationtitle
    function validateTitle(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:255'
        ]);
    }
}
