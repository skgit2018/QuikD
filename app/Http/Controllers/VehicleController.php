<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Vehicle;


class VehicleController extends Controller
{
    public function Vehicle_info(Request $request){

        $user = new Vehicle;
        //Fetch The Data
        $user->reg_user_id = $request->input('reg_user_id');
        //$user->reg_vehicle_id =1;
        //$user->reg_driver_id =1; 
        $user->reg_vehicle_type = $request->input('reg_vehicle_type');
        $user->reg_vehicle_make = $request->input('reg_vehicle_make');    
        $user->reg_vehicle_model = $request->input('reg_vehicle_model');       
        $user->reg_vehicle_year = $request->input('reg_vehicle_year');
        $user->reg_vehicle_rent_details = $request->input('reg_vehicle_rent_details');  
        $user->reg_vehicle_agency_name = $request->input('reg_vehicle_agency_name');  
        $user->reg_vehicle_agency_address = $request->input('reg_vehicle_agency_address');  
        $user->reg_vehicle_owner_name = $request->input('reg_vehicle_owner_name');  
        $user->reg_vehicle_owner_email = $request->input('reg_vehicle_owner_email');  
        $user->reg_vehicle_owner_mobile = $request->input('reg_vehicle_owner_mobile'); 
        $user->reg_vehicle_owner_landline = $request->input('reg_vehicle_owner_landline');
        $user->reg_vehicle_contact_name = $request->input('reg_vehicle_contact_name');
        $user->reg_vehicle_contact_email = $request->input('reg_vehicle_contact_email');
        $user->reg_vehicle_contact_mobile = $request->input('reg_vehicle_contact_mobile');
        $user->reg_vehicle_contact_landline = $request->input('reg_vehicle_contact_landline');
        $user->reg_user_status = 1;

        $user->save();

        return redirect('/searchresults');
    }
}
