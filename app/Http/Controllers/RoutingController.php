<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{
    public function redirects(Request $request)
    {
        return view('routing.redirects');
    }
    
    public function parameters(Request $request)
    {
        return view('routing.parameters');
    }
    
    public function namedRoutes(Request $request)
    {
        return view('routing.named-routes');
    }
    
    public function groups(Request $request)
    {
        return view('routing.groups');
    }
    
    public function modelBinding(Request $request)
    {
        return view('routing.model-binding');
    }
    
    public function rateLimiting(Request $request)
    {
        return view('routing.rate-limiting');
    }
}
