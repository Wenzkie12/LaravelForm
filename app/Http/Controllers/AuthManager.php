<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 
use App\Models\User; 
use Illuminate\Support\Facades\Session;


class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function registration(){
        return view('registration');
    }

    

    function loginPost(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required'
    ]);
    
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended(route('dashboard'))->with("success", "Successfully Connected");
    }
    
    return redirect(route('login'))->with("error", "Incorrect Username or Password");
}
function registrationPost(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6'
    ]);
    
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ];

    $user = User::create($data);

    if ($user) {
        Auth::login($user); 
        return redirect()->route('dashboard')->with("success", "Successfully Connected");
    } else {
        return redirect()->route('registration')->with("error", "Registration Failed, try Again");
    }


}
    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('navbar'));
    }
}
