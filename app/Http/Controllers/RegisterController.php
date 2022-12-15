<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\leader;

class RegisterController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'teamname' => 'required',
            'id' => 'required',
            'email' => 'required|email:dns|unique:leaders',
            'password' => 'required',
            'confpass' => 'required',
            'dob' => 'required',
            'phone' => 'required',
        ]);
        //
        $fullname = $request->get('fullname');
        $teamname = $request->get('teamname');
        $image = $request->get('id');
        $email = $request->get('email');
        $password = $request->get('password');
        $confpass = $request->get('confpass');
        $dob = $request->get('dob');
        $phone = $request->get('phone');

        if($password == $confpass){
            DB::table('leaders')->insert([
            'full_name' => $fullname,
            'role' => 'user',
            'team_name' => $teamname,
            'id_card' => $image,
            'email' => $email,
            'password' => Hash::make($password),
            // 'password' => $password,
            'dob' => $dob,
            'phone' => $phone
            ]);
            return redirect('/');
        }
        else{
            return back()->withErrors([
                'confpass' => ['Pasword does not match!']
            ]);
        }
    }
}
