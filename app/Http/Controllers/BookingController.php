<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{
    public function Booking(Request $request){

        $user = new Booking;

        //Fetch The Data
        $user->Search_user_id = 1;
        $user->search_driver_from = ($request->input('search_driver_from'));
        $user->search_driver_to =  ($request->input('search_driver_to'));
        $user->driver_time =  ($request->input('driver_time'));
        $user->search_user_status = 1;
        
        $user->save();


        return redirect('/');

    }
}
