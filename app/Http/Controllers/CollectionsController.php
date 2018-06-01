<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionsController extends Controller
{

    public function creatingExtending(Request $request)
    {
        return view('collections.creating-extending');
    }

    public function collectionMethods(Request $request)
    {
        
        return view('collections.collection-methods');
    }

    public function higherOrderMessages(Request $request)
    {
        return view('collections.higher-order-messages');
    }

}
