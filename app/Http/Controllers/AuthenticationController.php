<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function index(Request $req){
        return view("index");
    }
    public function signup(Request $req)
    {
        return view("signup");
    }
    public function login(Request $req){
        return view("login");
    }
}
