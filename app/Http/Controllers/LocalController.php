<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalController extends Controller
{
    public function setLocal($lang)
    {
 App::setLocale($lang);
 session()->put('lang_code', $lang);
 return redirect()->back()->with('success', 'Language Change Successfull');
    }
}
