@extends('partials.layouts.datatablemaster')
@section('content')
  
<div class="content-wrapper">
  <section class="content">
     <div class="container-fluid">
        <div class="row justify-content-center pt-3">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Time And Days</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                 <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Salect Doctor</label>
                    <select class="form-control" name="bname">
                    <option value="" selected="">status</option>
                   <option>A</option>
                   <option>B</option>
                   <option>C</option>
                  </select>

                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Salect Days</label>
                    <select class="form-control" name="bname">
                    <option value="" selected="">status</option>
                   <option>A</option>
                   <option>B</option>
                   <option>C</option>
                  </select>

                  </div>
                </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
        <div class="row pt-5">
          <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">View Time And Days</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   <th>Time</th>
                    
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  
                    <td>Win 95+</td>
                     
                    
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