@extends('partials.layouts.moderatortablemaster')
@section('content')
  
<div class="content-wrapper">
  <section class="content">

      <div class="container-fluid">
        <div class="row justify-content-center pt-3">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Vaccination</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                 <div class="row">
                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Patient Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="User Name">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Gender</label>
                    <input type="text" name="d" placeholder="Gender" class="form-control">
                  </div>
                 <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Age</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Age">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone Number">
                  </div>
                </div>
                     <div class="row">
                        <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Vaccines</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Vaccines Name">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Vaccine Date</label>
                    <input type="date" name="d" placeholder="Gender" class="form-control">
                  </div>
                 <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Weight KG</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Weight KG">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Height Cm</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Height Cm">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">OFC Cm</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="OFC Cm">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Next Vaccine Date</label>
                    <input type="date" class="form-control" id="exampleInputEmail1">
                  </div>
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