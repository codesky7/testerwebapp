<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class ClientProjectController extends Controller
{
    public function clientproject()
    {
        $allproject = Projects::orderBy('created_at','desc')->get();
        return view('client.pages.projects', compact('allproject'));
    }
}
