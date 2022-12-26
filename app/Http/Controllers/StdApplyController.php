<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StdApplications;
use DB;


class StdApplyController extends Controller
{

    public function index()
    {
      $courses = DB::select('select * from addcourses');
      return view('applications.studentapply', compact('courses'));
    }


  public function store(Request $request){
    $this ->validate($request,[
        'name'=>'required|max:255',
        'email'=>'required|max:255',
        'age'=>'required|max:255',
        'former_school'=>'required|max:255',
        'grade'=>'required|max:255',
        'course'=>'required|max:255',
        'description'=>'required|max:255',
        'document'=>'required',
    ]);

    
      $file = $request->file('document');
      $extention = $file->getClientOriginalExtension();
      $filename = time().'.'.$extention;
      $file->move('uploads/students',$filename);

    StdApplications::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'age'=>$request->age,
        'former_school'=>$request->former_school,
        'grade'=>$request->grade,
        'course'=>$request->course,
        'description'=>$request->description,
        'document'=>$filename,
    
    ]);
   


return redirect('/')->with('status','Application made successfully');
  }
}
