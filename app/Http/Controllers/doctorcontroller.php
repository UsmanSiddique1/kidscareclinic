<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doctorcontroller extends Controller
{
    //


    public function viewdoctor(){

    	return view('Admin.doctor.viewdoctors');
    }
    public function adddoctor(){

    	return view('Admin.doctor.adddoctor');
    }
    
    public function singledoctor(){

    	return view('Admin.doctor.doctorsinglepagedetail');
    }
 public function viewdoctordetail(){

        return view('doctor.profile.viewprofile');
    }
    
    public function updatedoctorprofile(){

        return view('doctor.profile.updateprofile');
    }
     



}
