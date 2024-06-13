<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

abstract class Controller
{
    public function __construct()
    {
        view()->share('loggedUser', Auth::user());
    }
}
