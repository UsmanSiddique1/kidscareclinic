@extends('partials.layouts.moderatortablemaster')
@section('content')
  
<div class="content-wrapper">
  <section class="content">

      <div class="container-fluid">
        <div class="row justify-content-center">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
           <!--  <x-jet-authentication-card-logo /> -->
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Number') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"  placeholder="Number"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

          </div>
        </div>
      </div>
     
      <div class="container-fluid">
      	<div class="row">
      		<div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">User Registration</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  	<th>User Name</th>
                    <th>Password</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                    
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