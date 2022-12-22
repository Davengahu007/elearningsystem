@extends('layouts.app')

@section('content')
@guest
    <div class="text-danger">
        @if (session('status'))
            {{ session('status') }}
        @endif
    </div>
    <div class="login-container">
        <div class="login-text">
            <h1>Welcome to the MYSCHOOL</h1>
            <p>Kindly login to access your account</p>
        </div>
        <div class="login-form">
            <form action="{{route('login')}}" method="post">
                {{ csrf_field() }} 
        
                <div class="form-input-container">
                    <input class="form-input" placeholder="Email" type="text" class="" id="email" name="email">
                </div>
                <div class="form-input-container">
                    <input class="form-input" placeholder="Password" type="password" class="" id="password" name="password">
                </div>
                <div class="">
                    <input type="checkbox" class="" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                    
                </div>
                <div class="login-btns">
                    <button type="submit" class="btn login-btn">Login</button>
                    <button type="reset" class="btn login-btn login-btn-red">Cancel</button>
                </div>
    
            </form>
        </div>
    </div>
    @endguest
@endsection