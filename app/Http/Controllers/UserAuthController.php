<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserAuthController extends Controller
{
    function login(){
        return view('adminpage.login');
    }
    function register(){
        return view('adminpage.register');
    }
    function create(Request $request){
        //Validate Requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12'
        ]);
        //Registering the User
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $query = $user->save();
        
        if($query){
            return back()->with('success','Successfully registered');
        }else{
            return bakc()->with('fail', 'Sorry!, somethings wrong!');
        }
    }
}
