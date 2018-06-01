<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrlGenerationController extends Controller
{
    
    public function namedRoutes(Request $request)
    {
        return view('url-generation.named-routes');
    }
    
    public function controllerActions(Request $request)
    {
        return view('url-generation.controller-actions');
    }
    
    public function defaultValues(Request $request)
    {
        return view('url-generation.default-values');
    }
}
