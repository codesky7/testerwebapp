<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class ClientProjectController extends Controller
{

    public function clientproject(Request $request)
    {
        $user = auth()->user();
        $allProjects = $user->clientProjects()->orderBy('created_at', 'desc')->get();
        return view('client.pages.projects', compact('allProjects'));
    }
    public function showproject($id)
    {
      $projectdetails = Projects::with('users')->findOrFail($id);
      $projectChats = $projectdetails->project_chats()->orderBy('created_at', 'desc')->paginate(20);
      return view('client.pages.view-project', compact('projectdetails','projectChats'));
    }
    public function checkView(Request $request)
    {
        session(['price'=>$request->price,'product' => $request->product]);
        return view('front-end.checkout');
    }
    public function checkout(Request $request)
    {
        $request->validate([
            'project_code' => 'required|string|unique:projects,project_code',
            'project_name' => 'required|string',
            'project_summary' => 'nullable|string',
            'project_admin' => 'nullable|integer|exists:users,id',
            'start_date' => 'nullable',
            'deadline' => 'nullable',
            'notes' => 'nullable|string',
            'category_id' => 'nullable|integer|exists:categories,id',
            'team_id' => 'nullable|integer',
            'feedback' => 'nullable|string',
            'manual_timelog' => 'nullable|in:enable,disable',
            'client_view_task' => 'nullable|in:enable,disable',
            'allow_client_notification' => 'nullable|in:enable,disable',
            'completion_percent' => 'nullable|integer|min:0|max:100',
            'calculate_task_progress' => 'nullable|in:true,false',
            'project_budget' => 'nullable|string',
            'currency_id' => 'nullable|integer|exists:currencies,id',
            'hours_allocated' => 'nullable|string',
            'status' => 'nullable',
            'added_by' => 'nullable|integer|exists:users,id',
            'last_updated_by' => 'nullable|integer|exists:users,id',
            'hash' => 'nullable|string',
            'public' => 'nullable|boolean',
            'users_id' => 'required|array',
            'clients_id' => 'required|array',
        ]);
    }
}
