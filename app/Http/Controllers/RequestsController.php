<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psr\Http\Message\ServerRequestInterface;

class RequestsController extends Controller
{
    public function psr7(ServerRequestInterface $request)
    {
        
        //if it was passed any name variable through flash messages
        if (!empty(old('name'))) {
            \Illuminate\Support\Facades\Cookie::queue('app_previous_name', old('name'), 1);
        }

        if(!empty(old('json'))){
            return response()->json(['name' => old('name') ?? 'Default Name',  'age' => 32]);            
        }
        
        return view('requests.psr-7');
    }
    
    public function pathMethod(Request $request)
    {
        return view('requests.path-method');
    }
    
    public function retrievingInput(Request $request)
    {
        return view('requests.retrieving-input');
    }
    
    public function uploadedFiles(Request $request)
    {
        return view('requests.uploaded-files');
    }
    
    public function proxyConfiguration(Request $request)
    {
        return view('requests.proxy-configuration');
    }
}
