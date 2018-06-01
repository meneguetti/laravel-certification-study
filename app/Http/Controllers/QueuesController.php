<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueuesController extends Controller
{

    public function driversConfigurations(Request $request)
    {
        return view('queues.drivers-configurations');
    }

    public function runningQueueWorkers(Request $request)
    {
        return view('queues.running-queue-workers');
    }

    public function supervisor(Request $request)
    {
        return view('queues.supervisor');
    }

    public function handlingFailedJobs(Request $request)
    {
        return view('queues.handling-failed-jobs');
    }

}
