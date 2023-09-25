<?php

namespace App\Http\Controllers;

use App\Mail\PackageEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    private $packages;

    // make construct function
    public function __construct()
    {
        $this->packages = config('constants.packages');
    }

    public function index(Request $request)
    {
        return view('index');
    }

    public function packages(Request $request)
    {

        $packages = $this->packages;

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
        // if($request->session()->exists('success')){
        //     dd($request->all(), $request->session()->get('success'));
        // }


        $planRequestedId =  $request->plan;
        if(is_null($planRequestedId)){
            abort(404, 'Plan Not Found !');
        }
        $plans = $this->packages;
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

        Mail::to('hasnainshoaib45@gmail.com')->send(new PackageEmail($request->all()));
        
        return redirect()->back()->with('success','Your Plan has been requested successfully!');
    }
}
