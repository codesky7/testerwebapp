<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function showdashboard()
    {
        return view('admin.pages.dashboard');
    }
    public function adminprofile()
    {
        $current_user = Auth::user();
        $user_details =Auth::user() ;
        return view('admin.pages.profile', [
            'loggeduser' => $current_user,
            'user_detail' => $user_details
        ]);
    }
    
}
