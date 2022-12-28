<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Registered_units;
use App\Models\Addunits;

class StudentController extends Controller
{
    public function index(){

        return view('student.dashboard');
    }

    public function units(){
        $units = DB::select('select * from addunits where course_code = "'.auth()->user()->course_code.'"');
        return view('student.viewunits',compact('units'));
    }

    public function viewunit($id){
        $unit = Addunits::find($id);
        return view('student.register_unit', compact('unit'));
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


}
