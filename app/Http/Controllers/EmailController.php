<?php

namespace App\Http\Controllers;

use App\Mail\Welcomeemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(){
        $toEmail= 'saimkhann3575@gmail.com';
        $message="Hello, welcme to our website";
        $subject= "welcome to AllPosts";
        $details=[
            'name'=>"john Doe",
            'product'=>"Test Product",
            'price'=>250,
        ];

     $request= Mail::to($toEmail)->send(new Welcomeemail($message,$subject,$details));
     dd($request);
    }
    public function login(){
        return view('login');
    }
    // public function sendLoginEmail(Request $request){
    //     $request->validate([
    //         'name'=>'required',
    //         'email'=>'required|email',
    //         'subject'=>'required|min:5|max:100',
    //         'message'=>'required|min:10|max:255',
    //         'attachment'=>'required|mimes:xls,xlsx,doc,pdf,docx'
    //     ]);
    //     $filename= time() . "." . $request->file('attachment')->extension();
    //     $request->file('attachment')->move('uploads',$filename);
    //     dd($filename);
    // }
}
