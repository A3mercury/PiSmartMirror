<?php

namespace PiSmartMirror\Http\Controllers;

class DashboardController extends Controller
{
    public function show()
    {
        return view('dashboard');
    }
}