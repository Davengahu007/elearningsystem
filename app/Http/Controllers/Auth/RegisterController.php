<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

   public function store(Request $request)
    {
     $this->validate($request, 
    [
        'name'=>'required|max:255',
        'email'=>'required|max:255',
        'password'=>'required|confirmed',
        'role'=>'required',


    ]);
    User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'role'=>$request->role,

    ]);
    
    auth()->attempt ($request->only('email','password'));

         return redirect()->route('dashboard');
      
    }
}
