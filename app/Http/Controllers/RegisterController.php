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
            'fullname' => 'required|min:5|max:30',
            'teamname' => 'required|min:3|max:20',
            'id' => 'required',
            'email' => 'required|email:dns|unique:leaders',
            'password' => 'required|min:8',
            'confpass' => 'required|min:8',
            'dob' => 'required|date',
            'phone' => 'required|min:11',
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
            //$name = $request->file('id_card')->getClientOriginalName();
            //$path = $request->file('id_card')->store('public/images');
            //$save = new File;
            //$save->name = $name;
            //$save->path = $path;
            // $size = $request->file('id')->getSize();
            // $name = $request->file('id')->getClientOriginalName();
            // $request->file('id')->store('public/images');
            // $save = new Photo;
            // $save->name = $name;
            // $save->size = $size;

            // $save->save();
            return redirect('login');
        }
        else{
            return back()->withErrors([
                'confpass' => ['Pasword does not match!']
            ]);
        }
    }
}
