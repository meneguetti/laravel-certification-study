<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{

    public function registeringEventsListeners(Request $request)
    {
        return view('events.registering-events-listeners');
    }

    public function queuedListeners(Request $request)
    {
        return view('events.queued-listeners');
    }

    public function dispatchingEvents(Request $request)
    {
        return view('events.dispatching-events');
    }

    public function subscribingToEvents(Request $request)
    {
        return view('events.subscribing-to-events');
    }

}
