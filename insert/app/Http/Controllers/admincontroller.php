<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
class admincontroller extends Controller
{
    public function adminform(){
        return view('adminform');
    }
    public function adminstore(Request $request){
       
       $request->validate([
        'email' => 'required',
        'des' => 'required',
        'password' => 'required|string|max:10',
    ],[
        'email.required' => 'Please  email',
        'password.required' => 'Please Password',
        'des.required' => 'Please des',

       ]);
       
       
       
       
       
        $data=new Admin();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->des=$request->des;
        $data->option2=$request->option2;
        $data->option1=$request->option1;
        $data->optradio=$request->optradio;
        $data->save();
        return redirect()->back()->with('success', 'Data inserted  successfully!');
    }
    public function adminshow(){
        $admin = Admin::orderBy('id', 'DESC')->get();
        return view('adminshow', compact('admin'));
    }
}
