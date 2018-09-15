<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\OtpVerification;

class OtpVerificationController extends Controller
{
    public function VerifyOtp(Request $request){
        
        $data = new OtpVerification;
        $user_otp = $request->input('check_otp');

        $data = DB::select("SELECT reg_user_otp FROM qdm_users WHERE reg_user_otp = $user_otp");
        $count = count($data);

       if($count > 0){
            $otp_check = $data[0]->reg_user_otp;
            if($otp_check == $user_otp){
                return redirect('/login');
            }
       }elseif($count == 0){
            return redirect('/otpverification')->with('otp_error', 'Entered OTP is not Valid');
       }
                
    }
}
