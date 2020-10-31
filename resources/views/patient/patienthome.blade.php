@extends('partials.layouts.patienttablemaster')
@section('content')


  <section class="content mt-3">
   <div class="container-fluid">

        <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <span style="font-size: 24px;font-weight: 600">Patient ID: </span><span style="font-size: 22px; font-weight: 400">122</span>
                     <span style="font-size: 24px;font-weight: 600">Patient Name: </span><span style="font-size: 22px; font-weight: 400">Muhammad Usman</span>
                      <span style="font-size: 24px;font-weight: 600">Phone No: </span><span style="font-size: 22px; font-weight: 400">03484218460</span>
                    </div>
                    <div class="col-5 text-center pt-3">
                      <img src="../../dist/img/user1-128x128.jpg" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="single-doctor" class="btn btn-md btn-primary">
                      <i class="fas fa-user"></i> View Detail
                    </a>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <span style="font-size: 24px;font-weight: 600">Patient ID: </span><span style="font-size: 22px; font-weight: 400">112</span>
                     <span style="font-size: 24px;font-weight: 600">Patient Name: </span><span style="font-size: 22px; font-weight: 400">Muhammad Ali</span><br>
                      <span style="font-size: 24px;font-weight: 600">Phone No: </span><span style="font-size: 22px; font-weight: 400">0345887898</span>
                    </div>
                    <div class="col-5 text-center pt-3">
                      <img src="../../dist/img/user1-128x128.jpg" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="single-doctor" class="btn btn-md btn-primary">
                      <i class="fas fa-user"></i> View Detail
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        
 </div>
    </section>
     <section class="content">
      <div class="container-fluid">
        <div class="row pt-5">
          <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">View One Patient History</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     <th>Date</th>
                    <th>Doctor Name</th>
                    <th>Patient Name</th>
                     <th>Weight</th>
                    <th>Height</th>
                     <th>Next Appointment</th>
                     <th>Print PDF</th>

                     

                    
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    
                     <td>a</td><td>a</td><td>a</td><td>a</td><td>a</td><td><a href="#" class="btn btn-primary">Appointment</a></td><td>
                      <a href="drinvoice" class="btn btn-primary">Print PDF</a></td>
                    
                  </tr>
                 
                
                  </tbody>
                 
                </table>
               
              </div>
              <!-- /.card-body -->
                </div>

            </div>
            </div>
            </div>


           
    </section>
    <div class="container-fluid">
 <a href="#" class="btn btn-primary">View Vaccination Record</a>
 </div>
<section class="content">
      <div class="container-fluid">
        <div class="row pt-5">
          <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">View Vaccines History</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2q" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     
                    <th>Vaccines Name</th>
                    <th>Given Date </th>
                     <th>Weight KG</th>
                    <th>Height Cm</th>
                    <th>OFC Cm</th>
                     <th>Next Appointment</th>
                     

                     

                    
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    
                     <td>a</td><td>a</td><td>a</td><td>a</td><td>a</td><td>12/2/3333</td>
                    
                    
                  </tr>
                 
                
                  </tbody>
                 
                </table>
               
              </div>
              <!-- /.card-body -->
                </div>

            </div>
            </div>
            </div>


           
    </section>
     
   
     



@endsection