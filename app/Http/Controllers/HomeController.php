<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    const PACKAGE = [
        'ZERO' => [
            'price' => 200
        ],
        'One' => [
            'price' => 200
        ],
        'Silver Package' => [
            'price' => 200
        ],
        
    ];

    public function index(Request $request){
        return view('index');
    }

    public function packages(Request $request){
        
        return view('packages');
    }

    public function contact(Request $request){
        return view('contact-us');
    }

    public function about(Request $request){
        return view('about-us');
    }
}
