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
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Moderator</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="insertcompany">
                @csrf
                <div class="card-body">
               
                <div class="form-group ">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" class="form-control-file"  name="image">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control"  placeholder="Name" name="name"></div>
                    
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control"  placeholder="Email" name="email"></div>
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">Phone No</label>
                    <input type="text" class="form-control"  placeholder="Phone No" name="pnumber"></div>
               
                    <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control"  placeholder="Address" name="addrerss"></div>
                  
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
