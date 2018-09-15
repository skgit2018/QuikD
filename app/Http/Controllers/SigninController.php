<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Signin;
use Session;
use Auth;

class SigninController extends Controller
{
    public function userLogin(Request $request){

        //Create an object for the Model Signin
        $model = new Signin;
        //Fetch the Data
        $email = $request->input('email');     
        $pwd =   $request->input('password');   

        $user_check = DB::select("select * from qdm_users where reg_user_email='".$email."'");
             
        $user_id = $user_check[0]->reg_user_id;
        $user_name = $user_check[0]->reg_user_name;
        $user_pwd = $user_check[0]->reg_user_pwd;
        $user_email = $user_check[0]->reg_user_email;
        $user_account_type = $user_check[0]->reg_user_account_type;
        $user_status = $user_check[0]->reg_user_status;

        $pwd_check = Hash::check($pwd, $user_pwd);
        $pwd_hash = Hash::make($pwd);

        //Create an array inorder to create a session
      $user_data = array(
            'id' => $user_id,
            'name' => $user_name,
            'email' => $user_email,
            'account_type' => ucwords($user_account_type)
        );

        if(($email == $user_email) && ($pwd_check)){
            if($user_account_type == 'driver' && $user_status == 1){ 

                $sess_uname = $request->session()->put('userdata', $user_data);       
                $sess_data = $request->session()->all();
                return redirect('/driverpool');

            }elseif($user_account_type == 'driver' && $user_status == 0){
                $sess_uname = $request->session()->put('userdata', $user_data);       
                $sess_data = $request->session()->all();
                return redirect('/driververification')->with('userinfo', $sess_data);

            }
          
            elseif($user_account_type == 'user'){
                //$user_name = $user_check[0]->reg_user_name;
                $sess_uname = $request->session()->put('userdata', $user_data);
                $sess_data = $request->session()->all();                 
                return redirect('/customer')->with('userinfo', $sess_data);
            }
        }else{
            return redirect('/login')->with('login_error', 'Entered Credentials does not match ');
        }

    }
}
