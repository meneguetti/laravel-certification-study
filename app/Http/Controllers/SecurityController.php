<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecurityController extends Controller
{

    public function authentication(Request $request)
    {
        return view('security.authentication');
    }

    public function authorization(Request $request)
    {
        return view('security.authorization');
    }

    public function encryptionHashing(Request $request)
    {
        return view('security.encryption-hashing');
    }

    public function csrfProtection(Request $request)
    {
        return view('security.csrf-protection');
    }

    public function xssProtection(Request $request)
    {
        return view('security.xss-protection');
    }

}
