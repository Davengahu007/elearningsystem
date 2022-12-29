<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Mail;
use App\Mail\WelcomeMail;
  
class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $mailData = [
            'title' => 'CONGRATULATIONS!',
            'body' => 'Welcome To MYSCHOOL'
        ];
         
        Mail::to('davengahu007@gmail.com')->send(new WelcomeMail($mailData));
           
        dd("Email is sent successfully.");
    }
}