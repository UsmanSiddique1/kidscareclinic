<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\doctorcontroller;
use App\Http\Controllers\ModeratorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PatientController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home-page',function(){

   return view('homepage');

});
Route::get('patient-home',function(){

   return view('patient.patienthome');

});

Route::get('viewdoctorss',function(){

   return view('vistor.viewdoctor');
});

Route::get('viewdoctors',function(){

   return view('vistor.onepagedoctor');
});
Route::get('book-app',function(){

   return view('vistor.bookappointment');
});
Route::get('app',function(){

   return view('vistor.drreportpatient');
});
//doctor
Route::get('view-doctor',[doctorcontroller::class,'viewdoctor'])->name('viewdoctor');
Route::get('add-doctor',[doctorcontroller::class,'adddoctor'])->name('adddoctor');
Route::get('single-doctor',[doctorcontroller::class,'singledoctor'])->name('singledoctor');
//Moderator
Route::get('view-moderator',[ModeratorController::class,'viewmoderator'])->name('viewmoderator');
Route::get('add-moderator',[ModeratorController::class,'addmoderator'])->name('addmoderator');

//appointment
Route::get('add-appointment',[AppointmentController::class,'addappointment'])->name('addappointment');
Route::get('view-all-appointment',[AppointmentController::class,'viewallappointment'])->name('viewallappointment');
Route::get('upcomming-appointment',[AppointmentController::class,'upcommingappointment'])->name('upcommingappointment');
Route::get('checked-appointment',[AppointmentController::class,'checkedappointment'])->name('checkedappointment');

//patient
Route::get('patient-new-appointment',[PatientController::class,'patientnewappointment'])->name('patientappointmentt');
Route::get('patient-appointment',[PatientController::class,'patientappointment'])->name('patientappointments');
Route::get('view-patient',[PatientController::class,'viewpatient'])->name('viewpatient');
