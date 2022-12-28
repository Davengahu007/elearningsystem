@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">User Profile
                <a href="{{url('change-password')}}" class="btn btn-primary float-end">Change Password</a>
            </h4>
        </div>
        <div class="card-body">
        <div class="text-success">
                @if (session('status'))
                {{ session('status') }}
            @endif
        </div>
        <form action="{{url('update-user')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }} 
            @method('PUT')
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control  @error('name') border border-danger @enderror" id="name" name="name" value="{{auth()->user()->name}}" disabled>

                @error('name')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>
            
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') border border-danger @enderror" id="email" name="email" value="{{auth()->user()->email}}" disabled>
            
                @error('email')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>
           
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="text" class="form-control @error('password') border border-danger @enderror" id="password" name="password" value="{{auth()->user()->password}}" >
              
                @error('password')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="role">Role</label>
                <input type="text" class="form-control @error('role') border border-danger @enderror" id="role" name="role" value="{{auth()->user()->role}}" >
              
                @error('role')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="course_code">Course Code</label>
                <input type="number" class="form-control @error('course_code') border border-danger @enderror" id="course_code" name="course_code" value="{{auth()->user()->course_code}}" >
              
                @error('course_code')
                    <div class="fw-light text-danger" >
                        {{$message}}

                    </div>
                @enderror
            </div>
           
            
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>

        </form>
</div>
</div>
</div>
@endsection