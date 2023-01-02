<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Registered_units;
use App\Models\Addunits;
use App\Models\Bank_details;
use App\Models\Payments;
use App\Models\Fees;
use App\Models\User;

class StudentController extends Controller
{
    public function index(){

        $user_id = auth()->user()->id;
        $fee_balancee = Fees::find($user_id)->fee_balance;

        return view('student.dashboard', compact('fee_balancee'));
    }

    public function units(){
        $units = DB::select('select * from addunits where course_code = "'.auth()->user()->course_code.'"');
        return view('student.units.viewunits',compact('units'));
    }

    public function viewunit($id){
        $unit = Addunits::find($id);
        return view('student.units.register_unit', compact('unit'));
    }

    public function register(Request $request){
        Registered_units::create(
            [
                'student_id'=> auth()->user()->id,
                'unit_name' => $request -> unit_name,
                'unit_id' => $request -> unit_code,
            ]
        );

        return redirect('student/dashboard')->with('status','Unit registered successfully');
    }

    public function make_payment(){
        return view('student.payments.index');
    }

    public function pay(Request $request){
        $user_id = auth()->user()->id;

        $this->validate($request, 
        [
            'amount_paid'=>'required|max:255',
        ]);

        Payments::create([
            'student_id'=> $user_id,
            'amount_paid'=> $request->amount_paid,

        ]);

        $fee_balancee = Fees::find($user_id)->fee_balance;
        $new_balance = $fee_balancee + $request->amount_paid;
        

        $fees = Fees::find($user_id);
        $fees -> fee_balance = $new_balance;
        $fees->save();

        return redirect()->route('student')->with('status','Payment made successfully');
    }

    public function add_details(){
        return view('student.payments.payment_info');
    }

    public function bank_details(Request $request){

    $user_id = auth()->user()->id;

    $this->validate($request, 
    [
        'card_number'=>'required|max:255',
        'expiry_date'=>'required|max:255',
        'cvv'=>'required',
    ]);

    Bank_details::create([
        'student_id'=> $user_id,
        'card_number'=> $request->card_number,
        'expiry_date'=> $request->expiry_date,
        'cvv'=> $request->cvv,

    ]); 

    return redirect()->route('student')->with('status','Bank Details updated successfully');
    }

    public function viewpayments(){
        $payments = DB::select('select * from payments where student_id = "'.auth()->user()->id.'"');
        return view('student.payments.paymenthistory', compact('payments'));
    }


}
