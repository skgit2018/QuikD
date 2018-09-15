<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DriverChecks;
use App\Reference;
use App\Emergency;

class DriverVerificationcheckController extends Controller
{
   public function DriverCheck (Request $request){

      //Create Object Model Class
      $driver = new DriverChecks;
      $driverreference = new Reference;
      $driveremergency = new Emergency;

        // Fetch Data
      $driver->reg_user_id = $request->input('reg_user_id');
      //$driver->reg_driver_id =1;
      $driver->reg_driver_verification_name = ucwords($request->input('reg_driver_verification_name'));
      $driver->reg_driver_verification_email =  ucwords($request->input('reg_driver_verification_email'));
      $driver->reg_driver_verification_mobile = $request->input('reg_driver_verification_mobile');
      $driver->reg_driver_verification_landline = $request->input('reg_driver_verification_landline');
      $driver->reg_user_status = 1;
      //Driver Reference
      $driverreference->reg_user_id = $request->input('reg_user_id');
      $driverreference->reg_driver_nominee1_name = $request->input('reg_driver_nominee1_name');
      $driverreference->reg_driver_nominee1_email = $request->input('reg_driver_nominee1_email');
      $driverreference->reg_driver_nominee1_mobile = $request->input('reg_driver_nominee1_mobile');
      $driverreference->reg_driver_nominee1_address = $request->input('reg_driver_nominee1_address');
      $driverreference->reg_driver_nominee2_name = $request->input('reg_driver_nominee2_name');
      $driverreference->reg_driver_nominee2_email = $request->input('reg_driver_nominee2_email');
      $driverreference->reg_driver_nominee2_mobile = $request->input('reg_driver_nominee2_mobile');
      $driverreference->reg_driver_nominee2_address = $request->input('reg_driver_nominee2_address');
      $driverreference->reg_driver_nominee3_name = $request->input('reg_driver_nominee3_name');
      $driverreference->reg_driver_nominee3_email = $request->input('reg_driver_nominee3_email');
      $driverreference->reg_driver_nominee3_mobile = $request->input('reg_driver_nominee3_mobile');
      $driverreference->reg_driver_nominee3_address = $request->input('reg_driver_nominee3_address');
      $driverreference->reg_user_status = 1;
      //Driver Emergency
      $driveremergency->reg_user_id = $request->input('reg_user_id');
      $driveremergency->reg_driver_emergency_name = $request->input('reg_driver_emergency_name');
      $driveremergency->reg_driver_emergency_email = $request->input('reg_driver_emergency_email');
      $driveremergency->reg_driver_emergency_mobile = $request->input('reg_driver_emergency_mobile');
      $driveremergency->reg_driver_emergency_landline = $request->input('reg_driver_emergency_landline');
      $driveremergency->reg_user_status = 1;


      $driver->save();
      $driverreference->save();
      $driveremergency->save();

      return redirect('/success')->with('success_message', 'Your account will be reviewed by Administrator and will be activated within 24Hrs. You will informed by Email/Mobile');

   } 
}
