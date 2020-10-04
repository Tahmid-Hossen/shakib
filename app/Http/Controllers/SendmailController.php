<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class SendmailController extends Controller
{
  public function index(){
    return view('contact.pages');
  }
  public  function send(Request $request)
  {
    $this->validate($request, [
      'subject' => 'required',
      'email' => 'required|email',
      'message' =>  'required'
    ]);

    $data = array(
      'email' => $request->email,
      'subject' => $request->subject,
      'message' => $request->message,
    );
    Mail::to(env("CONTACT_MAIL","contact@departmentofcse.com"))->send(new SendEmail($data));
    return  back()->with('success', 'Thanks for contacting us!');
  }
}
