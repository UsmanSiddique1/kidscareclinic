<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\doctorcontroller;
use App\Http\Controllers\ModeratorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\TimedaysController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VaccinesController;

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
Route::get('invoice', function () {
    return view('invoice.invoice');
});


Route::get('drinvoice', function () {
    return view('invoice.drinvoice');
});
Route::get('home-page',function(){

   return view('homepage');

});
Route::get('patient-home',function(){

   return view('patient.patienthome');

});
Route::get('doctor-home',function(){

   return view('doctor.doctorhome');

});
Route::get('moderator-home',function(){

   return view('moderator.moderatorhome');

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
Route::get('view-all-patient',[PatientController::class,'viewallpatient'])->name('viewallpatient');


//appointment
Route::get('add-appointment',[AppointmentController::class,'addappointment'])->name('addappointment');
Route::get('view-all-appointment',[AppointmentController::class,'viewallappointment'])->name('viewallappointment');
Route::get('upcomming-appointment',[AppointmentController::class,'upcommingappointment'])->name('upcommingappointment');
Route::get('checked-appointment',[AppointmentController::class,'checkedappointment'])->name('checkedappointment');
//apphistory
Route::get('daily',[AppointmentController::class,'daily'])->name('daily');
Route::get('weekly',[AppointmentController::class,'weekly'])->name('weekly');
Route::get('month',[AppointmentController::class,'month'])->name('month');

//patient
Route::get('patient-new-appointment',[PatientController::class,'patientnewappointment'])->name('patientappointmentt');
Route::get('patient-appointment',[PatientController::class,'patientappointment'])->name('patientappointments');
Route::get('view-patient',[PatientController::class,'viewpatient'])->name('viewpatient');
Route::get('one-patient-detail',[PatientController::class,'onepatientpatient'])->name('onepatientpatient');
Route::get('onepatientmedicinehistory',[PatientController::class,'onepatientmedicinehistory'])->name('onepatientmedicinehistory');

//doctorpannel


Route::get('view-doctor-detail',[doctorcontroller::class,'viewdoctordetail'])->name('viewdoctordetail');
Route::get('update-doctor-profile',[doctorcontroller::class,'updatedoctorprofile'])->name('updatedoctorprofile');
Route::get('add-timedays',[TimedaysController::class,'addtimedays'])->name('addtimedays');
Route::get('view-timedays',[TimedaysController::class,'viewtimedays'])->name('viewtimedays');

Route::get('patient-history',[PatientController::class,'patienthistory'])->name('patienthistory');

Route::get('singlepatientmedicinehistory',[PatientController::class,'singlepatientmedicinehistory'])->name('singlepatientmedicinehistory');

Route::get('view-patient-appointment',[AppointmentController::class,'viewpatientappointment'])->name('viewpatientappointment');

Route::get('dr-reportpatients',[PatientController::class,'drreportpatients'])->name('drreportpatients');
Route::get('status-appointment',[AppointmentController::class,'statusappointment'])->name('statusappointment');
//moderatorpannel
Route::get('add-moderator-appointment',[AppointmentController::class,'addmoderatorappointment'])->name('addmoderatorappointment');
Route::get('moderator-appointment',[AppointmentController::class,'moderatorappointment'])->name('moderatorappointment');
Route::get('moderator-checked-appointment',[AppointmentController::class,'moderatorcheckedappointment'])->name('moderatorcheckedappointment');
//adminpannel

Route::get('viewbills',[FeeController::class,'viewbilllll'])->name('viewbilllll');

Route::get('viewallpatients',[PatientController::class,'viewallpatients'])->name('viewallpatients');

//timeanddays

Route::get('addtimeanddays',[TimedaysController::class,'addtimeanddays'])->name('addtimeanddays');
Route::get('viewtimeanddays',[TimedaysController::class,'viewtimeanddays'])->name('viewtimanddays');
//fee
Route::get('generatebill',[FeeController::class,'generatebill'])->name('generatebill');
Route::get('viewbill',[FeeController::class,'viewbill'])->name('viewbill');

//user 

Route::get('user-register',[UsersController::class,'userregister'])->name('userregister');
Route::get('register',[UsersController::class,'register'])->name('register');


//vaccines
Route::get('add-patient',[VaccinesController::class,'addpatient'])->name('addpatient');
Route::get('view-vacc-patient',[VaccinesController::class,'viewvacpatient'])->name('viewvacpatient');
Route::get('add-vac',[VaccinesController::class,'addvac'])->name('addvac');
Route::get('view-vac-detail',[VaccinesController::class,'viewvacdetail'])->name('viewvacdetail');
