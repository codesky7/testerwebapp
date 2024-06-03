<?php

namespace App\Http\Controllers;

use App\Http\Requests\profileRequest;
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
        $user_details = Auth::user();
        return view('admin.pages.profile', [
            'loggeduser' => $current_user,
            'user_detail' => $user_details
        ]);
    }

    public function updateProfile(Request $request, $profileId)
    {
        $profile = User::findOrFail($profileId);
    
        $validatedData = $request->validate([
            'profile_pic' => 'image',
            'fname' => 'required|string',
            'lname' => 'nullable|string',
            'email' => 'required|email|unique:users,email,' . $profileId,
            'phone' => 'string',
            'country' => 'required|string'
        ]);
   
        $profileinfo = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
        ];
    
  if($request->hasFile('profile_pic'))
    {
        $profilepath= $request->file('profile_pic')->store('images/profile'.$profileId, 'public');
        $profileinfo['profile_pic'] = $profilepath;
    }

    $profile->update($profileinfo);
    return redirect()->back()->with('succcess', 'Profile Update Success');

    }
    
    
}
