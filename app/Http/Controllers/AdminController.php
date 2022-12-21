<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stdapplications;
use App\Models\User;
use App\Models\Wapplications;



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
}
