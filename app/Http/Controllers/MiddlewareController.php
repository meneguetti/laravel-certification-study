<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareController extends Controller
{

    public function definingRegistering(Request $request)
    {
        return view('middleware.defining-registering');
    }

    public function parameters(Request $request)
    {
        return view('middleware.parameters');
    }

}
