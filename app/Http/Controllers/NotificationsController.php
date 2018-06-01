<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{

    public function creating(Request $request)
    {
        return view('notifications.creating');
    }

    public function sending(Request $request)
    {
        return view('notifications.sending');
    }

    public function mail(Request $request)
    {
        return view('notifications.mail');
    }

    public function markdown(Request $request)
    {
        return view('notifications.markdown');
    }

    public function database(Request $request)
    {
        return view('notifications.database');
    }

    public function broadcast(Request $request)
    {
        return view('notifications.broadcast');
    }

    public function sms(Request $request)
    {
        return view('notifications.sms');
    }

    public function slack(Request $request)
    {
        return view('notifications.slack');
    }

    public function customChannels(Request $request)
    {
        return view('notifications.customChannels');
    }

}
