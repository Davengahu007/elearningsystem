<?php
namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        if(Auth::user()->role == '1') // admin -> 1
        {
            return view('admin.profile');
        }
        else if(Auth::user()->role == '2'){
            return view('lecturer.profile');
        }
        else if(Auth::user()->role == '0'){
            return view('profile');
        }
        else if(Auth::user()->role == '3'){
            return view('staff.profile');
        }
        //return view('profile');
    }
   
    public function passwordCreate(){
        if(Auth::user()->role == '1') // admin -> 1
        {
            return view('admin.change-password');
        }
        else if(Auth::user()->role == '2'){
            return view('lecturer.change-password');
        }
        else if(Auth::user()->role == '0'){
            return view('student.change-password');
        }
        else if(Auth::user()->role== '3'){
            return view('finance.change-password');
        }

        //return view('change-password');
    }

    public function changePassword(Request $request){
        $request->validate([
            'current_password' => ['required','string'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $currentPasswordStatus = Hash::check($request->current_password, auth()->user()->password);
        if($currentPasswordStatus){

            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password),
            ]);

            if(Auth::user()->role == '1') // admin -> 1
            {
                return redirect('admin/dashboard')->with('message','Password Updated Successfully');
            }
            else if(Auth::user()->role == '2'){
                return redirect('lecturer/dashboard')->with('message','Password Updated Successfully');
            }
            else if(Auth::user()->role == '0'){
                return redirect('/student/dashboard')->with('message','Password Updated Successfully');
            }
            else if(Auth::user()->role == '3'){
                return redirect('/finance/dashboard')->with('message','Password Updated Successfully');
            }


            //return redirect()->back()->with('message','Password Updated Successfully');

        }else{

            return redirect()->back()->with('message','Current Password does not match with Old Password');
        }
    
    }

}

