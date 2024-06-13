<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('front-end.home');
    }



    public function session()
    {
        $value = session()->all();

        echo "<pre";
        print_r($value);
        echo "</pre>";
    }
}
