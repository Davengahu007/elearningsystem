<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StdApplications;


class StdApplyController extends Controller
{

    public function index()
    {
        return view('applications.studentapply');
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
    ]);
    StdApplications::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'age'=>$request->age,
        'former_school'=>$request->former_school,
        'grade'=>$request->grade,
        'course'=>$request->course,
        'description'=>$request->description,
    ]
);

return redirect('/home')->with('status','Application made successfully');
  }
}
