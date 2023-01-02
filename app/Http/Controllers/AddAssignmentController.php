<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addassignments;
use DB;


class AddAssignmentController extends Controller
{
    public function viewassignment(){
        $assignment = DB::select("select * from addassignments");

        return view('lecturer.assignments.viewassignment' , compact('assignment'));
    }

    public function viewsubmission(){
        $assignment = DB::select('select * from submissions where unit_code = "'.auth()->user()->unit_code.'"');

        return view('lecturer.assignments.viewsubmissions' , compact('assignment'));
    }

    public function index()
    {
        $units = DB::select('select * from addunits');
        return view('lecturer.assignments.addassignment',compact('units'));
    }

    public function store(Request $request)
    {
        $this -> validate($request, [
            'assignment_name'=>'required|max:255',
            'due_date'=>'required|max:255',
            'instruction'=>'required|max:255',
            'year'=>'required|max:255',
            'unit'=>'required|max:255',
        ]);

        Addassignments::create(
            [
                'assignment_name'=>$request->assignment_name,
                'due_date'=>$request->due_date,
                'instruction'=>$request->instruction,
                'year'=>$request->year,
                'unit_code'=>$request->unit,
            ]
        );

        return redirect('lecturer/dashboard')->with('status','Assignment added successfully');
     
    }
       
        public function edit($assignment_name){
            $assignment = Addassignments::find($assignment_name);
            return view('lecturer.assignments.edit');
        }

        public function update(Request $request, $assignment_name){
            
            $assignment = Addassignments::find($assignment_name);
            $assignment -> assignment_name = $request -> assignment_name;
            $assignment -> due_date = $request -> due_date;
            $assignment -> instruction = $request -> instruction;
            $assignment->save();
    
            return redirect('/lecturer/dashboard')->with('status','Assignment details edited successfully');
        }

}
