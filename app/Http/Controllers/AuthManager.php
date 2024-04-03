<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect("/")->with('error', 'Login details are not valid');
        } 
        return view('Auth.login');
    }

    public function register(){
        if(Auth::check()){
            return redirect("/")->with('error', 'Login details are not valid');
        } 
        return view('Auth.register');
    }

    public function loginPost(Request $request){
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

    public function registerPost(Request $request){
        
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

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function indexAccessUser(User $user){
        $users = User::all()->whereIn('role_id', 3);
        return view('admin.client.accessUser', compact('users'));
    }
    public function indexAccessOperator(User $user){
        $operators = User::all()->whereIn('role_id', 2);
        return view('admin.client.accessOperator', compact('operators'));
    }
    public function blockUser(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
    
        // Toggle the is_blocked status
        $user->is_blocked = !$user->is_blocked;
        $user->save();
    
        return redirect()->back()->with('success', 'User blocked/unblocked successfully');
    }

}
