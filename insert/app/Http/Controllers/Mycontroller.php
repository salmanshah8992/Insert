<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Hash;


class Mycontroller extends Controller
{
   public function contact(){
       return view('contact');
   }

   public function store(Request $request){
       $request->validate([
        'firstname' => 'required|string|max:20',
        'lastname' => 'required|string|max:20',
        'fullname' => 'required|string|max:20',
        'username' => 'required|string|max:20',
        'email' => 'required|string|max:20',
        'phone' => 'required|string|max:20',
        'subject' => 'required',
        'message' => 'required',
        'password' => 'required',
        'repeatpassword' => 'required|string|max:20',
       

    //    ],

    // //    [
           
     //    // Jodi nije theke message dite chai 
    //    // 'firstname.required' => 'Please enter first name',
    //    ]

       ]);

    //    Contact::insert([
    //        'firstname' =>$request->firstname,
    //        'lastname' =>$request->lastname,
    //        'fullname' =>$request->fullname,
    //        'username' =>$request->username,
    //        'email' =>$request->email,
    //        'phone' =>$request->phone,
    //        'subject' =>$request->subject,
    //        'message' =>$request->message,
    //        'password' =>$request->password,
    //        'repeatpassword' =>$request->repeatpassword,

    //    ]);

   $contact=new Contact();
   $contact->firstname=$request->firstname;
   $contact->lastname=$request->lastname;
   $contact->fullname=$request->fullname;
   $contact->username=$request->username;
   $contact->email=$request->email;
   $contact->phone=$request->phone;
   $contact->subject=$request->subject;
   $contact->message=$request->message;
   $contact->password=Hash::make($request->password);
   $contact->repeatpassword=$request->repeatpassword;
   $contact->save();

  
       return redirect()->back()->with('success','Insert successfully');

   }
  public function contactshow(){
    $contacts = Contact::orderBy('id', 'DESC')->get();
    return view('contactshow', compact('contacts'));
  }

}
