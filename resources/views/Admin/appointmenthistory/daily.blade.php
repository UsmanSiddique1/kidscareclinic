@extends('partials.layouts.datatablemaster')
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
                <h3 class="card-title">History</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Salect Date</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="date">
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
      	<div class="row">
      		<div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">Summary Daily</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  	<th>Date</th>
                    <th>Patient Name</th>
                    <th>Doctor Name</th>
                    <th>Time</th>
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    
                  </tr>
                 
                  <tr>
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td>-</td>
                   
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