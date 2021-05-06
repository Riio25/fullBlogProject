<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show(){
        return view('welcome');
    }

    public function register(){
        return view('register');

    }

    public function login(){
        return view('login');
    }
}
