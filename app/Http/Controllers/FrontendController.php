<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function bladeTemplating(Request $request)
    {
        return view('frontend.blade-templating');
    }

    public function localization(Request $request)
    {

        if ($request->filled('lang')) {
            \Illuminate\Support\Facades\App::setLocale($request->input('lang'));
        }

        return view('frontend.localization');
    }

    public function assetCompilation(Request $request)
    {
        return view('frontend.asset-compilation');
    }

}
