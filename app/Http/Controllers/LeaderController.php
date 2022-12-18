<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\leader;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
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

    public function verif(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkpass(Request $request){

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function show(leader $leader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function edit(leader $leader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //input value to leader table for competition
        // dd($request);
        $validated = $request->validate([
            'leader_name'=>'',
            'competition'=>'required|IN:Capture The Flag,Game Ideation,Hackathon,Competitive Programming'
        ]);
        $value = $request->session()->get('leaders');
        $team_name = $value->Team_Name;


        DB::table('leaders')
              ->where('Team_Name' ,$team_name)
              ->update(['Competition' => $request->competition]);

        // dd($leader_name);

        return redirect()->to('dashboard')->send();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\leader  $leader
     * @return \Illuminate\Http\Response
     */
    public function destroy(leader $leader)
    {
        //
    }
}
