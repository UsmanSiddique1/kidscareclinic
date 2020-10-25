<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeratorController extends Controller
{
    public function viewmoderator(){

    	return view('Admin.moderator.viewmoderator');
    }
    public function addmoderator(){

    	return view('Admin.moderator.addmoderator');
    }
    
}
