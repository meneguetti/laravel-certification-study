<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtisanController extends Controller
{

    public function generatingCommands(Request $request)
    {
        return view('artisan.generating-commands');
    }

    public function commandIo(Request $request)
    {
        return view('artisan.command-io');
    }

    public function regesteringCommands(Request $request)
    {
        return view('artisan.regestering-commands');
    }

    public function executingCommands(Request $request)
    {
        return view('artisan.executing-commands');
    }

}
