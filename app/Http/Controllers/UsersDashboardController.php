<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersDashboardController extends Controller
{
    // login
    public function Login(){
        return view('users.auth.login');
    }
    // register
    public function Register(){
        return view('users.auth.register');
    }
}
