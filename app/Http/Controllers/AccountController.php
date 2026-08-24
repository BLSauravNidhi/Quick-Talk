<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('chat.index');
        } else {
            return back()->withErrors(['login' => 'Wrong credentials, Can\'t login.']);
        }
    }

    public function settings(){
        return view('settings');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
