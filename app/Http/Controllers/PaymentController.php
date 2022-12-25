<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\leader;

class PaymentController extends Controller
{
    //
    public function store(Request $request) {
        return view('payment');
    }
    public function uploadreceipt(Request $request) {
        $request->validate([
            'receipt'=>'required'
        ]);

        $receipt = $request->file('receipt');
        $receipt->store('public');

        // CRUD
        $value = $request->session()->get('leaders');
        $team_name = $value->Team_Name;
        DB::table('leaders')
              ->where('Team_Name' ,$team_name)
              ->update(['Payment_Photo' => $receipt]);

        DB::table('leaders')
              ->where('Team_Name' ,$team_name)
              ->update(['Payment_Status' => 'unverified']);

        return redirect()->to('dashboard')->send();
    }
}
