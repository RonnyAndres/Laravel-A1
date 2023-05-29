<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userRegister()
    {
        // Return a view /userRegister/user.html
        return view('userRegister.user');
    }

    // Create a function userLogin
    public function userLogin()
    {
        // Return a view /userLogin/login.html
        return view('loginUser.login');
    }

}
