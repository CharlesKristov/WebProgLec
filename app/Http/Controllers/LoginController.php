<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\leader;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function login(Request $req)
    {
        $leaders = leader::where(['email'=>$req->email])->first();
        if(!$leaders || !Hash::check($req->password, $leaders->Password)){
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.'
            ]);
        }
        else{
            $req->session()->put('leaders',$leaders);
            return redirect('dashboard');
        }
    }
}
