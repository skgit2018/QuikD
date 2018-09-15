<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Driverpool;

class DriverPoolController extends Controller
{
   public function Driverpool(Request $request){
    $driver = new Driverpool;
    $driver->reg_user_id  = $request->input('reg_user_id'); //Session Data
    $driver->reg_driver_name = ucwords($request->input('reg_driver_name'));
    $driver->reg_driver_time = $request->input('reg_driver_time');
    $driver->reg_driver_car = $request->input('reg_driver_car');
    $driver->reg_driver_payment = $request->input('reg_driver_payment');
    $driver->reg_driver_updated_date = date('d-m-Y H:i:s'); 
    $driver->reg_driver_extime = 0;
    //$driver->reg_driver_state = $request->input('reg_driver_state');
    //$driver->reg_driver_pincode = $request->input('reg_driver_pincode');
    $driver->reg_driver_status = 1;

    $driver->save();
    return redirect('/');

   }
}
