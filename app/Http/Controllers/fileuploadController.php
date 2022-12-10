<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Gambar;
//usesession
use Illuminate\Support\Facades\Session;





class fileuploadController extends Controller
{
    //getemailsession

    function index()
    {
        //checkifuserislogin
        if (auth()->user()) {
            return view('upload');
        }
        else {
            return redirect('/login');
        }
    }
    function upload(Request $request)
    {
        // dd($request);
        $request->validate([
            'file' => 'required|image|max:2048'

        ]);
        Gambar::create([    
            'image' => $request->file->store('images', 'public'),
            'keterangan' => request('keterangan'),
            'email' => request('email')
            
        ]);
        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $request->file->getClientOriginalName());
    }
}