<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Addunits;
use DB;

class AddUnitController extends Controller
{

    public function viewunit(){
        $units = DB::select("select * from addunits");

        return view('admin.units.viewunits', compact("units"));
    }

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
        public function destroy($unit_code){
            DB::delete('delete from addunits where unit_code = ?',[$unit_code]);
            return redirect('/admin/viewunit')->with('status','Unit deleted successfully');
        }
    
        public function edit($unit_code){
            $units = Addunits::find($unit_code);
            return view('admin.units.edit', compact('units'));
    
        }
        public function update(Request $request, $unit_code){
            
            $units = Addunits::find($unit_code);
            $units -> unit_name = $request -> unit_name;
            $units -> unit_code = $request -> unit_code;
            $units -> course_code = $request -> course_code;
            $units->save();
    
            return redirect('/admin/viewunit')->with('status','Unit details edited successfully');
        }
    }

