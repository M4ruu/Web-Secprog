<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf,jpg|max:2048'
        ]);
        //storefiletodatabase
        $fileModel = new fileuploadController;
        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->name = time() . '_' . $request->file->getClientOriginalName();
            $fileModel->file_path = '/Storage/app/secprogdb' . $filePath;
            $fileModel->save();
            return back()
                ->with('success', 'Filehasbeenuploaded.')
                ->with('file', $fileName);
        }

    }
}