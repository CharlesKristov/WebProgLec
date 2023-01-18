<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\leader;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Session\Session;

class LoginController extends Controller
{
    public function index(){
        return view('home.login');
    }
    public function login(Request $req)
    {
        $leaders = leader::where(['email'=>$req->email])->first();
        $this->validate($req, [
            "email" => "required|email",
            "password" => "required"
        ]);

        Cookie::queue('CookieEmail', $req->email, 2628000);
        Cookie::queue('CookiePassword', $req->password, 2628000);

        if(!Auth::attempt(['email' => $req->email, 'password' => $req->password])){
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.'
            ]);
        }

        // if(!$leaders || !Hash::check($req->password, $leaders->Password)){
        //     return back()->withErrors([
        //         'email' => 'The provided credentials do not match our records.'
        //     ]);
        // }
        else{
            if($req->rem != null){
                Cookie::queue('CookieEmail', $req->email, 2628000);
                Cookie::queue('CookiePassword', $req->password, 2628000);
            }
           if(Auth::user()->Role=="user"){
                $req->session()->put('leaders',$leaders);
                return redirect('dashboard');
           }else{
                return redirect('admin/manage');
           }

        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }



}
