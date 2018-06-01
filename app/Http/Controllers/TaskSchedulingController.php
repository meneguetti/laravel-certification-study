<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskSchedulingController extends Controller
{

    public function schedulingArtisanCommands(Request $request)
    {
        return view('task-scheduling.scheduling-artisan-commands');
    }

    public function schedulingQueueJobs(Request $request)
    {
        return view('task-scheduling.scheduling-queue-jobs');
    }

    public function schedulingShellCommands(Request $request)
    {
        return view('task-scheduling.scheduling-shell-commands');
    }

    public function timezones(Request $request)
    {
        return view('task-scheduling.timezones');
    }

    public function preventingTaskOverlaps(Request $request)
    {
        return view('task-scheduling.preventing-task-overlaps');
    }

    public function maintenanceMode(Request $request)
    {
        return view('task-scheduling.maintenance-mode');
    }

}
