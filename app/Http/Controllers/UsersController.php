<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function userregister(){

    	return view('moderator.userregister.userregister');
    }

public function register(){

    	return view('Admin.register.register');
    }

}
