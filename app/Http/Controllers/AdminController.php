<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stdapplications;
use App\Models\User;
use App\Models\Wapplications;
use DB;



class AdminController extends Controller
{
    public function index()
    {
        $stdpending = Stdapplications::where('status','pending')->count();
        $stdenrolled = User::where('role','0')->count();
        $stdapproved = Stdapplications::where('status','approved')->count();
        $wpending = Wapplications::where('status','pending')->count();
        $wemployed = User::where('role','3')->count();
        $wapproved = Wapplications::where('status','approved')->count();
        $lemployed = User::where('role','2')->count();


        return view('admin.dashboard',compact('stdpending','stdenrolled','stdapproved','wpending','wemployed','wapproved','lemployed'));
    }

    public function stdpending(){
        $stdpending = DB::select("SELECT * FROM stdapplications WHERE status = 'pending' ");

        return view('admin.applications.stdpending',compact('stdpending'));
    }

    public function mstdpending($id){
        $mstdpending = Stdapplications::find($id);
       
        return view('admin.applications.mstdpending',compact('mstdpending'));
    }

    public function astdpending($id){
        if(isset($_POST['enroll'])){

            DB::table('stdapplications')
                ->where('id', stdapplications::find($id)->id)
                ->update(['status' => 'enrolled']);


            return redirect('admin/student_pending')->with('status','Student enrolled successfully');
        }
        else{

            DB::table('stdapplications')
                ->where('id', stdapplications::find($id)->id)
                ->update(['status' => 'rejected']);


            return redirect('admin/student_pending')->with('status','Student rejected');
            
        }
    }
    

}