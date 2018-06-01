<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{

    public function index(Request $request)
    {

        return view('upload.index');
    }

    public function post(Request $request)
    {
        if ($request->hasFile('file')) {
            $filename = $request->file('file')->store('images');

            return response()->redirectToRoute('upload')->withInput(['filename' => $filename]);
        }

        return response()->redirectToRoute('upload')->withInput(['file_missing' => true]);
    }

}
