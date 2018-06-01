<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail2;

class MailController extends Controller
{

    public function driversConfiguration(Request $request)
    {
        return view('mail.drivers-configuration');
    }

    public function generatingMailables(Request $request)
    {
        return view('mail.generating-mailables');
    }

    public function writing(Request $request)
    {
        return view('mail.writing');
    }

    public function markdown(Request $request)
    {
        return view('mail.markdown');
    }

    public function localDevelopment(Request $request)
    {
        return view('mail.local-development');
    }

    public function sending(Request $request)
    {

        return view('mail.sending');
    }

    public function send(Request $request)
    {

        if ($request->filled('email')) {

            //sending mail
            Mail::to($request->input('email'))->send(new TestEmail2);
        }

        return response()->redirectToRoute('mail.sending');
    }

}
