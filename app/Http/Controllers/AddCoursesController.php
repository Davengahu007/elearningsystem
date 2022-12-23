<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Addcourses;

class AddCoursesController extends Controller
{


    public function index()
    {
        return view('admin.courses.addcourses');
    }

    public function store(Request $request)
    {
        
        $this -> validate($request, [
            'course_name'=> 'required|max:255',
            'course_code'=> 'required|max:255',
            'school'=> 'required|max:255',
            'duration'=> 'required|max:255',
            

        ]);

        Addcourses::create(
            [
                'course_name' => $request -> course_name,
                'course_code' => $request -> course_code,
                'school' => $request -> school,
                'duration' => $request -> duration,
            ]
        );

    

        return redirect('/admin/addcourse')->with('status','Course added successfully');
        
        
        
    }
}
