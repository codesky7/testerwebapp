<?php

namespace App\Http\Controllers\tester;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class TesterProjectController extends Controller
{
    public function testerproject()
    {
        $allproject = Projects::orderBy('created_at','desc')->get();
        return view('tester.pages.projects', compact('allproject'));
    }
}
