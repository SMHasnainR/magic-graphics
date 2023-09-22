<?php

namespace App\Http\Controllers;

use App\Mail\PackageEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    const PACKAGES = [
        [
            'name' => 'ZERO PACKAGE',
            'price' => 100,
            'features' => [
                'limited to 30 creatives per month',
                '1 brand',
            ]
        ],
        [
            'name' => 'One PACKAGE',
            'price' => 200,
            'features' => [
                'limited to 30 creatives per month',
                '1 dedicated graphic designer',
                '10 brand',
            ]
        ],
        [
            'name' => 'Silver Package',
            'price' => 300,
            'features' => [
                'limited to 30 creatives per month',
                '1 dedicated graphic designer',
                '20 revisions',
                '1 brand',
            ],
        ],
        [
            'name' => 'Gold Package',
            'price' => 400,
            'features' => [
                'limited to 30 creatives per month',
                '100 dedicated graphic designer',
                '2 revisions',
                '1 brand',
            ],
        ],
        [
            'name' => 'Corporate Package',
            'price' => 200,
            'features' => [
                'limited to 30 creatives per month',
                '1 dedicated graphic designer',
                '2 revisions',
                '12 brand',
            ],
        ],
        [
            'name' => 'Elite Package',
            'price' => 200,
            'features' => [
                'limited to 30 creatives per month',
                '1 dedicated graphic designer',
                '2 revisions',
                '1 brand',
            ],
        ],
    ];

    public function index(Request $request)
    {
        return view('index');
    }

    public function packages(Request $request)
    {

        $packages = self::PACKAGES;

        return view('packages', compact('packages'));
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact-us');
    }

    public function about(Request $request)
    {
        return view('about-us');
    }

    public function planRequest(Request $request)
    {

        $planRequestedId =  $request->plan;
        if(is_null($planRequestedId)){
            abort(404, 'Plan Not Found !');
        }
        $plans = self::PACKAGES;
        $package = $plans[$planRequestedId];

        return view('plan-request', compact('package', 'planRequestedId'));
    }

    public function sendPlanRequest(Request $request)
    {
        $request->validate([
            'package_id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone_no' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'message' => 'required'
        ]);

        Mail::to('hasnainshoaib@gmail.com')->send(new PackageEmail($request->all()));
        
        dd($request->all());
        
    }
}
