<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class EventController extends Controller
{
    public function index(Request $request)
    {
        return view('events.index');
    }
    
}