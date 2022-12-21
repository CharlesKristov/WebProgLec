<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function CheckSession(){
        $data = session()->all(); 

        if (session()->has('leaders')) {
        $leaderSession = Session::get('leaders');
        //
        // dd($leaderSession->Team_Name);
        $leader = DB::table('leaders')
                    ->where('id', '=', $leaderSession->id)
                    ->get()->first();
    
                    // dd($leader);
        // echo $leader->Team_Name;
        $members = DB::table('leaders')
                ->join('members', 'leaders.id', '=', 'members.Leader_id')
                ->where('leaders.id', '=', $leader->id)
                ->get();

            return redirect('dashboard');
        }
        else {
            // return redirect()->route('home');
            return redirect()->to('/')->send();
    
        }
    }
}
