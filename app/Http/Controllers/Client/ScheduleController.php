<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        return view("client.student.schedules", compact('schedules'));
    }

    public function downloadSchedule($id)
    {
        $download = Schedule::find($id);
        $filePath = storage_path('app/public/' . $download->file);
        return response()->download($filePath, "$download->name.xlsx");
    }
}
