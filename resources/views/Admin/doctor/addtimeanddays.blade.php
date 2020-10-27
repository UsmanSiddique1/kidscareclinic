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
                <h3 class="card-title">Add Time And Days</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="insertcompany">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Select Doctor</label>
                      <select class="form-control">
                        <option>Select</option>
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                      </select>
                    </div>
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
