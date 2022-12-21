<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WApplications;

class WApplyController extends Controller
{
    public function index()
    {
        return view('applications.workersapply');
    }


  public function store(Request $request){
    $this ->validate($request,[
        'name'=>'required|max:255',
        'email'=>'required|max:255',
        'age'=>'required|max:255',
        'id_no'=>'required|max:255',
        'job'=>'required|max:255',
        'document'=>'required',
    ]);

      $file = $request->file('document');
      $extention = $file->getClientOriginalExtension();
      $filename = time().'.'.$extention;
      $file->move('uploads/staff',$filename);

    WApplications::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'age'=>$request->age,
        'id_no'=>$request->id_no,
        'job'=>$request->job,
        'document'=>$filename,
    ]
);

return redirect('/')->with('status','Application made successfully');
  }
}
