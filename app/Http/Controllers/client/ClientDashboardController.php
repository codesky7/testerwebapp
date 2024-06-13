<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class ClientDashboardController extends Controller
{
    public function showdashboard()
    {
        $user = auth()->user();
        $allProjects = $user->clientProjects()->orderBy('created_at', 'desc')->get();
        return view('client.pages.projects',compact('allProjects'));
    }

public function helpdesk()
{
    return view('client.pages.help');
}
public function plans()
{
    return view('client.pages.plans');
}
}
