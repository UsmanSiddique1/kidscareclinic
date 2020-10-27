@extends('partials.layouts.moderatortablemaster')
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
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header bg-primary " >
                <h3 class="card-title">Generate Bill</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="insertcompany">
                @csrf
                <div class="card-body">
                  <div class="row">
                	<div class="form-group col-md-6">
                <label for="exampleInputPassword1">Patient Name</label>
                   <select class="form-control">
                   	  <option selected="selected">Select</option>
                   	  <option>A</option>
                   	  <option>B</option>
                   </select>
              </div>
               
            </div>
           <table class="table table-responsive w-100 d-block d-md-table">
        <thead>
          <tr>
            <th>Services</th>
            <th>Description(Opational)</th>
            <th>Quantity</th>
            <th>Service charge</th>
            <th>Doctor</th>
            <th>Department</th>
            <th><a href="#" class="btn btn-info time">Add</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><select class="form-control" style="width: auto;">
              <option>Select</option>
              <option>A</option>
              <option>Aa</option>
              <option>Ad</option>
              <option>Af</option>
            </select></td>
            <td><input  class="form-control" type="text"  placeholder="Description(Opational)" name="time[]"></td>
            <td><input  class="form-control" type="text"  placeholder="Quantity" name="time[]"></td>
            <td><input  class="form-control" type="text"  placeholder="Service charge" name="time[]"></td>
            <td><select class="form-control" style="width: auto;">
              <option>Select</option>
              <option>A</option>
              <option>Aa</option>
              <option>Ad</option>
              <option>Af</option>
            </select></td>
           <td><select class="form-control" style="width: auto;">
              <option>Select</option>
              <option>A</option>
              <option>Aa</option>
              <option>Ad</option>
              <option>Af</option>
            </select></td>
            <td><a href="#" class="btn btn-danger remove">Remove</a></td>
            
          </tr>
        </tbody>
      </table>
      <hr>
                <div class="row">
                  <div class="col-md-8">
                    
                  </div>
                  <div class="col-md-4">
                    <label>Sub Totel</label>
                    <input type="text" name="dd" class="form-control" placeholder="Sub Total">
                    <label>Discount %</label>
                    <input type="text" name="dd" class="form-control" placeholder="Discount">
                    <label>Total</label>
                    <input type="text" name="dd" class="form-control" placeholder="Total Bill">
                    <label>Paid</label>
                    <input type="text" name="dd" class="form-control" placeholder="Paid Bill">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Generate Bill</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

 
  </section>




@endsection