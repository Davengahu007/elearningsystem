@extends('layouts.app')

@section('content')
<div class="register">
    @if (session('status'))
            {{ session('status') }}
        @endif
    <form action ="{{route('login')}}" method="post">
        @csrf
       
    
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
            <input type="password" name="password" id="password"  placeholder="Password" >

            @error('password')
            <div class="error"style="color:red;">
               {{$message}}
            </div>
           @enderror

        </div>

        
        
        <div>
            <button type="submit" class=button> Login</button>

        </form>
</div>
@endsection