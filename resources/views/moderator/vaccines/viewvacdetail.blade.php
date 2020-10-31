@extends('partials.layouts.moderatortablemaster')
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
                <h3 class="card-title">Patient Name</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                 <div class="row">
                  <div class="form-group col-md-8">
                    <label for="exampleInputEmail1">Salect Vaccination Patient Name</label>
                    <select class="form-control" name="bname">
                    <option value="" selected="">status</option>
                   <option>A</option>
                   <option>B</option>
                   <option>C</option>
                  </select>

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
      <div class="container-fluid">
        <div class="row pt-5">
          <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">View Patient History</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2q" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     
                    <th>Vaccines Name</th>
                    <th>Given Date </th>
                     <th>Weight KG</th>
                    <th>Height Cm</th>
                    <th>OFC Cm</th>
                     <th>Next Appointment</th>
                     

                     

                    
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    
                     <td>a</td><td>a</td><td>a</td><td>a</td><td>a</td><td>12/2/3333</td>
                    
                    
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