  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Doctor</title>
  </head>
  <body>
    <section class="content-wrapper">
      <div class="container-fluid">
         @if (session('status'))
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
        </div>
    @endif
        <div class="row justify-content-center align-items-center pt-3">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header bg-primary " >
                <h3 class="card-title" style="color: white">Appointment</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="insertcompany">
                @csrf
                <div class="card-body">
<h3>Patient Info</h3>
<hr>
                  <div class="row">
                    
                  <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Patient Name</label>
                   <input type="text" class="form-control" placeholder="Patient Name">
              </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Email address</label>
           <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email"> 
               </div>
               <div class="form-group col-md-4">
                <label for="exampleInputPassword1">Phone No</label>
                   <input type="text" class="form-control" placeholder="Phone No">
              </div>
                 <div class="form-group col-md-4">
                <label for="exampleInputPassword1">Time</label>
                   <input type="time" class="form-control">
              </div>
         <div class="form-group col-md-4">
          <label>Day</label>
          <input type="text" name="d" class="form-control" placeholder="Day">
               </div>
                 </div>

                  <span style="font-size: 26px; font-weight: 600">For Medicine</span> <span class="ml-2 border">
                    
                       <select id="statusa">
                        
                          <option value="" selected="">Status</option>
                          <option value="on">ON</option>
                          <option value="off">OFF</option>
                        
                        </select></span>
                
                <table class="table table-responsive w-100 d-block d-md-table">
        <thead>
          <tr>
            <th>Medicine Name</th>
            <th>Medicine Quantity</th>
            <th>Day</th>
            <th><a href="#" class="btn btn-info act">Add</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input  class="form-control" type="text"  placeholder="Medicine Name" name="act[]"></td>
            <td><input  class="form-control" type="text"  placeholder="Medicine Quantity" name="act[]"></td>
            <td>
              <select class="form-control">
                <option selected="selected">Select </option>
                   <option>Morning</option>
                   <option>Afternoon</option>
                   <option>Evening</option>
              </select>
  

          </td>
            <td><a href="#" class="btn btn-danger remove">Remove</a></td>
            
          </tr>
        </tbody>
      </table>
    <span style="font-size: 26px; font-weight: 600">For Test</span> <span class="ml-2 border">
                    
                       <select id="statusa">
                        
                          <option value="" selected="">Status</option>
                          <option value="on">ON</option>
                          <option value="off">OFF</option>
                        
                        </select></span>
                
        <table class="table table-responsive w-100 d-block d-md-table">
        <thead>
          <tr>
            <th>Test Name</th>
            
            <th><a href="#" class="btn btn-info act">Add</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input  class="form-control" type="text"  placeholder="Test Name" name="act[]"></td>
            <td><a href="#" class="btn btn-danger remove">Remove</a></td>
            
          </tr>
        </tbody>
      </table>
     
      <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                </div>
                <!-- /.card-body -->

              
              </form>
            </div>
          </div>
        </div>
      </div>

 
  </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>