<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessPodcast;

class QueueController extends Controller
{

    public function index(Request $request)
    {
        $size = \Illuminate\Support\Facades\Redis::llen('queues:lara_cert_test');

        return view('queue.index', compact('size'));
    }

    public function consume(Request $request)
    {

        //get the first item without "popping" it
        $item = \Illuminate\Support\Facades\Redis::lrange('queues:lara_cert_test', 0, 0);
        //pop the first item from list
        $item = \Illuminate\Support\Facades\Redis::lpop('queues:lara_cert_test');
        
        if (!empty($item)) {
            $item = json_decode($item);
            $item = unserialize($item->data->command);
            $item = $item->getPodcast();
        }

        $size = \Illuminate\Support\Facades\Redis::llen('queues:lara_cert_test');

        return view('queue.consume', compact('item', 'size'));
    }

    public function publish(Request $request)
    {
        $podcast = new \App\Podcast();

        $podcast->time = time();

        ProcessPodcast::dispatch($podcast)
                ->onConnection('redis')
                ->onQueue('lara_cert_test');

        return view('queue.publish', compact('podcast'));
    }

}
