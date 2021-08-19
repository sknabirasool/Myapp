<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Session;

class MywebpageController extends Controller
{
    public function about(Request $request)
    {


        return view('about-us');
    }
}
