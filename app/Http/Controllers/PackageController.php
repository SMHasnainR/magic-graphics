<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PackageEmail;
use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ItemNotFoundException;

class PackageController extends Controller
{
    //
    
    private $packages;

    // make construct function
    public function __construct()
    {
        $this->packages = collect(config('constants.packages'));
    }

    public function packages(Request $request)
    {

        $packages = $this->packages;

        return view('packages', compact('packages'));
    }

    
    public function planRequest(Request $request)
    {
        try{
            $planRequestedId =  $request->plan;
            $plans = $this->packages;

            $package = $plans->firstOrFail(function($item) use($planRequestedId) {
                return $item['id'] == $planRequestedId;
            });
    
        } catch(Exception $e){
            abort(404,$e->getMessage());
        }

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
