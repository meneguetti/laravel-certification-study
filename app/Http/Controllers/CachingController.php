<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CachingController extends Controller
{

    public function driversConfiguration(Request $request)
    {
        return view('caching.drivers-configuration');
    }

    public function storingItems(Request $request)
    {
        return view('caching.storing-items');
    }

    public function retrievingItems(Request $request)
    {
        return view('caching.retrieving-items');
    }

    public function cacheTags(Request $request)
    {
        return view('caching.cache-tags');
    }

    public function creatingCustomDrivers(Request $request)
    {
        return view('caching.creating-custom-drivers');
    }

}
