<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class Adminlogincontroller extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/home';
    public function index(){
        return view('admin.auth.login');
    }
    public function login(Request $request){
       $request->validate([
        'email' => 'required|email',
        'password' => 'required'
       ]);

       if(Auth::attempt($request->only('email','password'))){
        if(auth()->user()->is_admin){
            return redirect('admin.home');
        }
        Auth::logout();
       }
       return back()->withErrors(['email'=>'wrong credentials']);
    }
}
