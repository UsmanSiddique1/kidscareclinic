@extends('partials.layouts.doctortablemaster')
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
                  <div class="form-group col-md-8">
                    <label for="exampleInputEmail1">Salect Patient Name</label>
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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   <th>Date</th>
                    <th>Patient Name</th>
                    <th>Day</th>
                    <th>Time</th>
                    <th>More</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td>a</td>
                    <td><a href="singlepatientmedicinehistory" class="btn btn-primary">More</a></td>
                     
                    
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