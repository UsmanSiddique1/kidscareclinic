@extends('partials.layouts.datatablemaster')
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
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Doctor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="insertcompany">
                @csrf
                <div class="card-body">
                  <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" class="form-control-file"  name="cname">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control"  placeholder=" Doctor Name" name="cname"></div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-6">
      <table class="table table-responsive w-100 d-block d-md-table">
        <thead>
          <tr>
            <th>Education</th>
            <th><a href="#" class="btn btn-info addRow">Add</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input  class="form-control" type="text"  placeholder="Add Education" name="edu[]"></td>
            
            <td><a href="#" class="btn btn-danger remove">Remove</a></td>
            
          </tr>
        </tbody>
      </table>
    </div>
      <hr>
      <div class="col-md-6">
      <table class="table table-responsive w-100 d-block d-md-table">
        <thead>
          <tr>
            <th>Specialization</th>
            <th><a href="#" class="btn btn-info spc">Add</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input  class="form-control" type="text"  placeholder="Add Specialization" name="spc[]"></td>
            
            <td><a href="#" class="btn btn-danger remove">Remove</a></td>
            
          </tr>
        </tbody>
      </table>
    </div>
      <hr>

      <div class="col-md-6 mt-4">
       <table class="table table-responsive w-100 d-block d-md-table">
        <thead>
          <tr>
            <th>Services</th>
            <th><a href="#" class="btn btn-info ser">Add</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input  class="form-control" type="text"  placeholder="Add Services" name="ser[]"></td>
            
            <td><a href="#" class="btn btn-danger remove">Remove</a></td>
            
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-md-6 mt-4">
       <table class="table table-responsive w-100 d-block d-md-table">
        <thead>
          <tr>
            <th>Condition Treated</th>
            <th><a href="#" class="btn btn-info act">Add</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input  class="form-control" type="text"  placeholder="Add Condition Treated" name="act[]"></td>
            
            <td><a href="#" class="btn btn-danger remove">Remove</a></td>
            
          </tr>
        </tbody>
      </table></div>
      
     </div>
     <br>
     <div class="row">
                    <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Experience</label>
                    <input type="text" class="form-control"  placeholder="Experience" name="exp">
                  </div>
                   <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Doctor Fee</label>
                    <input type="text" class="form-control"  placeholder="Doctor Fee" name="phoneno">
                  </div>
                    <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Professional Membership</label>
                    <input type="text" class="form-control"  placeholder="Professional Membership" name="phoneno">
                  </div>
                   <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Wait Time</label>
                    <input type="text" class="form-control"  placeholder="Wait Time" name="phoneno">
                  </div>
              <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Experience In Feild</label>
                    <input type="text" class="form-control"  placeholder="Experience In Feild" name="phoneno">
                  </div>
                <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Patient Feedback</label>
                    <input type="text" class="form-control"  placeholder="Patient Feedback" name="phoneno">
                  </div>
                  
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Select Days</label>
                      <select class="form-control">
                        <option>Select</option>
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                      </select>
                    </div>
                    
                  </div>
                   <div class="row">
                      <div class="col-md-12">
      <table class="table table-responsive w-100 d-block d-md-table">
        <thead>
          <tr>
            <th>Time</th>
            <th>To</th>
            <th><a href="#" class="btn btn-info time">Add</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input  class="form-control" type="time"  placeholder="Time" name="time[]"></td>
            <td><input  class="form-control" type="time"  placeholder="Time" name="time[]"></td>
            <td><a href="#" class="btn btn-danger remove">Remove</a></td>
            
          </tr>
        </tbody>
      </table>
    </div>
      <hr>
     </div>
                  <label>About us</label>
                 <div class="form-group col-md-6">
                
                    <textarea rows="8" cols="80" name="comment" form="usrform">Entrer Text here......
                    </textarea>
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

@endsection
