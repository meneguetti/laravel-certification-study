<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{

    public function index(Request $request)
    {

        $files = \Illuminate\Support\Facades\Storage::files('images');

        return view('download.index', compact('files'));
    }

    public function get(Request $request)
    {
        
        if ($request->filled('file')) {
            return response()->download(storage_path('app') . DIRECTORY_SEPARATOR . $request->get('file'));
        } else {
            return response()->redirectToRoute('download');
        }
    }

}
