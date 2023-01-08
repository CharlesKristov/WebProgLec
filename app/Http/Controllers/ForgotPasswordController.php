<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Mail;


class ForgotPasswordController extends Controller
{
    //
    public function index(){
       return view('home.forgot');
    }
    public function sendlink(Request $req){
        $req->validate([
            'email' => 'required|email:dns|exists:leaders',
        ]);
        $token = Str::random(50);
        DB::table('password_resets')->insert([
            'email' => $req->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        Mail::send('home.message', ['token' => $token], function ($message) use ($req){
            $message->to($req->email);
            $message->subject('Reset Password Notification');
        });
        return back()->with('message', 'We have e-mailed your password reset link!');
     }
}
