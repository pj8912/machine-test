<?php

namespace App\Http\Controllers;

use App\Models\Getdetail;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use Agent as Age;

class GetDetailsController extends Controller
{
    // public function index(){
    //     return view('first');
    // }

    public function submitFirstForm(Request $request){
        $ipAddress = $request->ip();
        $browser = $request->header('User-Agent');
        $userAgent = $request->header('User-Agent');
        //getdevice type
        $agent = new Agent();
        $deviceType = $request->header('User-Agent');

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
        ]);

        session(['first_name' => $validatedData['first_name'],
             'last_name' => $validatedData['last_name'],
             'date_of_birth' => $validatedData['date_of_birth'],
             'ip_address' => $ipAddress,
             'device_type' => $deviceType,
             'browser' => $browser,
             'user_agent' => $userAgent]);

             return redirect('/second');

    }
    
    public function submitSecondForm(Request $request){
        $validatedData = $request->validate([
            'phone_number' => 'required|numeric|digits:10',
            'email' => 'required|email'
        ]);

        session([

            'phone_number' => $validatedData['phone_number'],
            'email' => $validatedData['email']
        ]);
        
        return redirect('/third');
    
    }

    public function submitThirdform(Request $request){
    
        $address = $request->input('address');
        
        if($address == null){
            $address = 'N/A';
        }

        $first_name = session()->get('first_name');
        $last_name = session()->get('last_name');
        $date_of_birth = session()->get('date_of_birth');
        $phone_number = session()->get('phone_number');
        $email = session()->get('email');
        $ip_address = session()->get('ip_address');
        $device_type = session()->get('device_type');
        $browser = session()->get('browser');
        $user_agent = session()->get('user_agent');
        
        $getDetail = new Getdetail();
        $getDetail->first_name = $first_name;
        $getDetail->last_name = $last_name;
        $getDetail->date_of_birth = $date_of_birth;
        $getDetail->phone_number = $phone_number;
        $getDetail->email = $email;
        $getDetail->address = $address;
        $getDetail->ip_address = $ip_address;
        $getDetail->device_type = $device_type;
        $getDetail->browser = $browser;
        $getDetail->user_agent = $user_agent;
        $getDetail->save();
        
        session()->forget(['first_name', 'last_name', 'date_of_birth', 'phone_number', 'email', 'ip_address', 'device_type', 'browser', 'user_agent']);
       
        return redirect('/thankyou');
    }

}
