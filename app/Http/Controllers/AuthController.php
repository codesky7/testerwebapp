<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginview(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate the incoming request
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        // Attempt to authenticate the user
        if(Auth::guard('web')->attempt(['email' => $credentials['email'],'password' => $credentials['password']])) {
            if(Auth::user()-> user_type == 1)
            {
                return redirect()->route('admin.dashboard')->with('success', 'Admin Login Success');
            }
        
            $request->session()->regenerate();
            if(Auth::user()-> user_type == 2)
            {
                return redirect()->route('tester.dashboard')->with('success', 'Tester Login Success');
            }
        
            $request->session()->regenerate();
            if(Auth::user()-> user_type == 0)
            {
                if(session('product')){
                    return redirect()->route('client.checkoutView');
                }
                return redirect()->route('client.dashboard')->with('success', 'Login Success');
            }
            $request->session()->regenerate();
        }
    
        // If authentication fails, redirect back to the login page with an error message
        return redirect()->route('login')->withErrors(['error' => 'Your credentials are incorrect.']);
    }
    

public function registrationview(Request $request){
    session(['product' => $request->product, 'price' => $request->price]);
    return view('auth.registration');
}

    public function registration(Request $request)
{

   

    $credentials = $request->validate([
    'first_name' => 'required',
    'last_name' => 'required',
    'email' => 'required|email|unique:users,email',
    'password' => 'required|min:6'
    ]);

    User::create([
        'fname' => $credentials['first_name'],
        'lname' => $credentials['last_name'],
        'email' => $credentials['email'],
        'password' => bcrypt($credentials['password'])
        
    ]);
if(Auth::guard('web')->attempt(['email' => $credentials['email'],'password' => $credentials['password']]))
{
    if(Auth::user()-> user_type == 1)
    {
        return redirect()->route('admin.dashboard')->with('success', 'Admin Login Success');
    }

    $request->session()->regenerate();
    if(Auth::user()-> user_type == 2)
    {
        return redirect()->route('tester.dashboard')->with('success', 'Tester Login Success');
    }

    $request->session()->regenerate();
    if(Auth::user()-> user_type == 0)
    {

        if(session('product')){
            return redirect()->route('client.checkoutView')->with('payment','Payment proccess');
        }

        return redirect()->route('client.dashboard')->with('success', 'Login Success');
    }
    $request->session()->regenerate();
}
return redirect()->route('login')->withErrors([
    'email' => 'The provided credentials do not match our records.',
]); 
}
public function adminlogout(Request $request )
{
Auth::logout();
$request->session()->invalidate();
return redirect()->route('home');
}

}
