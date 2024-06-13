<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientProfileController extends Controller
{
    public function clientprofile()
    {
        $current_user =Auth::user();
        $user_details =Auth::user() ;
        return view('admin.pages.profile', [
            'loggeduser' => $current_user,
            'user_detail' => $user_details
        ]);
    }
    
}
