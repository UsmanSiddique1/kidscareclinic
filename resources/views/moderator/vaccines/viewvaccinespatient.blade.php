@extends('partials.layouts.moderatortablemaster')
@section('content')
<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid pt-4">
      <h2><a href="add-patient" class="btn btn-primary">Create New Patient</a></h2>
    </div>
      <div class="container-fluid pt-3">
        <div class="row">
          <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">View All Patient</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Patient Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Phone No</th>
                    <th>Vaccination</th>
                    
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                   
                   
                     <td>a</td><td>a</td><td>a</td><td>a</td><td ><a href="add-vac" class=" btn btn-primary">Vaccination</a></td>
                    
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