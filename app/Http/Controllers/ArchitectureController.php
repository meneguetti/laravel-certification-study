<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchitectureController extends Controller
{

    public function requestLifecycle(Request $request)
    {
        return view('architecture.request-lifecycle');
    }

    public function serviceContainer(Request $request)
    {
        return view('architecture.service-container');
    }

    public function serviceProviders(Request $request)
    {
        return view('architecture.service-providers');
    }

    public function serviceFacades(Request $request)
    {
        return view('architecture.service-facades');
    }

    public function httpVerbs(Request $request)
    {
        return view('architecture.http-verbs');
    }

}
