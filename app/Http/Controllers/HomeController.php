<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        //menu
        if (\Illuminate\Support\Facades\Cache::store('file')->has('welcome.content')) {
            $contentRendered = \Illuminate\Support\Facades\Cache::store('file')->get('welcome.content');
        } else {
            $contentRendered = view('welcome-render', ['items' => \App\Menu::items()])->render();
            \Illuminate\Support\Facades\Cache::store('file')->put('welcome.content', $contentRendered, 60);
        }

        return view('welcome', compact('contentRendered'));
    }

}
