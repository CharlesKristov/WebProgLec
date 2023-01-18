<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\leader;
use App\Models\member;


class DashboardAdminController extends Controller
{
    public function index(){
  
        $leader = leader::get()->toQuery()->paginate(1);
        return view('admin-dashboard.verify-payment', ['leader' => $leader]);

    }

    public function manage(){
        $leader = leader::get()->toQuery()->paginate(1);
        return view('admin-dashboard.manage-team', ['leader' => $leader]);
    }

   
}
