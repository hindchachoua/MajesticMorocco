<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login(){
        if(Auth::check()){
            return redirect("/")->with('error', 'Login details are not valid');
        } 
        return view('Auth.login');
    }

    function register(){
        if(Auth::check()){
            return redirect("/")->with('error', 'Login details are not valid');
        } 
        return view('Auth.register');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
        return redirect("login")->with('error', 'Login details are not valid');
    }

    function registerPost(Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        $data['role_id'] = $request->has('checkbox') ? $request->checkbox : null;

        
        $user = User::create($data);
        if(!$user){
            return redirect("register")->with('fail', 'Something went wrong');
        }
        return redirect("login")->with('success', 'You have successfully logged in');
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
