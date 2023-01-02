<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
    
        return view('auth.login');
    }


    public function store(Request $request)
    {
       $this->validate($request, 
    [
    
        'email'=>'required|email',
        'password'=>'required',
    ]);
 

    if (auth() -> attempt($request -> only('email', 'password'), $request->remember )){
        //directs user to dashboard
        //return redirect()->route('dashboard');
        if(Auth::user()->role== '1') // admin -> 1
    {
        return redirect('admin/dashboard')->with('status','Welcome back');
    }
    else if(Auth::user()->role== '2'){
        return redirect('lecturer/dashboard')->with('status','Welcome back');
    }
    else if(Auth::user()->role== '3'){
        return redirect('finance/dashboard')->with('status','Login Successful');
    }
    else {
        return redirect('student/dashboard')->with('status','Login Successful');
    }
    }
    else{
        return back()-> with('status', 'Invalid login details');
    }

    } 
}
