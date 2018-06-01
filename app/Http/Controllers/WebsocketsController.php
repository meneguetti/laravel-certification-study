<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;

class WebsocketsController extends Controller
{

    public function broadcastingEvents(Request $request)
    {

        $name = (new \Faker\Factory())->create()->name();

        return view('websockets.broadcasting-events', compact('name'));
    }

    public function sendMessage(Request $request)
    {

        if (!$request->filled(['name', 'message'])) {
            return response()->json(['status' => false]);
        }

        $options = array(
            'cluster' => 'us2',
            'encrypted' => false
        );

        $pusher = new \Pusher\Pusher(
                '96cecbd8c3a9987807a3',
                '03c55996d5f8e788a12a',
                '515292',
                $options
        );

        $result = $pusher->trigger('chat', 'messages', $request->except('_token'));

        return response()->json(['status' => $result]);
    }

    public function receivingEvents(Request $request)
    {

        return view('websockets.receiving-events');
    }

    public function broadcastingChannels(Request $request)
    {

        return view('websockets.broadcasting-channels');
    }

    public function presenceChannels(Request $request)
    {

        return view('websockets.presence-channels');
    }

    public function clientEvents(Request $request)
    {

        return view('websockets.client-events');
    }

}
