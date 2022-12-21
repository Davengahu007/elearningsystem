@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">

   <div class="card mt-4">
       <div class="card-header">
           <h4 class="mt-4">JOB APPLICATION</h4>
       </div>
       <div class="card-body">
         <div class="text-success">
            @if (session('status'))
                  {{ session('status') }}
            @endif
         </div>

      <form action ="{{url('/WApply')}}" method="post" enctype="multipart/form-data">
         @csrf
         

         <div class="form-group mb-3">
            <label for="name" class="sr-only">Full Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Full Name"  value="{{old('name') }}">

            @error('name')
            <div class="fw_light text-danger">
            {{$message}}
            </div>
            @enderror

         </div>

         <div class="form-group mb-3">
            <label for="email" class="sr-only">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email"  value="{{old('email') }}">

            @error('email')
            <div class="fw_light text-danger">
            {{$message}}
            </div>
            @enderror

         </div>

         <div class="form-group mb-3">
            <label for="age" class="sr-only">Age</label>
            <input type="number" class="form-control" name="age" id="age"  placeholder="Enter your age" value="{{old('age') }}" >

            @error('age')
            <div class="fw_light text-danger">
               {{$message}}
            </div>
            @enderror

         </div>

         <div class="form-group mb-3">
            <label for="id_no" class="sr-only">ID number</label>
            <input type="number" class="form-control" name="id_no" id="id_no"  placeholder="Enter your national ID number" value="{{old('id_no') }}" >

            @error('id_no')
            <div class="fw_light text-danger">
               {{$message}}
            </div>
            @enderror

         </div>

         <div class="form-group mb-3">
            <label for="job" class="sr-only">Position applying for</label>
            <input type="text" class="form-control" name="job" id="job"  placeholder="Enter the job position you are applying for" value="{{old('job') }}">

            @error('job')
            <div class="fw_light text-danger">
               {{$message}}
            </div>
            @enderror

         </div>

         <div class="form-group mb-3">
            <label for="document" >Document</label>
            <input type="file" class="form-control" name="document" id="document"  placeholder="Select relevant document showing proof of grade" value="{{old('document') }}">

            @error('document')
            <div class="fw_light text-danger">
               {{$message}}
            </div>
         @enderror

      </div>

         
         
         <div>
            <button type="submit" class="btn btn-primary"> Apply </button>
         </div>
         </form>

   </div>
</div>
    

@endsection