@extends('partials.layouts.moderatortablemaster')
@section('content')

<section class="content-wrapper">
      <div class="container-fluid">
         @if (session('status'))
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
        </div>
    @endif
        <div class="row justify-content-center align-items-center pt-3">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header bg-primary " >
                <h3 class="card-title">Book Appointment</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="insertcompany">
                @csrf
                <div class="card-body">
                  <div class="row">
                	<div class="form-group col-md-4">
                <label for="exampleInputPassword1">Doctor Name</label>
                   <select class="form-control">
                   	  <option selected="selected">Select</option>
                   	  <option>A</option>
                   	  <option>B</option>
                   </select>
              </div>
                  <div class="form-group col-md-4">
                <label for="exampleInputPassword1">Patient Name</label>
                   <input type="text" class="form-control" placeholder="Patient Name">
              </div>
                 <div class="form-group col-md-4">
                <label for="exampleInputPassword1">Phone No</label>
                   <input type="text" class="form-control" placeholder="Phone No">
              </div>
            </div>
              <div class="row">
               
          <div class="form-group col-md-6">
     <label for="exampleInputPassword1">Date</label>
    <input type="date" name="b" class="form-control">
         </div>
            
                 <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Time</label>
                   <select class="form-control">
                     <option selected="selected">Select Time</option>
                     <option>A</option>
                     <option>B</option>
                   </select>
              </div>
      
                 </div>
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Book Appointment</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

 
  </section>




@endsection