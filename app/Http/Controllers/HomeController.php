<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $request){
        return view('index');
    }

    public function contact(Request $request){
        return view('contact-us');
    }

    public function about(Request $request){
        return view('about-us');
    }
}
