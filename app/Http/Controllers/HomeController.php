<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    const PACKAGES = [
        'ZERO PACKAGE' => [
            'price' => 100,
            'features' => [
                'limited to 30 creatives per month',
                '1 brand',
            ]
        ],
        'One PACKAGE' => [
            'price' => 200,
            'features' => [
                'limited to 30 creatives per month',
                '1 dedicated graphic designer',
                '10 brand',
            ]
        ],
        'Silver Package' => [
            'price' => 300,
            'features' => [
                'limited to 30 creatives per month',
                '1 dedicated graphic designer',
                '20 revisions',
                '1 brand',
            ],
        ],
        'Gold Package' => [
            'price' => 400,
            'features' => [
                'limited to 30 creatives per month',
                '100 dedicated graphic designer',
                '2 revisions',
                '1 brand',
            ],
        ],
        'Corporate Package' => [
            'price' => 200,
            'features' => [
                'limited to 30 creatives per month',
                '1 dedicated graphic designer',
                '2 revisions',
                '12 brand',
            ],
        ],
        'Elite Package' => [
            'price' => 200,
            'features' => [
                'limited to 30 creatives per month',
                '1 dedicated graphic designer',
                '2 revisions',
                '1 brand',
            ],
        ],
    ];

    public function index(Request $request){
        return view('index');
    }

    public function packages(Request $request){
        
        $packages = self::PACKAGES;
        
        return view('packages',compact('packages'));
    }

    public function services(){
        return view('services');
    }

    public function contact(){
        return view('contact-us');
    }

    public function about(Request $request){
        return view('about-us');
    }

    public function planRequest(Request $request){
        return view('about-us');
    }
}
