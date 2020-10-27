@extends('partials.layouts.datatablemaster')
@section('content')
<div class="content-wrapper">
  <section class="content">
      <div class="container-fluid">
        <div class="row pt-5">
          <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">Checked Appointment</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     <th>Doctor Name</th>
                    <th>Patient Name</th>
                    <th>Phone No</th>
                     <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                    
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                   
                   
                     <td>a</td><td>a</td><td>a</td><td>a</td><td>a</td><td class="btn btn-danger">unchecked</td>
                    
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