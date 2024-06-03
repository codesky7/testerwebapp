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
        $projectdetails = Projects::findOrFail($id);
        return view('admin.pages.view-project', compact('projectdetails'));
    }
    
    public function newproject()
    {
        $clientlist = User::where('user_type' ,0)->get();
        $testertlist = User::where('user_type' ,2)->get();
       
        return view('admin.pages.newproject', compact('clientlist', 'testertlist'));
    }
    

    public function addproject(StoreProjectRequest $request)
    {
       $validate = $request->validated();
       $projects = Projects::create($validate);

     return redirect()->route('admin.projects')->with('success', 'Project Add Successfull');
       
    }


}
