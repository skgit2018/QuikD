<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
        return view('index');
    }
    public function getLogin(){
        return view('login');
    }
    public function getSignup(){
        return view('register');
    }
    public function getDriverVerification(){
        return view('driververification');
    }
   
    public function getDriverVerificationcheck(){
        return view('check');
    }
    public function getOtpVerification(){
        return view('otpverification');
    }
    public function getCustomer(){
        return view('customer');
    }
    public function getbooking(){
        return view('booking');
    }
    public function getvehicle(){
        return view('vehicle');
    }
    public function getdriverpool(){
        return view('driverpool');
    }
    public function getsuccess(){
        return view('success');
    }
    public function getsearch(){
        return view('searchresults');
    }
    public function getdriver(){
        return view('driverdetails');
    }
    public function getresults(){
        return view('qdmsearch');
    }

    
   
}
