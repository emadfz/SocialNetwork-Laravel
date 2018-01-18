<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class UserController extends Controller
{
    public function register(Request $request )
    {
        User::create([
            'name' => $request['f_name']. " " . $request["l_name"],
            'username' => $request['f_name']. " " . $request["l_name"],
            'email' => $request['email'],
            'edu' => $request['edu'],
            'sex' => $request['sex'],
            'dob' => $request['dob'],
            'password' => bcrypt($request['password']),
        ]);
        return redirect()->back()->with('message', 'شكرا للتسجيل');    
    }


    public function postLogin(Request $request)
    { 
       if( \Auth::attempt(['email' => $request->email, 'password' =>$request->password]))
       {
            return redirect()->route('frontend.home2.get');
       }
       else{
        return "error";
       }
    }
    public function getLogout()
    {
        \Auth::logout();
        return redirect()->route('frontend.home.get');
        
    }
}