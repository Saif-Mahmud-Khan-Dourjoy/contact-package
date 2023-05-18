<?php

namespace Dourjoy\Contact\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Dourjoy\Contact\Http\Models\Contact;
use Dourjoy\Contact\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

// use DB;

class ContactController extends Controller
{
   public function index(){
    return view('contact::contact');
   }

   public function send(Request $request){
    Mail::to(config('contact.send_email_to'))->send(new ContactMail($request));
    $contact= new Contact;
    $contact->name=$request->name;
    $contact->email=$request->email;
    $contact->message=$request->message;
    $contact->save();
    // $data['name']=$request->name;
    // $data['email']=$request->email;
    // $data['message']=$request->message;

    // DB::table('contacts')->insert($data);
    // $request->session()->flash('success',"Successfully Added");
    return redirect('/contact')->with('success', 'Successfully Added');
   }
}
