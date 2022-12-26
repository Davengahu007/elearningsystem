@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">Add A New Course</h4>
        </div>
        <div class="card-body">
        <div class="text-success">
                @if (session('status'))
                {{ session('status') }}
            @endif
        </div>
    <form action ="{{route('register')}}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="name" >Name</label>
            <input type="text" class="form-control  @error('name') border border-danger @enderror"  name="name" id="name" placeholder="Fullname"  value="{{old('name') }}" >

            @error('name')
            <div class="error"style="color:red;">
                {{$message}}
             </div>
            @enderror
      
        </div> 


        <div class="form-group mb-3">
            <label for="email" >Email</label>
            <input type="email" class="form-control  @error('email') border border-danger @enderror"  name="email" id="email" placeholder="Email"  value="{{old('email') }}">
           
            @error('email')
            <div class="error"style="color:red;">
            {{$message}}
            </div>
           @enderror

        </div>

        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Choose a password"  >

            @error('password')
            <div class="error"style="color:red;">
               {{$message}}
            </div>
           @enderror

        </div>

        <div class="form-group mb-3">
            <label for="password_confirmation">Password Again</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password">
          
            @error('password_confirmation')
            <div class="error"style="color:red;">
               {{$message}}
            </div>
         
            @enderror
        </div>
        
        <div class="form-group mb-3">
            <label for="role">Role</label>
            <select name="role" id="role" class="form-control">
                <option value="" selected disabled> Select Role</option>
                <option value="0">Student</option>
                <option value="1">Admin</option>
                <option value="2">Lecturer</option>
                <option value="3">Finance</option>
            </select>
        </div>


        <div>
            <button type="submit" class="btn btn-success"> Register</button>

        </form>
</div>
</div>
</div>
@endsection