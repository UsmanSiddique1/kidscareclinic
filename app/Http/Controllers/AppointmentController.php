<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function addappointment(){

    	return view('Admin.appointment.addappointment');
    }
    public function viewallappointment(){

    	return view('Admin.appointment.viewallappointment');
    }
    public function upcommingappointment(){

    	return view('Admin.appointment.upcomming');
    }
    public function checkedappointment(){

    	return view('Admin.appointment.checkedappointment');
    }
}
