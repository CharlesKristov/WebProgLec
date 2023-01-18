<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\leader;
use App\Models\member;


class DashboardAdminController extends Controller
{
    //
    public function index(){
  
        $leader = leader::get();
    
        // dd($leader->first()->Payment_Photo);



        return view('admin-dashboard.dashboard', ['leader' => $leader]);

        
        
    }
}
