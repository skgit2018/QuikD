<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Customer;

class CustomerController extends Controller
{
    public function Customer(Request $request){
        $user = new Customer;

        //Fetch The Data
        $user->reg_user_id = $request->input('reg_user_id');       
        $user->reg_customer_first_name = ucwords($request->input('reg_customer_first_name'));
        $user->reg_customer_last_name = ucwords($request->input('reg_customer_last_name'));    
        $user->reg_customer_gender = $request->input('reg_customer_gender');       
        $user->reg_customer_address = $request->input('reg_customer_address');
        $user->reg_customer_street = $request->input('reg_customer_street');  
        $user->reg_customer_location = $request->input('reg_customer_location');  
        $user->reg_customer_city = $request->input('reg_customer_city');  
        $user->reg_customer_state = $request->input('reg_customer_state');  
        $user->reg_customer_pincode = $request->input('reg_customer_pincode');  
        $user->reg_customer_emergency_name = $request->input('reg_customer_emergency_name'); 
        $user->reg_customer_emergency_email = $request->input('reg_customer_emergency_email');
        $user->reg_customer_emergency_mobile = $request->input('reg_customer_emergency_mobile');
        $user->reg_customer_emergency_landline = $request->input('reg_customer_emergency_landline');
        $user->reg_user_status = 1;

        $user->save();

        return redirect('/vehicle');
    }
}
