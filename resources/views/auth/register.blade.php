@extends('layouts.app')

@section('content')
<div class="register">
    <form action ="{{route('register')}}" method="post">
        @csrf
        <div class="form">
            <label for="name" class="sr-only">Name</label>
            <input type="text" name="name" id="name" placeholder="Fullname"  value="{{old('name') }}" >

            @error('name')
            <div class="error"style="color:red;">
                {{$message}}
             </div>
            @enderror
      
        </div> 


        <div class="form">
            <label for="email" class="sr-only">Email</label>
            <input type="email" name="email" id="email" placeholder="Email"  value="{{old('email') }}">
           
            @error('email')
            <div class="error"style="color:red;">
            {{$message}}
            </div>
           @enderror

        </div>

        <div class="form">
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="password" placeholder="Choose a password"  >

            @error('password')
            <div class="error"style="color:red;">
               {{$message}}
            </div>
           @enderror

        </div>

        <div class="form">
            <label for="password_confirmation" class="sr-only">Password Again</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password">
          
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
                <option value="0">User</option>
                <option value="1">Admin</option>
                <option value="2">Lecturer</option>
                <option value="3">Worker</option>
            </select>
        </div>


        <div>
            <button type="submit" class=button> Register</button>

        </form>
</div>
@endsection