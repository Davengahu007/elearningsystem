<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function index(){

        return view('lecturer.dashboard');
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
}
