<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Fees;

class FinanceController extends Controller
{
    public function index(){
        $pending=Fees::where("fee_balance","<","0")->count();
        $cleared=Fees::where("fee_balance",">=","0")->count();
        $urgent=Fees::where("fee_balance","<","-100000")->count();
        return view('finance.dashboard',compact('pending','cleared','urgent'));
    }

    public function payments(){
        $payment = DB::select('select * from payments');

        return view('finance.payments', compact('payment'));
    }

    public function fee_balance(){
        $balance = DB::select('select * from fees where fee_balance < "0"');

        return view('finance.pendingclearance', compact('balance'));
    }

    public function cleared(){
        $cleared = DB::select('select * from fees where fee_balance >= "0"');

        return view('finance.cleared', compact('cleared'));
    }

    public function urgent(){
        $urgent = DB::select('select * from fees where fee_balance < "-100000"');

        return view('finance.urgent', compact('urgent'));
    }
}
