<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\leader;

class PaymentController extends Controller
{
    //
    public function store(Request $request) {
        return view('payment');
    }
    public function uploadreceipt(Request $request) {
        $request->validate([
            'receipt'=>'required|mimes:png,jpg,jpeg'
        ]);

        $receipt = $request->file('receipt');
        $receiptName = $receipt->getClientOriginalName();

        $receipt->move('storage/app/Receipts', $receiptName);
        // $original_name->move('storage/app/KTP_image', $file_name);

        // CRUD
        $value = $request->session()->get('leaders');
        $team_name = $value->Team_Name;
        DB::table('leaders')
              ->where('Team_Name' ,$team_name)
              ->update(['Payment_Photo' => $receiptName, 'Payment_Status' => 'unverified']);

        return redirect()->to('dashboard')->send();
    }
}
