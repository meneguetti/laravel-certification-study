<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllersController extends Controller
{

    public function defining(Request $request)
    {
        return view('controllers.defining');
    }

    public function dependencyInjection(Request $request)
    {
        return view('controllers.dependency-injection');
    }

    public function routeCaching(Request $request)
    {
        return view('controllers.route-caching');
    }

}
