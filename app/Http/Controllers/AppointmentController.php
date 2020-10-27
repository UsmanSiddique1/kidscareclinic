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

     public function viewpatientappointment(){

        return view('doctor.appointment.viewappointment');
    }


      public function statusappointment(){

        return view('doctor.appointment.viewappointmentstatus');
    }

 public function addmoderatorappointment(){

        return view('moderator.appointment.addappointment');
    }

    public function moderatorappointment(){

        return view('moderator.appointment.viewallappointment');
    }

    public function moderatorcheckedappointment(){

        return view('moderator.appointment.checkedappointment');
    }


    public function daily(){

        return view('Admin.appointmenthistory.daily');
    }
    public function weekly(){

        return view('Admin.appointmenthistory.weekly');
    }
    
    public function month(){

        return view('Admin.appointmenthistory.monthly');
    }
    
    
}
