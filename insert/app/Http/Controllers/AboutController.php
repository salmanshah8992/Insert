<?php

namespace App\Http\Controllers;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view('about');

    }
    public function aboutestore(Request $request){
        $request->validate([
            'fullname' => 'required|string|max:50',
            'email' => 'required',
            'phone' => 'required|min:11|max:13',
            'password' => 'required',
        ],[
            'email.required' => 'Please input valid email',
            'phone.required' => 'Please input valid email',
        ]);




        // $about = new About();
        // $about->fullname = $request->fullname;
        // $about->email = $request->email;
        // $about->phone = $request->phone;
        // $about->password = $request->password;
        // $about->save();


        About::insert([
                 'fullname' => $request->fullname,
                 'email' => $request->email,
                 'phone' => $request->phone,
                 'password' => $request->password,
             ]);


     return redirect()->back()->with('success', 'Data inserted  successfully!');
}

public function aboutshow(){
    $about = About::orderBy('id', 'DESC')->get();
    return view('aboutshow', compact('about'));
}
    
}
