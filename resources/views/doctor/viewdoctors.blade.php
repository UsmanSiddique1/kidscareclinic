@extends('partials.layouts.datatablemaster')
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

              
                <div class="card-body">
                <div class="row">
                <div class="col-md-8">
                  <h2>8</h2>
                </div>
                <div class="col-md-4">
                  <h2>4</h2>
                </div>
                </div>
                </div>
                <!-- /.card-body -->

                
            
            </div>
          </div>
        </div>
      </div>

 
  </section>

@endsection