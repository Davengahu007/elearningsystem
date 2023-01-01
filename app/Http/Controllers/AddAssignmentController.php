<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addassignment;
use DB;


class AddAssignmentController extends Controller
{
    public function viewassignment(){
        $assignment = DB::select("select * from addassignment");

        return view('lecturer.viewassignment' , compact('assignment'));
    }

    public function index()
    {
        return view('lecturer.addassignment');
    }

    public function store(Request $request)
    {
        
        $this -> validate($request, [
            'assignment_name'=> 'required|max:255',
            'due_date'=> 'required|max:255',
            'instruction'=> 'required|max:255',

        ]);

        Addassignment::create(
            [
                'assignment_name' => $request -> assignment_name,
                'due_date' => $request -> due_date,
                'instruction' => $request -> instruction,
            ]
        );


        return redirect('/lecturer/addassignment')->with('status','Assignment added successfully');
     
    }
       
        public function edit($assignment_name){
            $assignment = Addassignment::find($assignment_name);
            return view('lecturer.edit');
        }

        public function update(Request $request, $assignment_name){
            
            $assignment = Addassignment::find($assignment_name);
            $assignment -> assignment_name = $request -> assignment_name;
            $assignment -> due_date = $request -> due_date;
            $assignment -> instruction = $request -> instruction;
            $assignment->save();
    
            return redirect('/lecturer/viewassignment')->with('status','Assignment details edited successfully');
        }
}
