<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function patientnewappointment(){

    	return view('patient.appointment.addnewappointment');
    }
    public function patientappointment(){

    	return view('patient.appointment.addappointment');
    }
    public function viewpatient(){

    	return view('patient.history.viewpatient');
    }

}
