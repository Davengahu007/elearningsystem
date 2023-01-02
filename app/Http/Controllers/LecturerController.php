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
        return view('lecturer.viewunits',compact('units'));
 
        return redirect('lecturer/dashboard');
    }
}
