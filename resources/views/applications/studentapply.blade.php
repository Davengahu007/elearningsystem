@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">

   <div class="card mt-4">
       <div class="card-header">
           <h4 class="mt-4">STUDENT APPLICATION</h4>
       </div>
       <div class="card-body">
         <div class="text-success">
            @if (session('status'))
                  {{ session('status') }}
            @endif
         </div>

         <form action ="{{url('/StdApply')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
               <label for="name" >Full Name</label>
               <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Full Name"  value="{{old('name') }}">

               @error('name')
               <div class="fw_light text-danger">
               {{$message}}
               </div>
               @enderror

            </div>

            <div class="form-group mb-3">
               <label for="email" >Email</label>
               <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email"  value="{{old('email') }}">

               @error('email')
               <div class="fw_light text-danger">
               {{$message}}
               </div>
               @enderror

            </div>

            <div class="form-group mb-3">
               <label for="age" >Age</label>
               <input type="number" class="form-control" name="age" id="age"  placeholder="Enter your age" value="{{old('age') }}" >

               @error('age')
               <div class="fw_light text-danger">
                  {{$message}}
               </div>
               @enderror

            </div>

            <div class="form-group mb-3">
               <label for="former_school" >Former School</label>
               <input type="text" class="form-control" name="former_school" id="former_school"  placeholder="Enter your former school" value="{{old('former_school') }}" >

               @error('age')
               <div class="fw_light text-danger">
                  {{$message}}
               </div>
               @enderror

            </div>

            <div class="form-group mb-3">
               <label for="grade" >Grade</label>
               <input type="text" class="form-control" name="grade" id="grade"  placeholder="Enter your final examination grade" value="{{old('grade') }}">

               @error('grade')
               <div class="fw_light text-danger">
                  {{$message}}
               </div>
               @enderror

            </div>


            <div class="form-group mb-3">
               <label for="course" >Course</label>
               <input type="text" class="form-control" name="course" id="course"  placeholder="Enter the course you would like to apply for" value="{{old('course') }}">

               @error('course')
               <div class="fw_light text-danger">
                  {{$message}}
               </div>
               @enderror

            </div>

            <div class="form-group mb-3">
               <label for="description" >About you</label>
               <input type="text" class="form-control" name="description" id="description"  placeholder="Tell us about yourself in a few words" value="{{old('description') }}">

               @error('description')
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
               <button type="submit" class="btn btn-primary" > Apply </button>
            </div>
            </form>

</div>
</div>
    

@endsection