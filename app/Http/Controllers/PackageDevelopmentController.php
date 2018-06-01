<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageDevelopmentController extends Controller
{

    public function discovery(Request $request)
    {
        return view('package-development.discovery');
    }

    public function serviceProviders(Request $request)
    {
        return view('package-development.service-providers');
    }

    public function resources(Request $request)
    {
        return view('package-development.resources');
    }

    public function commands(Request $request)
    {
        return view('package-development.commands');
    }

    public function assets(Request $request)
    {
        return view('package-development.assets');
    }

    public function publishingFileGroups(Request $request)
    {
        return view('package-development.publishing-file-groups');
    }

}
