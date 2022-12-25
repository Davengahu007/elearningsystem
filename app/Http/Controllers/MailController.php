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
            'title' => 'Mail from MYSCHOOL.com',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to('davengahu007@gmail.com')->send(new WelcomeMail($mailData));
           
        dd("Email is sent successfully.");
    }
}