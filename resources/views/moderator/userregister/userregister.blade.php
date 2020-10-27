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
                <h3 class="card-title">User Registration</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="User Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Password">
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
     
      <div class="container-fluid">
      	<div class="row">
      		<div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">User Registration</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  	<th>User Name</th>
                    <th>Password</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                    
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
</div>
 

@endsection