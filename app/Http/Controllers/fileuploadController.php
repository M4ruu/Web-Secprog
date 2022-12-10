<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Gambar;




class fileuploadController extends Controller
{

    // function uid(){
    //     $uid = uniqid();    
    //     $uid = session()->put('uid', $uid);
    //     return $uid;
    // }

    // //storeuid
    // function storeuid(Request $request){
    //     $uid = uniqid(); 
    //     $uid = session()->put('uid', $uid);
    //     return $uid;
    // }
        //getuidloggedinuser
    function getuid(){
        $uid = Auth::user()->id;
        return $uid;
    }

    //storeuid
    function storeuid(Request $request){
        $uid = Auth::user()->id;
        return $uid;
    }

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
        $request->validate([
            'file' => 'required|image|max:2048'
        ]);
        Gambar::create([
            'image' => $request->file->store('images', 'public'),
            'keterangan' => request('keterangan'),
        ]);
        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $request->file->getClientOriginalName());
    }

}