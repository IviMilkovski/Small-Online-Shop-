<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\UserActivity;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends OsnovniController
{
    public function index(){
        return view('main.pages.main.contact', $this->data);
    }
    public function store(Request $request)
    {


                $message = new Contact();
               $message->name = $request->name;
            $message->email = $request->email;
            $message->subject = $request->subject;
            $message->message = $request->message;
            $message->is_read = 0;

            $message->save();
       //slanje na moj mail
//            \Mail::to('ivamilkovski44@gmail.com')->send(new SendMail($details));


        if (session('user')){
            $userActivity = new UserActivity();
            $userActivity->user_id = session()->get("user")->id;
            $userActivity->ip_address = request()->ip();
            $userActivity->date = date("Y-m-d H:i:s");
            $userActivity->activity = session()->get("user")->username. "User has contacted the admin." . "\t";

            $userActivity->save();
        }

            return redirect()->route('home');
        }


}
