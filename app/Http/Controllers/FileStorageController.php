<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileStorageController extends Controller
{

    public function configurationDrivers(Request $request)
    {
        return view('file-storage.configuration-drivers');
    }

    public function storing(Request $request)
    {
        return view('file-storage.storing');
    }

    public function retrieving(Request $request)
    {
        return view('file-storage.retrieving');
    }

    public function customFilesystems(Request $request)
    {
        return view('file-storage.custom-filesystems');
    }

}
