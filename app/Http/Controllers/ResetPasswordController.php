<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ResetPasswordController extends Controller
{
    //
    public function index($token){
        return view('home.reset', ['token'=>$token]);
    }
    public function resetpass(Request $req){
        $req->validate([
            'email' => 'required|email:dns|exists:leaders',
            'password' => 'required|min:8|confirmed|alpha_num',
            'password_confirmation' => 'required',
        ]);
        $update = DB::table('password_resets')->where(['email' => $req->email, 'token' => $req->token])->first();
        if(!$update){
            return back()->with('error', 'Invalid token!');
        }
        else{
            DB::table('leaders')->where('email', 'LIKE',$req->email)->update([
                'password' => Hash::make($req->password),
            ]);
            DB::table('password_resets')->where(['email'=> $req->email])->delete();
            return redirect('/login');
        }
    }
}
