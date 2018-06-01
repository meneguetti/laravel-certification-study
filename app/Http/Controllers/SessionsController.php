<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function configuration(Request $request)
    {

        return view('sessions.configuration');
    }

    public function storingData(Request $request)
    {

        $request->session()->put('test-session', 'Great, it indeed work!');

        return view('sessions.storing-data');
    }

    public function retrievingData(Request $request)
    {
        
        return view('sessions.retrieving-data');
    }

    public function deletingData(Request $request)
    {

        return view('sessions.deleting-data');
    }

    public function flashData(Request $request)
    {

        return view('sessions.flash-data');
    }

    public function customDrivers(Request $request)
    {

        return view('sessions.custom-drivers');
    }

}
