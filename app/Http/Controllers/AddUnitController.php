<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Addunits;

class AddUnitController extends Controller
{


    public function index()
    {
        return view('admin.units.addunits');
    }

    public function store(Request $request)
    {
        
        $this -> validate($request, [
            'unit_name'=> 'required|max:255',
            'unit_code'=> 'required|max:255',
            'course_code'=> 'required|max:255',

        ]);

        Addunits::create(
            [
                'unit_name' => $request -> unit_name,
                'unit_code' => $request -> unit_code,
                'course_code' => $request -> course_code,
            ]
        );

        return redirect('/admin/addunit')->with('status','Unit added successfully');
     
    }
}
