<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function CheckSession(){
        if (session()->has('leaders')) {
        $leaderSession = session()->get('leaders');
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


            return view('user-dashboard.dashboard', 
            ['leader' => $leader,
             'members' => $members
            ]
            );
        }
        else {
            // return redirect()->route('home');
            return redirect()->to('/')->send();
    
        }
    }

    public function viewPayment(){
        return view('user-dashboard.payment');
    }

    public function viewTimeline(){
        return view('user-dashboard.timeline');
    }
}
