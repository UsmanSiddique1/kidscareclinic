@extends('partials.layouts.doctortablemaster')
@section('content')
<div class="content-wrapper">
  <section class="content">
   <div class="container-fluid">
    
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
              <button class="btn btn-success btn-md">More</button>
               </form>
              </div>
             </div>
          </div>
</div>

</div>
    </section>
</div>
 
  

  
@endsection