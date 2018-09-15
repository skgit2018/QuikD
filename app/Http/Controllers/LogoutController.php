<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logout;
use Illuminate\Support\Facades\DB;

class LogoutController extends Controller
{
    public function Logout(Request $request){

        $request->session()->flush();
        return redirect('/');

    }
}
