<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function userDashboard(){
        return view('dashboard');
    }
    
    public function adminDashboard(){
     
    }
}
