@extends('partials.layouts.moderatortablemaster')
@section('content')
<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid pt-4">
      <h2><a href="add-moderator-appointment" class="btn btn-primary">Create New Appointment</a></h2>
    </div>
      <div class="container-fluid pt-3">
        <div class="row">
          <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">View All Appointment</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     <th>Doctor Name</th>
                    <th>Patient Name</th>
                    <th>Phone No</th>
                     <th>Day</th>
                    <th>Time</th>
                    <th>More</th>
                    
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                   
                   
                     <td>a</td><td>a</td><td>a</td><td>a</td><td>a</td><td><select class="form-control">
                      <option>Select</option>
                       <option>Checked</option>
                       <option>UnChecked</option>
                       <option>ReSchedule</option>
                     </select></td>
                    
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