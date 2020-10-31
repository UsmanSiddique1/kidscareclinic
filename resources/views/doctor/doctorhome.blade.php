@extends('partials.layouts.doctortablemaster')
@section('content')
<div class="content-wrapper">
 <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row pt-2">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Total Appointment</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px"></sup></h3>

                <p>Total Patient</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Today Appointment</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
        </div>
    </div>
        <div class="row pt-2">
    

          <div class="col-md-4">
              <div class="card " style="width: 18rem;">
              <div class="card-body">
              <span class="text-bold">Patient Id:</span><span>0101</span><hr>
              <span class="text-bold">Patient Name:</span><span>M usman</span><hr>
              <span class="text-bold">Gender:</span><span>Male</span><hr>
              <span class="text-bold">Age: </span><span>23</span><hr>
              <form action="dr-reportpatients" >
              @csrf
              <input type="hidden" name="id" value="">
              <button class="btn btn-success btn-md">View Detail</button>
               </form>
              </div>
             </div>
          </div>
          <div class="col-md-4">
              <div class="card " style="width: 18rem;">
              <div class="card-body">
              <span class="text-bold">Patient Id:</span><span>0101</span><hr>
              <span class="text-bold">Patient Name:</span><span>M usman</span><hr>
              <span class="text-bold">Gender:</span><span>Male</span><hr>
              <span class="text-bold">Age: </span><span>23</span><hr>
              <form action="dr-reportpatients" >
              @csrf
              <input type="hidden" name="id" value="">
              <button class="btn btn-success btn-md">View Detail</button>
               </form>
              </div>
             </div>
          </div>
          <div class="col-md-4">
              <div class="card " style="width: 18rem;">
              <div class="card-body">
              <span class="text-bold">Patient Id:</span><span>0101</span><hr>
              <span class="text-bold">Patient Name:</span><span>M usman</span><hr>
              <span class="text-bold">Gender:</span><span>Male</span><hr>
              <span class="text-bold">Age: </span><span>23</span><hr>
              <form action="dr-reportpatients" >
              @csrf
              <input type="hidden" name="id" value="">
              <button class="btn btn-success btn-md">View Detail</button>
               </form>
              </div>
             </div>
          </div>
</div>

</div>



 </section>
</div>


     
   
     



@endsection