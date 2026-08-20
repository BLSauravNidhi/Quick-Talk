<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(){
        if(!Auth::check()){
            return view('login-page');
        } 
    }
    public function register(){
        if(!Auth::check()){
            return view('register-page');
        } 
    }
}
