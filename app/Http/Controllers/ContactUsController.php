<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contactus');
    }
    
    public function send(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>['required', 'email'],
            'subject'=>'required',
            'message'=>'required'
        ]);

        if($this->isOnline()){
            $mail_data = [
                'recipient' => 'mathias.dariu@gmail.com',
                'fromEmail'=>$request->email,
                'fromName'=>$request->name,
                'subject'=>$request->subject,
                'body'=>$request->message
            ];

            \Mail::send('emails.mail', $mail_data, function($message) use ($mail_data){
                $message->to($mail_data['recipient'])->from($mail_data['fromEmail'],$mail_data['fromName'])->subject($mail_data['subject']);
            });

            return redirect()->back()->with('success', 'Email-i u dergua!');
        }else{
            return redirect()->back()->withInput()->with('error', 'Nuk ka lidhje me internetin!');
        }
    }

    public function isOnline($site = "https://google.com"){
        if(@fopen($site,"r")){
            return true;
        }
        else{
            return false;
        }
    }
}
