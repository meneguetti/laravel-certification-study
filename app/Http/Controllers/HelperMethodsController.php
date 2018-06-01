<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperMethodsController extends Controller
{

    public function arraysObjects(Request $request)
    {
        return view('helper-methods.arrays-objects');
    }

    public function paths(Request $request)
    {
        return view('helper-methods.paths');
    }

    public function strings(Request $request)
    {
        return view('helper-methods.strings');
    }

    public function urls(Request $request)
    {
        return view('helper-methods.urls');
    }

    public function misc(Request $request)
    {
        return view('helper-methods.misc');
    }

}
