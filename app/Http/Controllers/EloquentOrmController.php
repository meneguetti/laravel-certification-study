<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EloquentOrmController extends Controller
{

    public function gettingStarted(Request $request)
    {

        $users = \App\User::all();
        
        $usersWithVi = \App\User::where('name', 'like', '%vi%')->get(['name'])->implode('name', ', ');
        
        return view('eloquent-orm.getting-started', compact('users', 'usersWithVi'));
    }

    public function conventions(Request $request)
    {
        return view('eloquent-orm.conventions');
    }

    public function relationships(Request $request)
    {
        return view('eloquent-orm.relationships');
    }

    public function collections(Request $request)
    {
        return view('eloquent-orm.collections');
    }

    public function mutatorsAccessors(Request $request)
    {
        return view('eloquent-orm.mutators-accessors');
    }

    public function apiResources(Request $request)
    {
        return view('eloquent-orm.api-resources');
    }

    public function serialization(Request $request)
    {
        return view('eloquent-orm.serialization');
    }

    public function scopes(Request $request)
    {
        return view('eloquent-orm.scopes');
    }

}
