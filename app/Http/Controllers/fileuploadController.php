<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\Gambar;


class fileuploadController extends Controller
{
    //
    function index()
    {
        return view('upload');
    }
    function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|max:2048'
        ]);
        // $request->validate([
        //     'keterangan' => 'required|string|max:255'
        // ]);
        Gambar::create([
            'image' => $request->file->store('images', 'public')
        ]);
        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $request->file->getClientOriginalName());
    }

}