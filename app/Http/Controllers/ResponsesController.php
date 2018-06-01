<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponsesController extends Controller
{

    public function cookies(Request $request)
    {
        return view('responses.cookies');
    }

    public function cookiesSave(Request $request)
    {

        if ($request->filled('new-cookie-value')) {
            \Illuminate\Support\Facades\Cookie::queue('app_previous_name', $request->input('new-cookie-value'), 1);
        }

        return response()->redirectToRoute('responses.cookies');
    }

    public function attachingHeaders(Request $request)
    {
        return view('responses.attaching-headers');
    }

    public function encryption(Request $request)
    {
        return view('responses.encryption');
    }

    public function redirects(Request $request)
    {
        return view('responses.redirects');
    }

    public function flashData(Request $request)
    {
        return view('responses.flash-data');
    }

    public function responseTypes(Request $request)
    {
        
        if ($request->filled('json')) {
            return response()->json([
                        'name' => 'Abigail',
                        'state' => 'CA'
            ]);
        }

        return view('responses.response-types');
    }

    public function responseMacros(Request $request)
    {
        return view('responses.response-macros');
    }

}
