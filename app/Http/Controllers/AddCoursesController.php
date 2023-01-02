<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Addcourses;
use DB;

class AddCoursesController extends Controller
{


    public function index()
    {
        return view('admin.courses.addcourses');
    }

    public function viewcourse(){
        $courses = DB::select("select * from addcourses");

        return view('admin.courses.viewcourses', compact("courses"));
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


        return redirect('admin/addcourse')->with('status','Course added successfully');   
    }

    public function destroy($course_code){
        DB::delete('delete from addcourses where course_code = ?',[$course_code]);
        return redirect('admin/viewcourse')->with('status','Course deleted successfully');
    }

    public function edit($course_code){
        $courses = Addcourses::find($course_code);
        return view('admin.courses.edit', compact('courses'));

    }
    public function update(Request $request, $course_code){
        
        $courses = Addcourses::find($course_code);
        $courses -> course_name = $request -> course_name;
        $courses -> course_code = $request -> course_code;
        $courses -> school = $request -> school;
        $courses -> duration = $request -> duration;
        $courses->save();

        return redirect('admin/viewcourse')->with('status','Course details edited successfully');
    }
}
