<?php

namespace App\Http\Controllers\tester;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesterDashboardController extends Controller
{
    public function showdashboard()
    {
        return view('tester.pages.dashboard');
    }
}
