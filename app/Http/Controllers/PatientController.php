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
    public function  onepatientpatient(){

    	return view('patient.history.onepatienthistory');
    }
    public function  onepatientmedicinehistory(){

    	return view('patient.history.onepatientmedicinehistory');
    }
     public function  singlepatientmedicinehistory(){

        return view('doctor.appointment.singlepatientmedicinehistory');
    }

    public function  patienthistory(){

        return view('doctor.appointment.checkpatienthistory');
    }
public function  drreportpatients(){

        return view('doctor.appointment.drreportpatients');
    }
public function  viewallpatient(){

        return view('moderator.patient.addpatient');
    }

    public function  viewallpatients(){

        return view('Admin.patient.addpatient');
    }

}
