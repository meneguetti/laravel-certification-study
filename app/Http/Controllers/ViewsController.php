<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    
    public function creating(Request $request)
    {
        return view('views.creating');
    }
    
    public function passingData(Request $request)
    {
        return view('views.passing-data');
    }
    
    public function viewComposer(Request $request)
    {
        return view('views.view-composer');
    }
}
