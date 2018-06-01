<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psr\Http\Message\ServerRequestInterface;

class RequestController extends Controller
{
    
    public function index(Request $request, string $nameParameter = 'Karina')
    {

        //get parameter "name"... with Vitor if no "name" parameter was found
        $nameGet = $request->input('name', 'Vitor');

        if ($request->filled('redirect')) {
            //redirecting to route with all input data except one..
            return redirect()->route('request.psr', $request->flash());
        }

        //check if it was passed any parameter
        $msg = $request->is('request/*') ? 'user passed through parameter' : 'no user was passed through parameter';

        return view('request.index', compact('nameGet', 'nameParameter', 'msg'));
    }

    public function psr(ServerRequestInterface $request)
    {

        //if it was passed any name variable through flash messages
        if (!empty(old('name'))) {
            \Illuminate\Support\Facades\Cookie::queue('app_previous_name', old('name'), 1);
        }

        if(!empty(old('json'))){
            return response()->json(['name' => old('name') ?? 'Default Name',  'age' => 32]);            
        }
        
        return view('request.psr');
    }

}
