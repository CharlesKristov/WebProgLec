<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\leader;
use DB;


class AdminController extends Controller
{
    public function editMember(Request $request, $id){
        $request->validate([
            'Full_Name' => 'required|min:5',
            'Email' => 'required|email:dns|unique:members',
            'DOB' => 'required|date',
            'Phone' => 'required|min:11',
        ]);
        DB::table('members')
            -> where('id', 'like', $id)
            -> update([
                'Full_Name' => $request->get('Full_Name'),
                'Email' => $request->get('Email'),
                'DOB' => $request->get('DOB'),
                'Phone' => $request->get('Phone')
            ]);

            $leader = leader::where('Role' , 'LIKE', 'user')->paginate(3);
        return view('admin-dashboard.manage-team', 
                ['leader' => $leader]);
    }

    public function editTeam(Request $request, $id){
        DB::table('leaders')->where('id', 'like', $id)
        ->update([
            'Team_Name' => $request->get('Team_Name')
        ]);

        $leader = leader::where('Role' , 'LIKE', 'user')->paginate(3);
        return view('admin-dashboard.manage-team', 
                ['leader' => $leader]);
    }

    public function update($id){
        $leader = Leader::findOrFail($id);
        return view('admin-dashboard.update-team', ['leader' => $leader]);
        //return view('')
    }

    public function destroy($id){
        DB::table('leaders')->where('id', 'like', $id)->delete();
        $leader = leader::get();
        return back();
    }

    public function verifyPayment($id){
        $leader =  Leader::findOrFail($id);
        $leader->Payment_Status = "verified";
        $leader->save();
     
        return back();
    }
}   
