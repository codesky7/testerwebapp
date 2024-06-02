<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Models\Projects;
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
       
        return view('admin.pages.newproject');
    }
    

    public function addproject(StoreProjectRequest $request)
    {
       $validate = $request->validated();
       $projects = Projects::create($validate);

     return redirect()->route('admin.projects')->with('success', 'Project Add Successfull');
       
    }


}
