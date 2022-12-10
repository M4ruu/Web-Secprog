<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

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
            'title' => 'required|min:5|max:255',
            'body' => 'required|min:5|max:255',
        ]);

        Article::create([
            'title' => request('title'),
            'body' => request('body')
        ]);
        return redirect('/create');
    }
    //htmlescapevalidation
    function escapeHtml($string)
    {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
}
