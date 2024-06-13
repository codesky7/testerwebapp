<?php

namespace App\Http\Controllers\tester;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class TesterProjectController extends Controller
{
    public function testerproject()
    {
        $user = auth()->user();
        $allProjects = $user->projects()->orderBy('created_at', 'asc')->get();
        return view('tester.pages.projects', compact('allProjects'));
    }

    public function showproject($id)
    {
        $projectdetails = Projects::with('users')->findOrFail($id);
        $projectChats = $projectdetails->project_chats()->orderBy('created_at', 'desc')->paginate(20);
        return view('tester.pages.view-project', compact('projectdetails','projectChats'));
    }
    
}
