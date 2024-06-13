<?php

namespace App\Http\Controllers\tester;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TesterProfileController extends Controller
{
    public function testerprofile()
    {
        $current_user =Auth::user();
        $user_details =Auth::user() ;
        return view('tester.pages.profile', [
            'loggeduser' => $current_user,
            'user_detail' => $user_details
        ]);
    }
}
