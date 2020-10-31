@extends('partials.layouts.moderatortablemaster')
@section('content')
  
<div class="content-wrapper">
  <section class="content">

      <div class="container-fluid">
        <div class="row justify-content-center pt-3">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Patient Registration</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Patient Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="User Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>
                    <select class="form-control">
                      <option selected="selected">Select</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Age</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Age">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone Number">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
     
     

           
    </section>
</div>
 

@endsection