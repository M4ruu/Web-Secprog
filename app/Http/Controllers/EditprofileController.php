<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gambar;

class EditprofileController extends Controller
{
    function index()
    {
        if(auth()->user())
        {
            $data = Gambar::where('email', auth()->user()->email)->get();
            return view('/editprofile', ['data' => $data]);
        }
        else
        {
            return redirect('login');
        }

    }

    function edit($id){
        $gambar = Gambar::find($id);
        return view('editketerangan', ['gambar' => $gambar]);
    }

    function update(Request $request){
        $request->validate([
            'file' => 'required|image|max:2048'
        ]);

        $gambar = Gambar::find($request->id);

        $gambar->update([
            'image' => $request->file->store('images', 'public'),
            'keterangan' => $request->keterangan
        ]);
        return redirect('editprofile');
    }
}
