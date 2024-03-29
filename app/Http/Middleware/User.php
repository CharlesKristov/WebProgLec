<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && Auth::user()->Role=="user"){
            return $next($request);
        }
        else if(Auth::check() && Auth::user()->Role=="admin"){
            return redirect()->back()->with('alert', 'Only Credential User Can Visit This Page!'); 
        }
        else{
            return redirect(route('login'))->with('alert', 'Please Login To Continue'); 
        }
    }
}
