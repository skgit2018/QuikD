<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Success;

class SuccessController extends Controller
{
    public function Success(Request $request){
                
        
            
 return redirect('/success')->with('success_message', 'Your Account has been Activated With in 24Hr please Check Your Email or Mobile Number');           
        


    }
}
