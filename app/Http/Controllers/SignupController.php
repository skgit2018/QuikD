<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Signup;

class SignupController extends Controller
{

    public function createUser(Request $request){

        //Create an Object for the Model Class
        $user = new Signup;

        //Fetch The Data
        $user->reg_user_name = ucwords($request->input('reg_name'));
        $user->reg_user_email = $request->input('reg_email');
        $user->reg_user_pwd = Hash::make($request->input('reg_password'));      
        $user->reg_mobile_number = $request->input('reg_mobile');       
        $user->reg_user_account_type = $request->input('reg_account_type');      
        $user->reg_user_otp = rand(1000, 9999);
        $user->reg_user_ip_address = \Request::ip();       
        $user->reg_user_created_date = date('d-m-Y H:i:s');       
        $user->reg_user_updated_date = date('d-m-Y H:i:s');       
        $user->reg_user_status = 0;

        $matchThese = ['reg_user_email' => $user->reg_user_email];
        $orThose = ['reg_mobile_number' => $user->reg_mobile_number];

        $sel_users = Signup::where($matchThese)->get();
        $sel_users = Signup::where($matchThese)
        ->orWhere($orThose)
        ->get();


        

       
        // database table multipule joines
        //$users = DB::table('users')
            //->join('contacts', 'users.id', '=', 'contacts.user_id')
           // ->join('orders', 'users.id', '=', 'orders.user_id')
           // ->select('users.*', 'contacts.phone', 'orders.price')
            //->get();

        if(count($sel_users) > 0 ){           
            return redirect('/signup')->with('error_message', 'User already registered');
        }        
        else{
            $user->save();
            return redirect('/otpverification')->with('otp_message', 'Enter the 4 digit OTP sent on your mobile number to activate your account');           
        }

    }
public function store()
    {
        request()->validate([
            'reg_user_name' => 'required|min:2|max:50',
            'reg_mobile_number' => 'required|numeric',            
            'reg_user_email' => 'required|email|unique:users',
            'reg_user_pwd' => 'required|min:6',                
           

        ], [
            'name.required' => 'Name is required',
            'name.min' => 'Name must be at least 2 characters.',
            'name.max' => 'Name should not be greater than 50 characters.',
        ]);
    }
    
}
