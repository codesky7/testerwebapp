<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Models\Projects;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function adminproject()
    {
        $allProjects = Projects::orderBy('created_at', 'asc')->get();
        
        return view('admin.pages.projects', compact('allProjects'));
    }
    
    public function showproject($id)
    {
      $projectdetails = Projects::with('users')->findOrFail($id);
      $projectChats = $projectdetails->project_chats()->orderBy('created_at', 'desc')->paginate(20);
      return view('admin.pages.view-project', compact('projectdetails','projectChats'));
    }
    
    
    public function newproject()
    {
        $clientlist = User::where('user_type' ,0)->get();
        $testertlist = User::where('user_type' ,2)->get();
       
        return view('admin.pages.newproject', compact('clientlist', 'testertlist'));
    }
    
    public function addProject(StoreProjectRequest $request)
    {
$validate = $request->validated();
$project =Projects::create($validate);
$useridd = $validate['users_id'];
$client_idd = $validate['clients_id'];
$project->users()->sync($useridd);
$project->clients()->sync($client_idd);
return redirect()->route('admin.projects')->with('success', 'Project Added Successfully!');
    }
    
    
    

    public function deleteproject($id)
    {
        $project = Projects::findOrFail($id);
        $project->delete();
        return redirect()->back()->with('succcess', 'Project Delete successfully');
    }


}
