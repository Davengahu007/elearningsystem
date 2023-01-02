<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stdapplications;
use App\Models\User;
use App\Models\Fees;
use App\Models\Wapplications;
use DB;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\Mail\WelcomeMail;



class AdminController extends Controller
{

    public function send_email()
    {
        $mailData = [
            'title' => 'Mail from MYSCHOOL.com',
            'body' => 'This is for testing email using smtp.'
        ];

        
        Mail::to('emmanuelchivunira@gmail.com')->send(new WelcomeMail($mailData));
           
        dd("Email is sent successfully.");
    }


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

    public function wpending(){
        $wpending = DB::select("select * from wapplications where status='pending'");

        return view('admin.applications.wpending',compact('wpending'));
    }

    public function mwpending($id){
        $mwpending = Wapplications::find($id);
       
        return view('admin.applications.mwpending',compact('mwpending'));
    }

    public function awpending(Request $request, $id){
        $user = Wapplications::find($id);
        if(isset($_POST['employ'])){

            DB::table('wapplications')
                ->where('id', Wapplications::find($id)->id)
                ->update(['status' => 'employed']);


            if($user->job == "lecturer"){
                User::create([
                    'name'=>$user->name,
                    'email'=>$user->email,
                    'password'=>Hash::make("123"),
                    'role'=>"2",
                        
                ]);

                return redirect('admin/worker_pending')->with('status','Lecturer employed successfully');
            }
            else{
                User::create([
                    'name'=>$user->name,
                    'email'=>$user->email,
                    'password'=>Hash::make("123"),
                    'role'=>"3",
                        
                ]);

                return redirect('admin/worker_pending')->with('status','Finance staff employed successfully');   

            }
            
        }
        else{

            DB::table('wapplications')
                ->where('id', Wapplications::find($id)->id)
                ->update(['status' => 'rejected']);


            return redirect('admin/worker_pending')->with('status','Applicant rejected');  
        }

    }


    public function stdpending(){
        $stdpending = DB::select("SELECT * FROM stdapplications WHERE status = 'pending' ");

        return view('admin.applications.stdpending',compact('stdpending'));
    }

    public function mstdpending($id){
        $mstdpending = Stdapplications::find($id);
       
        return view('admin.applications.mstdpending',compact('mstdpending'));
    }

    public function astdpending(Request $request, $id){
        $user = Stdapplications::find($id);
        

        if(isset($_POST['enroll'])){

            DB::table('stdapplications')
                ->where('id', Stdapplications::find($id)->id)
                ->update(['status' => 'enrolled']);

            User::create([
                'name'=>$user->name,
                'email'=>$user->email,
                'course_code'=>$user->course,
                'password'=>Hash::make("123"),
                'role'=>"0",
                
            ]);

            $mailData = [
                'title' => 'CONGRATULATIONS!',
                'body' => 'Welcome To MYSCHOOL',
                'password' => 'Your Default password for logging in is 123',

            ];

            $email_array = DB::select('select email from stdapplications where id = "'.$id.'" ');

            $myemail = $user->email;

            Mail::to($myemail)->send(new WelcomeMail($mailData));
               

            // dd($user->course);

            return redirect('admin/student_pending')->with('status','Student enrolled successfully');
        }
        else{

            DB::table('stdapplications')
                ->where('id', stdapplications::find($id)->id)
                ->update(['status' => 'rejected']);


            return redirect('admin/student_pending')->with('status','Student rejected');  
        }

    }
    
    public function fee($id){
        $countstd = Fees::where('id',$id)->count();
        $sfees = -200000;

        if($countstd == 0){
           Fees::create([
                'id'=>$id,
                'fee_balance'=>$sfees,
            ]); 
          return redirect('admin/dashboard')->with('status','Fees Posted successfully');   
        }
        else{
            return redirect('admin/viewstudents')->with('status','Student has already been assigned fees');
        }
    }

}