<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityReportController extends Controller
{
    public function index()
    {
        return view('activityreports.index');
    }
}
