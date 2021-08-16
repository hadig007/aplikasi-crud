<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageContoller extends Controller
{
    public function home(){
        return view('home');
    }
    public function login(){
        return view('login.login');
    }

    public function postlogin(Request $request){
        if(auth()->attempt($request->only('email','password'))){
            return redirect('home');
        }
        return redirect('login');
    }
    
    public function logout(){
        auth()->logout();
        return redirect('login');
    }
}
