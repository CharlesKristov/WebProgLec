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

    public function index(){
        return view('home.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|min:5|max:30',
            'Team_Name' => 'required|min:3|max:20|unique:leaders',
            'id' => 'required|mimes:png,jpg,jpeg',
            'email' => 'required|email:dns|unique:leaders',
            'password' => 'required|min:8|confirmed|alpha_num',
            'password_confirmation' => 'required',
            'dob' => 'required|date|before_or_equal:today',
            'phone' => 'required|min:11',
        ]);
        $original_name = $request->file('id');
        $name = $request->get('Team_Name');
        $ext = $original_name->getClientOriginalExtension();
        $file_name = 'KTP_image/' . $name . '.' . $ext;
        //$original_name->storeAs('public/image', $file_name);
        $original_name->move('storage/app/KTP_image', $file_name);

        $fullname = $request->get('fullname');
        $teamname = $request->get('Team_Name');
        $image = $request->get('id');
        $email = $request->get('email');
        $password = $request->get('password');
        $dob = $request->get('dob');
        $phone = $request->get('phone');

        DB::table('leaders')->insert([
            'full_name' => $fullname,
            'role' => 'user',
            'team_name' => $teamname,
            'id_card' => $file_name,
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
}
