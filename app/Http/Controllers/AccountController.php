<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('chat.index');
        } else {
            return redirect()->route('login');
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
