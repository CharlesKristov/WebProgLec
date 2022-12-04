<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\leader;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'teamname' => 'required',
            'id' => 'required',
            'email' => 'required|email:dns',
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
            'password' => $password,
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
    public function update(Request $request, leader $leader)
    {
        //
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
