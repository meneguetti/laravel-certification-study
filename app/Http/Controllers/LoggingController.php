<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoggingController extends Controller
{

    public function writingToSpecificChannels(Request $request)
    {
        return view('logging.writing-to-specific-channels');
    }

    public function writingToSingleChannel(Request $request)
    {
        /* @var $loginso \Monolog\Logger */
        $loginso = (\Illuminate\Support\Facades\Log::getMonolog())->withName('insolog');
        
        \Illuminate\Support\Facades\Log::log('info', 'aaa');
        $loginso->log('info', 'bbb');
        \Illuminate\Support\Facades\Log::log('info', 'ccc');

        $file = file($loginso->getHandlers()[0]->getUrl());
        
        $count = count($file);
        $logLastMessages = $file[$count - 3] . $file[$count - 2] . $file[$count - 1];
        
        return view('logging.writing-to-single-channel', compact('logLastMessages'));
    }

    public function configuration(Request $request)
    {
        return view('logging.configuration');
    }

    public function creatingCustomChannels(Request $request)
    {
        return view('logging.creating-custom-channels');
    }
}
