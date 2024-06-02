<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class TesterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
 if(!empty(Auth::check()))
 {
    if(Auth::user()->user_type == 2)
    {

        return $next($request);
    }
    Auth::logout();
    $request->session()->flush();
    return redirect()->route('login');

 }

 Auth::logout();
 $request->session()->invalidate();
 return redirect()->route('login');

    }
}
