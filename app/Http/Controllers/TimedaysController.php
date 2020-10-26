<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimedaysController extends Controller
{
    public function addtimeanddays(){

    	return view('Admin.doctor.addtimeanddays');
    }
    public function viewtimeanddays(){

    	return view('Admin.doctor.viewtimeanddays');
    }

    public function addtimedays(){

    	return view('doctor.timeanddays.addtimedays');
    }
    public function viewtimedays(){

    	return view('doctor.timeanddays.viewtimeanddays');
    }
}
