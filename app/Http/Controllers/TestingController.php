<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{

    public function creatingRunning(Request $request)
    {
        return view('testing.creating-running');
    }

    public function httpTests(Request $request)
    {
        return view('testing.http-tests');
    }

    public function sessionAuthentication(Request $request)
    {
        return view('testing.session-authentication');
    }

    public function fileUploads(Request $request)
    {
        return view('testing.file-uploads');
    }

    public function availableAssertions(Request $request)
    {
        return view('testing.available-assertions');
    }

    public function browserTestsDusk(Request $request)
    {
        return view('testing.browser-tests-dusk');
    }

    public function dataFactories(Request $request)
    {
        return view('testing.data-factories');
    }

    public function fakesMocking(Request $request)
    {
        return view('testing.fakes-mocking');
    }

}
