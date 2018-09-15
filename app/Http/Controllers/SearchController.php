<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Search;
use Session;
use Auth;

class SearchController extends Controller
{
   public function SearchResults(){
       
     //Create an Object for the Model Class
     $search = new Search;   
     
     $search_data = DB::select("SELECT * FROM qdm_users INNER JOIN qdm_drivers_info ON qdm_users.reg_user_id = qdm_drivers_info.reg_user_id INNER JOIN qdm_driver_idverify ON qdm_users.reg_user_id = qdm_driver_idverify.reg_user_id INNER JOIN qdm_driver_bank_details ON qdm_users.reg_user_id = qdm_driver_bank_details.reg_user_id INNER JOIN qdm_driver_verify ON qdm_users.reg_user_id = qdm_driver_verify.reg_user_id INNER JOIN driver_reference ON qdm_users.reg_user_id = driver_reference.reg_user_id INNER JOIN driver_emergency ON qdm_users.reg_user_id = driver_emergency.reg_user_id AND qdm_users.reg_user_account_type = 'driver'");

     echo "<pre>";
     print_r($search_data);
     echo "</pre>";

     /*$driver_id = $search_data[0]->reg_user_id;
     $driver_fname = $search_data[0]->reg_driver_firstname;
     $driver_lname = $search_data[0]->reg_driver_lastname;
     $driver_gender = $search_data[0]->reg_driver_gender;
     $driver_address = $search_data[0]->reg_driver_address;
     $driver_street = $search_data[0]->reg_driver_street;
     $driver_location = $search_data[0]->reg_driver_location;
     $driver_city = $search_data[0]->reg_driver_city;
     $driver_state = $search_data[0]->reg_driver_state;
     $driver_exp = $search_data[0]->reg_driver_experience;


     $search_arr_data = array(

      'driver_id' => $driver_id,
      'driver_fname' => $driver_fname,
      'driver_lname' => $driver_lname,
      'driver_gender' => $driver_gender,
      'driver_addr' => $driver_address,
      'driver_street' => $driver_street,
      'driver_loc' => $driver_location,
      'driver_city' => $driver_city,
      'driver_state' => $driver_state,
      'driver_exp' => $driver_exp


     );*/
     
     /*echo "<pre>";
     print_r($search_arr_data);
     echo "</pre>";*/



     return redirect('/searchresults')->with('search', $search_data);












   }
}
